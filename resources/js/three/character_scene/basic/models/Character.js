import * as THREE from "three";
import { FBXLoader } from "three/examples/jsm/loaders/FBXLoader.js";

/**
 * Clase FiniteStateMachine que representa una máquina de estados finita.
 * Permite agregar estados y cambiar entre ellos.
 */
class FiniteStateMachine {
    constructor() {
        this._states = {};
        this._currentState = null;
    }

    /**
     * Añade un estado a la máquina de estados.
     * @param {string} name - El nombre del estado.
     * @param {class} type - La clase del estado.
     */
    _AddState(name, type) {
        this._states[name] = type;
    }

    /**
     * Establece el estado actual de la máquina de estados.
     * @param {string} name - El nombre del estado.
     */
    SetState(name) {
        const prevState = this._currentState;

        if (prevState && prevState.Name === name) {
            return;
        }

        if (prevState) {
            prevState.Exit();
        }

        const state = new this._states[name](this);
        this._currentState = state;
        state.Enter(prevState);
    }

    /**
     * Actualiza el estado actual.
     * @param {number} timeElapsed - El tiempo transcurrido desde la última actualización.
     * @param {object} input - Los datos de entrada para la actualización.
     */
    Update(timeElapsed, input) {
        if (this._currentState) {
            this._currentState.Update(timeElapsed, input);
        }
    }
}

/**
 * Clase State que representa un estado genérico.
 * Se espera que las subclases implementen los métodos Enter, Exit y Update.
 */
class State {
    constructor(parent) {
        this._parent = parent;
    }

    Enter() {}
    Exit() {}
    Update() {}
}

/**
 * Clase BasicControllerProxy que proporciona acceso a las animaciones.
 */
class BasicControllerProxy {
    constructor(animations) {
        this._animations = animations;
    }

    get animations() {
        return this._animations;
    }
}

/**
 * Clase BasicCharacterController que controla el comportamiento del personaje.
 */
export class BasicCharacterController {
    constructor(params) {
        this._params = params;
        this._decceleration = new THREE.Vector3(-0.0005, -0.0001, -5.0);
        this._acceleration = new THREE.Vector3(1, 0.25, 50.0);
        this._velocity = new THREE.Vector3(0, 0, 0);
        this._position = new THREE.Vector3();
        this._animations = {};
        this._input = new HomeCharacterControllerInput(params.canvas);
        this._stateMachine = new HomeCharacterFSM(
            new BasicControllerProxy(this._animations)
        );

        this._modelLoaded = this._LoadModels();
    }

    /**
     * Carga los modelos 3D y sus animaciones.
     */
    async _LoadModels() {
        const loader = new FBXLoader();
        loader.setPath(
            "/three/character_scene/models/Character/Warrior/Female/"
        );
        const object = await new Promise((resolve, reject) => {
            loader.load("warrior.fbx", resolve, undefined, reject);
        });

        object.scale.multiplyScalar(0.005);
        object.position.copy(this._params.position);
        object.traverse((child) => {
            if (child.isMesh && Array.isArray(child.material)) {
                child.material.forEach((material) =>
                    console.log(material.name)
                );
            }
        });

        this._target = object;
        this._params.scene.add(this._target);
        this._mixer = new THREE.AnimationMixer(this._target);

        const _OnLoad = (animName, anim) => {
            const clip = anim.animations[0];
            const action = this._mixer.clipAction(clip);
            this._animations[animName] = { clip, action };
        };

        const animationLoader = new FBXLoader();
        animationLoader.setPath(
            "/three/character_scene/models/Character/Warrior/Female/State/"
        );
        await Promise.all([
            new Promise((resolve) =>
                animationLoader.load("idle.fbx", (anim) => {
                    _OnLoad("idle", anim);
                    resolve();
                })
            ),
            new Promise((resolve) =>
                animationLoader.load("accept.fbx", (anim) => {
                    _OnLoad("accept", anim);
                    resolve();
                })
            ),
            new Promise((resolve) =>
                animationLoader.load("reject.fbx", (anim) => {
                    _OnLoad("reject", anim);
                    resolve();
                })
            ),
        ]);

        this._stateMachine.SetState("idle");
    }

    /**
     * Devuelve una promesa que se resuelve cuando el modelo del personaje está cargado.
     * @returns {Promise<THREE.Object3D>} El modelo del personaje.
     */
    async getCharacter() {
        await this._modelLoaded;
        return this._target;
    }

    /**
     * Actualiza el estado y la posición del personaje.
     * @param {number} timeInSeconds - El tiempo transcurrido desde la última actualización en segundos.
     */
    Update(timeInSeconds) {
        if (!this._stateMachine._currentState) return;

        this._stateMachine.Update(timeInSeconds, this._input);

        const velocity = this._velocity;
        const frameDecceleration = velocity
            .clone()
            .multiply(this._decceleration)
            .multiplyScalar(timeInSeconds);
        frameDecceleration.z =
            Math.sign(frameDecceleration.z) *
            Math.min(Math.abs(frameDecceleration.z), Math.abs(velocity.z));

        velocity.add(frameDecceleration);

        const controlObject = this._target;
        const oldPosition = controlObject.position.clone();

        const forward = new THREE.Vector3(0, 0, 1)
            .applyQuaternion(controlObject.quaternion)
            .normalize();
        const sideways = new THREE.Vector3(1, 0, 0)
            .applyQuaternion(controlObject.quaternion)
            .normalize();

        sideways.multiplyScalar(velocity.x * timeInSeconds);
        forward.multiplyScalar(velocity.z * timeInSeconds);

        controlObject.position.add(forward).add(sideways);

        this._position.copy(controlObject.position);

        if (this._mixer) {
            this._mixer.update(timeInSeconds);
        }
    }
}

/**
 * Clase HomeCharacterControllerInput que maneja las entradas del usuario.
 */
class HomeCharacterControllerInput {
    constructor(canvas) {
        this._canvas = canvas;
        this._focus = false;
        this._accept = false;
        this._reject = false;

        const acceptButton = document.getElementById("accept");
        if (acceptButton) {
            acceptButton.addEventListener("click", () => (this._accept = true), false);
        }

        const rejectButton = document.getElementById("reject");
        if (rejectButton) {
            rejectButton.addEventListener("click", () => (this._reject = true), false);
        }

        canvas.addEventListener("focus", () => (this._focus = true), false);
        canvas.addEventListener("blur", () => (this._focus = false), false);
    }
}

/**
 * Clase HomeCharacterFSM que representa la máquina de estados finita específica para el personaje.
 */
class HomeCharacterFSM extends FiniteStateMachine {
    constructor(proxy) {
        super();
        this._proxy = proxy;
        this._Init();
    }

    /**
     * Inicializa los estados de la máquina de estados.
     */
    _Init() {
        this._AddState("idle", IdleState);
        this._AddState("accept", AcceptState);
        this._AddState("reject", RejectState);
    }
}

/**
 * Clase IdleState que representa el estado de reposo del personaje.
 */
class IdleState extends State {
    get Name() {
        return "idle";
    }

    Enter(prevState) {
        const idleAction = this._parent._proxy._animations["idle"].action;
        idleAction.enabled = true;
        idleAction.time = 0.0;
        idleAction.setEffectiveTimeScale(1.0);
        idleAction.setEffectiveWeight(1.0);
        if (prevState) {
            const prevAction =
                this._parent._proxy._animations[prevState.Name].action;
            idleAction.crossFadeFrom(prevAction, 0.5, true);
        }
        idleAction.play();
    }

    Update(_, input) {
        if (input._accept) {
            this._parent.SetState("accept");
        } else if (input._reject) {
            this._parent.SetState("reject");
        }
    }
}

/**
 * Clase AcceptState que representa el estado de aceptación del personaje.
 */
class AcceptState extends State {
    get Name() {
        return "accept";
    }

    Enter(prevState) {
        const acceptAction = this._parent._proxy._animations["accept"].action;
        acceptAction.enabled = true;
        acceptAction.time = 0.0;
        acceptAction.setEffectiveTimeScale(1.0);
        acceptAction.setEffectiveWeight(1.0);
        if (prevState) {
            const prevAction =
                this._parent._proxy._animations[prevState.Name].action;
            acceptAction.crossFadeFrom(prevAction, 0.5, true);
        }
        acceptAction.play();
    }

    Update(_, input) {
        const acceptAction = this._parent._proxy._animations["accept"].action;
        if (acceptAction.time >= acceptAction.getClip().duration - 0.1) {
            this._parent.SetState("idle");
            input._accept = false;
        }
    }
}

/**
 * Clase RejectState que representa el estado de rechazo del personaje.
 */
class RejectState extends State {
    get Name() {
        return "reject";
    }

    Enter(prevState) {
        const rejectAction = this._parent._proxy._animations["reject"].action;
        rejectAction.enabled = true;
        rejectAction.time = 0.0;
        rejectAction.setEffectiveTimeScale(1.0);
        rejectAction.setEffectiveWeight(1.0);
        if (prevState) {
            const prevAction =
                this._parent._proxy._animations[prevState.Name].action;
            rejectAction.crossFadeFrom(prevAction, 0.5, true);
        }
        rejectAction.play();
    }

    Update(_, input) {
        const rejectAction = this._parent._proxy._animations["reject"].action;
        if (rejectAction.time >= rejectAction.getClip().duration - 0.1) {
            this._parent.SetState("idle");
            input._reject = false;
        }
    }
}

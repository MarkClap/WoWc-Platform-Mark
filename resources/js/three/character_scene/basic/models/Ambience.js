import * as THREE from "three";
import { GLTFLoader } from "three/examples/jsm/loaders/GLTFLoader.js";

// Inicializar un cargador GLTF
const gltfLoader = new GLTFLoader();

// Clase que representa una colección de elementos de ambientación en la escena.
class Ambience {
    constructor() {
        this._elements = [];
    }

    /**
     * Agrega un elemento a la colección de elementos.
     * @param {THREE.Object3D} element - El elemento a agregar.
     */
    addElement(element) {
        this._elements.push(element);
    }

    /**
     * Obtiene la lista de elementos agregados.
     * @returns {Array<THREE.Object3D>} La lista de elementos.
     */
    get elements() {
        return this._elements;
    }
}

// Método reutilizable para cargar modelos GLTF
async function loadGLTFModel(
    url,
    scene,
    scale = 1,
    position = { x: 0, y: 0, z: 0 }
) {
    return new Promise((resolve, reject) => {
        gltfLoader.load(
            url,
            function (gltf) {
                gltf.scene.minFilter = THREE.LinearMipMapLinearFilter;
                gltf.scene.scale.set(scale, scale, scale);
                gltf.scene.position.set(position.x, position.y, position.z);
                gltf.scene.traverse((child) => {
                    child.castShadow = true;
                    child.receiveShadow = true;
                });
                scene.add(gltf.scene);
                resolve(gltf.scene);
            },
            undefined,
            function (error) {
                reject(error);
            }
        );
    });
}

/**
 * Crea la ambientación 1 en la escena.
 * Compuesta por un bosque y un lago.
 * @param {THREE.Scene} scene - La escena de Three.js donde se agregarán los modelos.
 * @returns {Promise<Array<THREE.Object3D>>} Una promesa que se resuelve con la lista de elementos agregados.
 */
export async function createAmbience1(scene) {
    const ambience = new Ambience();
    const bg1 = await loadGLTFModel(
        "/three/character_scene/models/Ambience/Ambience1/bg1_optimized.glb",
        scene
    );
    const lake = await loadGLTFModel(
        "/three/character_scene/models/Ambience/Ambience1/lake.glb",
        scene,
        1,
        { x: 5, y: -0.45, z: -2.5 }
    );
    ambience.addElement(bg1);
    ambience.addElement(lake);
    return ambience.elements;
}

/**
 * Crea la ambientación 2 en la escena.
 * @param {THREE.Scene} scene - La escena de Three.js donde se agregará el modelo.
 * @returns {Promise<Array<THREE.Object3D>>} Una promesa que se resuelve con la lista de elementos agregados.
 */
export async function createAmbience2(scene) {
    const ambience = new Ambience();
    const waterfall = await loadGLTFModel(
        "/three/character_scene/models/Ambience/Ambience2/Waterfall_scene.glb",
        scene,
        2.5
    );
    ambience.addElement(waterfall);
    return ambience.elements;
}

/**
 * Crea la ambientación 3 en la escena.
 * @param {THREE.Scene} scene - La escena de Three.js donde se agregará el modelo.
 * @returns {Promise<Array<THREE.Object3D>>} Una promesa que se resuelve con la lista de elementos agregados.
 */
export async function createAmbience3(scene) {
    const ambience = new Ambience();
    const desert = await loadGLTFModel(
        "/three/character_scene/models/Ambience/Ambience3/Desert.glb",
        scene,
        0.05
    );
    ambience.addElement(desert);
    return ambience.elements;
}

/**
 * Crea la ambientación 4 en la escena.
 * @param {THREE.Scene} scene - La escena de Three.js donde se agregará el modelo.
 * @returns {Promise<Array<THREE.Object3D>>} Una promesa que se resuelve con la lista de elementos agregados.
 */
export async function createAmbience4(scene) {
    const ambience = new Ambience();
    const forest = await loadGLTFModel(
        "/three/character_scene/models/Ambience/Ambience4/Forest_scene_optimized.glb",
        scene,
        5
    );
    ambience.addElement(forest);
    return ambience.elements;
}

/**
 * Crea la ambientación 5 en la escena.
 * @param {THREE.Scene} scene - La escena de Three.js donde se agregará el modelo.
 * @returns {Promise<Array<THREE.Object3D>>} Una promesa que se resuelve con la lista de elementos agregados.
 */
export async function createAmbience5(scene) {
    const ambience = new Ambience();
    const swamp = await loadGLTFModel(
        "/three/character_scene/models/Ambience/Ambience5/Swamp Island.glb",
        scene,
        5
    );
    ambience.addElement(swamp);
    return ambience.elements;
}

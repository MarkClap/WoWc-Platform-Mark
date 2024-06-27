import * as THREE from "three";
import { OrbitControls } from "three/examples/jsm/controls/OrbitControls.js";

/**
 * Class representing a character camera.
 */
export class CharacterCamera {
    /**
     * Create a character camera.
     * @param {THREE.WebGLRenderer} renderer - The renderer to use.
     * @param {Object} position - The initial position of the camera.
     * @param {boolean} [orbit=false] - Whether to enable orbit controls.
     */
    constructor(renderer, position, orbit = false) {
        this._renderer = renderer;
        this._position = position;
        this._orbit = orbit;
        this._init();
    }

    /**
     * Initialize the camera and optionally the orbit controls.
     * @private
     */
    _init() {
        // Create and position the perspective camera
        this._camera = new THREE.PerspectiveCamera(
            75,
            window.innerWidth / window.innerHeight,
            0.1,
            1000
        );
        this._setPosition(this._camera, this._position);

        // Optionally add orbit controls
        if (this._orbit) {
            this._initOrbitControls(this._camera, this._renderer);
        }
    }

    /**
     * Set the position of the camera.
     * @param {THREE.Camera} camera - The camera to position.
     * @param {Object} position - The position to set.
     * @private
     */
    _setPosition(camera, position) {
        camera.position.set(position.x, position.y, position.z);
    }

    /**
     * Initialize orbit controls for the camera.
     * @param {THREE.Camera} camera - The camera to control.
     * @param {THREE.WebGLRenderer} renderer - The renderer to attach the controls to.
     * @private
     */
    _initOrbitControls(camera, renderer) {
        const orbitControls = new OrbitControls(camera, renderer.domElement);
        orbitControls.update();
    }

    /**
     * Get the camera object.
     * @return {THREE.PerspectiveCamera} The camera object.
     */
    get camera() {
        return this._camera;
    }
}
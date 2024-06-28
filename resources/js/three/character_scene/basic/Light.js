import * as THREE from "three";

/**
 * Class representing an ambient light.
 */
class AmbientLight {
    /**
     * Create an ambient light.
     * @param {string|number} color - The color of the light.
     * @param {number} intensity - The intensity of the light.
     */
    constructor(color, intensity) {
        this._light = new THREE.AmbientLight(color, intensity);
    }

    /**
     * Get the light object.
     * @return {THREE.AmbientLight} The light object.
     */
    get light() {
        return this._light;
    }
}

/**
 * Class representing a spot light.
 */
class SpotLight {
    /**
     * Create a spot light.
     * @param {string|number} color - The color of the light.
     * @param {number} intensity - The intensity of the light.
     * @param {number} distance - The maximum range of the light.
     * @param {number} angle - The angle of the light cone.
     * @param {Object} position - The position of the light.
     * @param {Object} targetPosition - The position the light is pointing at.
     */
    constructor(color, intensity, distance, angle, position, targetPosition) {
        this._light = new THREE.SpotLight(color, intensity, distance, angle);
        this._setPosition(this._light, position);
        this._setTarget(this._light, targetPosition);

        this._light.castShadow = true;
        this._lightHelper = new THREE.SpotLightHelper(this._light);
    }

    _setPosition(light, position) {
        light.position.set(position.x, position.y, position.z);
    }

    _setTarget(light, targetPosition) {
        light.target.position.set(
            targetPosition.x,
            targetPosition.y,
            targetPosition.z
        );
    }

    /**
     * Get the light object.
     * @return {THREE.SpotLight} The light object.
     */
    get light() {
        return this._light;
    }

    /**
     * Get the light helper object.
     * @return {THREE.SpotLightHelper} The light helper object.
     */
    get lightHelper() {
        return this._lightHelper;
    }
}

/**
 * Class representing a directional light.
 */
class DirectionalLight {
    /**
     * Create a directional light.
     * @param {string|number} color - The color of the light.
     * @param {number} intensity - The intensity of the light.
     * @param {Object} position - The position of the light.
     * @param {Object} targetPosition - The position the light is pointing at.
     */
    constructor(color, intensity, position, targetPosition) {
        this._light = new THREE.DirectionalLight(color, intensity);
        this._setPosition(this._light, position);
        this._setTarget(this._light, targetPosition);

        this._lightHelper = new THREE.DirectionalLightHelper(this._light);
    }

    _setPosition(light, position) {
        light.position.set(position.x, position.y, position.z);
    }

    _setTarget(light, targetPosition) {
        light.target.position.set(
            targetPosition.x,
            targetPosition.y,
            targetPosition.z
        );
    }

    /**
     * Get the light object.
     * @return {THREE.DirectionalLight} The light object.
     */
    get light() {
        return this._light;
    }

    /**
     * Get the light helper object.
     * @return {THREE.DirectionalLightHelper} The light helper object.
     */
    get lightHelper() {
        return this._lightHelper;
    }
}

/**
 * Class representing a three-point lighting setup for a character.
 */
export class CharacterThreePointLighting {
    /**
     * Create a three-point lighting setup.
     * @param {Object} lightsData - Data for the lights.
     * @param {Object} timeData - Data for the time of day.
     * @param {Object} targetPosition - The position where the lights are pointing.
     * @param {Object} targetDimension - The dimensions of the target.
     */
    constructor(lightsData, timeData, targetPosition, targetDimension) {
        this._ambientLight = new AmbientLight(
            timeData.ambientLightColor,
            0.125
        );

        const distance = targetDimension.y * 2;

        const keyPosition = this._getPosition(
            64 + lightsData.frontLight.modifier,
            targetPosition,
            distance
        );
        const fillPosition = this._getPosition(
            100 + lightsData.frontLight.modifier,
            targetPosition,
            distance
        );

        this._keyLight = new SpotLight(
            timeData.frontLightColor,
            40,
            (9 / 8) * distance,
            distance / 7,
            keyPosition,
            targetPosition
        );
        this._fillLight = new SpotLight(
            timeData.frontLightColor,
            20,
            (9 / 8) * distance,
            distance / 7,
            fillPosition,
            targetPosition
        );
        this._backLight = new DirectionalLight(
            timeData.sunLightColor,
            1,
            lightsData.backLight.position,
            { x: 5, y: 0, z: -5 }
        );
    }

    _getPosition(angle, targetPosition, distance) {
        const lightAngle = angle * (Math.PI / 180);
        return {
            x:
                targetPosition.x +
                (targetPosition.x ? Math.sign(targetPosition.x) : 1) *
                    distance *
                    Math.sin(lightAngle),
            y: targetPosition.y + distance / 2.9,
            z:
                targetPosition.z +
                (targetPosition.z ? Math.sign(targetPosition.z) : 1) *
                    distance *
                    Math.cos(lightAngle),
        };
    }

    /**
     * Add the lights to a scene.
     * @param {THREE.Scene} scene - The scene to add the lights to.
     * @param {boolean} [helper=false] - Whether to add light helper objects.
     */
    add(scene, helper = false) {
        scene.add(this._ambientLight.light);
        this._addLightWithTarget(scene, this._keyLight, helper);
        this._addLightWithTarget(scene, this._fillLight, helper);
        this._addLightWithTarget(scene, this._backLight, helper);
    }

    _addLightWithTarget(scene, light, helper) {
        scene.add(light.light.target);
        scene.add(light.light);

        if (helper) {
            scene.add(light.lightHelper);
        }
    }

    /**
     * Get the ambient light object.
     * @return {AmbientLight} The ambient light object.
     */
    get ambientLight() {
        return this._ambientLight;
    }

    /**
     * Get the key light object.
     * @return {SpotLight} The key light object.
     */
    get keyLight() {
        return this._keyLight;
    }

    /**
     * Get the fill light object.
     * @return {SpotLight} The fill light object.
     */
    get fillLight() {
        return this._fillLight;
    }

    /**
     * Get the back light object.
     * @return {DirectionalLight} The back light object.
     */
    get backLight() {
        return this._backLight;
    }
}

self.onmessage = (event) => {
    const { angle, targetPosition, distance } = event.data;

    function getPosition(angle) {
        let lightAngle = angle * (Math.PI / 180);
        return {
            x: targetPosition.x + (targetPosition.x ? Math.sign(targetPosition.x) : 1) * distance * Math.sin(lightAngle),
            y: targetPosition.y + distance / 2.9,
            z: targetPosition.z + (targetPosition.z ? Math.sign(targetPosition.z) : 1) * distance * Math.cos(lightAngle),
        };
    }

    const position = getPosition(angle);
    self.postMessage(position);
};

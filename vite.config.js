import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resorces/css/board.css',
                'resources/js/app.js',
                'resources/js/Scene3D/character_scene/main.js',
                'resources/js/welcome.js',
                'resources/js/board.js',
            ],
            refresh: true,
        }),
    ],
});

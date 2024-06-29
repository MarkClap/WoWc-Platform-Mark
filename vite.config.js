import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resorces/css/board.css',
                'resources/js/app.js',
                'resources/js/tree/character_scene/main.js',
                'resources/js/welcome.js',
                'resources/js/main-dashboard.js',
                'resources/js/main-player.js',
            ],
            refresh: true,
        }),
    ],
});

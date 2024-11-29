import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/style.css', 'resources/css/gamea.css', 'resources/css/app.css','resources/js/script.js', 'resources/js/bootstrap.js', 'resources/js/gamea.js', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
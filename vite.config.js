import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                // CSS files
                'resources/css/style.css',
                'resources/css/gamea.css',
                'resources/css/app.css',
                'resources/css/app1.css',
                'resources/css/styles.css',
                'resources/css/faq.css',
                'resources/css/manutencao.css',
                'resources/css/sobre-produto.css',
                'resources/css/quem-somos.css',
                // JS files
                'resources/js/script.js',
                'resources/js/faq.js',
                'resources/js/bootstrap.js',
                'resources/js/gamea.js',
                'resources/js/game.js',
                'resources/js/app.js'
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'public'),
        },
    },
    assetsInclude: ['**/*.gif'] // Incluir arquivos .gif como recursos de ativos
});

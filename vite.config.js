import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
const path = require('path')

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
            // add below path of fontawesome
            '~font-awesome': path.resolve(__dirname, 'node_modules/font-awesome/font-awesome'), // <- add this line
            '~tinymce': path.resolve(__dirname, 'node_modules/tinymce'),

        }
    },
});

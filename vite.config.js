import { defineConfig } from 'vite';
import fs from 'fs';
import laravel from 'laravel-vite-plugin';
import {homedir} from 'os'
import {resolve} from 'path'
import basicSsl from '@vitejs/plugin-basic-ssl'


export default defineConfig({
    server: {
        hmr: {
            host: '127.0.0.1',
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true
        }),
        basicSsl()
    ],
});

import { defineConfig } from 'vite';
import laravel, { refreshPaths } from 'laravel-vite-plugin';
import fs from "fs";
// import fs from 'fs';

// const cert_key = './../../localhost.key'; // configure with your own cert key
// const cert_pem = './../../localhost.crt'; // configure with your own cert
export default defineConfig({
    // server: {
    //     host: 'danidoble.test',
    //     https: {
    //         key: fs.readFileSync(cert_key),
    //         cert: fs.readFileSync(cert_pem),
    //     },
    // },
    // build: {
    //     chunkSizeWarningLimit: 1000
    // },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: [
                ...refreshPaths,
                'app/Http/Livewire/**',
            ],
        }),
    ],
});

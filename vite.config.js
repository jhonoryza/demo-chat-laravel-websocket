import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig(({ command, mode, ssrBuild }) => {
    if (command === 'serve') {
        return {
            // dev specific config
            plugins: [
                laravel({
                    input: ['resources/css/app.css', 'resources/js/app.js'],
                    refresh: true,
                }),
            ],
            server: {
                https: false,
                host: 'demo-chat-laravel-websocket.test',
            },
        }
    } else {
        return {
            plugins: [
                laravel({
                    input: ['resources/css/app.css', 'resources/js/app.js'],
                    refresh: true,
                }),
            ]
        }
    }

});

import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    server: {
        host: '0.0.0.0',  // Wichtig für externen Zugriff
        port: 5173,        // Standardport für Vite
        strictPort: true,
        hmr: {
            host: '192.168.178.68'  // IP deines Raspberry Pis im Netzwerk
        }
    }
});

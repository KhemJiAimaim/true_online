import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/js/bermonthly_lucky/allproduct.js',
                    'resources/js/bermonthly_lucky/cartproduct.js',
                    'resources/js/bermonthly_lucky/detail_ber.js',
                    'resources/js/bermonthly_lucky/fortune_ber.js',
                ],
            refresh: true,
        }),
    ],
});

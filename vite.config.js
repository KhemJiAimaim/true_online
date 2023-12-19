import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    
                    'resources/js/global_js/add_cart_product.js.js',
                    'resources/js/global_js/hide_banner.js',
                    'resources/js/home_true/home.js',

                    'resources/js/bermonthly_lucky/allproduct.js',
                    'resources/js/bermonthly_lucky/cartproduct.js',
                    'resources/js/bermonthly_lucky/detail_ber.js',
                    'resources/js/bermonthly_lucky/fortune_ber.js',

                    'resources/js/buy_sim/buy_sim.js',
                    
                    'resources/js/howtobuy_product/howtobuy.js',

                    'resources/js/internet_fiber/form_true_dtac.js',

                    'resources/js/prepaid_sim/package.js',
                ],
            refresh: true,
        }),
    ],
});

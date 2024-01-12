import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 
                    'resources/js/app.js',
                    'resources/js/bootstrap.js',
                    'resources/js/contact.js',
                    
                    'resources/js/bermonthly_lucky/allproduct.js',
                    'resources/js/bermonthly_lucky/detail_ber.js',
                    'resources/js/bermonthly_lucky/fortune_ber.js',

                    'resource/js/cart_order/cartproduct.js',
                    
                    'resource/js/contact/contact_button.js',
                    'resource/js/contact/contact_form.js',

                    'resources/js/global_js/add_cart_product.js',
                    'resources/js/global_js/hide_banner.js',

                    'resources/js/home_true/home.js',
                    'resources/js/home_true/swiper.js',
                    
                    'resources/js/howtobuy_product/howtobuy.js',

                    'resources/js/internet_fiber/form_true_dtac.js',
                    'resources/js/internet_fiber/swiper_detail.js',
                    'resources/js/internet_fiber/swiper.js',
                    
                    'resources/js/move/menu.js',
                    'resources/js/move/modal_termservice.js',
                    'resources/js/move/movenow_form.js',
                    'resources/js/move/movenow.js',
                    'resources/js/move/swiper.js',
                    
                    'resources/js/prepaid_sim/buy_sim.js',
                    'resources/js/prepaid_sim/package.js',
                    'resources/js/prepaid_sim/swiper.js',
                    
                    'resources/js/travel/buy_sim.js',
                    'resources/js/travel/detail_ber.js',
                    'resources/js/travel/swiper.js',
                ],
            refresh: true,
        }),
    ],
});

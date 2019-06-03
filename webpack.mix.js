let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .scripts([
        'resources/assets/bower/jodit/build/jodit.min.js',
        'resources/assets/bower/jquery/dist/jquery.min.js',
        'resources/assets/bower/jquery-ui/jquery-ui.min.js',
        'resources/assets/bower/jquery-mask-plugin/dist/jquery.mask.min.js',

        'resources/assets/bower/izimodal/js/iziModal.min.js',
        'resources/assets/bower/izitoast/dist/js/iziToast.min.js',

    ], 'public/assets/js/app.js', './')

    .styles([
        'resources/assets/bower/jodit/build/jodit.min.css',
        'resources/assets/bower/jquery-ui/themes/base/jquery-ui.min.css',
        'resources/assets/bower/font-awesome/css/font-awesome.css',

        'resources/assets/bower/izimodal/css/iziModal.min.css',
        'resources/assets/bower/izitoast/dist/css/iziToast.min.css',

        // 'public/assets/sass/app.css', // bootstrap compiled!

    ], 'public/assets/css/app.css', './')
    .copy([
        'resources/assets/bower/font-awesome/fonts'
    ], 'public/assets/fonts/');
    // .copy([
    //     'resources/assets/bower/moment/locale'
    // ], 'public/assets/js/locale')
    // .copy([
    //     'resources/assets/bower/jquery-ui/themes/base/images'
    // ], 'public/assets/css/images')
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

        'node_modules/izimodal/node_modules/jquery/dist/jquery.js',
        'bower_components/jodit/build/jodit.min.js',
        // 'bower_components/jquery/dist/jquery.min.js',
        'bower_components/jquery-ui/jquery-ui.min.js',
        'bower_components/jquery-mask-plugin/dist/jquery.mask.min.js',

        'node_modules/izimodal/js/iziModal.min.js',
        // 'node_modules/izitoast/dist/js/iziToast.min.js',

    ], 'public/assets/js/app.js', './')

    .styles([
        'bower_components/jodit/build/jodit.min.css',
        'bower_components/jquery-ui/themes/base/jquery-ui.min.css',
        'bower_components/font-awesome/css/font-awesome.css',

        'node_modules/izimodal/css/iziModal.min.css',
        // 'node_modules/izitoast/dist/css/iziToast.min.css',

        // 'public/assets/sass/app.css', // bootstrap compiled!

    ], 'public/assets/css/app.css', './');
    // .copy([
    //     'bower_components/font-awesome/fonts'
    // ], 'public/assets/fonts/');
    // .copy([
    //     'resources/assets/bower/moment/locale'
    // ], 'public/assets/js/locale')
    // .copy([
    //     'resources/assets/bower/jquery-ui/themes/base/images'
    // ], 'public/assets/css/images')
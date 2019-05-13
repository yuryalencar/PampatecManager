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
        'resources/assets/bower/moment/moment.js',
        'resources/assets/bower/moment/locale/pt-br.js',

        // 'resources/assets/bower/summernote/dist/summernote.min.js',

        // 'resources/assets/bower/jquery/dist/jquery.js',
        'resources/assets/bower/jquery/dist/jquery.min.js',
        'resources/assets/bower/jquery-ui/jquery-ui.min.js',
        'resources/assets/bower/jquery-mask-plugin/dist/jquery.mask.min.js',

        'resources/assets/bower/izimodal/js/iziModal.js',
        'resources/assets/bower/izitoast/dist/js/iziToast.js',

        // 'resources/assets/bower/typeahead.js/dist/typeahead.bundle.js',
        // 'resources/assets/bower/pace/pace.min.js',
    ], 'public/assets/js/app.js', './')

    .styles([
        'resources/assets/bower/jquery-ui/themes/base/jquery-ui.min.css',
        'resources/assets/bower/font-awesome/css/font-awesome.css',
        'resources/assets/bower/pace/themes/green/pace-theme-flash.css.css',
        'resources/assets/bower/animate.css/animate.css',

        'resources/assets/bower/izimodal/css/iziModal.css',
        'resources/assets/bower/izitoast/dist/css/iziToast.css',
        // 'resources/assets/bower/summernote/dist/summernote.css',

        // 'public/assets/sass/app.css', // bootstrap compiled!

    ], 'public/assets/css/app.css', './')
    .copy([
        'resources/assets/bower/font-awesome/fonts'
    ], 'public/assets/fonts/')
    .copy([
        'resources/assets/bower/moment/locale'
    ], 'public/assets/js/locale')
    .copy([
        'resources/assets/bower/jquery-ui/themes/base/images'
    ], 'public/assets/css/images')
    .copy([
        'resources/assets/bower/summernote/dist/font'
    ], 'public/assets/css/font/');

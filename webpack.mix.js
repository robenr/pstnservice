const mix = require('laravel-mix');

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

 mix.setPublicPath('public_html/');

mix
    .js('resources/js/app.js', 'public_html/js')
    .js('resources/js/scripts.js', 'public_html/js')
    .sass('resources/sass/portal.scss', 'public_html/css')
    .sass('resources/sass/style.scss', 'public_html/css')
    .sass('resources/sass/theme/theme.scss', 'public_html/css');

mix.copyDirectory('resources/images', 'public_html/images');

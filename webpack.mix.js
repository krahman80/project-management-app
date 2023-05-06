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

mix.js('resources/js/app.js', 'public/js')
    // .css('resources/css/helper.css', 'public/css')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('node_modules/materialize-css/dist/js/materialize.min.js', 'public/js')
// .copy('node_modules/materialize-css/dist/css/materialize.min.css', 'public/css')
mix.combine([
    'node_modules/materialize-css/dist/css/materialize.min.css',
    'resources/css/helper.min.css'
], 'public/css/materialize.min.css')
    .sourceMaps();

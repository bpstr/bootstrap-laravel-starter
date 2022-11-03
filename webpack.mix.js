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

mix.js('resources/js/app.js', '/js')
    .sass('resources/sass/app.scss', '/css')
    .sourceMaps();

// Copy AOS Files
mix.copy('node_modules/aos/dist/aos.css', 'public/css');
mix.copy('node_modules/aos/dist/aos.js', 'public/js');

// Copy Simple Markdown Editor Files
mix.copy('node_modules/simplemde/src/css/simplemde.css', 'public/css/mde.css');
mix.copy('node_modules/simplemde/src/js/simplemde.js', 'public/js/mde.js');

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

mix.webpackConfig({ devtool: "inline-source-map" });

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('resources/assets/img/', 'public/img/', false)
    .sourceMaps()
    .version();

mix.babel(['resources/assets/js/scripts/index.js'], 'public/js/all.js');



mix.browserSync('http://127.0.0.1:8000');

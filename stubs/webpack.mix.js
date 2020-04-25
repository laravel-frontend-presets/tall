const mix = require('laravel-mix');

require('laravel-mix-tailwind');
require('laravel-mix-purgecss');

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

mix.babel('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css')
    .tailwind('./tailwind.config.js');

if (mix.inProduction()) {
    mix
        .version()
        .purgeCss({
            extractorPattern: content => content.match(/[\w-/.:]+(?<!:)/g) || [],
        });
}

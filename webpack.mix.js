const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

var paths = {
    node: './node_modules/',
    libs: './resources/vendor/'
}

mix.scripts([
    paths.libs + 'assets/vendor/js/helpers.js',
    paths.libs + 'assets/js/config.js',
    paths.libs + 'assets/vendor/libs/jquery/jquery.js',
    paths.libs + 'assets/vendor/libs/popper/popper.js',
    paths.libs + 'assets/vendor/js/bootstrap.js',
    paths.libs + 'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js',
    paths.libs + 'assets/vendor/js/menu.js',
    paths.libs + 'assets/js/main.js',

], 'public/js/vendor.min.js')
.styles([
    paths.libs + 'assets/vendor/css/core.css',
    paths.libs + 'assets/vendor/css/theme-default.css',
    paths.libs + 'assets/css/demo.css',
    paths.libs + 'assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css',
    paths.libs + 'assets/vendor/libs/apex-charts/apex-charts.css',
], 'public/css/vendor.min.css')
.styles([
    paths.libs + 'assets/vendor/fonts/boxicons.css',
], 'public/css/boxicons.min.css')

mix.copyDirectory(paths.libs + 'assets/img', 'public/img');

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);


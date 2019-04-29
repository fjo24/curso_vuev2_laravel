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

 //se ordena segun las dependencias
mix.scripts([
   'resources/js/jquery.js',//paso 1 
   'resources/js/bootstrap.js',//paso 2 
   'resources/js/toastr.js',//paso 3 
   'resources/js/vue.js',//paso 4 
   'resources/js/axios.js',//paso 5
   'resources/js/app.js'//paso 6 - se colocan los archivos en orden jerarquico
], 'public/js/app.js')
.styles([
   'resources/css/bootstrap.css',//paso 2 
   'resources/css/toastr.css',//paso 3 
], 'public/css/app.css');//todo se compila en este archivo 

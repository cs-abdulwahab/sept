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
// mix.copy('node_modules/foo/bar.css', 'public/css/bar.css');
/*

mix.copyDirectory('node_modules/startbootstrap-sb-admin-2/less','resources/startbootstrap-sb-admin-2/less');
mix.copyDirectory('node_modules/startbootstrap-sb-admin-2/js','resources/startbootstrap-sb-admin-2/js');
mix.copyDirectory('node_modules/startbootstrap-sb-admin-2/vendor','resources/startbootstrap-sb-admin-2/vendor');
mix.copyDirectory('node_modules/startbootstrap-sb-admin-2/vendor','public/vendor');
*/

mix.js('resources/js/app.js', 'public/js/');
mix.js('resources/js/countries.js', 'public/js/');

//mix.copy('resources/css/starter-template.css', 'public/css/');
mix.sass('resources/sass/app.scss', 'public/css');



//  .less("resources/sb-admin-2/less/sb-admin-2.less",'public/css');
/*

mix.copy('resources/css/admin.css', 'public/css/admin.css');
mix.copy('resources/css/form-validation.css', 'public/css/form-validation.css');
*/


/*mix.copy('resources/css', 'public/css');
mix.copy('resources/js', 'public/js');*/
//mix.copy('resources/vendor/holder.min.js','public/vendor/holder.min.js');
mix.copyDirectory('resources/vendor','public/vendor')


//.extract(['vue'])
// .styles("node_modules/startbootstrap-sb-admin-2/dist");


/*

mix.styles([
    'public/css/vendor/normalize.css',
    'public/css/vendor/videojs.css'
], 'public/css/all.css');

*/

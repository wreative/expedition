const mix = require("laravel-mix");

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

// Back End CSS
mix.styles(
    [
        "node_modules/datatables.net-bs4/css/dataTables.bootstrap4.min.css",
        "node_modules/select2/dist/css/select2.min.css",
        "node_modules/izitoast/dist/css/iziToast.min.css"
    ],
    "public/css/assets.css"
);

// Back End Javascript
mix.scripts(
    [
        "node_modules/datatables/media/js/jquery.dataTables.min.js",
        "node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js",
        "node_modules/inputmask/dist/jquery.inputmask.min.js",
        "node_modules/inputmask/dist/bindings/inputmask.binding.js",
        "node_modules/select2/dist/js/select2.full.min.js",
        "node_modules/cleave.js/dist/cleave.min.js",
        "node_modules/cleave.js/dist/addons/cleave-phone.id.js",
        "node_modules/izitoast/dist/js/iziToast.min.js"
    ],
    "public/js/assets.js"
);

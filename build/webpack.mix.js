const mix = require('laravel-mix');

mix.copy('node_modules/js-cookie/dist/js.cookie.min.js', '../js.cookie.js');

// Disable mix-manifest.json
// @see https://github.com/JeffreyWay/laravel-mix/issues/580
Mix.manifest.refresh = _ => void 0;

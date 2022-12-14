// webpack.mix.js

let mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .vue();

mix.sass(
    'resources/sass/app.scss', // src
    'public/css', // output
);

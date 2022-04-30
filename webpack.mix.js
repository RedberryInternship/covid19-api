const mix = require('laravel-mix');

mix.js('resources/js/swagger.js', 'public/js');
mix.copyDirectory('resources/images', 'public/images');
mix.version();

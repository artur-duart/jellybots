const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
   .copy('resources/css/styles.css', 'public/css')
   .copyDirectory('resources/fonts', 'public/fonts')
   .copyDirectory('resources/images', 'public/images');

mix.copy('node_modules/bootstrap/dist/css/bootstrap.min.css', 'public/css/bootstrap.min.css')
   .copy('node_modules/bootstrap-icons/font/bootstrap-icons.css', 'public/css/bootstrap-icons.css')
   .copy('node_modules/bootstrap-icons/font/fonts', 'public/fonts') // adicionando diretório de fontes
   .copy('node_modules/bootstrap/dist/js/bootstrap.bundle.min.js', 'public/js/bootstrap.bundle.min.js');

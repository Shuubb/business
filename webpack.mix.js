const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/shared.scss', 'public/css')
   .sass('resources/sass/pages/index.scss', 'public/css/pages')
   .sass('resources/sass/pages/contact.scss', 'public/css/pages')
   .sass('resources/sass/pages/auth/login.scss', 'public/css/pages/auth')
   .sass('resources/sass/pages/admin/shared.scss', 'public/css/pages/admin')
   ;
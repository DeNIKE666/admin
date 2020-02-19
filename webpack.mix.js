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

mix.styles([
    'resources/assets/atlantis/css/bootstrap.min.css',
    'resources/assets/atlantis/css/atlantis.css',
    'resources/assets/atlantis/css/fonts.css',
    'resources/assets/atlantis/css/custom.css',
], 'public/assets/cabinet/atlantis.css').version();

mix.styles([
    'resources/assets/account/css/bootstrap.min.css',
    'resources/assets/account/css/account.css',
    'resources/assets/account/css/font-awesome.min.css',
    'resources/assets/account/css/preloader.css',
], 'public/assets/account/account.css').version();

mix.copy('resources/assets/account/fonts', 'public/assets/account/fonts')
mix.copy('resources/assets/account/img', 'public/assets/account/img')

mix.scripts([
    'resources/assets/atlantis/core/jquery.3.2.1.min.js',
    'resources/assets/atlantis/core/popper.min.js',
    'resources/assets/atlantis/core/bootstrap.min.js',
    'resources/assets/atlantis/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js',
    'resources/assets/atlantis/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js',
    'resources/assets/atlantis/plugin/jquery-scrollbar/jquery.scrollbar.min.js',
    'resources/assets/atlantis/plugin/moment/moment.min.js',
    'resources/assets/atlantis/plugin/jquery.sparkline/jquery.sparkline.min.js',
    'resources/assets/atlantis/plugin/chart-circle/circles.min.js',
    'resources/assets/atlantis/plugin/datatables/datatables.min.js',
    'resources/assets/atlantis/plugin/bootstrap-notify/bootstrap-notify.min.js',
    'resources/assets/atlantis/plugin/bootstrap-toggle/bootstrap-toggle.min.js',
    'resources/assets/atlantis/plugin/jqvmap/jquery.vmap.min.js',
    'resources/assets/atlantis/plugin/jqvmap/maps/jquery.vmap.world.js',
    'resources/assets/atlantis/plugin/dropzone/dropzone.min.js',
    'resources/assets/atlantis/plugin/fullcalendar/fullcalendar.min.js',
    'resources/assets/atlantis/plugin/datepicker/bootstrap-datetimepicker.min.js',
    'resources/assets/atlantis/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js',
    'resources/assets/atlantis/plugin/bootstrap-wizard/bootstrapwizard.js',
    'resources/assets/atlantis/plugin/jquery.validate/jquery.validate.min.js',
    'resources/assets/atlantis/plugin/summernote/summernote-bs4.min.js',
    'resources/assets/atlantis/plugin/select2/select2.full.min.js',
    'resources/assets/atlantis/plugin/sweetalert/sweetalert.min.js',
    'resources/assets/atlantis/plugin/owl-carousel/owl.carousel.min.js',
    'resources/assets/atlantis/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js',
    'resources/assets/atlantis/plugin/chart-js/chart.min.js',
], 'public/assets/cabinet/atlantis.all.js').version();

mix.scripts([
    'resources/assets/account/js/jquery-2.2.4.min.js',
    'resources/assets/account/js/bootstrap.min.js',
    'resources/assets/account/js/custom.js',
], 'public/assets/account/account.js').version();


mix.copy('resources/assets/atlantis/atlantis.min.js', 'public/assets/cabinet');
mix.copy('resources/assets/atlantis/fonts', 'public/assets/cabinet/fonts')
mix.copy('resources/assets/atlantis/img', 'storage/app/public/img/admin')

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/fontawesome-all.scss', 'public/css/fontawesome-all.css')
    .sass('resources/sass/ionicons.scss', 'public/css/ionicons.css')
    //.scripts([],'public/js/admin.js')
    .styles(['thema/css/all.min.css'],'public/css/all.min.css')
    .styles('thema/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css','public/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')

    
    .styles('thema/plugins/jqvmap/jqvmap.min.css','public/plugins/jqvmap/jqvmap.min.css')
    
    .styles('thema/plugins/overlayScrollbars/css/OverlayScrollbars.min.css','public/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')

    .styles('thema/plugins/daterangepicker/daterangepicker.css','public/plugins/daterangepicker/daterangepicker.css')
    .styles('thema/plugins/summernote/summernote-bs4.min.css','public/plugins/summernote/summernote-bs4.min.css')
 
    .styles('thema/css/bootstrap4-toggle.min.css','public/css/bootstrap4-toggle.min.css')
    .styles('thema/dist/css/adminlte.min.css','public/dist/css/adminlte.min.css')
    .styles('thema/dist/css/adminlte.min.css.map','public/dist/css/adminlte.min.css.map')

    .styles('thema/plugins/icheck-bootstrap/icheck-bootstrap.min.css','public/plugins/icheck-bootstrap/icheck-bootstrap.min.css')
    .styles('thema/plugins/select2/css/select2.min.css','public/plugins/select2/css/select2.min.css')
    .styles('thema/css/bootstrap-datetimepicker.min.css','public/css/bootstrap-datetimepicker.min.css')

    .scripts('thema/plugins/select2/js/select2.min.js','public/plugins/select2/js/select2.min.js')

    .scripts('thema/plugins/bootstrap/js/bootstrap.bundle.min.js','public/plugins/bootstrap/js/bootstrap.bundle.min.js')
    .scripts('thema/plugins/chart.js/Chart.min.js','public/plugins/chart.js/Chart.min.js')
    .scripts('thema/plugins/sparklines/sparkline.js','public/plugins/sparklines/sparkline.js')
    .scripts('thema/plugins/jquery/jquery.min.js','public/plugins/jquery/jquery.min.js')
    .scripts('thema/plugins/jquery-ui/jquery-ui.min.js','public/plugins/jquery-ui/jquery-ui.min.js')
    
    .scripts('thema/plugins/jquery-knob/jquery.knob.min.js','public/plugins/jquery-knob/jquery.knob.min.js')
    .scripts('thema/plugins/summernote/summernote-bs4.min.js','public/plugins/summernote/summernote-bs4.min.js')
    
    
    .scripts('thema/plugins/bs-custom-file-input/bs-custom-file-input.min.js','public/plugins/bs-custom-file-input/bs-custom-file-input.min.js')
    
    .scripts('thema/plugins/bs-custom-file-input/bs-custom-file-input.min.js.map','public/plugins/bs-custom-file-input/bs-custom-file-input.min.js.map')
    
    .scripts('thema/plugins/bootstrap/js/bootstrap.bundle.min.js.map','public/plugins/bootstrap/js/bootstrap.bundle.min.js.map')
    
    .scripts('thema/plugins/jqvmap/jquery.vmap.min.js','public/plugins/jqvmap/jquery.vmap.min.js')
    .scripts('thema/plugins/popper/popper.min.js','public/plugins/popper/popper.min.js')
    .scripts('thema/plugins/summernote/summernote-bs4.min.js','public/plugins/summernote/summernote-bs4.min.js')
     

    .scripts('thema/plugins/bootstrap/js/bootstrap.min.js','public/plugins/bootstrap/js/bootstrap.min.js')
    .scripts('thema/plugins/bootstrap/js/bootstrap.min.js.map','public/plugins/bootstrap/js/bootstrap.min.js.map')
    .scripts('thema/plugins/bootstrap/js/bootstrap.bundle.min.js','public/plugins/bootstrap/js/bootstrap.bundle.min.js')

    .scripts('thema/plugins/moment/moment.min.js','public/plugins/moment/moment.min.js')
    .scripts('thema/plugins/moment/moment.min.js.map','public/plugins/moment/moment.min.js.map')

    .scripts('thema/plugins/popper/popper.min.js','public/plugins/popper/popper.min.js')
    .scripts('thema/plugins/popper/popper.min.js.map','public/plugins/popper/popper.min.js.map')
    .js('thema/plugins/popper/popper.min.js', 'public/js').sourceMaps()
    
    .scripts('thema/plugins/daterangepicker/daterangepicker.js','public/plugins/daterangepicker/daterangepicker.js')
    .scripts('thema/dist/js/adminlte.min.js','public/dist/js/adminlte.min.js')
    .scripts('thema/dist/js/adminlte.min.js.map','public/dist/js/adminlte.min.js.map')
    .scripts('thema/plugins/bootstrap-switch/js/bootstrap-switch.min.js','public/plugins/bootstrap-switch/js/bootstrap-switch.min.js')
        
    .scripts('thema/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js','public/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')
    .scripts('thema/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js','public/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')

    .scripts('thema/dist/js/adminlte.js','public/dist/js/adminlte.js')
    .scripts('thema/dist/js/adminlte.js.map','public/dist/js/adminlte.js.map')
    .scripts('thema/dist/js/demo.js','public/dist/js/demo.js')
    .scripts('thema/dist/js/pages/dashboard.js','public/dist/js/pages/dashboard.js');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .styles([],'public/css/admin.css')
    .scripts([],'public/js/admin.js');
## Iniciamos limpiando la cahe
php artisan config:cache <br>
## Testeo
php artisan infyom:scaffold Testteo --fromTable --tableName=testteo --primary=idtest

php artisan make:controller API/DatoController

php artisan make:controller API/PhotoController --api
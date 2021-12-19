<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire as componente;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', 'TestController@index');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified');

Route::resource('testteos', 'TestteoController');
//Route::get('/users', '\App\Http\Livewire\Usuariolv')->name('users');

Route::resource('operadors', 'OperadorController');


Route::resource('pddetalles', 'PddetalleController');


Route::resource('pedidos', 'PedidoController');


Route::resource('productoTipos', 'Producto_tipoController');


Route::resource('productos', 'ProductoController');


Route::resource('tipoDocs', 'Tipo_docController');


Route::resource('userclis', 'UsercliController');

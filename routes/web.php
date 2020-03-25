<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//ruta simple
Route::get('hola', function () {
    return 'Hola Aaron Agullo';
});

Route::get('usuario/{nombre?}', function ($nombre = 'Invitado') {
    return 'Usuario ' . $nombre;
})->name('Usuarionombre');

Route::get('usuario/{nombre}/comentario/{comentarioid}', function ($nombre, $comentarioid) {
    return 'Usuario ' . $nombre . ' y el comentario es ' . $comentarioid;
});

//solo con letras
Route::get('user/{nombre}', function ($nombre) {
    return 'Usuario ' . $nombre;
})->where('nombre', '[A-Za-z]+');

//solo con numeros
Route::get('user1/{id}', function ($id) {
    return 'Usuario ' . $id;
})->where('id', '[0-9]+');

//con los dos
Route::get('user2/{id}/{nombre}', function ($id, $nombre) {
    return 'Usuario ' . $id . ' y el nombre es ' . $nombre;
})->where(
    [
        'id' => '[0-9]+',
        'nombre' => '[A-Za-z]+'
    ]
);

Route::get('prueba',function(){
    return 'Pagina de prueba';
})->name('pruebaroute');



Route::get('redirigirprueba',function(){
    return redirect()->route('pruebaroute');
});


Route::get('redirigirprueba1',function(){
    return redirect()->route('Usuarionombre',['nombre'=>'Aaron']);
});


Route::redirect('/prueba3' ,'/prueba',301);
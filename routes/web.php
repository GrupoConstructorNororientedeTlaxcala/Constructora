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

/*podemos colocarlo tambien de esta manera pero es mas recomendable colocarle un aleas y que su estrructura este como la que esta sin comentar 
Route::get('/', function () {
    return view('welcome');
});
*/

//crear una vista 
/*Route::get('conocenos', ['as' => 'conocenos', 'uses' => 'PagesController@conocenos']);
Route::get('contacto', ['as' => 'contactanos', 'uses' => 'PagesController@contacto']);
Route::post('contactanos', 'PagesController@escribe');
Route::get('pasteleria', ['as' => 'pasteleria', 'uses' => 'PagesController@pasteleria']);
Route::get('panaderia', ['as' => 'panaderia', 'uses' => 'PagesController@panaderia']);
Route::post('panaderia', 'PagesController@panes');*/

//rutas de frontend 

Route::get('Terminos', ['as' => 'Terminos', 'uses' => 'PagesController@Terminos']);
Route::get('politicas', ['as' => 'politicas', 'uses' => 'PagesController@politicas']);
Route::get('quienessomos', ['as' => 'quienessomos', 'uses' => 'PagesController@quienessomos']);
Route::get('misionyvision', ['as' => 'misionyvision', 'uses' => 'PagesController@misionyvision']);
Route::get('blog', ['as' => 'blog', 'uses' => 'PagesController@blog']);

Route::resource('/pendiente', 'PaginaController');
Route::get('/',function(){
	return view ('../pendiente.index');
});

/*Route::resource('/quienessomos', 'QuienessomosController');
Route::get('/',function(){
	return view ('../quienessomos.index');
});*/


//rutas de backend

Route::resource('/pendientes', 'PaginasController');
Route::get('/',function(){
	return view ('/pendientes.create');
});


Route::resource('/index', 'PagesController');
Route::get('/',function(){
	return view ('/index');
});

Route::get('principal', ['as' => 'principal', 'uses'=> 'PagesController@principal']);


/*INICIAN RUTAS DE ADMINISTRADOR*/	
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
 

 /*Route::group(['middleware' => ['auth']], function(){
 	Route::resource('usuarios', 'UsuariosController');
 });
*/
 
 Route::group(['middleware' => ['auth']], function(){
 	Route::resource('pendientes', 'PaginasController');
 });
 
 
//linea de lo que quiero que no me bloque
 Route::get('/bizcocheria/index', 'HomeController@comen')->name('bizcochos');
 Route::get('/pedidos/index', 'HomeController@ped')->name('pedidos');


 //Boton de busqueda
 Route::post('busca', 'HomeController@buscar')->name('busca');


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

/*
Route::get('/',function (){
	return ('Hola desde la página de inicio');
});

Route::get('contacto',function(){
	return ('hola desde la pagina de contacto');
});

Route::get('nombre/{name?}',function($name = 'invitado'){
	return 'Estas aprendiendo '.$name;
});

Route::get('jijiji', function(){
	return 'pagica con el nombre contactos';
})->name('contacts');

Route::get('/',function(){
	echo "<a href=" . route('contacts') .">ir a contacto 1</a><br>";
	echo "<a href=" . route('contacts') .">ir a contacto 2</a><br>";
	echo "<a href='/contactos'>ir a contacto 3</a><br>";
	echo "<a href='/contactos'>ir a contacto 4</a><br>";
});

/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/',function(){
	$name = "meloncito2 desde web.php";
	$lastname = "Mendez";
	return view('home')->with(['name'=>$name,'lastname'=>$lastname]);
})->name('home');
*/
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
//Route::view('/portfolio','portfolio')->name('portfolio');
//Route::get('/portfolio', 'PortfolioController' )->name('portfolio');

/*Route::get('/proyectos/nuevo_proyecto','ProjectController@create')->name('project.create');
Route::get('/proyectos/{project}','ProjectController@show')->name('project.show');
Route::post('/proyectos','ProjectController@store')->name('project.store');
Route::get('/proyectos', 'ProjectController@index' )->name('project.index');
Route::get('/proyectos/{project}/edit','ProjectController@edit')->name('project.edit');
Route::patch('/proyectos/{project}','ProjectController@update')->name('project.update');
Route::delete('/proyectos/{project}','ProjectController@destroy')->name('project.destroy');
*/
Route::resource('proyectos','ProjectController')
	->parameters(['proyectos'=>'project'])
	->names('project');


Route::view('/contact','contact')->name('contact');
Route::post('/contact','ContactController@store')->name('contact');

Auth::routes(['register'=> false]);




//Route::get('/home', 'HomeController@index')->name('home');




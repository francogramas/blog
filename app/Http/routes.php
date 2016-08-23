<?php

/*Route::get('/panel','desktop\AdministratorController@panel');
Route::get('/acces','desktop\AdministratorController@acces');
Route::get('/reports','desktop\AdministratorController@reports');

Route::get('/almacen','almacen\almacenController@index');
Route::get('/saludIndex','salud\saludController@index');
Route::get('/saludstore','salud\saludController@store');
Route::resource('/salud','salud\saludController');*/

// Controladores de almacen

Route::get('/','almacen\almacenController@home');
Route::get('/Admterceros','almacen\almacenController@Admterceros');
Route::get('/Admterceros','almacen\almacenController@Admterceros');
Route::resource('/pais','general\pais');
Route::resource('/terceros','almacen\terceros');
Route::resource('/categorias','almacen\categoriaController');
Route::resource('/productos','almacen\productosController');

Route::get('buscar/producto', 'almacen\productosController@autocomplete');
Route::get('/departamentos/{id}','general\estadosController@getEstados');
Route::get('/ciudades/{id}','general\ciudadesController@getCiudades');




// End  Controladores de almacen


Route::get('/charts', function()
{
	return View::make('mcharts');
});



Route::get('/tables', function()
{
	return View::make('table');
});

Route::get('/forms', function()
{
	return View::make('form');
});

Route::get('/grid', function()
{
	return View::make('grid');
});

Route::get('/buttons', function()
{
	return View::make('buttons');
});


Route::get('/icons', function()
{
	return View::make('icons');
});

Route::get('/panels', function()
{
	return View::make('panel');
});

Route::get('/typography', function()
{
	return View::make('typography');
});

Route::get('/notifications', function()
{
	return View::make('notifications');
});

Route::get('/blank', function()
{
	return View::make('blank');
});

Route::get('/login', function()
{
	return View::make('login');
});

Route::get('/documentation', function()
{
	return View::make('documentation');
});

Route::get('/stats', function()
{
	return View::make('stats');
});

Route::get('/welcome', function()
{
	return View::make('welcome');
});


Route::get('/progressbars', function()
{
	return View::make('progressbars');
});
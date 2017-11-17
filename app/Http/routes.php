<?php


Route::get('/', function () {
    return view('welcome');
});


Route::auth();
Route::get('/admin', function () {
    return view('admin.home');
});


Route::get('/reportes', function () {
    return view('reportes.index');
});


Route::get('reportes/crear_reporte_todas_facturas/{tipo}', 'PdfController@crear_reporte_todas_facturas');
Route::get('reportes/crear_reporte_todas_obras/{tipo}', 'PdfController@crear_reporte_todas_obras');


Route::resource('facturas', 'FacturasController');
Route::get('facturas/{numero_factura}/destroy', [
    'uses' => 'FacturasController@destroy',
    'as' => 'facturas.destroy'
]);


Route::get('facturas/{numero_factura}/edit', [
    'uses' => 'FacturasController@edit',
    'as' => 'facturas.edit'
]);


Route::get('/home', 'HomeController@index');

Route::resource('users', 'UsersController');
Route::get('users/{id}/destroy', [
    'uses' => 'UsersController@destroy',
    'as' => 'users.destroy'
]);

Route::get('users/{id}/edit', [
    'uses' => 'UsersController@edit',
    'as' => 'users.edit'
]);
//Feña Routes

Route::resource('material', 'MaterialController');

Route::resource('obras', 'ObrasController');
Route::get('obras/{id}/destroy', [
    'uses' => 'ObrasController@destroy',
    'as' => 'obras.destroy'
]);






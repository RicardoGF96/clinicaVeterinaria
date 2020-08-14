<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home1')->name('home1'); //Rutas donde en los parametros lleva la dirección y luego la vista donde se redirije
Route::view('/contact', 'contact')->name('contact'); //la función name nombra a la ruta para su mejor manejo dentro de las vistas
Route::view('/about', 'about')->name('about');

Route::get('/appointment', 'AppointmentController@index')->name('appointment');
Route::get('/appointment/create', 'AppointmentController@create')->name('appointment.create');
Route::get('/appointment/{id}/edit', 'AppointmentController@edit')->name('appointment.edit');
Route::patch('/appointment/{id}', 'AppointmentController@update')->name('appointment.update');
Route::post('/appointment', 'AppointmentController@store')->name('appointment.store');
Route::get('/appointment/{id}', 'AppointmentController@show')->name('appointment.show');
Route::delete('/appointment/{id}', 'AppointmentController@destroy')->name('appointment.destroy');

Route::post('contact', 'MessageController@store'); //El metodo post guarda datos a traves del controllador, con su funcion store

Route::get('/templatepatient', 'TemplatepatientController@index')->name('templatepatient'); //El primer parametro es la url, el segundo toma el controllador que se ejecutara junto con su metodo separado por un @
Route::get('/templatepatient/create', 'TemplatepatientController@create')->name('templatepatient.create');
Route::get('/templatepatient/{id}/edit', 'TemplatepatientController@edit')->name('templatepatient.edit');
Route::patch('/templatepatient/{id}', 'TemplatepatientController@update')->name('templatepatient.update');
Route::post('/templatepatient', 'TemplatepatientController@store')->name('templatepatient.store');
Route::get('/templatepatient/{id}', 'TemplatepatientController@show')->name('templatepatient.show');
Route::delete('/templatepatient/{id}', 'TemplatepatientController@destroy')->name('templatepatient.destroy');

Route::get('/templatepet', 'TemplatepetController@index')->name('templatepet'); //Metodo get obtiene funciones desde un controlador
Route::get('/templatepet/create', 'TemplatepetController@create')->name('templatepet.create');
Route::get('/templatepet/{id}/edit', 'TemplatepetController@edit')->name('templatepet.edit');
Route::patch('/templatepet/{id}', 'TemplatepetController@update')->name('templatepet.update');
Route::post('/templatepet', 'TemplatepetController@store')->name('templatepet.store');
Route::get('/templatepet/{id}', 'TemplatepetController@show')->name('templatepet.show');
Route::delete('/templatepet/{id}', 'TemplatepetController@destroy')->name('templatepet.destroy');

Route::get('/templateprovider', 'TemplateproviderController@index')->name('templateprovider');
Route::get('/templateprovider/create', 'TemplateproviderController@create')->name('templateprovider.create');
Route::get('/templateprovider/{id}/edit', 'TemplateproviderController@edit')->name('templateprovider.edit');
Route::patch('/templateprovider/{id}', 'TemplateproviderController@update')->name('templateprovider.update');
Route::post('/templateprovider', 'TemplateproviderController@store')->name('templateprovider.store');
Route::get('/templateprovider/{id}', 'TemplateproviderController@show')->name('templateprovider.show');
Route::delete('/templateprovider/{id}', 'TemplateproviderController@destroy')->name('templateprovider.destroy');

Route::get('/templatefile', 'TemplatefileController@index')->name('templatefile');
Route::get('/templatefile/create', 'TemplatefileController@create')->name('templatefile.create');
Route::get('/templatefile/{id}/edit', 'TemplatefileController@edit')->name('templatefile.edit');
Route::patch('/templatefile/{id}', 'TemplatefileController@update')->name('templatefile.update');
Route::post('/templatefile', 'TemplatefileController@store')->name('templatefile.store');
Route::get('/templatefile/{id}', 'TemplatefileController@show')->name('templatefile.show');
Route::delete('/templatefile/{id}', 'TemplatefileController@destroy')->name('templatefile.destroy');


Route::view('/admission', 'admission')->name('admission');






Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

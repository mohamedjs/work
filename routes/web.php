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
use App\Month;
Auth::routes();
Route::group(['prefix' => LaravelLocalization::setLocale() ,
'middleware' => ['localeSessionRedirect', 'localizationRedirect']] , function(){
Route::get('/', function () {
    return view('layouts.layout');
})->middleware('auth');
Route::get('/day','Day@show');
Route::get('/month','Month@show');
Route::get('/admin','admin@show');
Route::get('/user','user@show');
Route::get('/user/{id}','user@allvacancy');
Route::get('/days', function () {
  $month=Month::all();
  return view('admin.day',compact('month'));
});
});
Route::post('/addvacancy','user@vacancy');
Route::post('/view','user@usernumber');
Route::post('/addva','admin@addlimitva');
Route::post('/addday','admin@day');
Route::post('/showmoday','admin@showmoday');

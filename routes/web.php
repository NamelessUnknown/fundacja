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

Route::get('/', 'MainController@home')->name('home');
Route::get('/transfer', 'MainController@transfer');
Route::get('/inkubacja', 'MainController@inkubacja');
Route::get('/akceleracja', 'MainController@akceleracja');
Route::get('/zywnosc', 'MainController@zywnosc');
Route::get('/zespol', 'MainController@zespol');
Route::get('/misja', 'MainController@misja');
Route::get('/kultura', 'MainController@kultura');
Route::get('/sylwetki', 'MainController@sylwetki');
Route::get('/rozmowy', 'MainController@rozmowy');
Route::get('/opinie', 'MainController@opinie');
Route::get('/pliki', 'MainController@pliki');

//OSOBNE ARTYKUŁY

Route::get('/opinie/{id}/{slug}', 'MainController@osobnyWpis');
Route::get('/sylwetki/{id}/{slug}', 'MainController@osobnyWpis');
Route::get('/rozmowy/{id}/{slug}', 'MainController@osobnyWpis');

// ENGLISH
Route::get('/en/home', 'MainController@en');
Route::get('/en/mission', 'MainController@en');
Route::get('/en/culture', 'MainController@culture');
Route::get('/en/team', 'MainController@team');
Route::get('/en/transfer', 'MainController@transferen');
Route::get('/en/acceleration', 'MainController@acceleration');
Route::get('/en/incubation', 'MainController@incubation');
Route::get('/en/international-food-trade', 'MainController@foodcare');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

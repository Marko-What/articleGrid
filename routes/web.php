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

Route::group(['middleware' => ['auth']], function () { 
  Route::post('/netDisplaytemplatestate', 'Controller@netDisplaytemplatestate');
  Route::post('/posodobljenimrezek', 'Controller@posodobljenimrezek');

}); /* end of 'middleware' => ['auth'] */ 



Route::get('/home', 'HomeController@index')->name('home');


Route::get('/fetchGeneral', 'Controller@fetchGeneral');

	

Route::get('/returnImage', 'Controller@returnImage');


Route::get('/getArticles', 'Controller@getArticles');

Route::get('/artTitle', 'Controller@artTitle');


/*ssd*/

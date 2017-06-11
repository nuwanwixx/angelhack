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

Route::match(['get', 'post'], 'search', ['as'=>'search', 'uses'=>'SearchController@postSearch']);
Route::get('jobs', 'SearchController@getSearchJob');
Route::get('mens', 'SearchController@getSearchWork');

Route::get('view/{id}', ['as' => 'view.jobview', 'uses'=>'PagesController@getJobView']);
Route::get('menview/{id}', ['as' => 'view.menview', 'uses'=>'PagesController@getMenView']);
Route::post('view', ['as' => 'view.rate', 'uses'=>'RatingController@postClicked']);
Route::post('menview', ['as' => 'menview.rate', 'uses'=>'RatingController@postMenClicked']);

Route::resource('work', 'WorksController');
Route::resource('men', 'MenController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

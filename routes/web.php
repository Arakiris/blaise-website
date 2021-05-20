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


Auth::routes();

Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@welcome')->name('welcome');
Route::get('/about', 'AboutController@index')->name('about');
// Route::get('/album/{id}/{pages}/{song_page?}', 'AlbumController@getAlbum')->name('album');
Route::get('/album/{id}/{play}', 'AlbumController@getAlbum')->name('album');
Route::get('/song/{album}/{song}/{page?}', 'SongController@getSong')->name('song');
Route::get('/lyric/{song_id}', 'SongController@getLyric')->name('lyric');
Route::get('/contact', 'ContactController@getContact')->name('contact');
Route::post('/contact', 'ContactController@sendContact')->name('send_email');
Route::get('/photo/{category_id}', 'PhotoController@getPhotos')->name('photo');

Route::get('/view_large_image/{id}/{type?}/{seq?}', 'HomeController@getLargeImage')->name('view_large_image');

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


Route::get('/demo', function(){
    return view('demo');
}); 

Route::get('/', "AppController@index");
// user navigating through a single album
Route::get('/album/search', "AlbumController@album_search");
Route::get('/album/{album_id}/cover', "AlbumController@cover_page");
Route::get('/album/{album_id}/speech', "AlbumController@speech");
Route::get('/album/{album_id}/members_grid', "AlbumController@album_members_grid");
Route::get('/album/{album_id}/members', "AlbumController@album_members");
Route::get('/album/{album_id}/profiles', 'AlbumController@Profiles_from_album_init');
Route::get('/album/profiles/next', 'AlbumController@Profiles_from_album_next');
Route::get('/album/profiles/prev', 'AlbumController@Profiles_from_album_prev');
Route::get('/album/profile/{profile_id}', 'AlbumController@Profile_from_album');
// admin functions relating to album
Route::get('/create_album', "AlbumController@create");
Route::post('/create_album', "AlbumController@store");
Route::get('/albums', "AlbumController@index");
Route::post('/create_album/add_members/', "AlbumController@post_add_member");
// user navigation through his profile including crud functions
Route::get('/profile/{id}', "ProfileController@show");
Route::get('/profile/{profile_id}/{album_id}/gallary', "ProfileController@my_gallary");



















// Route::get('/', 'AlbumController@index');
// Route::get('/isPermittted', 'AlbumController@create');
// Route::get('/presidentailSpeech', 'AlbumController@store');
// Route::get('/groupPictures', 'AlbumController@show');
// Route::get('/albums', 'AlbumController@edit');
// Route::get('/randomPic', 'AlbumController@update');
// Route::get('/profiles', 'AlbumController@destroy');
// Route::get('/delProfile', 'AlbumController@deleteAlbumFromProfile');
// Route::post('/createAlbum', 'AlbumController@createAlbum');
// Route::post('/updateAlbum', 'AlbumController@updateAlbum');
// Route::get('/deleteAlbum', 'AlbumController@deleteAlbum');
// Route::get('/getAlbum', 'AlbumController@getAlbum');
// Route::post('/createProfile', 'AlbumController@createProfile');

// Route::get('test', function(){
//     return view("view_albums");
// });



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

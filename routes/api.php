<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
/**
Route::group(['prefix' => 'v1', 'middleware' => 'auth:api'], function () {
        Route::get('/user', 'UrlMapperController@store');
    });
*/
/**
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
*/

Route::get('/user', function (Request $request) {
    return "hii";
});

Route::get('/tweet/{id}', 'TweetController@view');
Route::get('/tweet', 'TweetController@getTweets');
Route::post('/tweet', 'TweetController@create');
Route::post('/user/{$id}', 'UserController@update');


/**
Route::get('/user/{id}', function ($id) {
	$user = App\User::find($id);
	return $user;
});
*/
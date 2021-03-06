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

Route::get('/', ['as' => 'front.index', 'uses' => 'FrontendController@index']);

Auth::routes(['verify' => true]);
Route::get('/redirect-to', ['as' => 'redirect', 'uses' => 'Admin\UserController@redirectTo']);

// Social login
Route::get('/login/{social}','Auth\LoginController@socialLogin')->where('social','twitter|facebook|linkedin|google|github|bitbucket');
Route::get('/login/{social}/callback','Auth\LoginController@handleProviderCallback')->where('social','twitter|facebook|linkedin|google|github|bitbucket');

// Admin
Route::group(['as' => 'admin.', 'middleware' => 'roles','roles' =>['admin'], 'namespace' => 'Admin', 'prefix' => 'admin'], function() {

    Route::get('/', ['as' => 'pages', 'uses' => 'PageController@index']);

    Route::resource('user', 'UserController');

    Route::resource('page', 'PageController');
    Route::resource('block', 'BlockController');
    Route::get('block/{block}/setting', ['as' => 'block.setting', 'uses' => 'BlockController@setting']);

});

// User
Route::group(['middleware' => ['roles', 'verified'],'roles' =>['user']], function() {

});

Route::get('/signup', ['as' => 'front.signup', 'uses' => 'FrontendController@signup']);
//Форма регистрации отправка
Route::post('/signup', ['as' => 'front.signup-post', 'uses' => 'FrontendController@signupPost']);


//Image resize & crop on view:  http://image.intervention.io/
Route::get('/resize/{w}/{h}',function($w=null, $h=null){
  $img = Illuminate\Support\Facades\Request::input("img");
  return \Image::make(public_path(urldecode($img)))->fit($w, $h, function ($constraint) {
      $constraint->upsize();
  })->response('jpg');
});


Route::get('/{slug}', ['as' => 'front.page', 'uses' => 'FrontendController@page']);
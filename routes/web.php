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


use vendor\laravel\framework\src\Illuminate\Routing;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;

Route::get('/','PostController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users/1', function () {
    return view('users.show');
});

Route::get('/users/{id}', 'UserController@show');

Route::middleware('auth')->group(function () {
    Route::get('me', 'UserController@edit');
    Route::post('me', 'UserController@update')->name('users.update');
});

Route::prefix('posts')->as('posts.')->group(function () {
    Route::middleware('auth')->group(function(){
        Route::get('create', 'PostController@create')->name('create');
        Route::post('store', 'PostController@store')->name('store');
        Route::post('{post}/delete', 'PostController@delete')->name('delete');
        Route::post('{post}/reply', 'PostController@reply')->name('reply');
    });
    Route::get('{post}', 'PostController@show')->name('show'); 
});

Route::middleware('auth')->prefix('bookmarks')->as('bookmarks.')->group(function () {
    Route::get('/', 'BookmarkController@index')->name('index');
    Route::post('{post}', 'BookmarkController@add')->name('add'); 
    Route::post('{post}/remove', 'BookmarkController@remove')->name('remove');
});

*/

use App\Http\Controllers\HomeController;
use vendor\laravel\framework\src\Illuminate\Routing;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Auth;

Route::get('/member','UserController@create');
//会員登録内容を記入するページ

Route::get('/member/confirm','UserController@confirm');
//会員登録内容を確認し、DBに送信するページ

Route::get('/member/{id}/profile','UserController@profile');
//id番号を持つユーザーのプロフィールページを作成するページ（同じ番号の会員のみアクセス可能）

Route::get('/member/{id}','UserController@show');
//id番号のユーザープロフィールを表示するページ

Route::get('/member/{id}/edit','UserController@edit');
//id番号のユーザープロフィールを同じid番号を持つユーザーのみが編集するページ（同じ番号の会員のみアクセス可能）

Route::get('/group','GroupController@create');
//サークルを作成するページ

Route::get('/group/{id}/profile','GroupController@profile');
//サークルのプロフィールページを作成するページ（責任者のみアクセス可能）

Route::get('/group/{id}','GroupController@show');
//サークルのプロフィールページを表示するページ

Route::ger('group/{id}/info/create','GroupController@postInfo');
//サークルのお知らせを投稿するページ（責任者のみアクセス可能）

Route::get('/group/{id}/info','GroupController@showInfo');
//サークルのお知らせ一覧を表示するページ

Route::get('/home','HomeController@index');
//ホームページ画面

Route::get('/home/{id}','HomeController@show');
//ログイン後のホームページ画面

//test

<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Middleware\AuthRequire;

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

Route::get('/', 'HomeController@index')->name('home');

Route::group(['prefix' => 'news'], function () {
    Route::get('/{page?}', 'NewsController@index')
        ->name('news')
        ->where('page', '[0-9]+');

    Route::get('/category/{categoryId?}', 'NewsController@category')
        ->name('categoryNews')
        ->where(['categoryId' => '[0-9]+']);
});

Route::group(['prefix' => 'auth'], function () {
    Route::get('/login', 'AuthController@login')->name('login');

    Route::post('/authenticate', 'AuthController@authenticate')->name('auth');

    Route::get('/logout', 'AuthController@logout')->name('logout');
});

Route::prefix('admin')->middleware('authRequire')->group(function () {


    Route::get('/', 'AdminController@index')->name('admin');


    Route::group(['prefix' => 'news'], function () {


        Route::get('/', 'AdminNewsController@index')->name('adminNews');


        Route::get('/add', 'AdminNewsController@getAdd')->name('adminNewsGetAdd');

        Route::post('/add', 'AdminNewsController@postAdd')->name('adminNewsPostAdd');


        Route::get('/edit/{id}', 'AdminNewsController@getEdit')
            ->name('adminNewsGetEdit')
            ->where(['id' => '[0-9]+']);

        Route::put('/edit/{id}', 'AdminNewsController@putEdit')
            ->name('adminNewsPutEdit')
            ->where(['id' => '[0-9]+']);


        Route::delete('/delete/{id}', 'AdminNewsController@delete')
            ->name('adminNewsDelete')
            ->where(['id' => '[0-9]+']);
    });


    Route::group(['prefix' => 'categorys'], function () {


        Route::get('/', 'AdminCategorysController@index')->name('adminCategorys');;


        Route::get('/add', 'AdminCategorysController@getAdd')->name('adminCategorysGetAdd');

        Route::post('/add', 'AdminCategorysController@postAdd')->name('adminCategorysPostAdd');


        Route::get('/edit/{id}', 'AdminCategorysController@getEdit')
            ->name('adminCategorysGetEdit')
            ->where(['id' => '[0-9]+']);

        Route::put('/edit/{id}', 'AdminCategorysController@putEdit')
            ->name('adminNewsPutEdit')
            ->where(['id' => '[0-9]+']);


        Route::delete('/delete/{id}', 'AdminCategorysController@delete')
            ->name('adminCategorysDelete')
            ->where(['id' => '[0-9]+']);
    });
});

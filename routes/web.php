<?php

use Illuminate\Support\Facades\Route;

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

Route::group([
    'as' => 'user.', // имя маршрута, например user.index
    'prefix' => 'user', // префикс маршрута, например user/index
    'namespace' => 'User', // пространство имен контроллеров
    'middleware' => ['auth'] // один или несколько посредников
], function () {
    // главная страница
    Route::get('index', 'IndexController')->name('index');
});

Route::group([
    'as' => 'auth.', // имя маршрута, например auth.index
    'prefix' => 'auth', // префикс маршрута, например auth/index
], function () {
    // форма регистрации
    Route::get('register', 'Auth\RegisterController@register')
        ->name('register');
    // создание пользователя
    Route::post('register', 'Auth\RegisterController@create')
        ->name('create');
    // форма входа
    Route::get('login', 'Auth\LoginController@login')
        ->name('login');
    // аутентификация
    Route::post('login', 'Auth\LoginController@authenticate')
        ->name('auth');
    // выход
    Route::get('logout', 'Auth\LoginController@logout')
        ->name('logout');
});

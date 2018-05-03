<?php

Route::get('/', 'GoodsController@index');

Route::get('/good/{id}', 'GoodsController@item')
    ->where('id', '\d+');

Route::get('/category/{categoryId}', 'GoodsController@category')
    ->where('categoryId', '\d+');

Route::get('/catalog', 'GoodsController@catalog');

Route::get('/account', 'UsersController@account')
    ->middleware(\App\Http\Middleware\IsAuth::class);

Route::get('/account/edit-form', 'UsersController@editForm')
    ->middleware(\App\Http\Middleware\IsAuth::class);
Route::post('account/edit', 'UsersController@edit')
    ->middleware(\App\Http\Middleware\IsAuth::class);

Route::get('/contact', 'ContactController@contact');
Route::post('/send', 'ContactController@send');
Route::get('/sended', 'ContactController@sended');

Route::get('/cart', 'CartController@cart')
    ->middleware(\App\Http\Middleware\IsAuth::class);

Route::post('/cart/add', 'CartController@add')
    ->middleware(\App\Http\Middleware\IsAuth::class);

Route::get('/cart/delete', 'CartController@delete')
    ->middleware(\App\Http\Middleware\IsAuth::class);

Route::get('/cart/update-quantity', 'CartController@updateQuantity')
    ->middleware(\App\Http\Middleware\IsAuth::class);

Route::post('/cart/checkout', 'CartController@checkout')
    ->middleware(\App\Http\Middleware\IsAuth::class);

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout')->name('logout');
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register')->name('register');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

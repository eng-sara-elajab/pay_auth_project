<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
/* Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm'); */

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
/* Route::post('/register/admin', 'Auth\RegisterController@createAdmin'); */

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');




Route::get('/dashboard','dashboardController@index');

Route::group(['as' => 'users.'], function () {
    Route::get('/users','usersController@index')->name('index');
    Route::get('users/{id}', 'usersController@edit')->name('edit');
    Route::put('users/{id}', 'usersController@update')->name('update');
    Route::get('users/{id}/delete', 'usersController@delete')->name('delete');
    Route::post('users/search','usersController@search')->name('search');
});

Route::get('user_cards/{id}', [
    "uses" => 'cardsController@user_cards',
    "as" => 'user_cards'
]);

Route::get('user_transactions/{id}', [
    "uses" => 'transactionsController@user_transactions',
    "as" => 'user_transactions'
]);

Route::resource('/admins','adminsController');

Route::group(['as' => 'transactions.'], function () {
    Route::get('transactions','transactionsController@index');
    Route::post('transactions/searchtran','transactionsController@search')->name('search');
});

Route::get('/profile','adminsController@profile');
Route::post('/profile','adminsController@update_avatar');

// Route::resource('/cards','cardsController');

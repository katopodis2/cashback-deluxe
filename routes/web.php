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
    return view('home');
})->name('index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register', 'AuthController@register')->name('register');
Route::post('/create-user', 'AuthController@createUser')->name('createUser');
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@signIn')->name('signIn');
Route::get('/test', 'AuthController@test')->name('test');
Route::post('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/my-wallet', 'MyCashBackController@myWallet')->name('myCashBack.myWallet');
    Route::get('/my-cash-back', 'MyCashBackController@index')->name('myCashBack.index');
    Route::get('/my-back-claim', 'MyCashBackController@myClaim')->name('myCashBack.myClaim');
    Route::get('/payout-history', 'MyCashBackController@payoutHistory')->name('myCashBack.payoutHistory');
});

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
Route::get('/cash-back-review', 'HomeController@cashBackReview')->name('cashBackReview');
Route::post('/cash-back-review', 'HomeController@storeCashBackReview')->name('addCashBackReview');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/my-wallet', 'MyCashBackController@myWallet')->name('myCashBack.myWallet');
    Route::get('/my-cash-back', 'MyCashBackController@index')->name('myCashBack.index');
    Route::get('/my-back-claim', 'MyCashBackController@myClaim')->name('myCashBack.myClaim');
    Route::get('/payout-history', 'MyCashBackController@payoutHistory')->name('myCashBack.payoutHistory');
    Route::get('/user/settings', 'UsersController@settingsAccount')->name('user.account');
    Route::get('/change-password', 'UsersController@changePassword')->name('user.changePass');

                                        //review
    Route::get('/shop/{slug}', 'StoresController@shop')->name('store.shop');//TODO name sarqel partadir, uxaki testi hamar em pakel
    Route::get('/review/add/{slug}', 'ReviewController@addReview')->name('store.addReview');//TODO name sarqel partadir, uxaki testi hamar em pakel
    Route::post('/review/add/{slug}', 'ReviewController@storeReview')->name('store.storeReview');//TODO name sarqel partadir, uxaki testi hamar em pakel
    Route::get('/review/edit/{slug}', 'ReviewController@editReview')->name('store.editReview');//TODO name sarqel partadir, uxaki testi hamar em pakel
    Route::post('/review/edit/{slug}', 'ReviewController@updateReview')->name('store.updateReview');//TODO name sarqel partadir, uxaki testi hamar em pakel
    Route::get('/reviews/{slug}', 'ReviewController@review')->name('store.review');//TODO name sarqel partadir, uxaki testi hamar em pakel
    Route::get('/my-reviews/{slug}', 'ReviewController@myReview')->name('store.myReview');//TODO name sarqel partadir, uxaki testi hamar em pakel
});



Route::view('privacy', 'privacy')->name("privacy");

//Route::get('/faq', 'HomeController@faq')->name('faq');
Route::view('/faq', 'faq')->name('faq');
Route::post("/faq", function (\Illuminate\Http\Request $request){
    \Illuminate\Support\Facades\Mail::send(new \App\Mail\SendFaqMail($request));
    return redirect()->route("faq");
})->name("sendMail");

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'admin'], 'namespace' => 'Admin', 'as' => 'admin.'], function () {
    Route::get('/', 'HomeController@index')->name('home');
//                start       how does it work
    Route::get('/how-work', 'HowDoesItWorkController@index')->name('how-work.index');
    Route::get('/add-how-work', 'HowDoesItWorkController@create')->name('how-work.create');
    Route::post('/add-how-work', 'HowDoesItWorkController@store')->name('how-work.store');
    Route::get('/how-work/{id}/edit', 'HowDoesItWorkController@edit')->name('how-work.edit');
    Route::post('/how-work/{id}', 'HowDoesItWorkController@update')->name('how-work.update');
    Route::delete('/how-work/delete/{id}', 'HowDoesItWorkController@delete')->name('how-work.delete');
    //                end       how does it work

    //                start       faq
    Route::get('/faq', 'FaqController@index')->name('faq.index');
    Route::get('/add-faq', 'FaqController@create')->name('faq.create');
    Route::post('/add-faq', 'FaqController@store')->name('faq.store');
    Route::get('/faq/{id}/edit', 'FaqController@edit')->name('faq.edit');
    Route::post('/faq/{id}', 'FaqController@update')->name('faq.update');
    Route::delete('/faq/delete/{id}', 'FaqController@delete')->name('faq.delete');
//                          end faq
});


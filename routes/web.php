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
Auth::routes();
Route::get('/', 'FrontController@index');
Route::get('pages/{id}',['as' =>'single' , 'uses' => 'FrontController@singleview']);
Route::get('immigration-consultant/{cityvalue}', 'FrontController@singlecity');
Route::get('search', 'FrontController@search')->name('user.search');
Route::post('sendfeedback', 'FrontController@sendfeedbackmail');

// Route::group(['prefix' => 'admin',  'middleware' => 'auth'], function()
// {

Route::get('/home', 'HomeController@index')->name('home')->middleware('mobileverify');
Route::get('/profile', 'UserController@viewprofile')->name('user.profile')->middleware('mobileverify');
Route::get('/editprofile', 'UserController@editprofile')->name('user.editprofile')->middleware('mobileverify');
Route::get('/settings', 'UserController@settings')->name('user.settings')->middleware('mobileverify');
Route::get('/settings-cover', 'UserController@settingscover')->name('user.settingsDP')->middleware('mobileverify');
Route::get('/checkpass','UserController@chkPassword')->middleware('mobileverify');
Route::post('/update-pass','UserController@updatePassword')->middleware('mobileverify');
Route::post('/settings-uptcover','UserController@updatecover')->middleware('mobileverify');
Route::get('/verify', 'UserController@verifymobile')->name('user.verifymobile');
Route::post('/sendotp', 'UserController@sendOTP');
Route::get('/verifyotp', 'UserController@verifyotp');
Route::post('/finalverifyOTP', 'UserController@finalverifyOTP');
Route::post('/uptsettings', 'UserController@updatesettings');

Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/login', 'Auth\AdminLoginController@Login')->name('admin.login.submit');
Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
Route::get('/settings', 'AdminController@settings')->name('admin.settings');
Route::get('/adduser', 'AdminController@addUser')->name('admin.adduser');
Route::post('/addusersubmit', 'AdminController@adduserSubmit')->name('admin.adduser');
Route::get('/categories','CategoryController@index');
Route::resource('/categories','CategoryController');
Route::get('/cities','CityController@index');
Route::resource('/cities','CityController');
Route::get('/sliders','SliderController@index');
Route::resource('/sliders','SliderController');
Route::get('/logos','LogoController@index');
Route::resource('/logos','LogoController');

// Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
  
Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});


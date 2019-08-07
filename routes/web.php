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

Auth::routes(['verify' => true]);

Route::get('/logout', 'PortalController@logout');

Route::get('/portal/unauthorized', function () {
    return view('401');
});
Route::get('/portal', 'PortalController@index');

Route::get('/portal/ticket', 'TicketController@index')->middleware('verified');
Route::get('/portal/ticket/create', 'TicketController@create')->middleware('verified');
Route::post('/portal/ticket/create', 'TicketController@store')->middleware('verified');
Route::get('/portal/ticket/edit/{ticket}', 'TicketController@show')->middleware('verified');
Route::post('/portal/ticket/edit/{ticket}', 'TicketController@edit')->middleware('verified');

Route::get('/portal/engineering/download/{name}', 'EngineeringController@download')->middleware('verified');
Route::get('/portal/billing/download/{name}', 'BillingController@download')->middleware('verified');

Route::group(['middleware' => ['App\Http\Middleware\AdminMiddleware', 'verified']], function(){
	//Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
	Route::get('/portal/users', 'UserController@index');
	Route::get('/portal/myprofile', 'UserController@myprofile');
	Route::get('/portal/users/create', 'UserController@create');
	Route::post('/portal/users/create', 'UserController@store');
	Route::get('/portal/users/delete/{user}', 'UserController@destroy');

	Route::get('/portal/engineering', 'EngineeringController@index');
	Route::get('/portal/engineering/all', 'EngineeringController@all');
	Route::post('/portal/engineering', 'EngineeringController@store');
	Route::post('/portal/engineering/all', 'EngineeringController@store');
	
	Route::get('/portal/billing', 'BillingController@index');
	Route::get('/portal/billing/all', 'BillingController@all');
	Route::post('/portal/billing', 'BillingController@store');
	Route::post('/portal/billing/all', 'BillingController@store');

	Route::get('/portal/blog', 'BlogController@index');
	Route::get('/portal/blog/create', 'BlogController@create');
	Route::post('/portal/blog/create', 'BlogController@store');
	Route::get('/portal/blog/edit/{blog}', 'BlogController@show');
	Route::post('/portal/blog/edit/{blog}', 'BlogController@update');
	Route::get('/portal/blog/delete/{blog}', 'BlogController@destroy');
});

Route::group(['middleware' => ['App\Http\Middleware\UserMiddleware', 'verified']], function(){
	//Route::match(['get', 'post'], '/adminOnlyPage/', 'HomeController@admin');
	Route::get('/portal/myprofile', 'UserController@myprofile');

	Route::get('/portal/engineering', 'EngineeringController@index');
	Route::post('/portal/engineering', 'EngineeringController@store');
	
	Route::get('/portal/billing', 'BillingController@index');
	Route::post('/portal/billing', 'BillingController@store');
});

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/aboutus', 'HomeController@aboutus')->name('aboutus');
Route::get('/services', 'HomeController@services')->name('services');
Route::get('/contactus', 'HomeController@contactus')->name('contactus');
Route::post('/contactus', 'HomeController@submitcontactus')->name('contactussubmit');
Route::get('/Automation', 'HomeController@Automation')->name('Automation');
Route::get('/CloudServices', 'HomeController@CloudServices')->name('CloudServices');
Route::get('/CyberSecurity', 'HomeController@CyberSecurity')->name('CyberSecurity');
Route::get('/Networkdesign', 'HomeController@networkdesign')->name('Networkdesign');
Route::get('/Recycling', 'HomeController@recycling')->name('Recycling');
Route::get('/Sdwan', 'HomeController@sdwan')->name('Sdwan');
Route::get('/Whitebox', 'HomeController@whitebox')->name('Whitebox');

Route::get('/blog', 'BlogController@home')->name('blog');
Route::get('/blog/{blog}', 'BlogController@inner')->name('bloginner');

<?php

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('under-constraction', function () {return view('layouts.un');});


Route::get('/', function () {return view('welcome');})->name('home');
Route::get('about', function () {return view('frontend.footer.aboutus');})->name('about_us');
Route::get('blog', function () {return view('frontend.footer.contactus');})->name('blog');
Route::get('contact', function () {return view('frontend.footer.contactus');})->name('contactus');

// Footer
Route::get('faq', function () {return view('layouts.un');});
Route::get('knowledge', function () {return view('layouts.un');});
Route::get('privacy', function () {return view('layouts.un');});
Route::get('refund', function () {return view('layouts.un');});
Route::get('support', function () {return view('layouts.un');});
Route::get('terms', function () {return view('layouts.un');});
Route::get('/home', function () {return view('welcome');});


Auth::routes();
Route::get('/home', function () {return view('welcome');});
Route::get('create-user','SMS\SMSController@create');
Route::post('create-user/{id}','SMS\SMSController@store');
Route::get('/verify','SMS\SMSController@GetVerify');
Route::post('/verify','SMS\SMSController@PostVerify');

// Frontend
Route::post('addmoney/{id}', 'Money\AddMoneyController@addmoney');
// Profile
Route::get('profile/{name}', 'Frontend\UserController@profile');
Route::get('profile/general/{name}', 'Frontend\Setting\SettingController@setting');
Route::get('profile/contact/{name}', 'Frontend\Setting\SettingController@contact');
Route::get('change-password', 'Frontend\Setting\SettingController@view_pass');
Route::post('change-password', 'Frontend\Setting\SettingController@changePassword')->name('change.password');
Route::post('names/{id}', 'Frontend\Setting\SettingController@names')->name('change.names');
Route::post('email/{id}', 'Frontend\Setting\SettingController@email')->name('change.email');

// Dashboard

Route::get('dashboard/{name}', 'Frontend\DashboardController@dashboard')->name('dashboard');

Route::get('wallet', 'Wallet\WalletController@wallet');
Route::get('earning', 'Earn\EarningController@earn');
Route::get('earncash_transfer', 'Earn\EarningController@earn_cash_transfer')->name('earn.transfer');
Route::get('earncash_convert', 'Earn\EarningController@earn_cash_convert')->name('earn.convert');

Route::get('work/{name}', 'Work\WorkController@index');


Route::get('withdraw', 'Withdraw\WithdrawController@view_page');
Route::post('post-withdraw/{id}', 'Withdraw\WithdrawController@withdraw');

Route::get('team', 'Team\TeamController@view');
// Route::get('earning', function () {return view('layouts.un');});
Route::get('report', 'Report\ReportController@index');
// Settings
Route::get('Settings/{name}', 'Frontend\SettingController@setting');

Route::post('update-ava','UserController@update_avatar');

Route::get('changestatus', 'UserController@status')->name('changestatus');

// Withdraw
Route::post('post-withdraw-request', 'Wallet\WalletController@request');

// Packages
// Route::get('play',  'Packages\PackagesController@play');
Route::get('play',  'Packages\PackagesController@play')->name('card_play')->middleware('auth');
Route::get('sliver',  'Packages\PackagesController@play')->middleware('auth');
Route::get('gold',  'Packages\PackagesController@play')->middleware('auth');
Route::get('diamond',  'Packages\PackagesController@play')->middleware('auth');
Route::get('vip',  'Packages\PackagesController@play')->middleware('auth');

Route::post('buy-package',  'Packages\PackagesController@buy_package')->middleware('auth');
Route::post('single/{id}',  'Packages\PackagesController@single_view')->middleware('auth');



// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('video','PTCController@index')->name('video');
    Route::post('uploadVideo', 'PTCController@uploadVideo')->name('uploadVideo');
    Route::post('announce', 'NotifyController@announce')->name('announce');
    Route::get('withdraw', 'WithdrawController@withdraw')->name('withdraw');
    Route::get('package', 'PackageController@view_req')->name('package');
    Route::get('single/{name}', 'PackageController@approval');
    Route::post('update-user/{id}', 'PackageController@update_user');
    //Route::post('quote/{id}', 'PackageController@single_view');
    Route::post('package/{id}/approve', 'PackageController@package_approve')->name('package.approve');
    // Route::get('single/edit/{name}', 'UserController@single_view');
});


// SuperAdmin
Route::namespace('Superadmin')->prefix('superadmin')->name('superadmin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UserController',['except' => ['show','create','store']]);
});

Route::get('signup/ref/{refer}', 'Frontend\RefercodeController@signupbyrefer')->name('signup.reffer');
//Route::get('signup', 'Auth\RegisterController@non_index')->name('signup.nonreffer');

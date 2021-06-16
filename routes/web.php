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
    return redirect(route('home'));
});


Auth::routes();

Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/topup', 'TopUpController@index')->name('topup');
Route::get('/members', 'MembersController@index')->name('members');
Route::post('/topup_act', 'TopUpController@topup_action')->name('topup_action');
Route::get('/setting', 'SettingController@index')->name('setting');
Route::post('/save_pwd', 'SettingController@save_pwd')->name('save_pwd');
Route::get('/withdraw', 'WithdrawController@index')->name('withdraw');
Route::post('/inv_withdraw', 'WithdrawController@inv_withdraw')->name('inv_withdraw');
Route::post('/profit_withdraw', 'WithdrawController@profit_withdraw')->name('profit_withdraw');
Route::post('/com_withdraw', 'WithdrawController@com_withdraw')->name('com_withdraw');
Route::get('/admin/index/{page_index}', 'AdminController@index')->name('admin');
Route::post('/admin/save_wallet', 'AdminController@save_wallet')->name('save_wallet');
Route::get('/admin/bitcoin', 'AdminController@admin_bitcoin')->name('admin_bitcoin');
Route::post('/admin/save_bitcoin', 'AdminController@save_bitcoin')->name('save_bitcoin');
Route::get('/admin/notifications', 'AdminController@notifications')->name('admin_notifications');
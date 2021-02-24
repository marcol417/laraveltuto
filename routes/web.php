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


Route::get('simple-qrcode', 'SimpleQRcodeController@generate'); 

Route::post('simple-excel/import', 'SimpleExcelController@import')->name('excel.import'); 

Route::post('simple-excel/export', 'SimpleExcelController@export')->name('excel.export');

Route::get('/importation', 'SimpleExcelController@importation')->name('importation'); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('admin/routes', 'HomeController@admin')->middleware('admin'); 

Route::get('testpdf', 'PdfController@show'); 

Route::get('message', 'MessageController@formMessageGoogle'); 
Route::post('message', 'MessageController@sendMessageGoogle')->name('send.message.google'); 

Route::get('login-register', 'SocialiteController@loginRegister'); 

Route::get('redirect/{provider}', 'SocialiteController@redirect')->name('socialite.redirect'); 

Route::get('callback/{provider}', 'SocialiteController@callback')->name('socialite.callback'); 


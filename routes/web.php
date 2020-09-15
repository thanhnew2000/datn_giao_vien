<?php

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
Route::get('/', function () {
    return view('index');
})->middleware('auth', 'web')->name('app');
Auth::routes();
Route::get('profile', 'Auth\AuthController@profile')->middleware('auth', 'web')->name('auth.profile');;
Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('quan-ly-hoc-sinh')->group(function () {
    Route::get('/','QuanlyHocSinhController@index')->name('quan-ly-hoc-sinh-index');
    Route::get('/create','QuanlyHocSinhController@create')->name('quan-ly-hoc-sinh-create');
    Route::get('/edit/{id}','QuanlyHocSinhController@edit')->name('quan-ly-hoc-sinh-edit');
});

Route::prefix('quan-ly-khoi')->group(function () {
    Route::get('/','KhoiController@index')->name('quan-ly-khoi-index');
});


Route::prefix('cong-viec-hang-ngay')->group(function () {
    Route::view('/diem-danh/den-sang','diem-danh.diem-danh-den-ban-sang')->name('test1');
    Route::view('/diem-danh/den-chieu','diem-danh.diem-danh-den-ban-chieu')->name('test2');
    Route::view('/diem-danh/ve','diem-danh.diem-danh-ve')->name('test3');

    Route::view('/don-xin-nghi-hoc','don-xin-nghi-hoc.index')->name('test4');
    Route::view('/don-dan-thuoc','don-dan-thuoc.index')->name('test5');
    Route::view('/loi-nhan','loi-nhan.index')->name('test6');
});

Route::get('test', 'DiemDanhDen\DiemDanhDenController@test');
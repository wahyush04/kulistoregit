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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::livewire('/admin/product', 'product.index')
    ->name('admin.product')
    ->middleware('auth');

Route::livewire('/shop', 'shop.index')
    ->name('shop.index');


//route profile
Route::get('/profile', 'HomeController@about')->name('profile')->middleware('auth');
Route::get('/rekening', 'HomeController@rekening')->name('rek');
Route::get('/keamanan', 'HomeController@keamanan')->name('keamanan');

//route edit profile
Route::get('/profile/{user}/edit', 'ProfileController@edit')->name('edit')->middleware('auth');
Route::patch('/profile/{user}', 'ProfileController@update')->name('update');

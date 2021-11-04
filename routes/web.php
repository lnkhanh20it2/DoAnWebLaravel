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

Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/shop', 'HomeController@shop')->name('home.shop');
Route::get('/about', 'HomeController@about')->name('home.about');
Route::get('/contact', 'HomeController@contact')->name('home.contact');
/**
 * GET=>account.index => danh sach
 * GET=>account.create =>form moi
 * GET=>account.show => xem chi tiet
 * GET=>account.edit => hien thi form edit
 * POST=>account.store => khi submit form them moi
 * PUT=>account.update => khi submit form edit
 * DELETE=>account.destroy =>khi xoa
 */
Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('/','AdminController@dashboard')->name('admin.dashboard');
    Route::get('/logout','AdminController@logout')->name('logout');
    Route::get('/file','AdminController@file')->name('admin.file');

    Route::resources([
        'category' => 'CategoryController',
        'product' => 'ProductController',
        'banner' => 'BannerController',
        'account' => 'AccountController',
        'user' => 'UserController',
        'blog' => 'BlogController',
        'order' => 'OrderController',
    ]);
});
Route::get('admin/login','AdminController@login')->name('login');
Route::post('admin/login','AdminController@post_login')->name('login');

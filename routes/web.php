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



//trang chủ
Route::get('',['uses'=>'TrangChuController@trangchu','as'=>'trangchu.menu.master']);


Route::post('email', [
    'uses' => 'TrangChuController@goiEmail',
    'as' => 'front.email'
]);


Route::get('sitemap.xml', [
    'uses' => 'SiteMapController@sitemap',
    'as' => 'trangchu.menu.sitemap'
]);

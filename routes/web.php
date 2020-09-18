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
Auth::routes();
Route::get('/','BlogController@index');
Route::get('/detail_post/{id}','BlogController@show');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/home', 'HomeController@index')->name('home');
	route::resource('category','CategoryController');
	route::resource('tag','TagController');
	route::get('post/tampil_hapus','PostController@tampil_hapus')->name('post.tampil_hapus');
	route::get('post/restore/{id}','PostController@restore')->name('post.restore');
	route::delete('post/kill/{id}','PostController@kill')->name('post.kill');
	route::resource('post','PostController');
	route::resource('user','UserController');
	route::resource('iklan','IklanController');
});

route::get('/blog2',function(){
	return view('blog_2');
});

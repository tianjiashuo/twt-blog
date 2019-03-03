<?php
$user = Auth::user();
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

Route::get('/home' , 'HomeController@index');

Route::get('DeleteBlog/{mid}', 'BlogController@changeBlog');//删除博文
Route::get('DeleteBlog/', function(){return view ('DeleteBlog');});
Route::get('/displayBlog/{mid}','BlogController@displayBlog');
Route::get('/AllBlogs','BlogController@AllBlogs');
Route::get('/GivenBlogs/{uname}','BlogController@GivenBlogs');
Route::get('/wsl/{mid}', 'CommentController@index');
Route::post('/AddComment/{mid}', 'CommentController@addComment');//博文评论添加界面展示
Route::get('/AddBlog_', 'BlogController@InputAddBlog');
Route::post('/AddBlog', 'BlogController@addBlog');//博文添加
Route::get('/EditBlog/{mid}', 'BlogController@InputEditBlog');
Route::post('/EditBlog/{mid}', 'BlogController@EditBlog');
//修改博文



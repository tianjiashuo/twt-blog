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
//
//Route::group(['prefix'=>'visiter' , 'middleware' => 'test'] , function(){
//    Route::get('/blog' , 'BlogController@getAllBlog');//完成了
//    Route::get('/blog/u/{user_id}' , 'BlogController@getBlogByAuthor');//完成了
//    Route::get('/blog/{bid}' , 'BlogController@getBlogById');//完成了
//});

//Route::group(['middleware' => 'isLogin'] , function(){
//    Route::get('/blog' , 'BlogController@getBlogByMySelf');//完成了
//    Route::post('/blog' , 'BlogController@addBlog');
//    Route::put('/blog/{bid}' , 'BlogController@updateBlog');
//    Route::delete('/blog/{bid}' , 'BlogController@deleteBlog');
//    Route::get('/blog/{bid}' , 'BlogController@getBlogById');//完成了
//    Route::get('/comment/blog/{bid}' , 'commentController@getCommentByBlog');
//});

Route::get('index', 'AddBlogController@index');//博文列表路由
Route::match(['get','post'],'/edit/{id}', 'AddPostController@edit')->where('id','[0-9]{1,3}');//同时处理留言编辑的界面展示和提交修改留言功能
//Route::get('DeleteBlog', 'DeleteController@displayBlog');//删除博文
Route::get('DeleteBlog', 'DeleteController@changeBlog');//删除博文
Route::get('DeleteBlog/{mid}', function(){return view ('DeleteBlog');});

Route::get('comment', 'CommentController@Comment');//评论路由
Route::get('/displayBlog/{mid}','displayBlogController@displayBlog');
Route::get('AllBlogs/', function(){return view ('AllBlogs');});//展示所有博文
Route::get('/AllBlogs','AllBlogsController@AllBlogs');
Route::get('GivenBlogs/', function(){return view ('GivenBlogs');});//展示特定某人博文
Route::get('/GivenBlogs/{uname}','GivenBlogsController@GivenBlogs');
Route::get('AddBlog/', function(){return view ('AddBlog');});//博文添加界面展示
Route::get('add', 'AddBlogController@add');
Route::post('addBlog', 'AddBlogController@addBlog');//处理博文添加
Route::get('AddComment/', function(){return view ('AddComment');});//博文添加界面展示
Route::get('EditBlog{mid}/', function(){return view ('EditBlog');});//修改博文





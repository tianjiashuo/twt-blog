<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Blog;



class BlogController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    
    public function InputAddBlog ()
    {
        return view('AddBlog');
    }


    public function addBlog(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $showtime=date("Y-m-d H:i:s");
        $username = Auth::user()->name;
        //$id = Auth::id();
        $affected = DB::insert('insert into msg (uname,title,content,addtime) values (?,?,?,?)',[$username,$title,$content,$showtime]);
        $Blogs = DB::select('select * from msg where (uname,is_delete) = (? , ?)',[$username , 0]);
        return view('home',['Blogs'=> $Blogs]);
    }



    public function AllBlogs(){

        $Blogs = DB::select('select * from msg where is_delete = ?', [0]);

        return view('AllBlogs',['Blogs'=> $Blogs]);
    }

    public function changeBlog($mid){
        $affected = DB::update('update msg set is_delete = 1 where mid = ?', [$mid]);
        return view('DeleteBlog');
    }


    public function displayBlog($mid)
    {
        
        //$uid = $uname;
        $Blogs = DB::select('select * from msg where mid = ?',[$mid]);
        //$Blogs = DB::select('select title from msg where mid = ?',[$mid]);
        //$Time = DB::select('select addtime from msg where mid = ?',[$mid]);
       // $Content = DB::select('select content from msg where mid = ?',[$mid]);
        //$Author = DB::select('select uname from msg where mid = ?',[$mid]);
        $Comment = DB::select('select * from comment where mid = ?',[$mid]);
        //$CommentContent = DB::select('select content from comment where mid = ?',[$mid]);
        //$CommentUsername  = DB::select('select uname from comment where mid = ?',[$mid]);
        //$CommentTime = DB::select('select addtime from comment where mid = ?',[$mid]);
        //$CommentID = DB::select('select cid from comment where mid = ?',[$mid]);
        //var_dump($Time);
        //var_dump($Blogs);
        return view('displayBlog',['Blogs'=> $Blogs,'Comment'=> $Comment]);
    }


    public function InputEditBlog ($mid)
    {
        $Title = DB::select('select title from msg where mid = ?',[$mid]);
        $Content = DB::select('select content from msg where mid = ?',[$mid]);
        return view('EditBlog',['mid' => $mid,'Title'=> $Title,'Content' => $Content]);
    }
    public function EditBlog($mid,Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $showtime=date("Y-m-d H:i:s");
        
        //$id = Auth::id();
        $affected1 = DB::update('update msg set title = ? where mid = ?', [$title,$mid]);
        $affected2 = DB::update('update msg set content = ? where mid = ?', [$content,$mid]);
        $affected3 = DB::update('update msg set addtime = ? where mid = ?', [$showtime,$mid]);
        $Blogs = DB::select('select * from msg where mid = ?',[$mid]);
         $Comment = DB::select('select * from comment where mid = ?',[$mid]);
        return view('displayBlog',['mid' => $mid,'Blogs'=> $Blogs,'Comment'=> $Comment]);
    }


    public function GivenBlogs($uname)
    {
        $Blogs = DB::select('select * from msg where (uname , is_delete ) = (? , ?)',[$uname , 0]);

        return view('GivenBlogs',['Blogs'=> $Blogs]);
    }

}
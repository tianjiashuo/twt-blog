<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class displayBlogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
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
}

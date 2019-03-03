<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/4
 * Time: 20:03
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class Commentcontroller extends Controller
{

     public function __construct()
    {
        $this->middleware('auth');
    }



    public function index ($mid)
    {
        return view('AddComment',['mid'=> $mid]);
    }
    public function addComment($mid,Request $request)
    {
       $Comment = DB::select('select * from comment where mid = ?',[$mid]);
       $Blogs = DB::select('select * from msg where mid = ?',[$mid]);
       $content = $request->input('content');
       $showtime=date("Y-m-d H:i:s");
       $username = Auth::user()->name;
       $id = Auth::id();
       $affected = DB::insert('insert into comment (mid,uname,uid,content,addtime) values (?,?,?,?,?)',[$mid,$username,$id,$content,$showtime]);
       return view('displayBlog',['mid'=>$mid,'Blogs'=> $Blogs,'Comment'=> $Comment]);
    }

}
<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2019/2/22
 * Time: 15:33
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AddBlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ()
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

}
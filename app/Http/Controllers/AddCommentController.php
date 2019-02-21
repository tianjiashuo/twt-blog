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


class AddCommentcontroller extends Controller
{
    public function addComment($mid,Request $request)
    {
       $content = $request->input('content');
       $showtime=date("Y-m-d H:i:s");
       $username = Auth::user()->name;
       $id = Auth::id();
       $affected = DB::insert('insert into comment (mid,uname,uid,content,addtime) values (?,?,?,?,?)',[$mid,$username,$id,$content,$showtime]);
       return view('AddComment');
    }

}
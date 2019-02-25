<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/12
 * Time: 18:52
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class EditBlogController extends Controller

{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index ($mid)
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

}

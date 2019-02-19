<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/12
 * Time: 18:55
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DeleteController extends Controller

{


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function changeBlog($mid){
        $affected = DB::update('update msg set is_delete = 1 where mid = ?', [$mid]);
        return view('DeleteBlog');
    }



    /*public function displayBlog(){
        $Blogs = DB::select('select * from msg where is_delete = ?',[0]);
        return view('AllBlogs',['Blogs' => $Blogs ]);

    }*/

}
<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2019/2/18
 * Time: 13:59
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AllBlogsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function AllBlogs(){

        $Blogs = DB::select('select * from msg ');

        return view('AllBlogs',['Blogs'=> $Blogs]);
    }
}
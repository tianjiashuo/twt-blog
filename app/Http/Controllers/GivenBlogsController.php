<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class GivenBlogsController extends Controller
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
    public function GivenBlogs($uname)
    {
        $Blogs = DB::select('select * from msg where uname = ?',[$uname]);

        return view('GivenBlogs',['Blogs'=> $Blogs]);
    }
}

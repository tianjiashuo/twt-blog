<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
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
    public function index($uname)
    {
        $uid = $uname;
        $Blogs = DB::select('select title from msg where uname = ?',[$uid]);
        //var_dump($Blogs);
        return view('home',['username'=> $uid,'blogs' => $Blogs]);
    }
}

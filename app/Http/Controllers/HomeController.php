<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    public function index()
    {
        $username = Auth::user()->name;
        //$uid = $uname;
        $Blogs = DB::select('select title from msg where uname = ?',[$username]);
        $Time = DB::select('select addtime from msg where uname = ?',[$username]);
        $BlogID = DB::select('select mid from msg where title = ?',[$Blogs]);

        //var_dump($Time);
        //var_dump($Blogs);
        return view('home',['username'=> $username,'blogs' => $Blogs,'time' => $Time ,'BlogID' => $BlogID]);
    }
}

<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Support\Facades\View;

class LoginCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //return view('notLog');
        //return $next($request);
        if(Auth::check()){
            //return view('welcome');
            return $next($request);
        }else{
            //return view('welcome');
            return $next($request);
        }
    }
}

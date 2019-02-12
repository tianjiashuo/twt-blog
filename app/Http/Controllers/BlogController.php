<?php

namespace App\Http\Controllers;
use Auth;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function addBlog(Request $request){
        $info = $request->input();
        return json_encode($info);
    }

    public function updateBlog(Request $request){
        $info = $request->get();
        return json_encode($info);
    }

    public function getBlogByID($uid){
        $result = Blog::getBlogByID($uid);
        return json_encode($result);
    }

    public function getBlogByAuthor($uid){
        $result = Blog::getBlogByAuthor($uid);
        return json_encode($result);
    }

    public function getBlogByMySelf(){
        $uid = Auth::id();
        $result = Blog::getBlogByAuthor($uid);
        return json_encode($result);
    }

    public function getAllBlog(){
        $result = Blog::getAllBlog();
        return json_encode($result);
    }
}
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'blog';
    public $timestamps = false;
    
    public static function getAllBlog(){
        $result = self::get();
        return $result;
    }

    public static function getBlogById($bid){
        $result = self::where('bid',$bid)->get();
        return $result;
    }

    public static function getBlogByAuthor($uid){
        $result = self::where('uid',$uid)->get();
        return $result;
    }

    public static function addBlog($info){
        //还没写
    }
}
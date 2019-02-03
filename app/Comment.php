<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';
    public $timestamps = false;


    public static function addComment(Request $request,$bid){

        
    }

    public static function getCommentById($cid){
        $result = self::where('cid',$cid)->get();
        return $result;
    }

    public static function getCommentByBlog($bid){
        $result = self::where('bid',$bid)->get();
        return $result;
    }

    public static function getCommentByAuthor($uid){
        $result = self::where('uid',$uid)->get();
        return $result;
    }
}
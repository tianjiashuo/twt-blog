<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2019/2/3
 * Time: 21:14
 */

namespace App\Http\Controllers;


class CommentController
{
    public function Comment(){
        //$mid = $msg->id ;
        $inform = ['comment' => $_REQUEST['comment']];
        $sqlm = "INSERT INTO comment (mid) values ('$mid')";//存储评论(???)
        if($inform and $sqlm ){
            return view('postmessage');//跳转展示界面
        }
        else{
             return "发表评论失败";
        }


    }
}
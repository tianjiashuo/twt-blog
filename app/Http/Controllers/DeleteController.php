<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/12
 * Time: 18:55
 */

namespace App\Http\Controllers;


class DeleteController

{

    public function changeBlog($id){

        $uid = $id;

        $affected = DB::update('update msg set flag = 0 where id = ?', [$uid]);

    }



    public function displayBlog(){

        $Blogs = DB::select('select content from msg where flag = ?',[1]);

        return view('postmessage',['content' => $Blogs]);

    }

}
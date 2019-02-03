<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/4
 * Time: 20:03
 */

namespace App\Http\Controllers;
use DB;

class AddPostController
{
    public function addPost()
    {
        $data = ['uname' => $_POST['uname'], 'content' => $_POST['content']];
        $data['addtime'] = time();
        $res = DB::table('comment')->insert($data);
        if ($res) {
            return '添加留言成功！';
        } else {
            return '添加留言失败！';
        }
    }

    public function index()
    {
        $data = DB::table('msg')->get();
        return view('list', ['msgRes' => $data]);
    }
}
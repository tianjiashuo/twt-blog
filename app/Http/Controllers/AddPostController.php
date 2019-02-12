<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/4
 * Time: 20:03
 */

namespace App\Http\Controllers;
use DB;

class AddPostController extends Controller
{
    public function addPost()
    {
        $data = ['uname' => $_REQUEST['uname'], 'content' => $_REQUEST['content']];
        $data['addtime'] = time();
        $res = DB::table('msq')->insert($data);
        if ($res) {
            header ("postmessage.balde.php");
        } else {
            return '添加博文失败！';
        }
    }

    public function index()
    {
        $data = DB::table('msg')->get();
        return view('list', ['msgRes' => $data]);
    }
}
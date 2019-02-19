<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/4
 * Time: 20:03
 */

namespace App\Http\Controllers;
use DB;

class AddBlogController extends Controller
{
    public function addBlog()
    {
        $data = ['uname' => $_REQUEST['uname'], 'content' => $_REQUEST['content']];
        $data['addtime'] = time();
        $res = DB::table('msg')->insert($data);
        if ($res) {
            return view(‘AllBlogs’);

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
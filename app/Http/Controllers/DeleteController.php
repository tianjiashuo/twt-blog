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
    public function del($id){
        $res=DB::table(' id ') -> delete($id);
        if($res){
            return redirect('index');
        }else{
            return '删除留言失败！';
        }
    }
}
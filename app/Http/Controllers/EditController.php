<?php
/**
 * Created by PhpStorm.
 * User: 田家硕
 * Date: 2018/12/12
 * Time: 18:52
 */

namespace App\Http\Controllers;



class EditController
{
public function edit($id){
if($_POST){
$data=[‘uname’=>$_POST[‘uname’],’email’=>$_POST[’email’],’content’=>$_POST[‘content’]];
$save=DB::table(‘msg’)->where(‘id’,$id)->update($data);
if($save!==false){
return redirect(‘index’);
}else{
return ‘修改失败！’;
}
}else{
$msg=DB::table(‘msg’)->where(‘id’,$id)->first();
return view(‘editmessage’,[‘msg’=>$msg]);
}
}
}


//展示留言的界面

<?php $com = $db -> query($sql2 = "SELECT * FROM comment ORDER BY cid DESC");?>

<?php $msg = $db -> query($sql1 = "SELECT * FROM msq ORDER BY id DESC");?>

<?php while ($row = $mysqli_result -> fetch_array(MYSQLI_ASSOC)){?>

<label>

    <span title="<?php echo $msg->uname;?>"></span>

    <p><?php echo $msg->content;?></p>

    <?php echo date("Y-m-d H:i:s",$msg->utime);?>

    <a href="<?php  URL::action('DeleteController@del',['id'=>$post->id]); ?>">删除</a>

    //删除留言的链接

    <a href="<?php  URL::action('EditController@del',['id'=>$post->id]); ?>">修改</a>

    //修改留言

    <a href="<?php

    $mid = $msg->id ;

    URL::action('CommentController@Comment',['id'=>$post->id]); ?>">评论</a>

    //评论留言

    <br/>

</label>

<label>

    <?php while ($com -> mid == $mid ){?>

    <span title="<?php echo $com->uname;?>"></span>

    <p><?php echo $com->conmment;?></p>//展示评论

</label>

<?php}}?>




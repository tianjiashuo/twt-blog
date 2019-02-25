<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  <!-- html encode type-->
    <title>修改博文</title>
</head>
<body>
<form action="{{env('BASE_URL')}}EditBlog/{{$mid}}" method="post">
    <p>修改后博文标题<br/><textarea name="title"><?php echo $Title[0]->title;?></textarea></p>
    <p>修改后内容<br/><textarea name="content"><?php echo $Content[0]->content;?></textarea></p>
    <p><input type="submit" value="发表"></p>
</form>
</body>
</html>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  <!-- html encode type-->
    <title>发表博文</title>
</head>
<body>
<form action="{{env('BASE_URL')}}AddBlog" method="post">
    <p>博文标题<br/><textarea name="title"></textarea></p>
    <p>内容<br/><textarea name="content"></textarea></p>
    <p><input type="submit" value="发表"></p>
</form>
</body>
</html>

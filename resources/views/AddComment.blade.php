<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>  <!-- html encode type-->
    <title>发表评论</title>
</head>
<body>
<form action="{{env('BASE_URL')}}AddComment" method="request">
    <p>评论<br/><textarea name="content"></textarea></p>
    <p><input type="submit" value="发表" onclick ="javascript:location.href= '{{env('BASE_URL')}}AllBlogs'"/></p>
</form>
</body>
</html>

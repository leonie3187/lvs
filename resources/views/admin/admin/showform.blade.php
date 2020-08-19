<html>
<head></head>
<meta>
<title>表单提交</title>
<link rel="stylesheet" href="">
<body>
<form action="{{url('/Admin/Login/csrf')}}">
    姓名: <input type="text" name="name" placeholder=" 输入姓名" vlue="">
    <input type="hidden" name="_token" value="{{csrf_token()}}">
    <input type="submit" value="提交">
</form>
</body>
</html>
<html>
<head></head>
<title>文件上传</title>
<body>
<form action="{{url('Admin/Login/upload')}}" method="post" enctype="multipart/form-data">
    <p>姓名:<input type="text" name="name" value="" placeholder="请输入姓名:"/></p>
    <p>年龄:<input type="text" name="age" value="" placeholder="请输入年龄:"/></p>
    <p>邮箱:<input type="text" name="email" value="" placeholder="请输入邮箱:"/></p>
    <p>头像:<input type="file" name="avatar" /></p>
    {{csrf_field()}}
    <input type="submit" value="提交" />
</form>
</body>
</html>
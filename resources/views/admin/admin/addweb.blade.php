<html>
    <head>
        <meta>
        <title>表单</title>
    </head>
    <body>
    <form action="{{url('Admin/Login/useradd')}}" method="">
        <p>姓名:<input type="text" name="name" value=""/></p>
        <p>年龄:<input type="text" name="age" value=""/></p>
        <p>邮箱:<input type="text" name="email" value=""/></p>
        {{csrf_field()}}
        <input type="submit" value="提交">

    </form>
    </body>
</html>
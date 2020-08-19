<html>
<head></head>
<meta>
<title>表单提交</title>
<link rel="stylesheet" href="">
<body>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{url('/Admin/Login/yanzheng')}}" method="post">
    <p>姓名:<input type="text" name="name" value=""/></p>
    <p>年龄:<input type="text" name="age" value=""/></p>
    <p>邮箱:<input type="text" name="email" value=""/></p>
    {{csrf_field()}}
    <input type="submit" value="提交" />
</form>
</body>
</html>
<html>
<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<title>数据分页</title>
<body>
    <table style="border:1px solid #000">
        <thead>
        <tr>
            <th>id</th>
            <th>名字</th>
            <th>年龄</th>
            <th>邮箱</th>
            <th>头像</th>
        </tr>
        </thead>

        <thead>
        @foreach($data as $v)
        <tr>
            <th>{{$v -> id}}</th>
            <th>{{$v -> name}}</th>
            <th>{{$v -> age}}</th>
            <th>{{$v -> email}}</th>
            <th>{{$v -> avatar}}</th>
        </tr>
        @endforeach
        </thead>
    </table>
    {{$data -> links()}}
</body>
</html>
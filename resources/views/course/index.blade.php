<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border=1>
        <tr>
            <td>编码</td>
            <td>课程名称</td>
            <td>课程价格</td>
            <td>是否加载</td>
            <td>该课程的老师</td>
            <td>编辑</td>
        </tr>
        @foreach($course as $k=>$v)
        <tr>
            <td>{{$v->course_id}}</td>
            <td>{{$v->course_name}}</td>
            <td>{{$v->course_price}}</td>
            <td>{{$v->is_show==1?"展示":"不展示"}}</td>
            <td>{{$v->course_teacher}}</td>
            <td>
                <a href="{{url('course/edit/'.$v->course_id)}}">编辑</a>
                <a href="{{url('course/destroy/'.$v->course_id)}}">删除</a>
            </td>
        </tr>
        @endforeach
</table>
</body>
</html>
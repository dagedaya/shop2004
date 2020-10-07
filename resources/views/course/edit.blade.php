<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form action="{{url('course/update/'.$course->course_id)}}" method="post">
            <tr>
                <td>课程名称</td>
                <td>
                    <input type="text" name="course_name" value="{{$course->course_name}}" id="">
                </td>
            </tr>
            <tr>
                <td>课程价格</td>
                <td>
                    <input type="text" name="course_price" value="{{$course->course_price}}" id="">
                </td>
            </tr>
            <tr>
                <td>是否连载</td>
                <td>
                    <input type="radio" name="is_show" @if($course->is_show==1) checked='checked' @endif id="" value="1" checked>是
                    <input type="radio" name="is_show" id="" @if($course->is_show==2) checked='checked' @endif value="2">否
                </td>
            </tr>
            <tr>
                <td>该课程的讲师</td>
                <td>
                    <input type="text" name="course_teacher" value="{{$course->course_teacher}}" id="">
                </td>
            </tr>
            <tr>
                <td><input type="submit" value="修改"></td>
                <td></td>
            </tr>
        </form>
    </table>
</body>
</html>
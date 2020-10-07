<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Flight;
class CourseController extends Controller
{
    //课程视图
    public function create(){
        return view('/course/create');
    }
    //执行添加
    public function store(Request $request){
        $data=$request->all();
        // dd($data);
        $res=DB::table('course')->insert($data);
        if($res){
            return redirect('course/index');
        }
    }
    //课程列表页面
    public function index(){
        $course=DB::table('course')->get();
        return view('/course/index',['course'=>$course]);
    }
    //课程删除
    public function destroy($id){
        $res=DB::table('course')->where('course_id',$id)->delete();
        if($res){
            return redirect('course/index');
        }
    }
    //修改页面1
    public function edit($id){
        $course=DB::table('course')->where('course_id',$id)->first();
        // dd($course);
        return view('/course/edit',['course'=>$course]);
    }
    //修改页面2
    public function update(Request $request,$id){
        $course=$request->all();
        // dd($course);
        $res=DB::table('course')->where('course_id',$id)->update($course);
        if($res!=false){
            return redirect('course/index');
        }
    }
    //检测
    public function test(){

    }
    //检测2
    public function testInfo(){

    }
}

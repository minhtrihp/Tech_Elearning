<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Str;
use App\course;
use App\topic;
use App\User;
use App\user_course;
use App\lesson;
use App\course_lesson;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
class LessonsController extends Controller
{
    public function getList()
	{
        $lesson = lesson::all();
        $course = course::all();
		return view('admin.lesson.list',compact('lesson','course'));
	}
    public function getAdd()
    {
    	$course = course::all();
    	return view('admin.lesson.addlist',compact('course'));
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'name'=>'required|min:3',
    		'describe'=>'required',
            'content'=>'required',
            'link'=>'required',
    		
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên',
    		'name.min'=>'Tên khóa học phải có ít nhất 3 kí tự',
    		'describe.required'=>'Bạn chưa nhập mô tả',
            'content.required'=>'Bạn chưa nhập nội dung',
            'link.required'=>'Bạn chưa nhập link',
    		
    	]);
    	$lesson = new lesson;
    	$lesson->name = $request->name;
    	$lesson->describe = $request->describe;
        $lesson->content = $request->content;
    	$lesson->link = $request->link;
    	$lesson->course_id = $request->course_id;
    	$lesson->save();
    	return redirect('admin/lessons/list')->with('thongbao','Thêm bài giảng thành công');
    }
    public function getEdit($lesson_id)
    {
        $course = course::all();
        $lesson = lesson::find($lesson_id);
        return view('admin.lesson.edit', compact('course','lesson'));
    }
    public function postEdit(Request $request, $lesson_id)
    {
        $lesson = lesson::find($lesson_id);
        $this->validate($request,
        [
    		'name'=>'required|min:3',
    		'describe'=>'required',
            'content'=>'required',
            'link'=>'required',
    		
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên',
    		'name.min'=>'Tên khóa học phải có ít nhất 3 kí tự',
    		'describe.required'=>'Bạn chưa nhập mô tả',
            'content.required'=>'Bạn chưa nhập nội dung',
            'link.required'=>'Bạn chưa nhập link',
    		
    	]);
    	$lesson->name = $request->name;
    	$lesson->describe = $request->describe;
        $lesson->content = $request->content;
    	$lesson->link = $request->link;
    	$lesson->course_id = $request->course_id;
    	$lesson->save();
        return redirect('admin/lessons/edit/'.$lesson_id)->with('thongbao','Sửa bài giảng thành công');
    
}
    
    public function getDel($lesson_id)
    {
        $lesson = lesson::find($lesson_id);
        $lesson->delete();
        return redirect('admin/lessons/list')->with('thongbao','Bạn đã xóa bài giảng thành công');
    }
}

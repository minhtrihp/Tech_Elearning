<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Str;
use App\course;
use App\topic;
use App\User;
use App\user_course;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
class CoursesController extends Controller
{
    public function getList()
	{
        $course = course::all();
		return view('admin.course.list',['course'=>$course]);
	}
    public function getAdd()
    {
        $topic = topic::all();
        $User = DB::table('users')->where(function($dieukien)
        {
            $dieukien->where('level','=',1)
                    ->orWhere('level','=',2);
        })->get();    
    	return view('admin.course.addlist',compact('topic','User'));
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'name'=>'required|min:3',
    		'describe'=>'required',
            'topic'=>'required',
            'user'=>'required',
    		
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên khóa học',
    		'name.min'=>'Tên khóa học phải có ít nhất 3 kí tự',
    		'describe.required'=>'Bạn chưa nhập mô tả về khóa học',
            'topic.required'=>'Bạn chưa chọn',
            'user.required'=>'Bạn chưa chọn',
    		
    	]);
    	$course = new course;
    	$course->name = $request->name;
    	$course->describe = $request->describe;
        $course->topic_id = $request->topic;
    	$course->user_id = $request->user;


    	if($request->hasFile('picture'))
    	{
    		$file = $request->file('picture');
    		$duoi = $file->getClientOriginalExtension();
    		if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
    	       {
    			return redirect('admin/courses/addlist')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
    	       }
    		$name = $file->getClientOriginalName();
 	  		$Hinh = str::random(6)."_".$name;
    		$file->move("upload/khoahoc",$Hinh);
    		$course->picture=$Hinh;
    	}
    	else
    	{
    		$course->picture= "";
    	}
    	$course->save();
    	return redirect('admin/courses/addlist')->with('thongbao','Thêm khóa học thành công');
    }
    public function getEdit($course_id)
    {
        $topic = topic::all();
        $User = User::all();
        $course = course::find($course_id);
        return view('admin.course.edit', compact('course','User','topic'));
    }
    public function postEdit(Request $request, $course_id)
    {
        $course = course::find($course_id);
        $this->validate($request,
       [
            'name'=>'required|min:3',
            'describe'=>'required',
            'topic'=>'required',
            'user'=>'required',
            
        ],
        [
            'name.required'=>'Bạn chưa nhập tên khóa học',
            'name.min'=>'Tên khóa học phải có ít nhất 3 kí tự',
            'describe.required'=>'Bạn chưa nhập mô tả về khóa học',
            'topic.required'=>'Bạn chưa chọn',
            'user.required'=>'Bạn chưa chọn',
            
        ]);
            
            
        $course->name = $request->name;
        $course->describe = $request->describe;
        $course->topic_id = $request->topic;
        $course->user_id  = $request->user;

            if($request->hasFile('picture'))
            {
                $file = $request->file('picture');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                   {
                    return redirect('admin/courses/addlist')
                            ->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
                   }
                $name = $file->getClientOriginalName();
                $picture = str::random(4)."_".$name;
                while (file_exists("upload/khoahoc/".$picture))
                {
                    $picture = str::random(4)."_".$name;
                }
                $file->move("upload/khoahoc", $picture); 
                // if($course->picture){
                // unlink("upload/khoahoc/".$course->picture);
                // }
                $course->picture = $picture;
            }
        $course->save();
        return redirect('admin/courses/edit/'.$course_id)->with('thongbao','Sửa khóa học thành công');
    
}
    
    public function getDel($course_id)
    {
        $course = course::where('course_id',$course_id);
        $course->delete();
        return redirect('admin/courses/list')->with('thongbao','Bạn đã xóa khóa học thành công');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\topic;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class TopicsController extends Controller
{
    public function getList()
	{
        $topic = topic::all();
		return view('admin.topic.list',['topic'=>$topic]);
	}
    public function getAdd()
    {
    	return view('admin.topic.addlist');
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'name'=>'required|min:3|max:100',
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên chủ đề',
    		'name.min'=>'Tên chủ đề phải có ít nhất 3 kí tự',
            'name.max'=>'Tên chủ đề phải có nhiều nhất 100 kí tự',
		
    	]);
    	$topic = new topic;
    	$topic->name = $request->name;
    	$topic->save();
    	return redirect('admin/topics/list')->with('thongbao','Thêm chủ đề thành công');
    }
    public function getEdit($topic_id)
    {
        // $chude = topic::find($topic_id);
            $topic = DB::table('topics')->where('topic_id',"=", $topic_id)->first();
 
        return view('admin.topic.edit',compact('topic'));
    }
    public function postEdit(Request $request, $topic_id)
    {
        $topic = DB::table('topics')->where('topic_id',"=",$topic_id);
        $this->validate($request,
        [
            'name'=>'required|min:3'
        ],
        [
            'name.required'=>'Bạn chưa nhập tên chủ đề',
            'name.min'=>'Tên chủ đề phải có ít nhất 3 kí tự',
        ]);
        $topic->update(
            ['name'=>$request->input('name'),
         ]);

        return redirect('admin/topics/list/')->with('thongbao','Sửa khóa học thành công');
    }
    
    public function getDel($topic_id)
    {
        $topic = topic::where('topic_id',$topic_id);
        $topic->delete();
        return redirect('admin/topics/list')->with('thongbao','Bạn đã xóa chủ đề thành công');
    }
}

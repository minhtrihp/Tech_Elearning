<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Illuminate\Support\Str;
use App\news;
use App\topic;
use App\User;
use App\comment;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Validator;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class NewsController extends Controller
{
    public function getList()
	{
        $news = news::all();
		return view('admin.news.danhsach',['news'=>$news]);
	}
    public function getAdd()
    {
        $topic = topic::all();
        $User = DB::table('users')->get();    
    	return view('admin.news.them',compact('topic','User'));
    }
    public function postAdd(Request $request)
    {
    	$this->validate($request,
    	[
    		'name'=>'required|min:3',
    		'describe'=>'required',
            'content'=>'required',
            'topic'=>'required',
            'user'=>'required',
            'date'=>'required',
    		
    	],
    	[
    		'name.required'=>'Bạn chưa nhập tên tin tức',
    		'name.min'=>'Tên khóa học phải có ít nhất 3 kí tự',
    		'describe.required'=>'Bạn chưa nhập mô tả về tin tức',
            'content.required'=>'Bạn chưa nhập nội dung về tin tức',
            'topic.required'=>'Bạn chưa chọn',
            'user.required'=>'Bạn chưa chọn',
            'date.required'=>'Bạn chưa nhập ngày',
    		
    	]);
    	$news = new news;
    	$news->name = $request->name;
    	$news->describe = $request->describe;
        $news->content = $request->content;
        $news->topic_id = $request->topic;
    	$news->user_id = $request->user;
        $news->created_at = $request->date;


    	if($request->hasFile('picture'))
    	{
    		$file = $request->file('picture');
    		$duoi = $file->getClientOriginalExtension();
    		if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
    	       {
    			return redirect('admin/news/danhsach')->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
    	       }
    		$name = $file->getClientOriginalName();
 	  		$picture = str::random(6)."_".$name;
    		$file->move("upload/khoahoc",$picture);
    		$news->picture=$picture;
    	}
    	else
    	{
    		$news->picture= "";
    	}
    	$news->save();
    	return redirect('admin/news/them')->with('thongbao','Thêm tin tức thành công');
    }
    public function getEdit($news_id)
    {
        $topic = topic::all();
        $User = User::all();
        $news = news::find($news_id);
        $comment = comment::all();
        return view('admin.news.sua', compact('news','User','topic','comment'));
    }
    public function postEdit(Request $request, $news_id)
    {
        $news = news::find($news_id);
      $this->validate($request,
        [
            'name'=>'required|min:3',
            'describe'=>'required',
            'content'=>'required',
            'topic'=>'required',
            'user'=>'required',
            'date'=>'required',
            
        ],
        [
            'name.required'=>'Bạn chưa nhập tên tin tức',
            'name.min'=>'Tên khóa học phải có ít nhất 3 kí tự',
            'describe.required'=>'Bạn chưa nhập mô tả về tin tức',
            'content.required'=>'Bạn chưa nhập nội dung về tin tức',
            'topic.required'=>'Bạn chưa chọn',
            'user.required'=>'Bạn chưa chọn',
            'date.required'=>'Bạn chưa nhập ngày',
            
        ]);
        $news->name = $request->name;
        $news->describe = $request->describe;
        $news->content = $request->content;
        $news->topic_id = $request->topic;
        $news->user_id = $request->user;
        $news->created_at = $request->date;

            if($request->hasFile('picture'))
            {
                $file = $request->file('picture');
                $duoi = $file->getClientOriginalExtension();
                if($duoi != 'jpg' && $duoi != 'png' && $duoi != 'jpeg')
                   {
                    return redirect('admin/news/sua')
                            ->with('loi','Bạn chỉ được chọn file có đuôi jpg, png, jpeg');
                   }
                $name = $file->getClientOriginalName();
                $picture = str::random(4)."_".$name;
                while (file_exists("upload/khoahoc/".$picture))
                {
                    $picture = str::random(4)."_".$name;
                }
                $file->move("upload/khoahoc", $picture); 
                $news->picture = $picture;
            }
        $news->save();
        return redirect('/news')->with('thongbao','Bạn đã sửa tin tức thành công');
    
}
    
    public function getDel($news_id)
    {
        $news = news::where('news_id',$news_id);
        $news->delete();
        return redirect('/news')->with('thongbao','Bạn đã xóa tin tức thành công');
    }
}

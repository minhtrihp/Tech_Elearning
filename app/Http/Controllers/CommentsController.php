<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;
use App\news;
use App\User;
use App\lesson;
use Illuminate\Support\Facades\Auth;

class CommentsController extends Controller
{
	public function getList()
	{
		$comment = comment::all();
		return view('admin.comment.list',compact('comment'));	
	}
	 public function getDel($comment_id)
    {
        $comment = comment::find($comment_id);
        $comment->delete();
        return redirect('admin/comments/list')->with('thongbao','Bạn đã xóa bình luận thành công');
    }
    // public function getComment()
    // {
    // 	$news = $news::all();
    // 	$User = $User::all();
    // 	return view('page.detailnews',compact('news','User'));
    // }
	public function postComment($news_id,Request $request)
	{
		$news = news::where('$news_id',$news_id);
		$comment = new comment;
		$comment->news_id = $news_id;
		$comment->lesson_id = $request->lesson_id;
		$comment->user_id = Auth::User()->id;
		$comment->content = $request->content;

		$comment->save();

		return redirect()->with('thongbao','Viết bình luận thành công');
	}
}
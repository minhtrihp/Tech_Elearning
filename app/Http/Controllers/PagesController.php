<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\topic;
use App\course;
use App\news;
use App\comment;
use App\lesson;
class PagesController extends Controller
{
	function __construct()
	{
		$topic = topic::all();
		$course = course::all();
		$news = news::all();
		$comment = comment::all();
		view()->share('topic',$topic);
		view()->share('course',$course);
		view()->share('news',$news);
		view()->share('comment',$comment);
		//truyền biến thể loại thông qua view share thay vì phải compact cho từng function bên dưới
	}
	function tintuc()
	{
		$newss = news::paginate(5)->onEachSide(1);
		return view('admin.news.danhsach',compact('newss'));
	}
	function chitiettintuc($news_id)
	{
		$news = news::find($news_id);
		return view('page.detailnews',compact('news'));
	}
	
    function khoahoc()
    {
    	return view('page.courses');
    }
    function chitietkhoahoc($course_id)
    {
    	$course = course::find($course_id);
    	$lesson = lesson::all();
    	return view('page.detailcourse',compact('course','lesson'));
    }
    public function getSearch(Request $req)
    {
    	$course=course::where('name','like','%'.$req->key.'%')->get();
    	$news=news::where('name','like','%'.$req->key.'%')->get();
    	return view('page.search',compact('course','news')); 	
    }
}

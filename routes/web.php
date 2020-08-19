<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Trang admin
Route::group(['prefix' => 'admin'], function() {
   Route::group(['prefix' => 'courses'], function() {
     
        Route::get('list','CoursesController@getList');

        Route::get('edit/{course_id}','CoursesController@getEdit'); //get để gọi trang lên
        Route::post('edit/{course_id}','CoursesController@postEdit'); //post để đưa data lên server

        Route::get('addlist','CoursesController@getAdd');
        Route::post('addlist','CoursesController@postAdd');

        Route::get('del/{course_id}','CoursesController@getDel');
    }); 
   Route::group(['prefix' => 'lessons'], function() {

        Route::get('list','LessonsController@getList');

        Route::get('edit/{lesson_id}','LessonsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{lesson_id}','LessonsController@postEdit'); //post để đưa data lên server

        Route::get('addlist','LessonsController@getAdd');
        Route::post('addlist','LessonsController@postAdd');

        Route::get('del/{lesson_id}','LessonsController@getDel');
    }); 
    Route::group(['prefix' => 'news'], function() {
       // admin/theloai/danhsach
        Route::get('danhsach','NewsController@getList');

        Route::get('sua/{news_id}','NewsController@getEdit'); //get để gọi trang lên
        Route::post('sua/{news_id}','NewsController@postEdit'); //post để đưa data lên server

        Route::get('them','NewsController@getAdd');
        Route::post('them','NewsController@postAdd');

        Route::get('xoa/{news_id}','NewsController@getDel');
    }); 

   Route::group(['prefix' => 'topics'], function() {
    
        Route::get('list','TopicsController@getList');

        Route::get('edit/{topic_id}','TopicsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{topic_id}','TopicsController@postEdit'); //post để đưa data lên server

        Route::get('addlist','TopicsController@getAdd');
        Route::post('addlist','TopicsController@postAdd');

        Route::get('del/{topic_id}','TopicsController@getDel');
    }); 
   Route::group(['prefix' => 'comments'], function() {

        Route::get('list','CommentsController@getList');

        Route::get('edit/{comment_id}','CommentsController@getEdit'); //get để gọi trang lên
        Route::post('edit/{comment_id}','CommentsController@postEdit'); //post để đưa data lên server

        Route::get('del/{comment_id}','CommentsController@getDel');
    }); 
   Route::group(['prefix' => 'ajax'], function() {
    Route::get('course/{topic_id}','AjaxController@getCourse');
   });
});

Auth::routes();
Route::get('news','PagesController@tintuc');
Route::get('news/{news_id}/{name}.html','PagesController@chitiettintuc');
Route::get('courses','PagesController@khoahoc');
Route::get('courses/{course_id}/{name}.html','PagesController@chitietkhoahoc');
Route::get('home',function(){
    $topic = App\topic::all();
    $news = App\news::where('topic_id',1)->get();
    return view('home',compact('topic','news'));
});


Route::post('/{news_id}/{name}.html','CommentsController@postComment');


Route::get('search',['as'=>'search','uses'=>'PagesController@getSearch'
]);


Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
// Route::get('themcot',function(){
//     Schema::table('news', function ($table) {
//     $table->string('picture');
// });
//     echo "Đã thêm cột";
// });
// //Route::get('/home', 'HomeController@index')->name('home');




// Route::get('courses', function(){
//     // $course = DB::table('courses')->paginate(3)->onEachSide(1);
//     return view('page.courses');
// });

// Route::get('detailnews/{id}', function ($id) {
//     $news = DB::table('news')->where('news_id', $id)->first();
//     return view('page.detailnews', compact('news'));
// });

// Route::get('detailcourse/{id}', function ($id) {
//     $course = DB::table('courses')->where('course_id', $id)->first();
//     $lessons = DB::table('lessons')->where('lesson_id', $id)->get();

//     return view('page.detailcourse', ['course' => $course, 'lessons' => $lessons]);
// });

// Route::get('lesson/{id}', function ($id) {
//     $lesson = DB::table('lessons')->where('lesson_id', $id)->first();
//     return view('page.lesson', compact('lesson'));
// });

// Route::post('join', function() {
//     $users = DB::table('user_course')
//                 ->where('user_id', $_POST['user_id'])
//                 ->get();
//     foreach($users as $us){
//         if($us->course_id == $_POST['course_id']){
//             return redirect()->back()->with('alert',"Had join in");
//         }
//     }
//     DB::table('user_course')->insert(
//     [
//         'user_id' => $_POST['user_id'],
//         'course_id' => $_POST['course_id']
//     ]);
//     return redirect()->back()->with('alert',"Join in successful");
// });






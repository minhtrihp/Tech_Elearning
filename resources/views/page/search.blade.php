@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!--Start my code-->
            @guest
              <div class="alert alert-danger" role="alert">
                You need login to see more!
              </div>
                
            @else
                  <div id="newcourses">
                    <h3 class="pb-2 text-danger">List Find Courses</h3>
                    <ul class="list-group">
                    <div class="panel-body">
                            <div class="form-group">
                            </div>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID khóa học</th>
                                        <th>Tên khóa học</th>
                                        <th>Mô tả</th>
                                        <th>ID topic</th>
                                        <th>Người tạo</th>
                                    </tr>
                                </thead>
                                <tbody>   
                               <?php foreach ($course as $courses): ?>
                               			 <tr>
                                            <td>{{$courses->course_id}}</td>
                                            <td>{{$courses->name}}</td>
                                            <td>{{$courses->describe}}</td>
                                            <td>{{$courses->topic_id}}</td>
                                            <td>{{$courses->User->name}}</td>
                                        </tr>
                               <?php endforeach ?>                              
                                </tbody>
                            </table>
                        </div>
                  </div>
                  <div id="newnews">
                    <h3 class="pb-2 text-danger">List Find News</h3>
                    <ul class="list-group">
                    <div class="panel-body">
                            <div class="form-group">
                            </div>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>ID tin tức</th>
                                        <th>Tiêu đề</th>
                                        <th>Mô tả</th>
                                        <th>Nội dung</th>
                                        <th>ID topic</th>
                                        <th>Người tạo</th>
                                    </tr>
                                </thead>
                                <tbody>   
                               <?php foreach ($news as $ns): ?>
                                     <tr>
                                            <td>{{$ns->news_id}}</td>
                                            <td>{{$ns->name}}</td>
                                            <td>{{$ns->describe}}</td>
                                            <td>{{$ns->content}}</td>
                                            <td>{{$ns->topic_id}}</td>
                                            <td>{{$ns->User->name}}</td>
                                        </tr>
                               <?php endforeach ?>                              
                                </tbody>
                            </table>
                        </div>
                  </div>
                
              
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection

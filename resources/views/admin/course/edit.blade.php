@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khóa học
                            <small>{{$course->name}}</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <form action="admin/courses/edit/{{$course->course_id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Tên khóa học</label>                      
                                <input class="form-control" name="name" placeholder="Tên khóa học" value="{{$course->name}}"/>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="describe" id="demo" class="form-control ckeditor" rows="4">
                                {{$course->describe}}
                                </textarea>
                            </div>
                             <div class="form-group">
                                <label>Chủ đề</label>
                               <select class="form-control" name="topic" id="topic">
                                @foreach($topic as $tp)
                                   <option 
                                   @if($course->topic->topic_id == $tp->topic_id)
                                   {{"selected"}}
                                   @endif
                                   value="{{$tp->topic_id}}">{{$tp->name}}</option>
                                @endforeach
                               </select>
                            </div>
                            <div class="form-group">
                                <label>Người tạo</label>
                               <select class="form-control" name="user" id="user">
                                @foreach($User as $Us)
                                   <option 
                                    @if($course->User->id == $Us->id)
                                   {{"selected"}}
                                   @endif
                                   value="{{$Us->id}}">{{$Us->name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group">
                                <label>Hình ảnh</label>
                               <p> <img width="400px" src="upload/khoahoc/{{$course->picture}}"></p>
                                <input type="file" name="picture" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Làm mới</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection

@section('script')
    <script>
        $(document).ready(function(){
            $("#topic").change(function(){
                var topic_id = $(this).val();
                $.get("admin/ajax/course/"+topic_id,function(data){
                    $("#course").html(data);
                });
            });
        });
    </script>
@endsection
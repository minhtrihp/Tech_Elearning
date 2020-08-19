@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài giảng
                            <small>{{$lesson->name}}</small>
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
                        <form action="admin/lessons/edit/{{$lesson->lesson_id}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên bài giảng</label>                      
                                <input class="form-control" name="name" placeholder="Tên khóa học" value="{{$lesson->name}}"/>
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="describe" id="demo" class="form-control ckeditor" rows="4">
                                {!! $lesson->describe !!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="content" id="demo" class="form-control ckeditor" rows="4">
                                {!! $lesson->content !!}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <textarea name="link" id="demo" class="form-control ckeditor" rows="4">
                                {!! $lesson->link !!}
                                </textarea>
                            </div>

                             <div class="form-group">
                                <label>Khóa học</label>
                               <select class="form-control" name="course_id" id="topic">
                                @foreach($course as $cr)
                                   <option 
                                   @if($lesson->course->course_id == $cr->course_id)
                                   {{"selected"}}
                                   @endif
                                   value="{{$cr->course_id}}">{{$cr->name}}</option>
                                @endforeach
                               </select>
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
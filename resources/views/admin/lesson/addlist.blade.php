@extends('admin.layout.index')

@section('content')
<!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài giảng
                            <small>thêm</small>
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
                        <form action="admin/lessons/addlist" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Tên bài giảng</label>                                
                                <input class="form-control" name="name" placeholder="Tên khóa học" />
                            </div>
                            <div class="form-group">
                                <label>Mô tả</label>
                                <textarea name="describe" id="demo" class="form-control ckeditor" rows="4"> </textarea>
                            </div>
                             <div class="form-group">
                                <label>Nội dung</label>
                                <textarea name="content" id="demo" class="form-control ckeditor" rows="4"> </textarea>
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                               <textarea name="link" id="demo" class="form-control ckeditor" rows="4"> </textarea>
                            </div>
                             
                             <div class="form-group">
                                <label>Khóa học</label>
                               <select class="form-control" name="course_id">
                                @foreach($course as $cr)
                                   <option value="{{$cr->course_id}}">{{$cr->name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
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
@extends('layouts1.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="margin-left:50px">
                        <h1 class="page-header" style="padding-bottom:100px; font-size:32px; font-family: Times New Roman">
                            <strong>Tin tức</strong>
                            <small style="color:gray"><strong>Thêm</strong></small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:100px; margin-left:325px">
                        @if(count($errors) > 0)
                            <div class ="alert alert-danger">
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

                        <form action="admin/news/them" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Tiêu đề</strong></label></h4>
                                <input class="form-control" style="height:55px" name="name"
                                placeholder="Vui lòng nhập tiêu đề" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Mô tả</strong></label></h4>
                                <!-- <textarea id="demo" name="tomTat" class="form-control" style="height:300px; color:black"
                                placeholder="Vui lòng nhập tóm tắt"></textarea> -->
                                <textarea id="demo" name="describe" class="form-control ckeditor" rows="3"></textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Nội dung</strong></label></h4>
                                <!-- <textarea id="demo" name="noiDung" class="form-control" rows="20" style="height:400px; color:black"
                                placeholder="Vui lòng nhập nội dung"></textarea> -->
                                <textarea id="demo" name="content" class="form-control ckeditor" rows="5"></textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Hình ảnh</strong></label></h4>
                                <input type="file" style="height:55px" name="picture" class="form-control"/>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Chủ đề</strong></label></h4>
                                 <select class="form-control" name="topic">
                                @foreach($topic as $tp)
                                   <option value="{{$tp->topic_id}}">{{$tp->name}}</option>
                                   @endforeach
                               </select>
                            </div>
                             <div class="form-group">
                                <label>Người tạo</label>
                               <select class="form-control" name="user">
                                @foreach($User as $Us)
                                   <option value="{{$Us->id}}">{{$Us->name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Ngày đăng</strong></label></h4>
                                <input class="form-control" style="height:55px" name="date"
                                placeholder="Vui lòng nhập ngày đăng" />
                            </div>
                            <div style="padding-left:60px">
                                <button type="submit" class="btn btn-primary" style="height:55px; width:200px; margin-right:60px; color:white; font-size:22px; font-family: Times New Roman">
                                    <strong>Thêm Tin Tức</strong>
                                </button>
                                <button type="reset" class="btn btn-primary" style="height:55px; width:200px; color:white; font-size:22px; font-family: Times New Roman">
                                    <strong>Làm Mới Tin Tức</strong>
                                </button>
                                <button type="button" class="btn btn-primary" style="height:55px; width:200px; margin-left:60px; font-size:22px; font-family: Times New Roman">
                                    <a href="/tech-elearning/public/news"><strong style = "color:white">Quay Về Tin Tức</strong></a>
                                </button>
                          </div>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection

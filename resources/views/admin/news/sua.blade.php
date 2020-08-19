@extends('layouts1.index')

@section('content')

<!-- Page Content -->
        <div id="page-wrapper" >
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12" style="margin-left:50px">
                        <h1 class="page-header" style="padding-bottom:100px; font-size:32px; font-family: Times New Roman">
                            <strong>Tin tức</strong>
                            <small style="color:gray"><strong>{{$news->name}}</strong></small>
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

                        <form action="admin/news/sua/{{$news->news_id}}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Tiêu đề</strong></label></h4>
                                <input class="form-control" style="height:55px" name="name"
                                placeholder="Vui lòng nhập tiêu đề" value="{{$news->name}}" />
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Mô tả</strong></label></h4>
                                {{-- <textarea id="demo" name="describe" class="form-control" style="height:300px; color:black"
                                placeholder="Vui lòng nhập mô tả" value="{{$news->describe}}"></textarea> --}}
                                <textarea id="demo" name="describe" class="form-control ckeditor" rows="3" >
                                    {!! $news->describe !!}
                                </textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Nội dung</strong></label></h4>
                               {{--  <textarea id="demo" name="content" class="form-control " rows="20" style="height:400px; color:black"
                                placeholder="Vui lòng nhập nội dung" value="{{$news->content}}"></textarea> --}}
                                <textarea id="demo" name="content" class="form-control ckeditor" rows="5">
                                    {!! $news->content !!}
                                </textarea>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Hình ảnh</strong></label></h4>
                                <p><img width="500px" src="upload/khoahoc/{{$news->picture}}"></p>
                                <input type="file" style="height:55px" name="picture" class="form-control"/>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Chủ đề</strong></label></h4>
                                          <select class="form-control" name="topic" id="topic">
                                @foreach($topic as $tp)
                                   <option 
                                   @if($news->topic->topic_id == $tp->topic_id)
                                   {{"selected"}}
                                   @endif
                                   value="{{$tp->topic_id}}">{{$tp->name}}</option>
                                @endforeach
                               </select>
                                {{-- <input class="form-control" style="height:55px" name="moTa"
                                placeholder="Vui lòng nhập mô tả loại tin" value="{{$tintuc->moTa}}" /> --}}
                            </div>
                            <div class="form-group">
                                <label style="font-size:22px; font-family: Times New Roman"><strong>Người tạo</strong></label>
                               <select class="form-control" name="user" id="user">
                                @foreach($User as $Us)
                                   <option 
                                    @if($news->User->id == $Us->id)
                                   {{"selected"}}
                                   @endif
                                   value="{{$Us->id}}">{{$Us->name}}</option>
                                   @endforeach
                               </select>
                            </div>
                            <div class="form-group" style="padding-bottom:60px">
                                <h4 style="font-size:22px; font-family: Times New Roman">
                                    <label><strong>Ngày đăng</strong></label></h4>
                                <input class="form-control" style="height:55px" name="date"
                                placeholder="Vui lòng nhập ngày đăng" value="{{$news->created_at}}" />
                            </div>
                            <div style="padding-left:60px">
                                <button type="submit" class="btn btn-primary" style="height:55px; width:200px; margin-right:60px; color:white; font-size:22px; font-family: Times New Roman">
                                    <strong>Sửa Tin Tức</strong>
                                </button>
                                <button type="reset" class="btn btn-primary" style="height:55px; width:200px; color:white; font-size:22px; font-family: Times New Roman">
                                    <strong>Làm Mới Tin Tức</strong>
                                </button>
                                <button type="button" class="btn btn-primary" style="height:55px; width:200px; margin-left:60px;  font-size:22px; font-family: Times New Roman">
                                    <a href="/tech-elearning/public/news"><strong style = "color:white">Quay Về Tin Tức</strong></a>
                                </button>
                          </div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
       </div>
            <!-- /.container-fluid -->
        </div>
   <div class="row">
                    <div class="col-lg-12" style="margin-left:50px">
                        <h1 class="page-header" style="padding-bottom:10px; font-size:38px; font-family: Times New Roman">
                            <strong>Danh sách bình luận</strong>
                        </h1>
                    </div>
                    <div>

                    @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                    <table class="table table-bordered table-hover" id="dataTables-example" style="width: 60%; margin-left: 80px;">
                        <thead class="thead-dark">
                            <tr align="center" style="font-size:22px; font-family: Times New Roman">
                                <th><strong>ID</strong></th>
                                <th><strong>Người dùng</strong></th>
                                <th><strong>Nội dung</strong></th>
                                <th><strong>Ngày đăng</strong></th>
                                <th><strong>Xóa</strong></th>
                                
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comment as $cm)
                                <tr class="odd gradeX" align="center" style="font-size:21px; font-family: Times New Roman">
                                  <td>{{$cm->comment_id}}</td>
                                  <td>
                                      {{$cm->User->name}}
                                  </td>
                                  <td>{{$cm->content}}</td>
                                  <td>{{$cm->created_at}}</td>
                                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/comment/xoa/{{$cm->comment_id}}"><strong>Xóa</strong></a></td>
                                  
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
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
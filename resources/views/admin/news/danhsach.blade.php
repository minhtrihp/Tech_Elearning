@extends('layouts1.index')

@section('content')

<!-- Page Content -->
 @guest
              <div class="alert alert-danger" role="alert">
                You need login to see more!
              </div>
                
            @else
        <div id="page-wrapper">
           
            <div class="container-fluid" style="margin-bottom:20px">

                <div class="row">
                    <div class="col-lg-12" style="margin-left:50px">
                        <h1 class="page-header" style="padding-bottom:10px; font-size:38px; font-family: Times New Roman">
                            <strong>Danh sách tin tức</strong>
                        </h1>
                    </div>

                    <!-- /.col-lg-12 -->
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
                                <th><strong>Tiêu đề</strong></th>
                                <th><strong>Mô tả</strong></th>
                                <th><strong>Chủ đề</strong></th>
                                <th><strong>Ngày đăng</strong></th>
                                <th><strong>Xóa</strong></th>
                                <th><strong>Sửa</strong></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newss as $ns)
                                <tr class="odd gradeX" align="center" style="font-size:21px; font-family: Times New Roman">
                                  <td><strong>{{$ns->news_id}}</strong></td>
                                  <td>
                                      <p>{{$ns->name}}</p>
                                      <img width="200px" src="upload/khoahoc/{{$ns->picture}}">
                                  </td>
                                  <td align="justify">
                                      {!! $ns->describe !!}
                                      <div>
                                          <button type="submit" class="btn btn-primary" style="height:40px; width:140px; margin-left:650px; margin-top:30px; margin-bottom:25px; font-size:20px; font-family: Times New Roman">
                                              <a href="news/{{$ns->news_id}}/{{$ns->name}}.html">
                                                  <strong style="color:white">Đọc Thêm</strong></a>
                                          </button>
                                      </div>
                                  </td>
                                  <td>{{$ns->topic->name}}</td>
                                  <td>{{$ns->created_at}}</td>
                                  <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/news/xoa/{{$ns->news_id}}"><strong>Xóa</strong></a></td>
                                  <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/news/sua/{{$ns->news_id}}"><strong>Sửa</strong></a></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                  </div>
                </div>
                
                <div style="float: right; margin: 30px 50px 0 0;">
                 {{ $newss->links() }}                  
                </div>
                
                <div style="margin-left:570px; margin-bottom:25px; margin-top:80px ">
                    <button type="submit" class="btn btn-primary" style="height:55px; width:400px; margin-right:80px; font-size:24px; font-family: Times New Roman">
                        <a href="/tech-elearning/public/admin/news/them">
                        <strong style="color:white">Thêm Tin Mới</strong></a>
                    </button>
                </div>
            </div>
            <!-- /.container-fluid -->
          </div>
            @endguest
        
        <!-- /#page-wrapper -->

@endsection

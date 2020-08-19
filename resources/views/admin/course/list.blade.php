@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Khóa học
                            <small>danh sách</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    @if(session('thongbao'))
                            <div class="alert alert-success">
                                {{session('thongbao')}}
                            </div>
                        @endif
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Tên khóa học</th>
                                <th>Mô tả</th>
                                <th>Chủ đề</th>
                                <th>Người tạo</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($course as $cr)
                            <tr class="odd gradeX" align="center">
                                <td>{{$cr->course_id}}</td>
                                <td>
                                   <p> {{$cr->name}}</p>
                                <img width="100px" src="upload/khoahoc/{{$cr->picture}}">
                                </td>
                                <td>{!! $cr->describe !!}</td>
                                <td>{{$cr->topic->name}}</td>
                               {{--  <td>{{$cr->user_id }}</td> --}}
                               {{-- @foreach($User as $Us) --}}
                                <td>{{$cr->User->name}}</td>
                                {{-- @endforeach --}}

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/courses/del/{{$cr->course_id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/courses/edit/{{$cr->course_id}}">Edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->
@endsection
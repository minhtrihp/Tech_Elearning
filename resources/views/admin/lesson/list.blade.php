@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Bài giảng
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
                                <th>Tên bài giảng</th>
                                <th>Mô tả</th>
                                <th>Nội dung</th>
                                <th>Link</th>
                                {{-- <th>Khóa học</th> --}}
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lesson as $ls)
                            <tr class="odd gradeX" align="center">
                                <td>{{$ls->lesson_id}}</td>
                                <td>
                                   {{$ls->name}}
                                </td>
                                <td>{!! $ls->describe !!}</td>
                                <td>{!! $ls->content !!}</td>
                                <td>{!! $ls->link !!}</td>
                                {{-- <td>{{$ls->course->name}}</td> --}}
                                

                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/lessons/del/{{$ls->lesson_id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/lessons/edit/{{$ls->lesson_id}}">Edit</a></td>
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
@extends('admin.layout.index')

@section('content')
 <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chủ đề
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
                                <th>Tên chủ đề</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($topic as $tp)
                            <tr class="odd gradeX" align="center">
                                <td>{{$tp->topic_id}}</td>
                                <td>
                                   <p> {{$tp->name}}</p>
                               </td>
                               {{--  <img width="100px" src="upload/khoahoc/{{$khh->picture}}">
                                </td>
                                <td>{{$khh->describe}}</td>
                                <td>{{$khh->topic->name}}</td> --}}
                                
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/topics/del/{{$tp->topic_id}}"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/topics/edit/{{$tp->topic_id}}">Edit</a></td>
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
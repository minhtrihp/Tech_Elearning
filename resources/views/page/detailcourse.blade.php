@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          @guest
            <div class="alert alert-danger" role="alert">
                You need login to see more!
              </div>
                
                @else
                @switch(Auth::user()->level)
                @case(0)
                <div class="py-5 my-5 bg-white rounded shadow-lg">
                  <div class="list-group mx-3">
                    <h3 class="pb-2 text-danger text-center" style="display: inline-block;">{{$course->name}}</h3>
                    <img class="pic2" style="margin-left: 385px " width="298px" height="220px" src="/tech-elearning/public/upload/khoahoc/{{$course->picture}}">
                    <p style="font-weight: bold; font-size: 20px">{{$course->describe}}</p>
                    
                      <ul class="list-group">
                        @foreach($course->lesson as $ls)
                          <a href="../lesson/{{$ls->lesson_id}}" style="text-decoration: none;" class="mt-3">
                                <li class="list-group-item justify-content-between align-items-center" style="height:80px; overflow:hidden;">
                                       <p style="color: blue; font-weight: bold; font-size: 20px; margin-top: 10px;">{{ $ls->name }}: <a href="{{$ls->link}}" style="font-weight: 200; font-size: 15px">{{$ls->link}}</a></p>
                                       
                                </li>
                          </a>
                        @endforeach
                      </ul>
                    
                  </div>
                </div>
                @break
                @case(1)
                  <div class="py-5 my-5 bg-white rounded shadow-lg">
                  <div class="list-group mx-3">
                    <h3 class="pb-2 text-danger text-center" style="display: inline-block;">{{$course->name}}</h3>
                    <img class="pic2" style="margin-left: 385px " width="298px" height="220px" src="/tech-elearning/public/upload/khoahoc/{{$course->picture}}">
                    <p style="font-weight: bold; font-size: 20px">{{$course->describe}}</p>
                    
                      <ul class="list-group">
                        @foreach($course->lesson as $ls)
                          <a href="../lesson/{{$ls->lesson_id}}" style="text-decoration: none;" class="mt-3">
                                <li class="list-group-item justify-content-between align-items-center" style="height:80px; overflow:hidden;">
                                       <p style="color: blue; font-weight: bold; font-size: 20px; margin-top: 10px;">{{ $ls->name }}: <a href="{{$ls->link}}" style="font-weight: 200; font-size: 15px">{{$ls->link}}</a></p>
                                       
                                </li>
                          </a>
                        @endforeach
                      </ul>
                    
                  </div>
                  <button type="submit" class="btn btn-primary" style="height:50px; width:300px; margin-left: 400px;margin-top: 10px; font-size:24px; font-family: Times New Roman">
                        <a href="/tech-elearning/public/admin/lessons/addlist" style="text-decoration: none;">
                        <strong style="color:white">Thêm bài giảng</strong></a>
                    </button>
                </div>
                @break



                @endswitch
            @endguest
        </div>
    </div>
</div>
@endsection

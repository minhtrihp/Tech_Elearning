@extends('layouts.app')
<title>Khóa học</title>
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
                  <div id="newcourses">
                    <div class="panel-heading" style="background-color: #337AB7; color: white; padding: 10px 10px;border-radius: 7px;"><h2 style="font-weight: 500;padding-left: 5px;font-size: 30px;">Course</h2></div>
                    <div class="row justify-content-between">
                    @foreach($topic as $tp)
                      <div class="col-4">
                        <?php
                      $data = $tp->course->take(10);
                      $khoahoc1 = $data->shift();
                      ?>
                        <a href="" style="text-decoration: none;" class="text-primary">
                          <div class="list-group-item justify-content-between align-items-center m-1" style="height: 400px;">
                            <p style="border:1px solid #80808060"><img width="298px" height="220px" src="upload/khoahoc/{{$khoahoc1['picture']}}"></p>
                            <h3 style="color: black;margin-bottom: 4px;font-weight: bold; ">{{$khoahoc1['name']}}</h3>
                            <div class="ml-3" style="font-size: 12.5px; color: black; padding: 0px 5px; margin-bottom: 4px;">{{$khoahoc1['describe']}}</div>
                            
                            <a style="background-color:#2582BE;border: 1px solid #2582BE;padding: 5px 35px;font-size: 12px;font-weight: bold;color:white; border-radius: 10px; cursor: pointer; display: inline-block; margin: 0px 75px; text-decoration: none;" href="courses/{{$khoahoc1['course_id']}}/{{$khoahoc1['name']}}.html">THAM GIA</a>
                          </div>
                        </a>
                      </div>
                    @endforeach
                  </div>
                
                    {{-- </ul> --}}

                  </div>
                  {{--   <span class="float-right mt-2">
                      {{ $courses->links() }}
                    </span> --}}
                    @break
              
                 @case(1)
                   <div id="newcourses">
                    <div class="panel-heading" style="background-color: #337AB7; color: white; padding: 10px 10px;border-radius: 7px;"><h2 style="font-weight: 500;padding-left: 5px;font-size: 30px;">Course</h2><a class="addCr" href="/tech-elearning/public/admin/courses/addlist" style="float: right; font-size: 30px;font-weight:bold; color: white;margin-top: -50px; margin-right: 20px;text-decoration: none;">+</a></div>
                    <div class="row justify-content-between">
                    @foreach($topic as $tp)
                      <div class="col-4">
                        <?php
                      $data = $tp->course->take(10);
                      $khoahoc1 = $data->shift();
                      ?>
                      {{-- @foreach($course as $cr) --}}
                        <a href="" style="text-decoration: none;" class="text-primary">
                          <div class="list-group-item justify-content-between align-items-center m-1" style="height: 400px;">
                            <p style="border:1px solid #80808060"><img width="298px" height="220px" src="upload/khoahoc/{{$khoahoc1['picture']}}"></p>
                            <h3 style="color: black;margin-bottom: 4px;font-weight: bold; ">{{$khoahoc1['name']}}</h3>
                            <div class="ml-3" style="font-size: 12.5px; color: black; padding: 0px 5px; margin-bottom: 4px;">{{$khoahoc1['describe']}}</div>
                            
                            <a style="background-color:#2582BE;border: 1px solid #2582BE;padding: 5px 35px;font-size: 12px;font-weight: bold;color:white; border-radius: 10px; cursor: pointer; display: inline-block; margin: 0px 75px; text-decoration: none;" href="courses/{{$khoahoc1['course_id']}}/{{$khoahoc1['name']}}.html">THAM GIA</a>
                            {{-- @endforeach --}}
                          </div>
                        </a>
                      </div>
                    @endforeach
                  </div>
                    
                  </div>
                 
                  @break

                @case(2)
                  <div id="newcourses">
                    <div class="panel-heading" style="background-color: #337AB7; color: white; padding: 10px 10px;border-radius: 7px;"><h2 style="font-weight: 500;padding-left: 5px;font-size: 30px;">Course</h2><a class="addCr" href="/tech-elearning/public/admin/courses/addlist" style="float: right; font-size: 30px;font-weight:bold; color: white;margin-top: -50px; margin-right: 20px;text-decoration: none;">+</a></div>
                    <div class="row justify-content-between">
                    @foreach($topic as $tp)
                      <div class="col-4">
                        <?php
                      $data = $tp->course->take(10);
                      $khoahoc1 = $data->shift();
                      ?>
                      {{-- @foreach($course as $cr) --}}
                        <a href="" style="text-decoration: none;" class="text-primary">
                          <div class="list-group-item justify-content-between align-items-center m-1" style="height: 400px;">
                            <p style="border:1px solid #80808060"><img width="298px" height="220px" src="upload/khoahoc/{{$khoahoc1['picture']}}"></p>
                            <h3 style="color: black;margin-bottom: 4px;font-weight: bold; ">{{$khoahoc1['name']}}</h3>
                            <div class="ml-3" style="font-size: 12.5px; color: black; padding: 0px 5px; margin-bottom: 4px;">{{$khoahoc1['describe']}}</div>
                            
                            <a style="background-color:#2582BE;border: 1px solid #2582BE;padding: 5px 35px;font-size: 12px;font-weight: bold;color:white; border-radius: 10px; cursor: pointer; display: inline-block; margin: 0px 75px; text-decoration: none;" href="courses/{{$khoahoc1['course_id']}}/{{$khoahoc1['name']}}.html">THAM GIA</a>
                            {{-- @endforeach --}}
                          </div>
                        </a>
                      </div>
                    @endforeach
                  </div>
                    
                  </div>
                  {{-- <span class="float-right mt-2">
                    {{ $courses->links() }}
                  </span> --}}
                  @break
                @default 
                  Login fault
              @endswitch
            @endguest 
        </div>
    </div>
</div>
@endsection

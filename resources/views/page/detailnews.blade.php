@extends('layouts.app')

@section('content')

<div class="container">
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-9">

                <!-- Blog Post -->

                <!-- Title -->
                <h1 style="font-weight: 600">{{$news->name}}</h1>

                <!-- Author -->
                <p class="lead">
                    bởi <a href="#">{{$news->User->name}}</a>
                </p>

                <!-- Preview Image -->
                <img class="img-responsive" width="700px" src="/tech-elearning/public/upload/khoahoc/{{$news->picture}}" alt="">

                <!-- Date/Time -->
                <p><span class="glyphicon glyphicon-time"></span> Posted on : {{$news->created_at}}</p>
                <hr>

                <!-- Post Content -->
                <p class="lead">{!! $news->content !!}</p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
                
                <div class="well">
                  @if(session('thongbao'))
                      {{session('thongbao')}}
                  @endif
                    <h4>Viết bình luận ...</h4>
                    <form action="../{{$news->news_id}}/{{$news->name}}.html" method="GET" role="form">
                    @csrf
                        <div class="form-group">
                            <textarea class="form-control" name="content" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Gửi</button>
                    </form>
                </div>

                

                <hr>

                <!-- Posted Comments -->

                <!-- Comment -->
                @foreach($news->comment as $cm)
                <div class="media">
                    <a class="pull-left" href="#">
                        <img style="margin-right:10px" class="media-object" src="/tech-elearning/public/upload/khoahoc/user.png" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading" style="font-weight: bold;">{{$cm->User->name}}  <small style="font-size: 14px">{{$cm->created_at}}</small>                            
                        </h4> 
                        <p style="font-size: 18px; margin-left: 15px;">{{$cm->content}}</p>


                    </div>
                </div>

               @endforeach

            </div>
            </div>

        </div>
        <!-- /.row -->


@endsection

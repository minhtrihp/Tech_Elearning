@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!--Start my code-->
            @guest
                <div class="alert alert-danger" role="alert">
                    You need login to see more!
                </div>
                
            @else
                @switch(Auth::user()->level)
                    @case(0)
                    @include('page.student')
                        @break

                    @case(1)
                    @include('page.teacher')
                        @break

                    @case(2)
                        You are Admin
                        @break
                
                    @default
                        Login fault
                @endswitch
            @endguest
            <!--End my code-->
        </div>
    </div>
</div>
@endsection

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!--Start my code-->
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <div class="navbar-nav">
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Discover
                </button>
                 @guest
             <div class="dropdown-menu">
                    <a class="dropdown-item" href="/tech-elearning/public/news">News</a>
                    <a class="dropdown-item" href="/tech-elearning/public/courses">Course</a>
                    </div>
            @else
                  @switch(Auth::user()->level)
                     @case(0)
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/tech-elearning/public/news">News</a>
                    <a class="dropdown-item" href="/tech-elearning/public/courses">Course</a>
                    </div>
                    @break
                    @case (1)
                     <div class="dropdown-menu">
                    <a class="dropdown-item" href="/tech-elearning/public/news">News</a>
                    <a class="dropdown-item" href="/tech-elearning/public/courses">Course</a>
                    <a class="dropdown-item" href="/tech-elearning/public/admin/topics/list">Topic</a>
                </div>
                @break
                @case (2)
                     <div class="dropdown-menu">
                     <a class="dropdown-item" href="/tech-elearning/public/news">News</a>
                    <a class="dropdown-item" href="/tech-elearning/public/courses">Course</a>
                    <a class="dropdown-item" href="/tech-elearning/public/admin/topics/list">Topic</a>
                </div>
                @break
                @endswitch
                @endguest
            </div>

        </div>
    </div>
        <!--End my code-->

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('/logout')}}"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>
</nav>
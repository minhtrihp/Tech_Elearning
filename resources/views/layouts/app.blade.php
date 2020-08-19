<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts/import')
    
</head>
<body>
    <div id="app">  
        <!--Nav-->      
        @include('layouts/nav')
        
        <!--header-->
        @include('layouts/header')

        <main class="py-4">
            @yield('content')
        </main>

        <!--Footer-->
        @include('layouts/footer')
    </div>
   
</body>
</html>

<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Site Metas -->
    <title>Diễn đàn tin tức</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <base href ="{{asset('')}}">
    <!-- Site Icons -->
  {{--   <link rel="shortcut icon" href="smartedu/images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="smartedu/images/apple-touch-icon.png"> --}}
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="smartedu/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="smartedu/style.css">
    <!-- ALL VERSION CSS -->
    <link rel="stylesheet" href="smartedu/css/versions.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="smartedu/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="smartedu/css/custom.css">

    <!-- Modernizer for Portfolio -->
    <script src="smartedu/js/modernizer.js"></script>

    

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body class="host_version">
@include('layouts/nav')
	


    <!-- LOADER -->
	<div id="preloader">
		<div class="loader-container">
			<div class="progress-br float shadow">
				<div class="progress__item"></div>
			</div>
		</div>
	</div>
	<!-- END LOADER -->

    <!-- Start header -->
	{{-- <header class="top-navbar"> --}}
		@include('layouts/header')
	

	<div id="overviews" class="section wb" style="padding-top: 15px !important;">
		@yield('content')
	</div><!-- end section -->

  @include('layouts/footer')

	<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="smartedu/js/all.js"></script>
    <!-- ALL PLUGINS -->
    <script src="smartedu/js/custom.js"></script>

    <script type="text/javascript" language="javascript" src="{{asset('ckeditor/ckeditor.js')}}" ></script>
    <script>
        ckeditor.replace('summary-ckeditor');
    </script>

	@yield('script')

</body>
</html>

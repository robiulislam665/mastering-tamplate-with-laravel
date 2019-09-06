<!--
Author: A.K Shiplu
Author URL: http://soft-all.com/
License: 
License URL: 
-->
<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Soft-Buy - Responsive Template">
	<meta name="keywords" content="best html5 template, bootstrap, template ,best premium template, best Soft-Buy template, Soft-Buy template">
	<meta name="author" content="shiplu">
	<meta name="apple-mobile-web-app-capable" content="yes">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>@yield('title')</title>
	
	<!-- favicon.ico css -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontEnd') }}/images/1531649874.ico">
	
	<!-- bootstrap css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/bootstrap.min.css" media="all" />
	<!-- icofont css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/icofont.css" media="all" />
	<!-- carousel css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/owl.carousel.min.css" media="all" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/owl.theme.default.min.css" media="all" />
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/animate.min.css" media="all" />
	<!-- counterup css -->
	<link href="{{ asset('frontEnd') }}/css/jquery.classycountdown.css" rel="stylesheet" type="text/css">
	
	<!-- query.wm-zoom-1 css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/jquery.wm-zoom-1.0.min.css" media="all" />
	<!-- flexslider css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/flexslider.css" media="all" />
	<!-- fonts/stylesheet css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/fonts/stylesheet.css" media="all" />
	
	<!-- slicknav css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/slicknav.min.css" media="all" />
	
	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/main.css" media="all" />
	
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd') }}/css/responsive.css" media="all" />
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
	
	
	@include('frontView.inc.header')
	
<!-- End of main_menu_area -->
	@yield('main_content')
<!-- End of feature_products_area -->
	
	@include('frontView.inc.countdown_area')
	
	
	
	@include('frontView.inc.newslater')
	

	
	@include('frontView.inc.footer')
	
	
    

	
	<!-- =========================
                  SCRIPTS 
    ============================== --> 
	<!-- jquery.js -->
	<script  src="j{{ asset('frontEnd') }}/s/jquery-2.1.4.min.js"></script>
	
	<!-- Boostrap.js --> 
	<script  src="{{ asset('frontEnd') }}/js/bootstrap.min.js"></script>
	<!-- carousel.js --> 
	<script  src="{{ asset('frontEnd') }}/js/owl.carousel.min.js"></script>
	<!-- wow.js --> 
	<script  src="{{ asset('frontEnd') }}/js/wow.min.js"></script>
	
	<!-- counterup.js --> 
	<script src="{{ asset('frontEnd') }}/js/jquery.knob.js"></script>
	<script src="{{ asset('frontEnd') }}/js/jquery.throttle.js"></script>
	<script src="{{ asset('frontEnd') }}/js/jquery.classycountdown.js"></script>
	<!-- flexslider.js --> 
	<script src="{{ asset('frontEnd') }}/js/jquery.flexslider.js"></script>
	<!-- imagezoom.js --> 
	<script src="{{ asset('frontEnd') }}/js/imagezoom.js"></script>
	<!-- slicknav.js --> 
	<script src="{{ asset('frontEnd') }}/js/jquery.slicknav.min.js"></script>
	
	<!-- start-smoth-scrolling -->

	<!-- main.js --> 
	<script src="js/main.js"></script>
	
	
	
	
	
</body>
</html>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="News Times Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="{{asset('public/frontEnd')}}/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="{{asset('public/frontEnd')}}/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="{{asset('public/frontEnd')}}/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='{{asset('public/frontEnd')}}/fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
<!-- pop-up-script -->
 
<script src="{{asset('public/frontEnd')}}/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="{{asset('public/frontEnd')}}/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		
                <!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.gallery-grid a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<!-- sb-slider -->
<script type="text/javascript" src="{{asset('public/frontEnd')}}/js/modernizr.custom.46884.js"></script>
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-7243260-2']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
        
<!-- //sb-slider -->
</head>

<body>
<!-- banner -->
	
				<!--@include('frontEnd.includes.header')-->
				<!--banner-Slider-->
	@yield('header')
			
<!-- banner -->
<!-- banner-bottom -->
	@yield('body')
<!-- //banner-bottom -->
<!-- footer -->
	@include('frontEnd.includes.footer')
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="{{asset('public/frontEnd')}}/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>
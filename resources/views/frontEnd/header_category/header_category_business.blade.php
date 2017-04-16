@extends('frontEnd.master')

@section('header')
<div class="banner1">
		<div class="banner-info1">
			<div class="container">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="{{url('/')}}"><span>N</span> News Times</a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav cl-effect-18" id="cl-effect-18">
							<li><a href="{{url('/')}}">Home</a></li>
							<li><a href="{{url('/events')}}">Current events</a></li>
							<li><a href="{{url('/breakings')}}">Breaking stories</a></li>
							<li><a href="{{url('/entertainment')}}">Entertainment</a></li>
							<li role="presentation" class="dropdown act">
								<a class="dropdown-toggle active" data-toggle="dropdown" href="" role="button" aria-haspopup="true" aria-expanded="false">
								  Business <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
								  <li><a href="{{url('/business')}}">Market</a></li>
								  <li><a href="{{url('/business')}}">Reviews</a></li>
								  <li><a href="{{url('/business')}}">Stock</a></li>
								</ul>
							</li>
							<li><a href="{{url('/contact')}}">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
@endsection
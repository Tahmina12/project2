@section('header')

@foreach($bgImage as $bgImage1)
@endforeach

<div class="banner" style="background-image:url({{asset($bgImage1->backgroundImage)}});">
    
		<div class="banner-info" >
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
							<li class="act"><a href="{{url('/')}}" class="effect1 active">Home</a></li>
                                                        @foreach($categories as $category)
							<li><a href="{{url('/category/'.$category->id)}}">{{$category->categoryName}}</a></li>
                                                        @endforeach
							
							<li><a href="{{url('/contact')}}">Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
                            @yield('headersectionTwo')
                            </div>
		</div>
	</div>
@endsection
@extends('frontEnd.master')

@section('header')
<?php
use Illuminate\Http\Request;
?>
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
							@foreach($categories as $category)
                                                        <?php  $request=new Request;
                                                     
                                                        ?>
                                                        
                                                        <li><a href="{{url('/category/'.$category->id)}}" >{{$category->categoryName}}</a></li>
                                                        
                                                        
<!--                                                        <li class="{{$request->is('/category/'.$category->id)?'act':''}}"><a href="{{url('/category/'.$category->id)}}" class="active">{{$category->categoryName}}</a></li>
                                                       -->
                                                        @endforeach
							<li class="act"><a href="{{url('/contact')}}" class="active" >Contact Us</a></li>
						</ul>
					</div><!-- /.navbar-collapse -->	
					
				</nav>
			</div>
		</div>
	</div>
@endsection
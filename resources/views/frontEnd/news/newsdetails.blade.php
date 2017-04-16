@extends('frontEnd.header_category.header_category_events')
@section('title')
Details News
@endsection
@section('body')

<div class="single">
		<div class="container">
			<div class="single-grid">
				<div class="col-md-12 blog-left">
					<div class="blog-left-grid">
						<div class="blog-leftl">
							<h4><?php echo date('M');?> <span><?php echo date('D');?></span></h4>
                                                        
                                                        
						</div>
						<div class="blog-leftr">
                                                    <h3 style='background-color: black;color:white;padding:8px;'>{!!$newsById->newsTitle!!}</h3>
                                                    <hr>
							<img src="{{asset($newsById->newsImage)}}" alt=" " class="img-responsive" />
							<p>{!!$newsById->newsShortDescription!!}</p>
							<p>{!!$newsById->newsLongDescription!!}</p>
							<ul>
								<li><a href="#"><i class="glyphicon glyphicon-user" aria-hidden="true"></i>User Name</a></li>
								<li><a href="#"><i class="glyphicon glyphicon-tags" aria-hidden="true"></i>0 Tages</a></li>
								<li><a href="#"><i class="glyphicon glyphicon-comment" aria-hidden="true"></i>10 Comments</a></li>
							</ul>
						</div>
						<div class="clearfix"> </div>
                                                {!!html_entity_decode($newsById->addVideo)!!}
						<div class="admin-text">
								<h5>Reported By {{$newsById->authorName}}</h5>
								<div class="admin-text-left">
									<a href="#"><img src="{{asset('public/frontEnd')}}/images/icon1.png" alt=""/></a>
								</div>
								<div class="admin-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
									sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<span>View all posts by:<a href="#"> Admin </a></span>
								</div>
								<div class="clearfix"> </div>
						</div>
						<div class="response">
							<h4>Responses</h4>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="{{asset('public/frontEnd')}}/images/icon1.png" alt=""/>
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>December 31, 2015</li>
										<li><a href="single.html">Reply</a></li>
									</ul>
									<div class="media response-info">
										<div class="media-left response-text-left">
											<a href="#">
												<img class="media-object" src="{{asset('public/frontEnd')}}/images/icon1.png" alt=""/>
											</a>
											<h5><a href="#">Admin</a></h5>
										</div>
										<div class="media-body response-text-right">
											<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
												sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
											<ul>
												<li>December 31, 2015</li>
												<li><a href="single.html">Reply</a></li>
											</ul>		
										</div>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="media response-info">
								<div class="media-left response-text-left">
									<a href="#">
										<img class="media-object" src="{{asset('public/frontEnd')}}/images/icon1.png" alt=""/>
									</a>
									<h5><a href="#">Admin</a></h5>
								</div>
								<div class="media-body response-text-right">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, 
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									<ul>
										<li>December 31, 2015</li>
										<li><a href="single.html">Reply</a></li>
									</ul>		
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>	
						<div class="coment-form">
							<h4>Leave your comment</h4>
							<form>
								<input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
								<input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
								<input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
								<textarea type="text"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
								<input type="submit" value="Submit Comment" >
							</form>
						</div>
					</div>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
@endsection
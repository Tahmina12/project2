@extends('frontEnd.header_category.header_category_events')
@section('title')
News Times Category
@endsection
@section('body')
<div class="news-and-events">
    <div class="container">
        <div class="move-text">
            <div class="breaking_news">
                <h2>Breaking News</h2>
            </div>
            <div class="marquee">
         @foreach($breakingnews as $breakingnewses)
        <div class="marquee1"><a class="breaking" href="{{url('/newsdetails/'.$breakingnewses->id)}}">
               
                {{$breakingnewses->newsTitle}}
                
            </a></div>
         @endforeach

        <div class="clearfix"></div>
    </div>
            <div class="clearfix"></div>
            <script type="text/javascript" src="{{asset('public/frontEnd')}}/js/jquery.marquee.js"></script>
            <script>
$('.marquee').marquee({pauseOnHover: true});
//@ sourceURL=pen.js
            </script>
        </div>
        <div class="upcoming-events-grids">
            <div class="col-md-12 upcoming-events-left">
                <h3>News Details</h3>
                <div class="gallery">
                    @foreach($publishedCategoryNews as $publishedCategoryNewses)
                    
                    <div class="col-md-12 gallery-left">
                        <h3>{!!$publishedCategoryNewses->newsTitle!!}</h3>
                        <div class="grid">
                            <figure class="effect-lexi">
                                <img src="{{asset($publishedCategoryNewses->newsImage)}}" alt="" width="220px;" style='margin-right:10px;' class="img-responsive" />
                                <figcaption>
                                    
                                    <p>{{$publishedCategoryNewses->newsTitle}}</p>
                                </figcaption>	
                                
                            </figure>
                            
                            </div>
                        <div style="text-align:justify; padding-left: 10px;">
                            <p style="float:left;text-align: justify;vertical-align: auto;padding:10px;" >{!!$publishedCategoryNewses->newsShortDescription!!}</p>
                            <p style="float:left;text-align: justify;vertical-align:  auto;padding:20px;">{!!$publishedCategoryNewses->newsLongDescription!!}</p>
                            </div>
                        
                    </div>
                    <hr>
                    @endforeach
                    
                    <div class="clearfix"> </div>
                </div>
                <div class="upcoming-events-left-grids">
                    @foreach($publishedCategoryNews as $publishedCategoryNewses)
                    <div class="col-md-6 upcoming-events-left1">
                        <div class="upcoming-events-left11">
                            {!!html_entity_decode($publishedCategoryNewses->addVideo)!!}
                        </div>
                    </div>
                   
                    <div class="clearfix"> </div>
                    @endforeach
                    <!-- pop-up-box -->
                    <script type="text/javascript" src="{{asset('public/frontEnd')}}/js/modernizr.custom.min.js"></script>    
                    <link href="{{asset('public/frontEnd')}}/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
                    <script src="{{asset('public/frontEnd')}}/js/jquery.magnific-popup.js" type="text/javascript"></script>
                    <!--//pop-up-box -->
                    <script>
$(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
        type: 'inline',
        fixedContentPos: false,
        fixedBgPos: true,
        overflowY: 'auto',
        closeBtnInside: true,
        preloader: false,
        midClick: true,
        removalDelay: 300,
        mainClass: 'my-mfp-zoom-in'
    });

});
                    </script>
                   
                </div>
                
            </div>
            
            <div class="clearfix"> </div>
        </div>
        <div class="news">
            <div class="news-grids">
                <div class="col-md-8 news-grid-left">
                    <h3>latest news & events</h3>
                    <ul>
                        @foreach($latestNews as $latestNewses)
                <li>
                    <div class="news-grid-left1">
                        <img src="{{asset($latestNewses->newsImage)}}" alt=" " class="img-responsive" />
                    </div>
                    <div class="news-grid-right1" style="color: black;">
                        <h4><a href="{{url('/newsdetails/'.$latestNewses->id)}}">{{$latestNewses->newsTitle}}</a></h4>
                        <h5>By {{$latestNewses->authorName}} <label>|</label> <i><?php echo date('l'); ?></i></h5>
                      
                    </div>
                    <div class="clearfix"> </div>
                </li>
                @endforeach
                    </ul>
                </div>
                <div class="col-md-4 news-grid-right">
                    <div class="news-grid-rght1">
                        <!-- Nav tabs -->
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">weather in London</a></li>
                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">edit location</a></li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active london" id="home">
                                <ul>
                                    <li>
                                        <h4>Wednesday</h4>
                                        <span></span>
                                        <p>21<sup>м/sup></p>
                                    </li>
                                    <li>
                                        <h4>Thursday</h4>
                                        <span class="moon"></span>
                                        <p>25<sup>м/sup></p>
                                    </li>
                                    <li>
                                        <h4>Friday</h4>
                                        <span class="sun"></span>
                                        <p>31<sup>м/sup></p>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="profile">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359652.109742895!2d-113.72446020222534!3d36.24602872499641!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1450786850582" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="news-grid-rght2">
                        <h3>subscribe to our newsletter</h3>
                        <p>Get the latest news and updates by signing up to our daily newsletter.We won't sell your email or spam you !</p>
                        <form>
                            <input type="text" value="enter your Email address" onfocus="this.value = '';" onblur="if (this.value == '') {
                                        this.value = 'enter your Email address';
                                    }">
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                    <div class="news-grid-rght3">
                        <img src="{{asset('public/frontEnd')}}/images/18.jpg" alt=" " class="img-responsive" />
                        <div class="story">
                            <p>story of the week</p>
                            <h3><a href="single.html">US hails west Africa Ebola progress</a></h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
</div>
@endsection
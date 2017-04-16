@extends('frontEnd.master')
@section('title')
Home
@endsection
@section('headersectionTwo')
<script src="{{asset('public/frontEnd')}}/js/responsiveslides.min.js"></script>
<script>
// You can also use "$(window).load(function() {"
$(function () {
    // Slideshow 4
    $("#slider3").responsiveSlides({
        auto: true,
        pager: true,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
            $('.events').append("<li>before event fired.</li>");
        },
        after: function () {
            $('.events').append("<li>after event fired.</li>");
        }
    });

});
</script>
<div  id="top" class="callbacks_container">
    <ul class="rslides" id="slider3">
        @foreach($news as $newsInfo)
        <li>
            <div class="banner-info-slider">
                <ul>

                    <li><?php echo date('D.M.Y'); ?></li>
                </ul>
                <h1>{{$newsInfo->newsTitle}}</h1>
                <p>{!!$newsInfo->newsShortDescription!!}</p>
                
            </div>
        </li>
        @endforeach

    </ul>
</div>
@endsection
@section('body')
<div class="banner-bottom">
    <div class="container">

        <div class="banner-bottom-grids">
            @foreach($sub_categories as $sub_category)
            <div class="col-md-3 banner-bottom-grid-left banner-bottom " style="padding-left: 5px;">
                <div class="br-bm-gd-lt br-bm-gd-lt1">

                    <div class="overlay">
                        <div class="arrow-left"></div>
                        <div class="rectangle"></div>
                    </div>
                    <div class="health-pos">
                        <div class="health">
                         
                            
                            <ul>
                              
                                <li><a href="#">{{$sub_category->subCategoryName}}</a></li>
<!--                                <li><a href="{{url('/newsdetails/'.$sub_category->SelectCategoryId)}}">{{$sub_category->subCategoryName}}</a></li>
                                <li><?php echo date("d.M.Y"); ?></li>-->
                              
                            </ul>
                           
                            
                        </div>
                        <h3>{!!$sub_category->subCategoryTitle!!}</h3>
                        <div class="dummy">
                            <p>{!!$sub_category->subCategoryTitle!!}</p>
                        </div>
                        
                    </div>
                </div>
            </div>

            @endforeach


        </div>

    </div>
    <div class="clearfix"> </div>
</div>
<br>
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
<!-- video-grids -->

<div class="video-grids">
    <div class="col-md-8 video-grids-left" >
        <h3 style='color:white;background: black;padding: 5px;'>Latest Videos</h3>
        <hr>
        @foreach($latestVideos as $latestVideo)
        {!!html_entity_decode($latestVideo->addVideo)!!}
        @endforeach    

        <hr>
        <div class="video-grids-left2">

            <div class="course_demo1">

                <ul id="flexiselDemo1">	
                    @foreach($Videos as $newsInfo)	

                    <li>

                        <div class="item">
                            <img src="{{asset($newsInfo->newsImage)}}" alt=" " class="img-responsive" />
                            <a class="play-icon popup-with-zoom-anim" target='_blank' href="{{html_entity_decode($newsInfo->addVideo)}}">
                                <i> </i>
                            </a>
                            <div id="small-dialog" class="mfp-hide">

                                <iframe src="{{html_entity_decode($newsInfo->addVideo)}}"></iframe>
                            </div>
                            <div class="floods-text">
                                <h3>The fed and inequality <span>Politics <label>|</label> <i>Adom Smith</i></span></h3>
                                <p>5:56</p>
                            </div>
                        </div>

                    </li>
                    @endforeach
                </ul>

            </div>

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
            <!-- requried-jsfiles-for owl -->
            <script type="text/javascript">
                $(window).load(function () {
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 3,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint: 480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint: 640,
                                visibleItems: 2
                            },
                            tablet: {
                                changePoint: 768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>
            <script type="text/javascript" src="{{asset('public/frontEnd')}}/js/jquery.flexisel.js"></script>
        </div>
    </div>
    <div class="col-md-4 video-grids-right">
        <div class="sap_tabs">	
            <div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
                <ul class="resp-tabs-list">
                    
                    <li class="resp-tab-item grid1" aria-controls="tab_item-0" style='background: black;' role="tab"><span>most read</span></li>
                    <div class="clear"></div>
                </ul>				  	 
                <div class="resp-tabs-container">
                    <div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
                        @foreach($mostview as $mostViewed)
                        <div class="facts">
                            <div class="tab_list">
                                <img src="{{asset($mostViewed->newsImage)}}" alt=" " class="img-responsive" />
                            </div>
                            <div class="tab_list1">
                                <ul>
                                    
                                    <li><?php echo date('D.M.Y')?></li>
                                </ul>
                                <p><a href="{{url('/newsdetails/'.$mostViewed->id)}}">{{$mostViewed->newsTitle}}</a></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        @endforeach
                        
                    </div>
                   
                </div>
                <script src="{{asset('public/frontEnd')}}/js/easyResponsiveTabs.js" type="text/javascript"></script>
                <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default', //Types: default, vertical, accordion           
                        width: 'auto', //auto or any width like 600px
                        fit: true   // 100% fit in a container
                    });
                });
                </script>
            </div>
        </div>
    </div>
    <div class="clearfix"> </div>
</div>
<!-- //video-grids -->
<!-- video-bottom-grids -->
<div class="video-bottom-grids">
    <div class="video-bottom-grids1">
        @foreach($categories as $category)
        <div class="col-md-3 video-bottom-grid">
            <div class="video-bottom-grid1">
                <div class="video-bottom-grid1-before">
                    <img src="{{asset('public/frontEnd')}}/images/13.jpg" alt=" " class="img-responsive" />
                    <div class="video-bottom-grid1-pos">
                        <p>{{$category->categoryName}}</p>
                        <p>{!!$category->categoryTitle!!}</p>
                    </div>
                </div>
                <ul>
                    <?php $i=1;?>
                    @foreach($allnews as $allnews1)
                    @if($category->id === $allnews1->categoryId)
                    <li><a href="{{url('/newsdetails/'.$allnews1->id)}}">{{$allnews1->newsTitle}}
                            <input type='hidden' name='view_count' value='{{$allnews1->view_count}}'/></a></li>
                    @endif
                    @endforeach
                    
                </ul>
                
            </div>
        </div>
       @endforeach
        <div class="clearfix"> </div>
    </div>
    
</div>
<!-- //video-bottom-grids -->
<!-- news-and-events -->
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
                    <li role="presentation" class="active"><a class="high" href="#home" aria-controls="home" role="tab" data-toggle="tab">weather in Bangladesh</a></li>

                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active london" id="home" >
                        <ul>


                            <li>
                                <?php date_default_timezone_set('Asia/Dhaka'); ?>
                                <?php echo date_default_timezone_get(); ?>
                                <h4><?php echo "Today is " . date('l'); ?></h4>
                                <span class="sun"></span>

                                <p><?php echo "Sunrise:" . date_sunrise(time(), SUNFUNCS_RET_STRING, 23.777, 90.399); ?></p>
                            </li>

                            <li>
                                <?php date_default_timezone_set('Asia/Dhaka'); ?>
                                <?php echo date_default_timezone_get(); ?>
                                <h4><?php echo "Today is " . date('l'); ?></h4>
                                <span class="moon"></span>

                                <p><?php echo "Sunset:" . date_sunset(time(), SUNFUNCS_RET_STRING, 23.777, 90.399); ?></p>

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
<!-- //news-and-events -->
</div>
</div>                                                
@endsection
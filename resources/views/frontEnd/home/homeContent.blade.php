@extends('frontEnd.layouts.master')
@section('title')
Home Page
@endsection
@section('content')
<div class="banner-mat">
    <div class="container">
        <div class="banner">

            <!-- Slideshow 4 -->
            <div class="slider">
                <ul class="rslides" id="slider1">
                    <li><img src="{{asset('public/frontEnd/')}}/images/1.jpg" alt="">
                    </li>
                    <li><img src="{{asset('public/frontEnd/')}}/images/2.jpg" alt="">
                    </li>
                    <li><img src="{{asset('public/frontEnd/')}}/images/3.jpg" alt="">
                    </li>
                    <li><img src="{{asset('public/frontEnd/')}}/images/4.jpg" alt="">
                    </li>
                </ul>
            </div>

            <div class="banner-bottom">
                <div class="banner-matter">
                    <p>Childish Gambino - Camp Now Available for just $9.99</p> 
                    <a href="single.html" class="hvr-shutter-in-vertical ">Purchase</a>
                </div>
                <div class="purchase">
                    <a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">Purchase</a>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>				
        <!-- //slider-->
    </div>
</div>
<!---->
<div class="container">
    <div class="content">
        <div class="content-top">
            <h3 class="future">Prepration</h3>
            <div class="content-top-in">
                @foreach($allSubCategories as $allSubCategorie)
                <div class="col-md-3 md-col">
                    <div class="col-md">
                        <a href="{{url('questin_details/'.$allSubCategorie->subcate_id)}}"><img  src="{{asset($allSubCategorie->sub_category_photo)}}" alt="" /></a>	
                        <div class="top-content">
                            <h5><a href="{{url('questin_details/'.$allSubCategorie->subcate_id)}})}}">{{$allSubCategorie->sub_categorie_name}}</a></h5>
                            <div class="white">
<!--                                <a href="{{url('questin_details')}}" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">ADD TO CART</a>
                                <p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
                                <div class="clearfix"></div>-->
                            </div>

                        </div>							
                    </div>
                </div>
               @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
        <!---->
        <div class="content-middle">
            <h3 class="future">BRANDS</h3>
            <div class="content-middle-in">
                <ul id="flexiselDemo1">			
                    <li><img src="{{asset('public/frontEnd/')}}/images/ap.png"/></li>
                    <li><img src="{{asset('public/frontEnd/')}}/images/ap1.png"/></li>
                    <li><img src="{{asset('public/frontEnd/')}}/images/ap2.png"/></li>
                    <li><img src="{{asset('public/frontEnd/')}}/images/ap3.png"/></li>

                </ul>
                <script type="text/javascript">
                    $(window).load(function () {
                        $("#flexiselDemo1").flexisel({
                            visibleItems: 4,
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
                <script type="text/javascript" src="{{asset('public/frontEnd/')}}/js/jquery.flexisel.js"></script>

            </div>
        </div>
        <!---->
        <div class="content-bottom">
            <h3 class="future">LATEST</h3>
            <div class="content-bottom-in">
                <ul id="flexiselDemo2">			
                    <li><div class="col-md men">
                            <a href="single.html" class="compare-in "><img  src="{{asset('public/frontEnd/')}}/images/pi4.jpg" alt="" />
                                <div class="compare in-compare">
                                    <span>Add to Compare</span>
                                    <span>Add to Whislist</span>
                                </div></a>
                            <div class="top-content bag">
                                <h5><a href="single.html">Symbolic Bag</a></h5>
                                <div class="white">
                                    <a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                    <p class="dollar"><span class="in-dollar">$</span><span>4</span><span>0</span></p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>							
                        </div></li>
                    <li><div class="col-md men">
                            <a href="single.html" class="compare-in "><img  src="{{asset('public/frontEnd/')}}/images/pi5.jpg" alt="" />
                                <div class="compare in-compare">
                                    <span>Add to Compare</span>
                                    <span>Add to Whislist</span>
                                </div></a>	
                            <div class="top-content bag">
                                <h5><a href="single.html">Interesting Read</a></h5>
                                <div class="white">
                                    <a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                    <p class="dollar"><span class="in-dollar">$</span><span>2</span><span>5</span></p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>							
                        </div></li>
                    <li><div class="col-md men">
                            <a href="single.html" class="compare-in "><img  src="{{asset('public/frontEnd/')}}/images/pi6.jpg" alt="" />
                                <div class="compare in-compare">
                                    <span>Add to Compare</span>
                                    <span>Add to Whislist</span>
                                </div></a>	
                            <div class="top-content bag">
                                <h5><a href="single.html">The Carter</a></h5>
                                <div class="white">
                                    <a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                    <p class="dollar"><span class="in-dollar">$</span><span>1</span><span>0</span></p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>							
                        </div></li>
                    <li><div class="col-md men">
                            <a href="single.html" class="compare-in "><img  src="{{asset('public/frontEnd/')}}/images/pi7.jpg" alt="" />
                                <div class="compare in-compare">
                                    <span>Add to Compare</span>
                                    <span>Add to Whislist</span>
                                </div></a>	
                            <div class="top-content bag">
                                <h5><a href="single.html">Onesie</a></h5>
                                <div class="white">
                                    <a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                    <p class="dollar"><span class="in-dollar">$</span><span>6</span><span>0</span></p>
                                    <div class="clearfix"></div>
                                </div>
                            </div>							
                        </div></li>

                </ul>
                <script type="text/javascript">
    $(window).load(function () {
        $("#flexiselDemo2").flexisel({
            visibleItems: 4,
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
            </div>
        </div>
<!--        <ul class="start">
            <li ><a href="#"><i></i></a></li>
            <li><span>1</span></li>
            <li class="arrow"><a href="#">2</a></li>
            <li class="arrow"><a href="#">3</a></li>
            <li class="arrow"><a href="#">4</a></li>
            <li class="arrow"><a href="#">5</a></li>
            <li ><a href="#"><i  class="next"> </i></a></li>
        </ul>-->
    </div>
</div>
@endsection

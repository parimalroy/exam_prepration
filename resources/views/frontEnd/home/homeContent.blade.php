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
                    <p>Bangladesh Largest Examination Prepration Portal.More Visit and more Learn</p> 
                    <!--<a href="single.html" class="hvr-shutter-in-vertical ">Purchase</a>-->
                </div>
                <div class="purchase">
                    <!--<a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">Purchase</a>-->
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
                            <h5><a href="{{url('questin_details/'.$allSubCategorie->subcate_id)}}">{{$allSubCategorie->sub_categorie_name}}</a></h5>
                            <div class="white">
                                <!--                                <a href="{{url('questin_details')}}" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2 ">ADD TO CART</a>
                                                                <p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>
                                                                <div class="clearfix"></div>-->
                            </div>

                        </div>							
                    </div>
                    <br/>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
        <!---->
        <div class="content-middle">
            <h3 class="future">Job Tips</h3>
            <div class="content-middle-in">
                
                <ul id="flexiselDemo1">	
                    @foreach($allJobTips as $allJobTip)
                    <li><a><img src="{{asset($allJobTip->job_tips_photo)}}"/>
                        </a>
                          <div class="top-content">
                            <h5><a href="{{url('job-Tips/'.$allJobTip->tips_id)}}">{{$allJobTip->job_tips_name}}</a></h5>
                            <div class="white">
                        

                        </div>
                    </li>
                
                    @endforeach
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
                    @foreach($allSubCategories as $allSubCategorie)
                    <li>
                        <div class="col-md men">
                            <a href="{{url('questin_details/'.$allSubCategorie->subcate_id)}}"><img  src="{{asset($allSubCategorie->sub_category_photo)}}" alt="" />
                                <div class="compare in-compare">
<!--                                    <span>Add to Compare</span>
                                    <span>Add to Whislist</span>-->
                                </div></a>
                            <div class="top-content bag">
                                <h5><a href="{{url('questin_details/'.$allSubCategorie->subcate_id)}}"><span class="text text-success">{{$allSubCategorie->sub_categorie_name}}</span></a></h5>
                                <div class="white">
<!--                                    <a href="single.html" class="hvr-shutter-in-vertical hvr-shutter-in-vertical2">ADD TO CART</a>
                                    <p class="dollar"><span class="in-dollar">$</span><span>4</span><span>0</span></p>-->
                                    <div class="clearfix"></div>
                                </div>
                            </div>							
                        </div>
                    </li>
                    @endforeach
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

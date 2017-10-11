@extends('frontEnd.layouts.master')
@section('title')
Job TIps
@endsection
@section('content')
<div class="container">
    <div class="products">
        <h2 class=" products-in">Job Tips</h2>
        <div class=" top-products ">
            <div class="col-md-12 md-col">
                <div class="col-md">
<!--                    <a href="single.html" class="compare-in"><img  src="images/pic.jpg" alt="" />
                    </a>	-->
                   @foreach($allJobTips as $allJobTip)
                    <div class="top-content">
                        <h2 class="text-center"><strong><span style="color:#fff">{{$allJobTip->job_tips_name}} </span></strong></h2><hr/>
                        <div class="white"></br>
                            
                            <p style="font-size: 20px">  {{$allJobTip->job_tips_description}}</p>
                            
                            <div lass="clearfix"></div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
          
          
           
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
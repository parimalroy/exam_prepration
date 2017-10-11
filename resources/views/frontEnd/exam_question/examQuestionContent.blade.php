@extends('frontEnd.layouts.master')
@section('title')
Question and answare
@endsection
@section('content')
<div class="container">
    <div class="products">
        <h2 class=" products-in">Question and Answare</h2>
        <div class=" top-products">
            <div class="col-md-12 md-col">
                <div class="col-md">
<!--                    <a href="single.html" class="compare-in"><img  src="images/pic.jpg" alt="" />
                    </a>	-->
                   @foreach($allExamQuestiones as $allExamQuestione)
                    <div class="top-content">
                        <h4><span style="color:blue"">Ques:{{$allExamQuestione->exam_question_name}} </span></h4>
                        <div class="white"></br>
                            <p><b>Ans: {{$allExamQuestione->exam_answare_name}}</b> </p><hr/>
                            <!--<p class="dollar"><span class="in-dollar">$</span><span>2</span><span>0</span></p>-->
                            <div class="clearfix"></div>
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
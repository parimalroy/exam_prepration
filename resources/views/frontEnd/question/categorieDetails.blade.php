@extends('frontEnd.layouts.master')
@section('title')
Categorie Detailss
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

                    <div class="top-content well">

                        <div class="white">
                            @foreach($allSubcategories as $allSubcategorie)
                            <div class="col-md-3 md-col">
                                <div class="col-md">
                                    <a href="{{url('questin_details/'.$allSubcategorie->subcate_id)}}"><img  src="{{asset($allSubcategorie->sub_category_photo)}}" alt="" /></a>	
                                    <div class="top-content">
                                        <h5><a href=""></a></h5>
                                        <div class="white">
                                           {{$allSubcategorie->sub_categorie_name}}
                                        </div>
                                        
                                    </div>							
                                </div>
                            </div>
                            @endforeach
                            
                            <div class="clearfix"></div>
                        </div>
                    </div>

                </div>
            </div>



            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
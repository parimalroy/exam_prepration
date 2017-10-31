@extends('frontEnd.layouts.master')
@section('title')
Question and answare
@endsection
@section('content')
<div class="container">
    <div class="products">
        <h2 class=" products-in">Search Result</h2>
        
        <div class=" top-products">
            
            @foreach($result as $res)
            <table class="table">
                <thead>
                <tr>
                    <th>Question</th>
                    <th>answare</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>{{$res->question_name}}</td>
                    <td>{{$res->answare_name}}</td>
                </tr>
                </tbody>
            </table>
          @endforeach
           
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
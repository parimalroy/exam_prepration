@extends('frontEnd.layouts.master')
@section('title')
Question and answare
@endsection
@section('content')
<div class="container">
    <div class="products">
        <h2 class=" products-in">Search Result</h2>
        
        <div class=" top-products">
            @if($result=='')
            <h3 class="text text-danger">Result not found</h3>'
            @else
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
           @endif
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection
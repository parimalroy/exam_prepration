@extends('admin.layouts.master')
@section('title')
Update Categorie
@endsection
@section('head')
Update Categorie
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'categorie-update','method'=> 'POST','class'=> 'form-horizontal']) !!}
            <input type="hidden" name="cate_id" value="{{$categoriesById->Cate_id}}">
            <div class="form-group">
                <label class="control-label col-sm-3">Category Name</label>

                <div class="col-sm-9">
                    <input type='text' name="category_name" value="{{$categoriesById->category_name}}" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Category Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"rows="4"name="category_description">{{$categoriesById->category_description}}</textarea>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>

            </div>
            <div class="form-group">
                <label class="control-label col-sm-3"></label>
                <div class="col-sm-9">
                    <input type="submit"name="btn"value="Save Category Info" class="btn-block btn-success btn-lg">
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

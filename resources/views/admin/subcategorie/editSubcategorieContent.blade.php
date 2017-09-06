@extends('admin.layouts.master')
@section('title')
Update Sub Categorie
@endsection
@section('head')
Update Sub Categorie
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'sub_categorie-update','method'=> 'POST','name'=> 'editSubCategorie','class'=> 'form-horizontal']) !!}
            <div class="form-group">
                <label class="control-label col-sm-3">Sub Categoire Name</label>

                <div class="col-sm-9">
                    <input type='text' name="sub_categorie_name" value="{{$allSubCategories->sub_categorie_name}}" class="form-control"/>
                    <input type='hidden' name="sub_categorie_id" value="{{$allSubCategories->subcate_id}}" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
           
            <div class="form-group">
                <label class="control-label col-sm-3">Sub Category Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"rows="5" name="sub_categorie_description">{{$allSubCategories->sub_categorie_description}}</textarea>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>

            </div>
            <div class="form-group">
                <label class="control-label col-sm-3"></label>
                <div class="col-sm-9">
                    <input type="submit"name="btn"value="Save Sub Categorie Info" class="btn-block btn-success btn-lg">
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
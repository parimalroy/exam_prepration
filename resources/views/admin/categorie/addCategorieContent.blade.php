@extends('admin.layouts.master')
@section('title')
Add Categorie
@endsection
@section('head')
Add Categorie
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'categorie-save','method'=> 'POST','enctype'=> 'multipart/form-data','class'=> 'form-horizontal']) !!}
                {{csrf_field()}}
                <div class="form-group">
                    <label class="control-label col-sm-3">Category Name</label>

                    <div class="col-sm-9">
                        <input type='text' name="category_name" class="form-control"/>
                        <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Category Description</label>
                    <div class="col-sm-9">
                        <textarea class="form-control"rows="4"name="category_description"></textarea>
                        <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                    </div>

                </div>
                <div class="form-group">
                    <label class="control-label col-sm-3">Publication Status</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="publicatin_status">
                            <option>-----Select Publication Status-----</option>
                            <option value="1">Publish</option>
                            <option value="0">Unpublish</option>
                        </select>

                    </div>
                </div>
                 <div class="form-group">
                    <label class="control-label col-sm-3">Category Photo</label>

                    <div class="col-sm-9">
                        <input type='file' name="category_photo" accept="image/*"/>
                        <span class="text-danger"> {{$errors->has('category_photo')? $errors->first('category_photo'): ''}}</span>
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
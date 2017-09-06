@extends('admin.layouts.master')
@section('title')
Add Sub Categorie
@endsection
@section('head')
Add Sub Categorie
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'sub_categorie-save','method'=> 'POST','enctype'=> 'multipart/form-data','class'=> 'form-horizontal']) !!}
            <div class="form-group">
                <label class="control-label col-sm-3">Sub Categoire</label>

                <div class="col-sm-9">
                    <input type='text' name="sub_categorie_name" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Categorie</label>
                <div class="col-sm-9">
                    <select class="form-control" name="categorie_id">
                        <option>-----Select Publication Status-----</option>
                        @foreach($categoriesByID as $categorieByID)
                        <option value="{{$categorieByID->Cate_id}}">{{$categorieByID->category_name}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Sub Category Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"rows="5" name="sub_categorie_description"></textarea>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>

            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Category Photo</label>

                <div class="col-sm-9">
                    <input type='file' name="sub_category_photo" accept="image/*"/>
                    <span class="text-danger"> {{$errors->has('category_photo')? $errors->first('category_photo'): ''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Publication Status</label>
                <div class="col-sm-9">
                    <select class="form-control" name="publication_status">
                        <option>-----Select Publication Status-----</option>
                        <option value="1">Publish</option>
                        <option value="0">Unpublish</option>
                    </select>

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


@extends('admin.layouts.master')
@section('title')
Add Exam Sub Categorie
@endsection
@section('head')
Add Exam Sub Categorie
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'examSubCategorie-save','method'=> 'POST','class'=> 'form-horizontal']) !!}

            <div class="form-group">
                <label class="control-label col-sm-3">Category Name</label>

                <div class="col-sm-9">
                    <input type='text' name="exam_sub_category_name" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-3">Exam Categorie name</label>
                <div class="col-sm-9">
                    <select class="form-control" name="exam_categorie_id">
                        <option>-----Select Publication Status-----</option>
                        @foreach($allExamCategories as $allExamCategorie)
                        <option value="{{$allExamCategorie->examCateid}}">{{$allExamCategorie->exam_category_name}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Category Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"rows="4"name="exam_sub_category_description"></textarea>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
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
                    <input type="submit"name="btn"value="Save Exam Categorie Info" class="btn-block btn-success btn-lg">
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
@extends('admin.layouts.master')
@section('title')
Add Question
@endsection
@section('head')
Add Question
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'question-save','method'=> 'POST','class'=> 'form-horizontal']) !!}
            <div class="form-group">
                <label class="control-label col-sm-3">Question</label>

                <div class="col-sm-9">
                    <input type='text' name="question_name" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-3">Answare</label>

                <div class="col-sm-9">
                    <input type='text' name="answare_name" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-3">Questin Categorie</label>
                <div class="col-sm-9">
                    <select class="form-control" name="categorie_id">
                        <option>-----Select Sub Categorie Status-----</option>
                        @foreach($subCategories as $subCategorie)
                        <option value="{{$subCategorie->subcate_id}}">{{$subCategorie->sub_categorie_name}}</option>
                        @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Category Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"rows="4"name="question_description"></textarea>
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
                    <input type="submit"name="btn"value="Save Question Info" class="btn-block btn-success btn-lg">
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection

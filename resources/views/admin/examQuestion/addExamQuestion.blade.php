@extends('admin.layouts.master')
@section('title')
Add Exam Question Categorie
@endsection
@section('head')
Add Exam Question Categorie
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'examQuestionCategorie-save','method'=> 'POST','class'=> 'form-horizontal']) !!}

            <div class="form-group">
                <label class="control-label col-sm-3">Question Name</label>

                <div class="col-sm-9">
                    <input type='text' name="exam_question_name" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Answare</label>

                <div class="col-sm-9">
                    <input type='text' name="exam_answare_name" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
             <div class="form-group">
                <label class="control-label col-sm-3">Exam Sub Categorie name</label>
                <div class="col-sm-9">
                    <select class="form-control" name="exam_sub_categorie_id">
                        <option>-----Select Publication Status-----</option>
                        @foreach($allPublishSubCategories as $allPublishSubCategorie)
                        <option value="{{$allPublishSubCategorie->examSubCateId}}">{{$allPublishSubCategorie->exam_sub_category_name}}</option>
                       @endforeach
                    </select>

                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">Category Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"rows="4"name="exam_question_description"></textarea>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>

            </div>
            <div class="form-group">
                <label class="control-label col-sm-3"></label>
                <div class="col-sm-9">
                    <input type="submit"name="btn"value="Save Exam Question Info" class="btn-block btn-success btn-lg">
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
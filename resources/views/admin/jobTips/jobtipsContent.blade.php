@extends('admin.layouts.master')
@section('title')
This is Job Tips
@endsection
@section('head')
Add Job Tips
@endsection
@section('content')
<h3 class="text text-center text-success">{{Session::get('message')}}</h3>
<div class="row">
    <div class="col-sm-12">
        <div class="well">

            {!! Form::open(['url' => 'jobtips-save','name'=> 'myForm','method'=> 'POST','enctype'=> 'multipart/form-data','class'=> 'form-horizontal','onsubmit'=> 'return validation();']) !!}
            
            <div class="form-group">
                <label class="control-label col-sm-3">Job Tips Name</label>

                <div class="col-sm-9">
                    <input type='text' id="category_name" name="job_tips_name" class="form-control"/>
                    <span class="text-danger"> {{$errors->has('category_name')? $errors->first('category_name'): ''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3">job Tips Description</label>
                <div class="col-sm-9">
                    <textarea class="form-control"rows="8"name="job_tips_description"></textarea>
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
                <label class="control-label col-sm-3">Job Tips Photo</label>

                <div class="col-sm-9">
                    <input type='file' name="job_tips_photo" accept="image/*"/>
                    <span class="text-danger"> {{$errors->has('category_photo')? $errors->first('category_photo'): ''}}</span>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-3"></label>
                <div class="col-sm-9">
                    <input type="submit"name="btn" id="btn" value="Save Job Tipss Info" class="btn-block btn-success btn-lg">
                </div>

            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
<script>
    function validation(){
    var categorieName=document.forms['myForm']['category_name'].value;
    
    if(categorieName.length<=3){
       alert('Categorie length must be at last 4 character ');
       return false;
    }
    }
   
</script>
@endsection

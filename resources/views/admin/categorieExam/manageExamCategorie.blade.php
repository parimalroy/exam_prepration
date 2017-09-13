@extends('admin.layouts.master')
@section('title')
Manage Exam Categorie
@endsection
@section('head')
Manage Exam Categorie
@endsection
@section('content')


<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="text text-success">{{Session::get('message')}}</h3>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr>
                            <th>Exam Categorie ID</th>
                            <th>Exam Categorie Name</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allCategories as $allCategorie)
                        <tr class="odd gradeX">
                            <td>{{$allCategorie->examCateid}}</td>
                            <td>{{$allCategorie->exam_category_name}}</td>
                            <td>{{$allCategorie->publication_status==1?'Publish':'Unpublish'}}</td>
                            <td class="center">
                                @if($allCategorie->publication_status==1)
                                <a href="{{url('examCategorie-unpublish/'.$allCategorie->examCateid)}}" title="Unpublish" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                <a href="{{url('examCategorie-publish/'.$allCategorie->examCateid)}}" title="Publish" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                @endif
<!--                                <a href="" title="Edit" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>-->
                                <a href="{{url('examCategorie-delete/'.$allCategorie->examCateid)}}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete!!')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>


                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <!-- /.table-responsive -->

            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<!-- /.row -->

<!-- /.row -->

<!-- /.row -->

@endsection
@extends('admin.layouts.master')
@section('title')
Manage Exam Sub Categorie
@endsection
@section('head')
Manage Exam Sub Categorie
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
                            <th>Exam Sub Categorie ID</th>
                            <th>Exam Sub Categorie Name</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allSubCategories as $allSubCategorie)
                        <tr class="odd gradeX">
                            <td>{{$allSubCategorie->examSubCateId}}</td>
                            <td>{{$allSubCategorie->exam_sub_category_name}}</td>
                            <td>{{$allSubCategorie->publication_status==1?'Publish':'Unpublish'}}</td>
                            <td class="center">
                                @if($allSubCategorie->publication_status==1)
                                <a href="{{url('examSubCategorie-unpublish/'.$allSubCategorie->examSubCateId)}}" title="Unpublish" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                <a href="{{url('examSubCategorie-publish/'.$allSubCategorie->examSubCateId)}}" title="Publish" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                @endif
                                <!--                                <a href="" title="Edit" class="btn btn-success btn-sm">
                                                                    <span class="glyphicon glyphicon-edit"></span>
                                                                </a>-->
                                <a href="{{url('examSubCategorie-delete/'.$allSubCategorie->examSubCateId)}}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete!!')">
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
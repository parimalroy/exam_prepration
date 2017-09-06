@extends('admin.layouts.master')
@section('title')
Manage Sub Categorie
@endsection
@section('head')
Manage Sub Categorie
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
                            <th>Sub Categorie ID</th>
                            <th>Categorie Name</th>
                            <th>Sub Categorie Name</th>
                            <th>Sub Publication Status</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @foreach($allSubCategories as $allSubCategorie)
                        <tr class="odd gradeX">
                            <td>{{$allSubCategorie->subcate_id}}</td>
                            <td>{{$allSubCategorie->category_name}}</td>
                            <td>{{$allSubCategorie->sub_categorie_name}}</td>
                            <td>{{$allSubCategorie->publication_status==1?'Publish':'Unpublish'}}</td>
                            <td><img height="50px"width="100px" src="{{asset($allSubCategorie->sub_category_photo)}}" alt=""></td>
                            <td class="center">
                               @if($allSubCategorie->publication_status==1)
                                <a href="{{url('sub_categorie_unpublish/'.$allSubCategorie->subcate_id)}}" title="Unpublish" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                <a href="{{url('sub_categorie_publish/'.$allSubCategorie->subcate_id)}}" title="Publish" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                @endif
                                <a href="{{url('sub_categorie_edit/'.$allSubCategorie->subcate_id)}}" title="Edit" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('sub_categorie_delete/'.$allSubCategorie->subcate_id)}}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete!!')">
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
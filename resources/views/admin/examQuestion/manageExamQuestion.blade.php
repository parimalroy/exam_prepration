@extends('admin.layouts.master')
@section('title')
Manage Exam Question Categorie
@endsection
@section('head')
Manage Exam Question Categorie
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
                            <th>Exam Question Id ID</th>
                            <th>Exam Question Name</th>
                            <th>Exam Answare Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($allExamQuestions as $allExamQuestion)
                        <tr class="odd gradeX">
                            <td>{{$allExamQuestion->exam_questin_id}}</td>
                            <td>{{$allExamQuestion->exam_question_name}}</td>
                            <td>{{$allExamQuestion->exam_answare_name}}</td>
                            <td class="center">
                                <a href="{{url('examQuestion-delete/'.$allExamQuestion->exam_questin_id)}}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete!!')">
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
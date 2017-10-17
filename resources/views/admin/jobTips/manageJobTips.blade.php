@extends('admin.layouts.master')
@section('title')
Manage Job Tips
@endsection
@section('head')
Manage Job Tips
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
                            <th>Job Tips ID</th>
                            <th>Tips Name</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($getAllJobTips as $getAllJobTip)
                        <tr class="odd gradeX">
                            <td>{{$getAllJobTip->tips_id}}</td>
                            <td>{{$getAllJobTip->job_tips_name}}</td>
                            <td>{{$getAllJobTip->publicatin_status==1?'Publish':'Unpublish'}}</td>
                            <td class="center">
                                
                                @if($getAllJobTip->publicatin_status==1)
                                <a href="{{url('unpublish-jobtips/'.$getAllJobTip->tips_id)}}" title="Unpublish" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                <a href="{{url('publish-jobtips/'.$getAllJobTip->tips_id)}}" title="Publish" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                @endif
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
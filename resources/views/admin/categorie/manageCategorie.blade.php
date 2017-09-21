@extends('admin.layouts.master')
@section('title')
Manage Categorie
@endsection
@section('head')
Manage Categorie
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
                            <th>Categorie ID</th>
                            <th>Categorie Name</th>
                            <th>Publication Status</th>
                            <th>Photo</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($categories as $categorie)
                        <tr class="odd gradeX">
                            <td>{{$categorie->Cate_id}}</td>
                            <td>{{$categorie->category_name}}</td>
                            <td>{{$categorie->publicatin_status==1?'Publish' : 'Unpublish'}}</td>
                            <td><img height="50px"width="100px" src="{{asset($categorie->category_photo)}}" alt=""></td>
                            <td class="center">
                                @if($categorie->publicatin_status==1)
                                <a href="{{url('categorie-unpublish/'.$categorie->Cate_id)}}" title="Unpublish" class="btn btn-primary btn-sm">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                <a href="{{url('categorie-publish/'.$categorie->Cate_id)}}" title="Publish" onclick="displaySameText()" class="btn btn-warning btn-sm">
                                    <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                @endif
                                <a href="{{url('categorie-edit/'.$categorie->Cate_id)}}" title="Edit" class="btn btn-success btn-sm">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{url('categorie-delete/'.$categorie->Cate_id)}}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete!!')">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>


                            </td>
                        </tr>

                        @endforeach
                    <input type="text" name="name" onkeyup="displaySameText(this.value)"/>
                    </tbody>
                </table>
                <!-- /.table-responsive -->
                <script type="text/javascript">
                    if (window.XMLHttpRequest) {
                        // code for IE7+, Firefox, Chrome, Opera, Safari

                        xmlhttp = new XMLHttpRequest();
                    } else {
                        // code for IE6, IE5
                        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                    }

                    function displaySameText(given_text)
                    {
                //                alert(given_text);
                        //var obj = document.getElementById(objID);
                        serverPage = 'Http/Controllers/CategorieController.php?text=' + given_text;
                        xmlhttp.open("GET", serverPage);
                        xmlhttp.onreadystatechange = function ()
                        {
                //                    alert(xmlhttp.readyState);
                //                    alert(xmlhttp.status);
                            if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                            {
                                //alert(xmlhttp.responseText);
                                document.getElementById('result').innerHTML = xmlhttp.responseText;
                                //document.getElementById(objcw).innerHTML = xmlhttp.responseText;
                            }
                        }
                        xmlhttp.send(null);
                    }

                </script>
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
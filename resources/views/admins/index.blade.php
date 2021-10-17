@extends('layouts.auth')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"></h1>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">

            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <div class="col-md-12">
                    <!-- MAP & BOX PANE -->
                    <div>
                        <div class="card-header">
                            <h3 class="card-title">Admins table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <input type="text" id="myInput" style="width:100%" onkeyup="myFunction()" placeholder="Search for admin.." title="Type in a name"><br><br>
                            <table class="table table-bordered table-striped" id="myTable">
                                <tr>
                                    <th>Number</th>
                                    <th>Admin name</th>
                                    <th>Email</th>
                                    <th>Profile image</th>
                                    <th>Created at</th>
                                </tr>
                                @foreach($admins as $admin)
                                    <tr>
                                        <td>{{$index++}}</td>
                                        <td>{{$admin->name}}</td>
                                        <td>{{$admin->email}}</td>
                                        <td><img src="{{asset('uploads/avatars/'.$admin->avatar)}}" style="width:30%;height:20%"></td>
                                        <td>{{$admin->created_at}}</td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!--/. container-fluid -->
    </section>
@endsection

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
                            <h3 class="card-title">Transactions details</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            {{--<input type="text" id="myInput" style="width:100%" onkeyup="myFunction()" placeholder="Find a transaction.." title="Type in a name"><br><br>--}}
                            <form action="{{ route('transactions.search') }}" method="POST">
                                {{ csrf_field() }}
                                <input  name="search_text" type="text"/>
                                <input type="submit"/>
                            </form>
                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Amount</th>
                                        <th>From</th>
                                        <th>To</th>
                                        <th>Status</th>
                                        <th>Type</th>
                                        <th>Information</th>
                                        <th>UUID</th>
                                        <th>Transaction by</th>
                                        <th>Transaction for</th>
                                        <th>Created at</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                        <tr>
                                            <td>{{ ($index++) + $transactions->firstItem() }}</td>
                                            <td>{{$transaction->tran_amount}}</td>
                                            <td>{{$transaction->tran_from}}</td>
                                            <td>{{$transaction->tran_to}}</td>
                                            <td>{{$transaction->tran_status}}</td>
                                            <td>{{$transaction->tran_type}}</td>
                                            <td>{{$transaction->tran_info}}</td>
                                            <td>{{$transaction->tran_uuid}}</td>
                                            <td>{{$transaction->tran_by}}</td>
                                            <td>{{$transaction->tran_for}}</td>
                                            <td>{{$transaction->tran_created}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $transactions !!}
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!--/. container-fluid -->
    </section>
@endsection

<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
<!-- Google Font: Source Sans Pro -->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
<!-- page script -->
<script>
    $(function () {
        $("#myTable").DataTable();
        $('#myTable').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
        });
    });
</script>

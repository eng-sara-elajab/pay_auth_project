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
                            <h3 class="card-title">Selected user cards</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-responsive" id="myTable1">
                                <tr>
                                    <th style="border:1px solid black;border-collapse:collapse">Number</th>
                                    <th style="border:1px solid black;border-collapse:collapse">Card label</th>
                                    <th style="border:1px solid black;border-collapse:collapse">Card pan</th>
                                    <th style="border:1px solid black;border-collapse:collapse">Card expiry</th>
                                    <th style="border:1px solid black;border-collapse:collapse">Username</th>
                                    <th style="border:1px solid black;border-collapse:collapse">Created at</th>
                                </tr>
                                @foreach($cards as $card)
                                    <tr>
                                        <td style="border:1px solid black;border-collapse:collapse">{{$index++}}</td>
                                        <td style="border:1px solid black;border-collapse:collapse">{{$card->card_label}}</td>
                                        <td style="border:1px solid black;border-collapse:collapse">{{$card->card_pan}}</td>
                                        <td style="border:1px solid black;border-collapse:collapse">{{$card->card_expiry}}</td>
                                        <td style="border:1px solid black;border-collapse:collapse">{{$card->card_user}}</td>
                                        <td style="border:1px solid black;border-collapse:collapse">{{$card->card_added}}</td>
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

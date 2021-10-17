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
                            <h3 class="card-title">Users table</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            {{--<input type="text" id="myInput" style="width:100%" onkeyup="myFunction()" placeholder="Search for user.." title="Type in a name"><br><br>--}}
                            <form action="{{route('users.search')}}" method="POST">
                                {{ csrf_field() }}
                                <input  name="search_text" type="text"/>
                                <input type="submit"/>
                            </form>

                            <table id="myTable" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Number</th>
                                        <th>Username</th>
                                        <th>Phone number</th>
                                        <th>Activity status</th>
                                        <th>User Totp</th>
                                        <th>Joined at</th>
                                        <th>Cards</th>
                                        <th>Transactions</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ ($index++) + $users->firstItem() }}</td>
                                            <td>{{$user->user_name}}</td>
                                            <td>{{$user->user_phone}}</td>
                                            <td>{{$user->user_active}}</td>
                                            <td>{{$user->user_totp}}</td>
                                            <td>{{$user->created_at}}</td>
                                            <td><a type="submit"  class="donate_now btn btn-info generalDonation" style="font-size:14px"
                                                                                                           href="{{route('user_cards',$user->id)}}">Cards details</a>
                                            </td>
                                            <td><a type="submit"  class="donate_now btn btn-primary generalDonation" style="font-size:14px"
                                                                                                           href="{{route('user_transactions',$user->id)}}">Transactions details</a>
                                            </td>
                                            <td><a data-title="users" data-url="{{ route('users.edit',$user->id) }}" class="btn btn-primary"><i class="fas fa-edit text-white"></i></a></td>
                                            <td><a class="btn btn-danger" href="{{route('users.delete',$user->id)}}"><i class="fas fa-trash text-white"></i></a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {!! $users !!}
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div><!--/. container-fluid -->
    </section>
@endsection

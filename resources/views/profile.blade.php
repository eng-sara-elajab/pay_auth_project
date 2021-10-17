@extends('layouts.auth')

@section('content')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">

                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <div class="col-md-12">
                        <!-- MAP & BOX PANE -->
                        <div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h1 class="text-dark">Edit Profile</h1>
                                        </div>
                                    </div>
                                </div><br>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <!-- Card -->
                                            <div class="card">

                                                <!-- Card body -->
                                                <div class="card-body">

                                                    <!-- Material form register -->
                                                    <form enctype="multipart/form-data" action="/profile" method="POST">

                                                        <!-- Material input text -->
                                                        <div class="md-form">
                                                            <i class="fa fa-user prefix grey-text"></i>
                                                            <label for="materialFormCardNameEx" class="font-weight-light">Your name</label>
                                                            <input type="text" id="materialFormCardNameEx" class="form-control" name="name" value="{{$admin->name}}">
                                                        </div>

                                                        <!-- Material input email -->
                                                        <div class="md-form">
                                                            <i class="fa fa-envelope prefix grey-text"></i>
                                                            <label for="materialFormCardEmailEx" class="font-weight-light">Your email</label>
                                                            <input type="email" id="materialFormCardEmailEx" class="form-control" name="email" value="{{$admin->email}}">
                                                        </div>

                                                        <figure class="figure">
                                                            <img src="/uploads/avatars/{{$admin->avatar}}" class="figure-img img-fluid rounded" style="width:150px;height:150px;float:left;boarder-radius:50%;margin-right:25px">
                                                        </figure><br>
                                                        <label>Update profile photo</label><br>
                                                        <input type="file" name="avatar" value="{{$admin->avatar}}"><br>
                                                        <input type="hidden" name="_token" value="{{csrf_token()}}"><br><br>

                                                        <!-- Material input password -->
                                                        <div class="md-form">
                                                            <i class="fa fa-key" aria-hidden="true"></i>
                                                            <label for="materialFormCardPasswordEx" class="font-weight-light">Your password</label>
                                                            <input type="password" id="materialFormCardPasswordEx" class="form-control" name="password">
                                                        </div>

                                                        <!-- Material input password -->
                                                        <div class="md-form">
                                                            <i class="fas fa-check"></i>
                                                            <label for="materialFormCardConfirmEx" class="font-weight-light">Confirm your password</label>
                                                            <input type="password" id="materialFormCardConfirmEx" class="form-control" name="password_confirmation">
                                                        </div>

                                                        <div class="py-4 mt-3">
                                                            <button class="btn btn-primary" type="submit">Confirm</button>
                                                        </div>
                                                    </form>
                                                    <!-- Material form register -->

                                                </div>
                                                <!-- Card body -->

                                            </div>
                                            <!-- Card -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/. container-fluid -->
        </section>
@endsection

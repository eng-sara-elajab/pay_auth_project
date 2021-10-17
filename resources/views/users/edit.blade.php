<div class="modal-header" id="divColor">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
    <h4 class="modal-title viewT" >Edit user</h4>
</div>
<br>

<div class="modal-padding">
    <form action="{{route('users.update',$user->id)}}" method="post">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-body">
            <div class="row">
                <div class="md-form">
                    <i class="fa fa-user prefix grey-text"></i>
                    <label for="materialFormCardNameEx" class="font-weight-light">Username</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="user_name" value="{{$user->user_name}}">
                </div>

                <div class="md-form">
                    <i class="fas fa-phone prefix grey-text"></i>
                    <label for="materialFormCardEmailEx" class="font-weight-light">Telephone</label>
                    <input type="tel" id="materialFormCardEmailEx" class="form-control" name="user_phone" value="{{$user->user_phone}}">
                </div>

                <div class="md-form">
                    <i class="fas fa-credit-card prefix grey-text"></i>
                    <label for="materialFormCardNameEx" class="font-weight-light">TOTP</label>
                    <input type="text" id="materialFormCardNameEx" class="form-control" name="user_totp" value="{{$user->user_totp}}">
                </div>

                <div class="md-form">
                    <i class="fas fa-key prefix grey-text"></i>
                    <label for="materialFormCardEmailEx" class="font-weight-light">Password</label>
                    <input type="password" id="materialFormCardEmailEx" class="form-control" name="user_password" value="{{$user->user_password}}">
                </div>

            </div>

            </div>
            <div class="modal-footer">
                <button id="btnDonate" class="btn btn-primary" type="submit">Save</button>
                {{--<a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary Btn-fixed-width"> {{__('pos.stores-management.product-advanceEdit')}}</a>--}}
            </div>
        </div>
    </form>
</div>

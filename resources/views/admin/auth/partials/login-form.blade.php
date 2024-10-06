{!! Form::open(['route' => 'admin.login.submit', 'class' => 'card-body pt-3', 'id' => 'login', 'name' => 'login']) !!}
<div class="form-group">
    {!! Form::label('phone', 'Số Điện Thoại', ['class' => 'form-label']) !!}
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-envelope" aria-hidden="true" style="width: 19px"></i></span>
        </div>
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '0987654321']) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('password', 'Mật Khẩu', ['class' => 'form-label']) !!}
    <div class="input-group mb-4">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-eye-slash" aria-hidden="true"></i></span>
        </div>
        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Mật Khẩu']) !!}
    </div>
</div>

<div class="form-group">
    <div class="custom-control custom-checkbox">
        {!! Form::checkbox('remember_me', '1', false, ['class' => 'custom-control-input', 'id' => 'remember_me']) !!}
        {!! Form::label('remember_me', 'Remember me', ['class' => 'custom-control-label']) !!}
    </div>
</div>

<div class="submit">
    {!! Form::submit('Đăng nhập', ['class' => 'btn btn-primary btn-block']) !!}
</div>

{{--<div class="text-center mt-3">--}}
{{--    <p class="mb-2">{!! link_to_route('admin.password.forgot', 'Forgot Password') !!}</p>--}}
{{--</div>--}}

{!! Form::close() !!}

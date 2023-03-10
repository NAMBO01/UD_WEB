<div class="container">
    <div class="account_grid">
        <div class="login-right">
            <h3>ĐĂNG NHẬP</h3>
            <p>Nếu đã có tài khoản, vui lòng đăng nhập</p>
            @if ($errors->first())
                <div class="error_message panel panel-danger">
                    <div class="panel-heading">Vui lòng kiểm tra lỗi</div>
                    @foreach ($errors->all() as $message_error)
                        <div class="panel-body item_message text-danger">{{ $message_error }}</div>
                    @endforeach
                </div>
            @endif
            @if ($errors->loginErrors->first())
                <div class="error_message panel panel-danger">
                    <div class="panel-heading">Vui lòng kiểm tra lỗi</div>
                    @foreach ($errors->loginErrors->all() as $error)
                        <div class="panel-body item_message text-danger">{{ $error }}</div>
                    @endforeach
                </div>
            @endif
            {!! Form::open(['route' => 'loginAccount', 'class' => 'form_dang_nhap']) !!}
            <!-- Email -->
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}

            <!-- password -->
            {!! Form::label('password', 'Password') !!}
            {!! Form::password('password', ['class' => 'form-control']) !!}


            <div class="register-but">
                <a class="forgot" href="#">Quên mật khẩu?</a>
                {!! Form::submit('Đăng nhập', ['class' => 'btn btn-primary']) !!}
            </div>
            {!! Form::close() !!}
        </div>
        <div class="login-left">
            <h3>Dành cho khách hàng mới</h3>
            <p>
                Tạo tài khoản để có thể sử dụng nhiều tính năng mua sắm tiện ích mới nhất của cửa hàng chúng tôi
            </p>
            <a class="acount-btn" href="/register">Tạo tài khoản mới</a>
        </div>
        <div class="clearfix"></div>
    </div>
    @include('modules.mod_sub_cate');
    <div class="clearfix"></div>
</div>

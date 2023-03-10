<?php
// Form::macro('colorfield', function($name)
// {
//     return '<input name="'. $name .'" type="color">';
// });

// foreach ($errors->all() as $message) {
//     echo $message;
// }

//$errors->first();
?>
<div class="container">
    <div class="register">
        <div class="register-top-grid">
            <h3>THÔNG TIN ĐĂNG KÝ</h3>
            @if ($errors->first())
                <div class="error_message panel panel-danger">
                    <div class="panel-heading">Vui lòng kiểm tra lỗi</div>
                    @foreach ($errors->all() as $message_error)
                        <div class="panel-body item_message text-danger">{{ $message_error }}</div>
                    @endforeach
                </div>
            @endif

            <div class="mation">
                {!! Form::open(['route' => 'saveCreateNewAccount', 'class' => 'register_form', 'files' => true]) !!}

                <!-- name -->
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}

                <!-- username -->
                {!! Form::label('username', 'Username') !!}
                {!! Form::text('username', null, ['class' => 'form-control']) !!}

                <!-- password -->
                {!! Form::label('password', 'Password') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}

                <!-- password -->
                {!! Form::label('password_confirmation', 'Confirmed Password') !!}
                {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}

                <!-- Email -->
                {!! Form::label('email', 'Email') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}

                <!-- ngày sinh -->
                {!! Form::label('date_of_birth', 'Date of Birth') !!}
                {!! Form::date('date_of_birth', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}

                <!-- Giới tính -->
                {!! Form::label('sex', 'Sex') !!}
                {!! Form::radio('sex', 1, true, ['id' => 'nu']) !!}
                {!! Form::label('nu', 'Nữ') !!}
                {!! Form::radio('sex', 0, false, ['id' => 'nam']) !!}
                {!! Form::label('nam', 'Nam') !!}

                {{-- {!! Form::colorfield('test') !!} --}}
                <div class="register-but">
                    {!! Form::submit('Đăng ký', ['class' => 'btn btn-primary']) !!}
                </div>

                {!! Form::close() !!}
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
    </div>
    @include('modules.mod_sub_cate')
</div>

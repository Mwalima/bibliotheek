<!doctype html>
<html>
<head>
    @include('partials.head')
</head>
<!-- Header -->
<header class="masthead">

    @include('partials.nav')
</header>
<body>
        <div class="col-sm-6 col-lg-6">
            <div id="register-wraper">
                <form id="register-form" class="form">
                    <legend>User Login</legend>

                    <div class="body">
                        {{ Form::open(array('url' => 'login')) }}

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            {!! Form::label('Email:') !!}
                            {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            {!! Form::label('Password:') !!}
                            {!! Form::password('password', old('password'), ['class'=>'form-control', 'placeholder'=>'create password']) !!}
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success">Register!</button>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="footerwrap">
    @include('partials.footer')
</div><!-- /footerwrap -->
</body></html>
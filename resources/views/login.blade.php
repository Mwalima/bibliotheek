<!doctype html>
<html>
<head>
    @include('partials.header')
</head>
<body>
<div class="navbar-nav navbar-inverse navbar-fixed-top">
    @include('partials.nav_menu')
</div>
<div class="container">
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
        @if(Session::has('failure'))
            <div class="alert alert-failure">
                {{ Session::get('failure') }}
            </div>
        @endif
        <div class="col-sm-6 col-lg-6">
            <div id="register-wraper">
                <form id="register-form" class="form">
                    <legend>User Register</legend>

                    <div class="body">
                        {!! Form::open(['route'=>'users.store']) !!}

                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            {!! Form::label('Name:') !!}
                            {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('lastname') ? 'has-error' : '' }}">
                            {!! Form::label('Lastname:') !!}
                            {!! Form::text('lastname', old('lastname'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
                            <span class="text-danger">{{ $errors->first('lastname') }}</span>
                        </div>

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
                        <div class="form-group {{ $errors->has('street') ? 'has-error' : '' }}">
                            {!! Form::label('Street:') !!}
                            {!! Form::text('street', old('street'), ['class'=>'form-control', 'placeholder'=>'Enter streetname']) !!}
                            <span class="text-danger">{{ $errors->first('street') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('housenumber') ? 'has-error' : '' }}">
                            {!! Form::label('Housenumber:') !!}
                            {!! Form::text('housenumber', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter housenumber']) !!}
                            <span class="text-danger">{{ $errors->first('housenumber') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('zipcode') ? 'has-error' : '' }}">
                            {!! Form::label('Zipcode:') !!}
                            {!! Form::text('zipcode', old('zipcode'), ['class'=>'form-control', 'placeholder'=>'Enter zipcode']) !!}
                            <span class="text-danger">{{ $errors->first('street') }}</span>
                        </div>

                        <div class="form-group {{ $errors->has('city') ? 'has-error' : '' }}">
                            {!! Form::label('City:') !!}
                            {!! Form::text('city', old('city'), ['class'=>'form-control', 'placeholder'=>'Enter cityname']) !!}
                            <span class="text-danger">{{ $errors->first('city') }}</span>
                        </div>
                        <div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
                            {!! Form::label('Country:') !!}
                            {!! Form::text('country', old('country'), ['class'=>'form-control', 'placeholder'=>'Enter Country if differnt then NL']) !!}
                            <span class="text-danger">{{ $errors->first('country') }}</span>
                        </div>
                        <label class="checkbox inline">
                            <input type="checkbox" id="inlineCheckbox1" value="option1"> I agree with the terms &amp; conditions
                        </label>
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
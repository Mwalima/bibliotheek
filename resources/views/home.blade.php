<!doctype html>
<html>
<head>
    @include('partials.head')
</head>
<header>
    @include('partials.header2')
</header>
@include('partials.nav')
<body>
<div class="container">
    @guest
        <li><a href="{{ route('login') }}">Login</a></li>
        <li><a href="{{ route('register') }}">Register</a></li>
    @else
        <div class="form-group">
            <h2>Welcome {{ Auth::user()->name }} </h2>
            @endguest
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>
                        <div class="panel-body">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                            You are logged in!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="/boeken_cms">boek modificatie</a>
</div>
</div>
</body>
<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>


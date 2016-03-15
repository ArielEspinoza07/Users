<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	  <link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap-theme.min.css')}}">

    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{asset('css/main.css')}}" media="screen" title="no title" charset="utf-8">
    @yield('css')
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                @if(Auth::guest())
                <a class="navbar-brand" href="{{ url('/') }}">
                    Laravel
                </a>
                @else
                <a class="navbar-brand" href="{{ url('/home') }}">
                    Admin Panel
                </a>
                @endif
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->

                @include('layouts.partial.menu')

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @include('layouts.partial.login')
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          @include('flash::message')
        </div>
      </div>
    </div>
    <div class="container">
      <div class="col-md-12">
        @include('layouts.partial.errors')
      </div>
    </div>
    @yield('content')


    <!-- JavaScripts -->
    <script src="{{asset('plugins/jquery/js/jquery.js')}}"></script>
	  <script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('js')
</body>
</html>

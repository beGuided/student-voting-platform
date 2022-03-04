<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
   

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css">

   
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li> --}}
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            <a class="dropdown-item" id="logout-button" href="#">
                                {{ __('Logout') }}
                            </a>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">

            @auth
            <div class="mx-4">

                @if(session()->has('success'))
                    <div class=" alert alert-success">
                      {{session()->get('success')}}
                    </div>
                @endif

                @if(session()->has('error'))
                    <div class=" alert alert-danger">
                      {{session()->get('error')}}
                    </div>
                @endif

                <div class="row">
                    <div class="col-md-3">
                        <ul class="list-group">
                            <li class="list-group-item mb-1">
                                <a href="{{route('voters.index')}}">Dashboard</a>
                            </li>         
                         <li class="list-group-item  mb-1">
                            <a href="{{route('candidates.index')}}">Candidate</a>
                        </li>    
                        <li class="list-group-item mb-1">
                            <a href="{{route('categories.index')}}">Categories</a>
                        </li>
                        {{-- <li class="list-group-item">
                            <a href="{{route('voters.index')}}">Voters</a>
                        </li> --}}

                        <li class="list-group-item mb-1">
                            <a href="{{route('platform-users.index')}}">Users</a>
                        </li>
                        </ul>
                        <ul class="list-group mt-5">
                            @if(auth()->user()->isAdmin())
                            <li class="list-group-item">
                                <a href="{{route('votes.index')}}">votes</a>
                            </li>
                            @endif
                            
                        </ul>                    
    
                    </div>
                    <div class="col-md-9">
                        @yield('content')
                    </div>
                </div>
            </div>
                @else
                @yield('content')
            @endauth
           
        </main>
    </div>
  

@yield('scripts')
<script src="{{ asset('js/app.js') }}" ></script>   

{{-- <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script> --}}

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"  crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>

<script>
    $('#logout-button').on('click', function(e) {
    e.preventDefault();
    $('#logout-form').submit();
});
</script>
</body>
</html>

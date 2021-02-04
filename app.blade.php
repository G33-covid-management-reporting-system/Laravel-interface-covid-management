<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'COV   ID19 APP') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <style>
        .positioning{
            position:sticky !important;
            top: 0;
            z-index: 100;
            background:white;
        }
        .navbar-nav ml-auto{
            background:white;
            color:white;

        }
    </style>
    <div id="app">
    

        <div class="positioning">
            <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm ">
                <div class="box">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'COVID19 APP') }}
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
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif
                                
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                    </li>
                                @endif
                            @else
                                 @if(Auth::user()->role === 'Director')
                                    <a href="{{ route('patientlist') }}" 
                                            class="nav-link">Enrolled Patients</a>
                                    <a href="{{ route('money') }}" 
                                    class="nav-link">Distributed Money</a>
                                    <a href="{{ route('graphs') }}" 
                                    class="nav-link">Graphs</a>
                                    <a href="{{ route('graphical') }}" 
                                        class="nav-link">Charts</a>
                                <li class="nav-item dropdown">
    
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endif
                                 @if (Auth::user()->role === 'Administrator')
                                    <a class="nav-link" href="{{ route('registerofficer') }}">Register Health Officer</a>
                                    <a class="nav-link" href="{{ route('registerdonormoney') }}">Donated Funds</a>
                                    <a class="nav-link" href="{{ route('patientlist') }}">Enrolled Patients</a>
                                    <a class="nav-link" href="{{ route('money') }}" >Distributed Funds</a>
                                    <a class="nav-link" href="{{ route('graphs') }}">Graphs</a>
                                    <a class="nav-link" href="{{ route('graphical') }}">Charts</a>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }}
                                    </a>
                                 <li class="nav-item dropdown">    
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
    
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
    
                                    </div>
                                </li>
                                 @endif
                                
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>
    

        </div>
        
        <main >
            @yield('content')
        </main>
    </div>
</body>
</html>

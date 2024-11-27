<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'NaturalY') }}</title>

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    {{-- Font-awsome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Google Fonts で IM FELL French Canon SC をインポート -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IM+Fell+French+Canon+SC&family=Noto+Sans+JP:wght@100..900&display=swap" rel="stylesheet">
    {{-- css --}}
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <style>
    .brand-text {
        text-shadow: 0px 4px 8px rgba(0, 0, 0, 0.25);
        -webkit-text-stroke-width: 1;
        -webkit-text-stroke-color: #9A9A9A;
        font-family: "HiraMinProN-W6";
        font-size: 3rem;
        font-style: normal;
        font-weight: 700;
        line-height: 100%; /* 80px */
        letter-spacing: 4px;
        background-image: linear-gradient(180deg, #6cc859 0%, #cecdcd 70%, #965500 100%);
        -webkit-background-clip: text; 
        -webkit-text-fill-color: transparent; 
        -webkit-text-stroke: 0.5px black;
    }

    .nav-text{
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 1);
        font-weight: 600;
        font-size: 1rem;
        -webkit-text-stroke: 0.2px black;
        color: white;
        font-family: Raleway;
    }
    .nav-icon{
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 1);
        -webkit-text-stroke: 0.2px black;
        color: white;
        font-size: 1.5rem;
    }
    #login-link:hover {
    
    }
    .nav-link.right-item {
    display: flex;
    align-items: center;
    flex-direction: column;
    }
    .nav-link.right-item:hover {
    color: red; 
    text-shadow: 2px 2px 5px rgba(255, 0, 0, 0.7);
    transform: scale(1.2); 
    transition: all 0.4s ease; 
    }

    @keyframes shake {
    0% { transform: translate(0, 0) rotate(0deg); }
    20% { transform: translate(-2px, 1px) rotate(-1deg); }
    40% { transform: translate(2px, -1px) rotate(1deg); }
    60% { transform: translate(-1px, -2px) rotate(-1deg); }
    80% { transform: translate(1px, 2px) rotate(1deg); }
    100% { transform: translate(0, 0) rotate(0deg); }
    }
    .logo:hover {
    animation: shake 0.4s ease-in-out;
    /* animationの設定 (0.5秒間、ease-in-outでアニメーション) */
    }  

    </style>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="bg-consumer">
    <div id="app" >
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background:#FFF5E8;">
            <div class="container">
                <a class="navbar-brand logo" href="{{ url('/') }}" style="display: flex; align-items:center;">
                    <img src="{{ asset('storage/images/logo.png') }}" alt="NaturalY Logo" style="height: 55px; margin-right: 10px; filter: drop-shadow(2px 2px 6px rgba(0, 0, 0, 0.5));">
                    <span class="brand-text">NaturalY</span>
                </a>                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link right-item" href="{{ route('login') }}" id="login-link">
                                        <i class="fa-solid fa-right-to-bracket nav-icon"></i>
                                        <span class="nav-text">
                                            {{ __('Login') }}
                                        </span>
                                    </a>                                  
                                </li>
                            @endif

                            @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link right-item" href="{{ route('register') }}">
                                    <i class="fa-solid fa-user-plus nav-icon"></i>
                                    <span class="nav-text">
                                        {{ __('Register') }}
                                    </span>
                                </a>                                    
                            </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>

        <footer class="container-fluid mt-4 text-center">
            <div class="row py-2" style="background-color: #cecdcd">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="px-4 link-secondary fs-1" href="#"><i class="fa-brands fa-instagram"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="px-4 link-secondary fs-1" href="#"><i class="fa-brands fa-facebook"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="px-4 link-secondary fs-1" href="#"><i class="fa-brands fa-youtube"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="px-4 link-secondary fs-1" href="#"><i class="fa-brands fa-line"></i></a>
                    </li>
                </ul>
                <small>&copy; 2024 Natural Yield Market</small>
            </div>
        </footer>

    </div>
</body>
</html>
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
    html, body {
        height: 100%; /* ページ全体の高さを100%に設定 */
        margin: 0; /* デフォルトの余白を削除 */
    }
    

    #app {
        display: flex;
        flex-direction: column;
        min-height: 100%; /* コンテンツが少ない場合でもページ全体を覆う */
    }

    main {
        flex: 1; /* メインコンテンツを拡張してフッターを下に押し出す */
    }

    footer {
        background-color: #cecdcd;
        text-align: center;
        padding: 10px 0; /* フッターの余白 */
    }

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
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background:#c36c6c;">
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
                        <li class="my-auto me-5 nav-text">Hello, <span class="fw-bold">{{ Auth::user()->name }}</span> san!!</li>

                        {{-- Cart --}}
                        <li class="nav-item  me-2">
                            <a class="nav-link mx-auto text-center" href="#" role="button" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="fa-solid fa-cart-shopping fs-3 nav-item nav-icon"></i><br>
                                <span class="nav-text">Cart</span>
                            </a>
                        </li>
                        
                        
                        {{-- Hamburger --}}
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link mx-auto text-center" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fa-solid fa-burger fs-3 nav-item nav-icon"></i><br>
                                    <span class="nav-text">Menu</span>
                                </a>

                            
                                <div class="dropdown-menu dropdown-menu-end py-3 px-4" aria-labelledby="navbarDropdown">
                                    <!-- User Icon and Name (Centered Horizontally) -->
                                    <a class="dropdown-item d-flex align-items-center justify-content-center py-1" href="#" style="gap: 10px;">
                                        <svg width="86" height="85" viewBox="0 0 86 85" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M43 81.4584C23.319 77.0845 7.58337 58.5155 7.58337 38.9584V17.7084L43 3.54175L78.4167 17.7084V38.9584C78.4167 58.5226 62.6811 77.0845 43 81.4584ZM14.6667 21.2501V38.9584C14.8691 47.1472 17.7492 55.0441 22.8663 61.4404C27.9834 67.8367 35.0554 72.3801 43 74.3751C50.9447 72.3801 58.0167 67.8367 63.1338 61.4404C68.2508 55.0441 71.131 47.1472 71.3334 38.9584V21.2501L43 10.6251L14.6667 21.2501Z" fill="#B93030"/>
                                            <path d="M43 38.9583C47.8901 38.9583 51.8542 34.9942 51.8542 30.1042C51.8542 25.2141 47.8901 21.25 43 21.25C38.11 21.25 34.1459 25.2141 34.1459 30.1042C34.1459 34.9942 38.11 38.9583 43 38.9583Z" fill="#B93030"/>
                                            <path d="M25.2916 53.125C27.0367 56.3066 29.5961 58.9672 32.7078 60.8342C35.8194 62.7012 39.3714 63.7075 43 63.75C46.6285 63.7075 50.1805 62.7012 53.2921 60.8342C56.4038 58.9672 58.9632 56.3066 60.7083 53.125C60.6198 46.41 48.872 42.5 43 42.5C37.096 42.5 25.3802 46.41 25.2916 53.125Z" fill="#B93030"/>
                                        </svg>
                                        <span class="fs-5 text-secondary">{{ Auth::user()->name }}</span>
                                    </a>
                                    <hr>
                            
                                    <!-- Menu Items -->
                                    <div class="row text-center">
                                        {{-- Consumer Management --}}
                                        <div class="col-6 d-flex flex-column align-items-center">
                                            <a href="{{ route('admin.consumer.management') }}" class="dropdown-item p-0">
                                                <svg width="56" height="55" viewBox="0 0 56 55" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_374_3574)">
                                                    <g filter="url(#filter0_d_374_3574)">
                                                    <path d="M51.8914 36.6867C51.7302 36.5007 51.5309 36.3515 51.307 36.2492C51.0831 36.1469 50.8399 36.0939 50.5938 36.0938H47.1562V32.6562C47.1562 30.7622 45.6145 29.2188 43.7188 29.2188H36.8438C34.948 29.2188 33.4062 30.7622 33.4062 32.6562V36.0938H29.9688C29.7224 36.0937 29.4789 36.1466 29.2548 36.2489C29.0307 36.3512 28.8312 36.5005 28.6698 36.6867C28.5085 36.8728 28.389 37.0915 28.3195 37.3278C28.2501 37.5642 28.2322 37.8127 28.2672 38.0566L29.9859 50.0878C30.0447 50.4972 30.2491 50.8717 30.5616 51.1426C30.8742 51.4135 31.2739 51.5626 31.6875 51.5625H48.875C49.2886 51.5626 49.6883 51.4135 50.0009 51.1426C50.3134 50.8717 50.5178 50.4972 50.5766 50.0878L52.2953 38.0566C52.3301 37.8126 52.3121 37.5641 52.2424 37.3277C52.1727 37.0914 52.053 36.8728 51.8914 36.6867ZM36.8438 32.6562H43.7188V36.0938H36.8438V32.6562ZM47.3848 48.125H33.1777L31.9505 39.5312H48.612L47.3848 48.125ZM17.9375 34.375H21.375V51.5625H17.9375V34.375Z" fill="#0D7BCC"/>
                                                    </g>
                                                    <g filter="url(#filter1_d_374_3574)">
                                                    <path d="M29.5906 30.7227L26.3147 26.6252L23.8363 20.4291C23.4555 19.4707 22.7952 18.649 21.9412 18.0709C21.0872 17.4928 20.0791 17.185 19.0478 17.1875H9.34375C6.50094 17.1875 4.1875 19.5009 4.1875 22.3438V34.375C4.1875 36.2708 5.72922 37.8125 7.625 37.8125H9.34375V51.5625H12.7813V34.375H7.625V22.3438C7.625 21.8879 7.80608 21.4507 8.12841 21.1284C8.45074 20.8061 8.88791 20.625 9.34375 20.625H19.0478C19.7542 20.625 20.3816 21.0495 20.6428 21.7061L23.4702 28.5742L26.9077 32.8711L29.5906 30.7227ZM7.625 8.59375C7.625 4.80219 10.7084 1.71875 14.5 1.71875C18.2916 1.71875 21.375 4.80219 21.375 8.59375C21.375 12.3853 18.2916 15.4688 14.5 15.4688C10.7084 15.4688 7.625 12.3853 7.625 8.59375ZM11.0625 8.59375C11.0625 10.4895 12.6042 12.0312 14.5 12.0312C16.3958 12.0312 17.9375 10.4895 17.9375 8.59375C17.9375 6.69797 16.3958 5.15625 14.5 5.15625C12.6042 5.15625 11.0625 6.69797 11.0625 8.59375Z" fill="#0D7BCC"/>
                                                    </g>
                                                    </g>
                                                    <defs>
                                                    <filter id="filter0_d_374_3574" x="13.9375" y="29.2188" width="42.375" height="30.3438" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                    <feOffset dy="4"/>
                                                    <feGaussianBlur stdDeviation="2"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3574"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3574" result="shape"/>
                                                    </filter>
                                                    <filter id="filter1_d_374_3574" x="0.1875" y="1.71875" width="33.4031" height="57.8438" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                    <feOffset dy="4"/>
                                                    <feGaussianBlur stdDeviation="2"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3574"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3574" result="shape"/>
                                                    </filter>
                                                    <clipPath id="clip0_374_3574">
                                                    <rect width="55" height="55" fill="white" transform="translate(0.75)"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                                <p class="text-secondary mt-1 mb-0">Consumer <br> Management</p>
                                            </a>
                                        </div>
                                        {{-- Farm Management --}}
                                        <div class="col-6 d-flex flex-column align-items-center">
                                            <a href="{{ route('admin.farm.management') }}" class="dropdown-item p-0">
                                                <svg width="57" height="57" viewBox="0 0 57 57" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <g clip-path="url(#clip0_374_3578)">
                                                    <g filter="url(#filter0_d_374_3578)">
                                                    <path d="M19.4166 33.25V10.6875C19.4166 9.11278 18.802 7.60255 17.7081 6.48905C16.6141 5.37556 15.1304 4.75 13.5833 4.75C12.0362 4.75 10.5525 5.37556 9.4585 6.48905C8.36454 7.60255 7.74996 9.11278 7.74996 10.6875V33.25M19.4166 19L33.4166 7.125L52.0833 21.375M47.4166 9.5V33.25M28.75 33.25H38.0833V23.75H28.75V33.25ZM28.75 33.25L17.0833 52.25M5.41663 33.25H52.0833M5.41663 52.25L17.0833 33.25M52.0833 52.25H28.75L40.4166 33.25M35.75 42.75H52.0833" stroke="#70B563" stroke-width="4" stroke-linecap="round" stroke-linejoin="round" shape-rendering="crispEdges"/>
                                                    </g>
                                                    </g>
                                                    <defs>
                                                    <filter id="filter0_d_374_3578" x="-0.583618" y="2.75" width="58.667" height="59.5002" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                                    <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                                    <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                                    <feOffset dy="4"/>
                                                    <feGaussianBlur stdDeviation="2"/>
                                                    <feComposite in2="hardAlpha" operator="out"/>
                                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_374_3578"/>
                                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_374_3578" result="shape"/>
                                                    </filter>
                                                    <clipPath id="clip0_374_3578">
                                                    <rect width="56" height="57" fill="white" transform="translate(0.75)"/>
                                                    </clipPath>
                                                    </defs>
                                                </svg>
                                                <p class="text-secondary mt-1 mb-0">Farm <br> Management</p>
                                            </a>
                                        </div>
                                    </div>
                                    
                                    <div class="row text-center mt-3">
                                        {{-- Item Management --}}
                                        <div class="col-6 d-flex flex-column align-items-center">
                                            <a href="{{ route('admin.item.management') }}" class="dropdown-item p-0">
                                                <i class="fa-regular fa-lemon icon-sm text-warning"></i>
                                                <p class="text-secondary mt-1 mb-0">Item <br> Management</p>
                                            </a>
                                        </div>
                                        {{-- Analysis --}}
                                        <div class="col-6 d-flex flex-column align-items-center">
                                            <a href="{{ route('admin.analysis') }}" class="dropdown-item p-0">
                                                <i class="fa-solid fa-chart-line icon-sm text-danger"></i>
                                                <p class="text-secondary mt-1 mb-0">Analysis</p>
                                            </a>
                                        </div>
                                    </div>
                                    <hr>
                            
                                    <!-- Logout -->
                                    <a class="dropdown-item d-flex align-items-center justify-content-center" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <i class="fa-solid fa-right-from-bracket text-secondary icon-sm"></i>
                                            <span class="text-secondary mt-1 mb-0 ms-2">{{ __('Logout') }}</span>
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

        <main class="py-4" style="background:#f6e5e5;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-9">
                        @yield('content')
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div class="container-fluid text-center">
                <div class="row">
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
                    <small class="text-muted">&copy; 2024 Natural Yield Market</small>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @stack('scripts')

    <script src="{{ asset('js/chart/number-of-customers-and-farmers.js') }}"></script>
    <script src="{{ asset('js/chart/number-of-purchase.js') }}"></script>
    <script src="{{ asset('js/chart/number-of-sales.js') }}"></script>
    <script src="{{ asset('js/chart/number-of-user-bys.js') }}"></script>
</body>
</html>

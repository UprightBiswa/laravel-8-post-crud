<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            margin-bottom: 1rem;
        }

        th,
        td {
            border: 1px solid #328de7;
            padding: 0.75rem;
            vertical-align: middle;
        }

        th {
            background-color: #e4e279;
            font-weight: bold;
            text-align: center;
        }

        td {
            text-align: center;
        }

        .table-responsive {
            overflow-x: auto;
        }

        .form-control {
            border-radius: 0;
            border-color: #ced4da;
        }

        .form-control-lg {
            font-size: 1.5rem;
        }

        .btn {
            border-radius: 0;
            font-size: 1.2rem;
        }

        .my-form {
            border: 1px solid #ccc;
            padding: 20px;
            border-radius: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
        }

        .form-label {
            font-size: 1.2rem;
            font-weight: bold;
        }

        .form-control {
            border-radius: 5px;
            border-color: #ccc;
        }

        .form-control-lg {
            font-size: 1.5rem;
        }

        .my-btn {
            border-radius: 5px;
            font-size: 1.2rem;
            background-color: #007bff;
            border-color: #007bff;
        }

        .my-btn:hover {
            background-color: #0069d9;
            border-color: #0062cc;
        }

        /* Define the background colors */
        body {
            background: linear-gradient(0deg,
                    #f0e130, #ff6347, #ffa07a, #00ffff,
                    #4169e1, #dda0dd, #7fffd4, #f0e130);
        }

        /* Set the initial opacity of the background */
        body:before {
            content: "";
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            opacity: 1;
        }

        /* Animate the opacity of the background */
        @keyframes animate-background {
            0% {
                opacity: 0;
            }

            12.5% {
                opacity: 1;
            }

            87.5% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        /* Apply the animation to the background */
        body:before {
            animation: zoom 1s ease-in-out infinite alternate;
        }


        /* Table color */
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 4px solid #46a6cc;
        }

        th {
            background-color: #a31a48b0;
            color: #fbff05;
        }
    </style>
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-danger shadow-sm">
            <div class="container">
                <a class="navbar-brand"  href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
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
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    </div>
</body>

</html>

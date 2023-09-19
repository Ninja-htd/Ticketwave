<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background:#125aeb;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="media/Ticketwave.png" width="90" alt="">
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
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Se connecter') }}</a>
                                </li> -->
                            @endif

                            @if (Route::has('register'))
                                <!-- <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __("S'inscrire") }}</a>
                                </li> -->
                            @endif
                        @else
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                                     <img src="media/logout.png" alt="" width="30"  id="deconnecter" style="position:relative; top: 15px;left: 35px; rotate: 1deg;">
                                    <h6 style="position:relative; top: 15px;" id="deconnecter"> Déconnection</h6>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
  <style>
    footer {
    background-color: #f2f2f2;
    padding: 30px;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  .social{
    position: relative;
    margin-top: -30px;
  }
  .social h3{
    font-size: 18px;
    text-decoration: underline;
    color: #125aeb;
  }
  .social .img1{
    position: absolute;
    left: 20px;
    top: 45px;
  }
  .social .img2{
    position: absolute;
    left: 91px;
    top: 43px;
  }
  .social .img3{
    position: absolute;
    left: 160px;
    top: 45px;
  }
  .social ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
  }
  .social li {
    margin-right: 10px;
    margin-top: -10px;
  }
  .social li:last-child {
    margin-right: 0;
  }
  .social a {
    color: #333;
    text-decoration: none;
  }
  .address p {
    margin: 0;
  }
  .address h3{
    font-size: 18px;
    text-decoration: underline;
    color: #125aeb;
  }
  div.copyright {
    text-align: center;
    margin-top: 20px;
    margin-right: 80px;
    color: #888;
    font-size: 1rem;
  }
  header span{
    color: #000;
    font-weight: 500;
}
header p{
    color: red;
    font-size: 15px;
    font-weight: 500;
    margin-top: 10px;
}
  </style>
</body>
</html>

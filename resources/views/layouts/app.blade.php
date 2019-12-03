<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Programming</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

<link href="{{asset('css/util.css')}}" rel="stylesheet">
        <link href="{{asset('css/main.css')}}" rel="stylesheet">


    <link rel="stylesheet" href="css/ionicons.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <style>
        .carousel-item {
  height: 66%;
  min-height: 450px;
  background: no-repeat center center scroll;
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

.carousel-inner img {
            width: 100%;
            height: 100%;
        }
.breadcrumb1
{
  width:122.7%;
  margin-left:-12%;
  margin-top:-4.3%;
  background-color:#ced4da;
    padding: 0.75rem 1rem;
}

.last
{
  margin-left:44%;
}
        </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}" style="margin-left:-10%;">
                   Welcome
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

               <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">

              <li class="nav-item">
                              <a class="nav-link" href="/">Home</a>
                            </li>
                             <li class="nav-item">
                                <a class="nav-link" href="/postss" >Create Post</a>
                              </li>

                         <!--  <li class="nav-item">
                              <a class="nav-link" href="/post">Post</a>
                            </li> -->
                            <li class="nav-item">
                                    <a class="nav-link" href="/contact">Contact</a>
                                  </li>
                          <li class="nav-item">
                            <a class="nav-link" href="/about">About</a>
                          </li>

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                              <a class="dropdown-item" href="/Dashboard">{{ __('Dashboard') }}</a>

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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main >
              @include('includes.message')
            @yield('content')
        </main>
    </div>
</body>
</html>

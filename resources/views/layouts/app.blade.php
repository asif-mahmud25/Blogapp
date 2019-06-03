<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <div class="site-header d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
            <h4 class="my-0 mr-md-auto font-weight-bold">{{config('app.name', 'Blogapp')}}</h4>
            <nav class="my-2 my-md-0 mr-md-3">
                <a class="p-3 text-dark" href="/">Home</a>
                <a class="p-3 text-dark" href="/about">About</a>
                <a class="p-3 text-dark" href="/services">Services</a>
                <a class="p-3 text-dark" href="/posts">Blog</a>
                
                
            
                
                

                
                   

                    <!-- Right Side Of Navbar -->
                    
                        <!-- Authentication Links -->
                        @guest
                        <a class="m-2 btn btn-outline-primary" href="{{ route('login')}}">Log in</a>
                            @if (Route::has('register'))
                            <a class="m-2 btn btn-outline-dark" href="{{ route('register')}}">Reginster</a>
                            @endif
                        @else
                            
                                    <a class="p-3 text-dark" href="/posts/create">Create Post</a>
                                    <a class="p-3 text-dark" href="/home">Dash Board</a>
                                    <a class="m-2 btn btn-outline-danger" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                
                            
                        @endguest
                    
                
           
            </nav>
        </div>
    </div>
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
       
        <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
        CKEDITOR.replace( 'article-ckeditor' );
        </script>
    
</body>
</html>

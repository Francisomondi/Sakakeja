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
    <script type="text/javascript" src="{{ url('js/jquery-1.8.3.min.js') }}"></script> 
    <script src="{{ asset('js/app.js') }}" defer></script>
  <script type="text/javascript" src="{{ url('js/bootstrap.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/style.css') }}">
</head>
<body>
    <div id="app">
            @include('includes.header')
        <main class="py-4">
                <div class="container">
                        
                        @include('includes.messages')
                            @yield('content')
            
                    </div> 
        </main>
    </div>
    @include('includes.footer')
</body>
</html>

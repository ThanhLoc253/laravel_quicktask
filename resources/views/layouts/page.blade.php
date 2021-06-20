<html>

<head>
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('style/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>

<body>
    @section('sidebar')

    @show
    <a href="{!! route('user.change-language', ['en']) !!}">{{ trans('message.english') }}</a>
    <a href="{!! route('user.change-language', ['vi']) !!}">{{ trans('message.vietnam') }}</a>
    <div class="container">
        @yield('content')
    </div>
</html>

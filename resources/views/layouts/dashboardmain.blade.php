<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ asset('/css/reset.css')}}">
    <link rel="stylesheet" href="{{ asset('/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/common.css')}}">
    <link rel="stylesheet" href="{{ asset('/css/dashboardmain.css')}}">
    <script src="{{ asset('/bootstrap/jquery-3.3.1.js') }}"></script>
    <script src="{{ asset('/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('/js/dashboardmain.js') }}"></script>
    <title>DsahBoard</title>
</head>
<body>
    <div id="app" class="app">
            @include('layouts.header')
        <div id="wrapper" class='wrapper'>
            @include('layouts.sidebar')
            <main class='contents'>
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>

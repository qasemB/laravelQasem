<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('css')

    <title>@yield('title' , 'home_page')</title>
</head>
<body>
<div class="container">
    @yield('content')
    {{$count}}
</div>

@section('script')
    <script type="'text/javascript" src="app.js"></script>
@show
</body>
</html>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    {{-- Bootstrap and Custom css --}}
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{--<script src="https://kit.fontawesome.com/1a2b46b32a.js" crossorigin="anonymous"></script>--}}
</head>

<body>
    <div id="app">
        @include('partial.navbar')

        @yield('content')
    </div>

    <script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/design.js')}}"></script>

</body>
</html>

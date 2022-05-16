<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

</head>
<body>

    {{-- Header --}}
    @include('Template/Partials.header')
    
      {{-- Content --}} 
      @yield('container')

    {{-- Footer --}}
    @include('Template/Partials.footer')

    <!-- JS Bootstrap -->
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    
    {{-- Jquery --}}
    <script src="{{ asset('JS/javascript.js') }}"></script>

    {{-- Custom JS --}}
    <script src="{{ asset('JS/main.js') }}"></script>

</body>
</html>
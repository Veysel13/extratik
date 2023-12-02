<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('frontend.layout.header')

    @stack('header')
</head>
<body>

@yield('content')

<x-success/>
<x-error/>

@include('frontend.modal.view')
@include('frontend.layout.footer')

@stack('footer')
</body>
</html>

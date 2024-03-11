<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--CSRF Token--}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link href="{{ URL::asset('images/favicon.svg') }}" rel="shortcut icon" type="image/png">

    <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    {{--Styles css common--}}
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    @yield('style-libraries')
    {{--Styles custom--}}
    @yield('styles')
</head>

<body >
    @include('partial.header')

    @yield('content')

    @include('partial.footer')

    {{--Scripts link to file or js custom--}}
    @yield('scripts')
</body>

</html>

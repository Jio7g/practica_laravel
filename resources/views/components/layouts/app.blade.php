<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>JioDev - @yield('title')</title>
    <meta name="description" content="{{ $metaDescription ?? 'default meta description' }}">
</head>
<body>
{{--@include('partials.navigation')--}}
<x-layouts.navigation />

@if(session('status'))   
        {{ session('status')}}
@endif

{{ $slot }}

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.styles')
    <meta name="description" content="">
    <!-- Title -->
    <title>@yield('title')</title>
</head>

<body>

    @include('partials/header')
    @yield('content')
    @include('partials.footer')
    @include('partials.scripts')
</body>

</html>
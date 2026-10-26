<!DOCTYPE html>
<html lang="en">

<head>
    @include('partials.landing.head')
</head>

<body>
    @include('partials.landing.header')

    <main>
        @yield('content')
    </main>

    @include('partials.landing.footer')

    @include('partials.landing.scripts')
</body>

</html>

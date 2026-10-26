<!DOCTYPE html>
<html lang="en" data-bs-theme="blue-theme">

<head>
    @include('partials.admin.head')
</head>

<body>
    @if (empty($auth))
        @include('partials.admin.header')

        <main class="main-wrapper">
            <div class="main-content">
                @yield('content')
            </div>
        </main>

        @include('partials.admin.footer')
    @else
        @yield('content')
    @endif

    @include('partials.admin.scripts')
</body>

</html>

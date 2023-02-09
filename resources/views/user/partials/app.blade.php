<!DOCTYPE html>
<html>

<head>
    @include('user.partials.head')
</head>

<body>
    <header class="header">
        <!-- Main Navbar-->
        @include('user.partials.nav')
    </header>
    @yield('content')
    <!-- Page Footer-->
    @include('user.partials.footer')
    @include('user.partials.script')
</body>

</html>

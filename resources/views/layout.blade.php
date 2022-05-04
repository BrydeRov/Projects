<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.styles')
</head>
<body>

    @include('partials.nav')

    @include('partials.session-status')

    <main class="">
        @yield('contenido')
    </main>
    
    @include('partials.scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.styles')
</head>
<body>

    @include('partials.nav')

    @include('partials.session-status')

    @yield('contenido')
    
    @include('partials.scripts')
</body>
</html>
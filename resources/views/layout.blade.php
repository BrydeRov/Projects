<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.styles')
</head>
<body>

    @include('partials.nav')

    @include('partials.session-status')

    <main class="mt-3">
        @yield('contenido')
    </main>
    
    @include('partials.scripts')
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.styles')
</head>
<body>

    @include('partials.nav')

    @yield('content')
    
    @include('partials.scripts')
</body>
</html>
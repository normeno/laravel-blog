<!DOCTYPE html>
<html>
    @include('layouts.partials.frontendheader')
    <body>
        @yield('content')
        @include('layouts.partials.frontendfooter')
        @include('layouts.partials.frontendscripts')
    </body>
</html>
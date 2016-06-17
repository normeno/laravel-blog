<!DOCTYPE html>
<html>
    @include('layouts.partials.frontendheader')
    <body>
        @include('layouts.partials.frontendhead')

        @include('layouts.partials.frontendtopslider')

        @yield('content')

        @include('layouts.partials.frontendfooter')

        @include('layouts.partials.frontendscripts')
    </body>
</html>
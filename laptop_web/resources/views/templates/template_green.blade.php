<html>

@include('widget.head')

<body>

    @include('widget.header')

    @include('widget.site_branding')

    @include('widget.menu')

    @yield('main-content')

    @include('widget.footer')

    @include('widget.script')


</body>

</html>
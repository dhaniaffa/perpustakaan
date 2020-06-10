<html>
@include('frontend.templates.partials.head')
<body>
@include('frontend.templates.partials.navigation')

<div class="container" style="margin-top: 30px">
    @yield('content')

</div>

@include('frontend.templates.partials.footer')

@include('frontend.templates.partials.scripts')

{{--Notifikasi Toast--}}
@include('frontend.templates.partials.toast')
</body>
</html>

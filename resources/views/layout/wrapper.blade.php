<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @include('layout.header')
    <body id="page-top">
        <div id="wrapper">
            @include('layout.sidebar')
            <div id="content-wrapper" class="d-flex flex-column">
                @include('layout.content')
                @include('layout.footer')
            </div>
        </div>
    </body>
</html>


<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $page_name }}</title>

        <link rel="stylesheet" href="{{ mix('/css/app.css') }}" />
    </head>
    <body>
        @include('partials.header')

        <div class="container" id="app">
            @yield('content')
        </div>

        @include('partials.footer')

        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/app.css') }}">
    <title>@yield('title', trans('navigation.title'))</title>
</head>

<body>
    <div id="app">
        @yield('content')

        @include('modals._all')
    </div>
    
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

    <script src="{{ mix('/js/app.js') }}"></script>
</body>

</html>
<html>
<head>
    <title>Nikopart</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="content-wrapper">
        @include('layouts.header')

        <main>
            @yield('content')
        </main>
    </div>

    @include('layouts.footer')
</body>
</html>
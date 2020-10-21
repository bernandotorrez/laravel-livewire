<!doctype html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Belajar Laravel</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sticky-footer-navbar/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/sticky-footer-navbar.css') }}" rel="stylesheet">

    @livewireStyles
</head>

<body class="d-flex flex-column h-100">
    @include('layouts.components.menu')

    <!-- Begin page content -->
    <main role="main" class="flex-shrink-0">
        <div class="container">
           {{ $slot }}
        </div>
    </main>

    @include('layouts.components.footer')

    <script src="{{ asset('js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>

    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" 
    data-turbolinks-eval="false"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>

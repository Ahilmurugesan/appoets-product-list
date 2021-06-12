<!DOCTYPE html>
<html>
<head>
    <meta charset=" utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title') </title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/logo/favicon.ico') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">
    <link href="/css/app.css" rel="stylesheet">
</head>
<body>
<!-- BEGIN: Content-->
<div class="container">
    <!-- BEGIN: Header-->
    {{-- Include Page Content --}}
    @yield('content')
</div>

@stack('scripts')
</body>

</html>

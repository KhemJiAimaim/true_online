<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/app.css">
    <link rel="stylesheet" href="/public/css/home.css">
    @vite('resources/css/app.css')
    <title>Document</title>

</head>

<body>
    @include('frontend.layouts.layout.head')
    @include('frontend.layouts.layout.banner')

    <div class="text-center">
        @yield('content')
    </div>

    <div class="sticky top-[100vh]">
        @include('frontend.layouts.layout.banner_footer')
        @include('frontend.layouts.layout.footer')
    </div>
</body>
<script></script>

</html>

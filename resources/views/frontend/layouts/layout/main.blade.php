<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="resources/css/app.css">
    @vite('resources/css/app.css')
    <title>Document</title>

</head>

<body>
    @include('frontend.layouts.layout.head')
    @include('frontend.layouts.layout.banner')

    <div class="text-center">
        @yield('content')
    </div>

    @include('frontend.layouts.layout.banner_footer')


</body>
<script></script>

</html>

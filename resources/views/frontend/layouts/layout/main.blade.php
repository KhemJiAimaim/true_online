<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    @include('frontend.layouts.layout.head')
    @include('frontend.layouts.layout.banner')
    <div class="py-32 text-center">
        @yield('content')
    </div>



</body>
<script></script>

</html>

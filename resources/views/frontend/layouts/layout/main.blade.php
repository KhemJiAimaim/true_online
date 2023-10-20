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

<body class="w-full">
    @include('frontend.layouts.layout.head')
    @include('frontend.layouts.layout.banner')

    <div class="text-center">
        @yield('content')
    </div>
    
    @include('frontend.layouts.layout.contact')
    
    <div class="sticky top-[100vh]">
        @include('frontend.layouts.layout.banner_footer')
        @include('frontend.layouts.layout.footer')
    </div> 

    @yield('scripts')
</body>


</html>

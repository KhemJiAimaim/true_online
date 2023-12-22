<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="resources/css/app.css"> --}}
    {{-- <link rel="stylesheet" href="/public/css/home.css"> --}}
    @vite('resources/css/app.css', 'resources/js/app.js')
    <title>True Online | @yield('title')</title>
    <meta name="description" content="คำอธิบายเนื้อหาเว็บไซต์">
    <meta name="keywords" content="true,true online,เบอร์มงคล,fiber">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('style')
</head>


<body class="w-full min-h-screen">

    @include('frontend.layouts.head')


    @php
        $array_path = ['thankyou', 'prepaid_sim/buy_sim', 'cartproduct'];
        
        if (!in_array(Request::path(), $array_path)) {
            echo view('frontend.layouts.banner');
        }
    @endphp



    <div class="main text-center">
        @yield('content')
    </div>

    @include('frontend.layouts.contact')

    <div class="sticky top-[100vh]">
        @if (Request::is('/'))
            @include('frontend.layouts.banner_footer')
        @endif
        @include('frontend.layouts.footer')
    </div>


    @yield('scripts')
    {{-- <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYXs0euMCEZ7Um37NqJfu8r9RkT5qlYk8&callback=initMap">
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>
</html>

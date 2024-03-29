@extends('frontend.layouts.main')
@section('content')
@section('style')
    <style>
        .thumnail {
            @apply opacity-50 hover:opacity-100 transition-opacity duration-300 ease-in-out;
        }

        .main {
            height: auto;
            min-height: 100% !important;
            display: flex;
            flex-direction: column;
            /* overflow-y: auto; */
        }
    </style>
@endsection
@php
    $data_option = array_filter(explode(',', $travel_sim->package_options));
@endphp
<div class="mt-[10%] max-xs:mt-[20%] ">
    <div class=" flex justify-center items-center  ">
        <div class="w-[1536px] max-2xl:max-w-[90%] grid grid-cols-1 xl:grid-cols-3  gap-4 m-3 ">

            <div class="bg-white w-full 2xl:h-[500px]  items-center px-4 lg:px-1 mb-6 relative">
                <div class="flex justify-center lg:mb-6 2xl:mb-2">
                    <img id="featured" src="/images/travel/Rectangle 1281 (1).png" alt=""
                        class="max-ex:w-[250px] max-ex:h-[250px] w-[370px] cursor-pointer pb-4 lg:pb-0 xl:pb-[1.5rem] ">
                </div>
                <div id="slide-wrapper" class="flex justify-center items-center">

                    <img id="slideLeft" class="arrow absolute left-0 cursor-pointer " src="/images/prev.png">

                    <div id="slider" class="flex gap-4 overflow-x-hidden mx-4 ">
                        <img src="/images/travel/Rectangle 1281 (1).png" alt=""
                            class="thumnail active w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">
                        @foreach ($data_option as $option)
                            <img src="/images/travel/Rectangle 1281 (1).png" alt=""
                                class="thumnail  w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">
                        @endforeach

                    </div>
                    <img id="slideRight" class="arrow absolute right-0 cursor-pointer" src="/images/next.png">

                </div>

            </div>

            <div class="col-span-2 space-y-6 text-left mx-3">
                <p class=" font-medium 2xl:text-2xl text-xl ">{{ $travel_sim->details }}</p>

                <div class="flex justify-center border-l border border-gray-500 text-center  rounded-full px-2">
                </div>

                <p class="2xl:text-xl text-lg font-medium">ตัวเลือก</p>
                <div
                    class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-x-4 gap-y-4 overflow-auto 2xl:h-[350px] h-[280px] w-full px-2">

                    <div id="box" data-price="{{ $travel_sim->price }}"
                        class="box border border-gray-10 hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 h-[10rem]  cursor-pointer">
                        <div class="flex mb-2 ">
                            <img src="/images/travel/Rectangle 1281 (1).png" alt="" class="w-24 max-ex:w-24">
                            <p class="text-lg font-medium ml-2 ">ซิมปกติ (Physical SIM)</p>
                        </div>
                        <div class="flex justify-start gap-16 items-center px-2">
                            <img src="/images/check-one-active.png" alt=""
                                class="check-box w-10 max-ex:w-[35px] ">
                            <div class="flex gap-4 items-center">
                                <p class="text-xl 2xl:text-[2rem] font-bold text-red-600">{{ $travel_sim->price }}
                                </p>
                                <p class="2xl:text-lg font-medium ">บาท</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


    {{-- box package --}}
    <div class="w-[1536px] max-2xl:max-w-[90%] pt-6 mx-auto mb-6">
        <div class="mx-4 max-2xl:mx-2">
            <div class="flex">
                <button id="btn-package"
                    class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px] text-[16px]">รายละเอียด
                    แพ็กเกจ</button>
                <button id="btn-condition"
                    class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px] text-[16px]">เงื่อนไข</button>
            </div>
            {{-- content detail --}}
            <div id="box-package"
                class="h-[300px] overflow-hidden bg-[#F8F9FA] border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] relative">
                <img src="/images/Intersect.png" alt="" class="right-0 absolute bottom-0 max-lg:z-[-1]">
                <div class="w-full lg:w-[320px] px-2 text-left">
                    {!! $travel_sim->details_content !!}
                </div>
                <div class="w-full flex justify-center bg-[#F8F9FA] rounded-b-[10px] sticky bottom-0 py-1">
                    <button class="text-center text-[#EC1F25]" id="show">แสดงเพิ่มเติม ˅</button>
                </div>
            </div>

            {{-- content condition --}}
            <div id="box-condition"
                class="hidden bg-[#F8F9FA] text-left min-h-[300px] p-2 border-solid border-2 border-[#ED4312] text-[16px] font-medium  rounded-r-[10px] rounded-bl-[10px]">
                {!! $travel_sim->terms_content !!}
            </div>
        </div>
    </div>
    {{-- box package --}}


</div>


<div class="bg-white drop-shadow-md items-center w-full " style="box-shadow: 0px -4px 10px 0px rgba(0, 0, 0, 0.15);">
    <div class="flex items-center justify-center gap-x-4 gap-y-3 p-2 w-full max-xs:flex-wrap max-es:flex-col">
        <div class="flex items-center justify-center gap-4">
            <p class="text-[20px]">ราคา</p>
            <p id="result-price" class="text-[40px] font-bold">{{ $travel_sim->price }}</p>
            <p class="text-[20px]">บาท</p>

        </div>
        <div class="border-l border border-[#838383] text-center py-8 rounded-full max-xs:hidden"></div>

        <div class="flex gap-4 ">
            <button id="buyProductNow" data-type="6" data-id="{{ $travel_sim->id }}"
                class="cursor-pointer flex items-center px-8 2xl:py-2 text-md font-medium text-white text-[16px] focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>

            <button id="addtocart" data-type="6" data-id="{{ $travel_sim->id }}"
                class="group rounded-full border border-red-500 mx-1 w-[50px] h-[50px] 2xl:w-[55px] 2xl:h-[55px] flex justify-center items-center p-2 hover:bg-red-600">
                <img src="/images/mdi_cart-arrow-down.png" alt=""
                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
            </button>

            <a href="https://line.me/ti/p/~@berhoro">
                <div
                    class="group rounded-full border border-green-500 mx-1 w-[50px] h-[50px] 2xl:w-[55px] 2xl:h-[55px] flex justify-center items-center p-2 hover:bg-green-600">
                    <img src="/images/icons8-line-app (1) 6.png" alt=""
                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                </div>
            </a>
        </div>

    </div>


    @include('frontend.pages.travel_sim.footer_sim')
@endsection

@section('scripts')
    @vite('resources/js/travel/buy_sim.js')
@endsection

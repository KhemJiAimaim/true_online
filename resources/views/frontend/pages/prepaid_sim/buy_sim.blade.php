@extends('frontend.layouts.main')
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
@section('title')
    {{ $prepaid_cate->details }}
@endsection

@section('content')
    <div class=" mt-[8%] max-xs:mt-[15%]  mx-3 lg:h-screen xl:h-auto">
        <div class=" flex justify-center items-center">
            <div class="w-[1536px] max-2xl:max-w-[90%] grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-3  gap-4 m-3">

                <div class="bg-white w-full 2xl:h-[500px]  items-center px-4 lg:px-1 mb-6 relative">
                    <div class="flex justify-center lg:mb-6 2xl:mb-2">
                        <img id="featured" src="/{{ $prepaid_cate->thumbnail_link }}" alt=""
                            class="max-ex:w-[250px] max-ex:h-[250px] w-[370px] cursor-pointer pb-4">
                    </div>
                    <div id="slide-wrapper" class="flex  items-center">


                        <img id="slideLeft" class="arrow absolute left-0 cursor-pointer " src="/images/prev.png">

                        <div id="slider" class="flex gap-4 overflow-x-hidden mx-4 ">
                            <img src="/{{ $prepaid_cate->thumbnail_link }}" alt=""
                                class="thumnail active w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 transition-opacity duration-300 ease-in-out">

                            @foreach ($prepaid_sim as $prepaid)
                                <img src="/{{ $prepaid->thumbnail_link }}" alt=""
                                    class="thumnail  w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 transition-opacity duration-300 ease-in-out">
                            @endforeach
                        </div>

                        <img id="slideRight" class="arrow absolute right-0 cursor-pointer" src="/images/next.png">

                    </div>
                </div>

                <div class="col-span-2 space-y-6 text-left mx-3">
                    <p class=" font-medium 2xl:text-2xl text-xl ">{{ $prepaid_cate->details }}</p>
                    <div class="flex justify-center border-l border border-gray-500 text-center  rounded-full px-2"></div>
                    <p class="2xl:text-xl text-lg font-medium">ตัวเลือก</p>
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-2 2xl:gap-4 overflow-auto 2xl:h-[320px] h-[280px] w-full">
                        @php $i = 1; @endphp
                        @foreach ($prepaid_sim as $sim)
                            <div id="box" data-quantity="{{$sim->quantity - $sim->quantity_sold}}" data-prepaid="{{ $sim->id }}" data-price="{{ $sim->price }}"
                                class="box border border-gray-10 hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 h-[8.5rem]  cursor-pointer">
                                <div class="flex ">
                                    <img src="/{{ $sim->thumbnail_link }}" alt=""
                                        class="w-20 max-ex:w-[70px] mb-1 rounded-lg">
                                    <p class="text-lg font-medium ml-2">{{ $sim->title }}</p>
                                </div>
                                <div class="flex items-center">
                                    <img src="/images/check-one.png" alt="" class="check-box w-10 ">
                                    <p class="text-xl 2xl:text-[2rem] font-bold ml-[3.5rem] text-red-600">
                                        {{ $sim->price }}</p>
                                    <p class="2xl:text-lg font-medium ml-2">บาท</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        {{-- box package --}}
        <div class="w-[1536px] max-2xl:max-w-[90%] pt-6 mx-auto mb-6  ">

            <div class="flex">
                <button id="btn-package"
                    class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px] text-[16px]">รายละเอียด
                    แพ็กเกจ</button>
                <button id="btn-condition"
                    class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px] text-[16px]">เงื่อนไข</button>
            </div>
            {{-- content detail --}}
            <div id="box-package"
                class="h-[300px]  bg-[#F8F9FA] border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] relative ">
                <div class="h-full overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden mb-2">
                    <div class="w-full max-lg:w-[290px] text-left Z-[99] my-4 ml-4 ">
                        {!! $prepaid_cate->details_content !!}
                    </div>
                    <img src="/images/Intersect.png" alt="" class="right-0 absolute bottom-0 max-lg:z-[-1]">

                    <div class="w-full flex justify-center bg-[#F8F9FA] rounded-b-[10px] absolute bottom-0 py-1">
                        <button class="text-center text-[#EC1F25]" id="show-more">แสดงเพิ่มเติม ˅</button>
                    </div>
                </div>
            </div>

            {{-- content condition --}}
            <div id="box-condition"
                class="hidden bg-[#F8F9FA] text-left min-h-[200px] p-2 border-solid border-2 border-[#ED4312] text-[16px] font-medium rounded-r-[10px] rounded-bl-[10px]">
                {!! $prepaid_cate->terms_content !!}
            </div>
        </div>
        {{-- box package --}}



    </div>
    <div class="bg-white drop-shadow-md items-center w-full " style="box-shadow: 0px -4px 10px 0px rgba(0, 0, 0, 0.15);">
        <div class="flex items-center justify-center gap-4 p-2 w-full flex-wrap ">
            <p class="2xl:text-lg">ราคา</p>
            <p id="result-price" class="2xl:text-2xl text-xl font-bold">0</p>
            <p class="2xl:text-lg">บาท</p>
            <p class="2xl:text-2xl font-bold text-xl">X</p>

            <div class="custom-number-input w-32">
                <div class="flex flex-row 2xl:h-10 w-full rounded-2xl relative bg-transparent mt-1 ">
                    <button id="decrement" data-action="decrement"
                        class="bg-white hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer border  border-[#838383]">
                        <span class="m-auto 2xl:text-2xl">−</span>
                    </button>
                    <input type="text" id="quantity-product"
                        class="text-center font-bold w-full bg-white hover:text-black focus:text-black  2xl:text-2xl cursor-default flex items-center text-gray-700 border  border-t-[#838383]  border-b-[#838383] outline-none"
                        name="custom-input-number" value="0">
                    <button id="increment" data-action="increment"
                        class="bg-white text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer border border-[#838383]">
                        <span class="m-auto 2xl:text-2xl">+</span>
                    </button>
                </div>
            </div>


            <div class="border-l border border-[#838383] text-center py-8 rounded-full max-xs:hidden"></div>

            <div class="flex gap-2 ">
                <button id="buyProductNow" data-id="{{ $prepaid_cate->id }}" data-type="4"
                    class="cursor-pointer flex items-center px-6 2xl:py-2 text-md font-medium text-white text-[16px] focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>

                <button id="addtocart" data-id="{{ $prepaid_cate->id }}" data-type="4"
                    class="group rounded-full border border-red-500 mx-1 w-[40px] h-[40px] 2xl:w-[50px] 2xl:h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                </button>

                <a href="https://line.me/ti/p/~@berhoro"
                    class="group rounded-full border border-red-500 mx-1  w-[40px] h-[40px] 2xl:w-[50px] 2xl:h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                    <img src="/images/icons8-line-app (1) 9.png" alt=""
                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                </a>
            </div>

        </div>
    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection

@section('scripts')
    @vite('resources/js/prepaid_sim/buy_sim.js')
@endsection

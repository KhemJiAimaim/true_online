@extends('frontend.layouts.main')


@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            /* max-width: 1536px; */
            height: 100%;

        }

        .swiper-wrapper {
            position: relative;
            width: 100%;

        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-button-next {
            right: 5%;
            position: absolute;
            color: #000;
            top: auto;
            height: 30rem;

        }

        .swiper-button-prev {
            left: 5%;
            position: absolute;
            color: #000;
            widows: 50px;
            height: 30rem;
            top: auto;

        }

        .swiper-button-next:after {
            font-size: 25px;
            margin-left: 300%;
            margin-top: 50%;
        }

        .swiper-button-prev:after {
            font-size: 25px;
            margin-right: 300%;
            margin-top: 50%;
        }

        @media only screen and (max-width: 1280px) {
            .swiper-button-next {
                right: 4% !important;
            }

            .swiper-button-prev {
                left: 4% !important;

            }
        }

        /* @media only screen and (min-width: 820px) {
                        .swiper-button-prev:after,.swiper-button-next:after {
                            font-size: 22px;
                        }
                        .swiper-button-next {
                            right: 5% !important;
                        }
                        .swiper-button-prev {
                            left: 5% !important;

                        }
                    } */
        @media only screen and (max-width: 786px) {

            .swiper-button-prev:after,
            .swiper-button-next:after {
                font-size: 22px;
            }

            .swiper-button-next {
                right: 5% !important;
            }

            .swiper-button-prev {
                left: 5% !important;

            }
        }

        @media only screen and (max-width: 414px) {

            .swiper-button-prev:after,
            .swiper-button-next:after {
                font-size: 18px;
            }

            .swiper-button-next {
                right: 9% !important;
            }

            .swiper-button-prev {
                left: 9% !important;

            }
        }
    </style>
@endsection


@section('content')
    <div class="2xl:mt-16 mt-[1rem]">
        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container pt-4 px-3">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[18px]">ทรู ซิมเติมเงิน และ แพ็กเกจเสริม
                        ทั้งเน็ตและโทร</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        <section id="sim" class="bg-white  py-6 px-3">
            <div class="mb-10">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px] font-medium">ซิมเติมเงิน</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">ซิมเติมเงิน
                    พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ
                </p>
            </div>
            <div class="2xl:my-16 my-4 z-2 w-full">
                <div class="max-w-[1548px] my-0 mx-auto flex justify-center ">
                    @php
                        $productCount = 0;
                    @endphp
                    <div class="swiper flex justify-center items-center mx-auto w-full">
                        <div class="swiper-wrapper flex items-center">
                            @for ($i = 1; $i <= 5; $i++)
                                <div class="swiper-slide flex justify-center items-center">
                                    <div class="drop-shadow-md w-[350px] ss:w-[340px] h-[100%]">
                                        <div
                                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                            {{-- <div class="flex justify-start items-center"> --}}
                                            <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ
                                                เล่นเน็ตไม่อั้น
                                                ใช้ได้ไม่จำกัด</p>
                                            <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png"
                                                alt="">
                                            {{-- </div> --}}

                                        </div>

                                        <div class="bg-white">
                                            <div class="flex justify-center py-4 ">
                                                <img src="/images/Rectangle 98.png" alt=""
                                                    class="max-ex:w-[120px] max-ex:h-[120px]">
                                            </div>
                                        </div>

                                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                                            <img src="/images/Ellipse 6.png" alt="" class="px-4">
                                            <p class="text-left 2xl:text-[16px] text-[14px] p-2  py-1 col-span-4">(
                                                เล่นฟรีเดือนแรก )
                                                เล่นเน็ตไม่อั้น ความเร็ว 4Mbps (พร้อมใช้ฟรี
                                                True wifi max speed แบบไม่จำกัด)</p>
                                        </div>

                                        <div
                                            class=" relative bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 items-center">
                                            <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                                alt="">
                                            <div class="grid grid-cols-3">
                                                <p class="text-white text-left text-[16px] ">ราคา <br>
                                                    เริ่มต้น</p>
                                                <p
                                                    class="text-white font-medium text-center 2xl:text-3xl md:text-[2rem] pt-3 text-2xl">
                                                    150</p>
                                                <p class="text-white text-right text-[16px]">บาท <br>
                                                    /เดือน</p>

                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4 items-center">

                                            <a href="/prepaid_sim/buy_sim"
                                                class="cursor-pointer py-2  px-6 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                            <a href="#"
                                                class="cursor-pointer py-2 px-10  mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                                        </div>
                                    </div>
                                </div>
                                @php
                                    $productCount++; // เพิ่มจำนวนรายการ
                                @endphp
                            @endfor

                        </div>
                    </div>
                    @if ($productCount >= 4)
                        <div class="swiper-button-next  "></div>
                        <div class="swiper-button-prev "></div>
                    @endif
                </div>

            </div>
            <div class="items-center mx-auto mt-4 pt-6">
                <a href="#"
                    class="py-2.5 px-5 mb-2 mt-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ดูทั้งหมด</a>
            </div>
        </section>
        {{-- --- --}}

        <section id="sim" class="bg-gray-100 py-6 relative z-0 px-3">
            <img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt="">

            <div class="mb-10">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px] font-medium">แพ็กเกจเสริม</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม
                    ที่คุณอาจสนใจ
                </p>
            </div>
            <div class="2xl:my-16 my-4 z-2 w-full">
                <div class="max-w-[1548px] my-0 mx-auto flex justify-center ">
                    @php
                        $productCount = 0;
                    @endphp
                    <div class="swiper flex justify-center items-center mx-auto w-full">
                        <div class="swiper-wrapper flex items-center">
                            @foreach ($package as $pack)
                                <div class="swiper-slide flex justify-center items-center">
                                    <div class="drop-shadow-md w-[350px] ss:w-[340px] h-[100%]">
                                        <div
                                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                            {{-- <div class="flex justify-start items-center"> --}}
                                            <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ
                                                เล่นเน็ตไม่อั้น
                                                ใช้ได้ไม่จำกัด</p>
                                            <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png"
                                                alt="">
                                            {{-- </div> --}}

                                        </div>

                                        <div class="bg-[#F8F9FA] flex flex-col justify-center items-center py-2  h-[150px]">
                                            <p class="text-[18px]">เน็ต</p>
                                            <p class="text-[30px] font-medium">{{ $pack->title }} /
                                                {{ $pack->lifetime }}วัน</p>
                                        </div>

                                        <div
                                            class=" relative bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 items-center">
                                            <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                                alt="">
                                            <div class="grid grid-cols-3 items-center">
                                                <p class="text-white text-left text-[16px] ">ราคา</p>
                                                <p
                                                    class="text-white font-medium text-center 2xl:text-3xl md:text-[2rem] pt-3 text-2xl">
                                                    {{ number_format($pack->price) }}</p>
                                                <p class="text-white text-right text-[16px]">บาท <br>
                                                    แบบรายครั้ง</p>
                                            </div>
                                        </div>

                                        <div
                                            class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4 items-center">

                                            <a href="{{ url('/prepaid_sim/buy_package/' . $pack->id) }}"
                                                class="cursor-pointer py-2 px-6 mb-2 mt-2 text-[18px] max-es:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                            <a href="tel:{{ $pack->package_code }}"
                                                class="cursor-pointer py-2 px-10 mb-2 mt-2 text-[18px] max-es:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>

                                        </div>
                                    </div>
                                </div>
                                @php
                                    $productCount++; // เพิ่มจำนวนรายการ
                                @endphp
                            @endforeach
                        </div>

                    </div>
                    @if ($productCount >= 4)
                        <div class="swiper-button-next  "></div>
                        <div class="swiper-button-prev "></div>
                    @endif
                </div>

            </div>
            <div class="items-center mx-auto mt-4 pt-6">
                <a href="{{ url('/prepaid_sim/package') }}"
                    class="py-2.5 px-5 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ดูทั้งหมด</a>
            </div>
            <img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png" alt="">

        </section>
        {{-- --- --}}

    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/prepaid_sim/swiper.js')
@endsection

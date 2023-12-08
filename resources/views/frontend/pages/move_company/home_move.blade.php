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
            right: 7%;
            position: absolute;
            color: #000;
        }

        .swiper-button-prev {
            left: 7%;
            position: absolute;
            color: #000;
            widows: 50px;
            height: 50px;
        }

        .swiper-button-next:after {
            font-size: 25px;
            margin-left: 60%;
            margin-top: 50%;
        }

        .swiper-button-prev:after {
            font-size: 25px;
            margin-right: 60%;
            margin-top: 50%;
        }

        @media only screen and (max-width: 1280px) {
            .swiper-button-next {
                right: 1% !important;
            }

            .swiper-button-prev {
                left: 1% !important;

            }
        }

        @media only screen and (max-width: 1024px) {
            .swiper-button-next {
                right: 4% !important;
            }

            .swiper-button-prev {
                left: 4% !important;

            }
        }

        @media only screen and (max-width: 1024px) {
            .swiper-button-next {
                right: 4% !important;
            }

            .swiper-button-prev {
                left: 4% !important;

            }
        }

        @media only screen and (max-width: 820px) {
            .swiper-button-next {
                right: 1% !important;
            }

            .swiper-button-prev {
                left: 1% !important;

            }
        }
    </style>
@endsection

@section('content')
    <div class="2xl:mt-16 mt-6">

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container px-3 ">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[16px]  text-[16px] p-4">ย้ายค่ายเบอร์เดิมมาทรูมูฟ เอช
                        พร้อมรับส่วนลดสุดคุ้มที่นี่</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        @include('frontend.pages.move_company.tabmenu')

        @php $j = 1; @endphp
        @foreach ($data_category['move_cate'] as $cate)
            @php
                $bg = '';
                $circle1 = '';
                $circle2 = '';
                if ($j % 2 == 0) {
                    $bg = 'bg-[#F8F9FA]';
                    $circle1 = '<img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt="">';
                    $circle2 = '<img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png" alt="">';
                }
                // $i++;
            @endphp

            <section class="{{ $bg }} py-6 relative z-0 px-3 max-md:px-[1.5rem] md:px-[1.5rem]">
                {!! $circle1 !!}
                <div class="py-10">
                    <p class="text-[#000]   2xl:text-[2rem] xl:text-[25px] text-[22px]">{{ $cate->title }}</p>
                    <p class="text-[#838383] 2xl:text-[20px] xl:text-[18px] text-[16px] ">{{ $cate->details }}</p>
                </div>
                <div class="py-6 w-full">
                    <div class="max-w-[1548px]  mx-auto flex justify-center">
                        <div class="swiper swiper{{$j}} flex justify-center items-center mx-auto w-full ">
                            <div class="swiper-wrapper items-center">
                                @foreach ($move_product as $product)
                                    @if ($product->move_cate_id == $cate->id)
                                        {{-- @for ($i = 1; $i <= 4; $i++) --}}
                                            <div class="swiper-slide flex justify-center items-center">
                                                <div
                                                    class="drop-shadow-md 2xl:w-[480px] xl:w-[380px] md:w-[390px] w-[350px] max-md:w-[350px] h-[100%] ">
                                                    <div
                                                        class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2 relative ">
                                                        <p class="text-white text-left ml-3 text-[18px] max-md:text-[16px]">
                                                            ซิมเทพ
                                                            เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>
                                                        <img class=" absolute top-0 right-0"
                                                            src="/images/circle/Intersect.png" alt="">
                                                    </div>

                                                    <div class="bg-white flex items-center justify-center flex-col p-4 ">
                                                        <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                                        <div class="flex justify-center items-baseline gap-10">
                                                            <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">เน็ต
                                                            </p>
                                                            <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">
                                                                {{ $product->internet_volume }}</p>
                                                            <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">GB
                                                            </p>

                                                        </div>
                                                        <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                                        <div class="flex justify-center items-baseline gap-10">
                                                            <p class="2xl:text-[1.5rem] text-[1rem]">โทร</p>
                                                            <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">
                                                                {{ $product->call_minutes }}</p>
                                                            <p class="2xl:text-[1.5rem] text-[1rem]">GB</p>

                                                        </div>
                                                    </div>
                                                    <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                                        <div class="flex items-center justify-center gap-2">
                                                            <img src="/images/arcticons_wifianalyzer (1).png"
                                                                alt="">
                                                            @if ($product->unlimited_wifi == true)
                                                                <p
                                                                    class="font-bold 2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">
                                                                    WiFi ไม่จำกัด</p>
                                                            @else
                                                                <p
                                                                    class="font-bold 2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">
                                                                    จำกัดการใช้ WiFi</p>
                                                            @endif
                                                        </div>
                                                        <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                                        <div class="flex items-center flex-col justify-center">
                                                            <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">4G HD Voice
                                                            </p>
                                                            <p class="2xl:text-[1.2rem] text-[14px]">
                                                                เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ
                                                                4G</p>
                                                        </div>
                                                    </div>
                                                    <div class="bg-white  2xl:flex flex-col gap-5 md:block hidden ">
                                                        <div class="orange-plate-container pb-2">
                                                            <div class="orange-plate-line"></div>
                                                            <div class="orange-plate-group">
                                                                <div class="orange-plate-box-s">
                                                                    <div class="orange-plate-circleS"></div>
                                                                    <div class="orange-plate-textboxS"></div>
                                                                </div>
                                                                <div class="orange-plate-textboxC">
                                                                    <p
                                                                        class="orange-plate-text text-white text-[18px] max-md:text-[16px]">
                                                                        รับทันที
                                                                    </p>
                                                                </div>
                                                                <div class="orange-plate-box-e">
                                                                    <div class="orange-plate-textboxE"></div>
                                                                    <div class="orange-plate-circleE"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $benefit_ids = explode(',', $product->benefit_ids);
                                                            $post_ids = $posts->pluck('id')->toArray();

                                                            // หาค่าที่เหมือนกัน
                                                            $same_benefit = array_intersect($benefit_ids, $post_ids);
                                                            $benefit_items = array_slice($same_benefit, 0, 3);
                                                            // dd($benefit_items)
                                                        @endphp
                                                        <div>
                                                            @foreach ($benefit_items as $item)
                                                                @foreach ($posts as $pos)
                                                                    @if ($pos->id == $item)
                                                                        <div class="flex items-start gap-2 px-4 mb-2">
                                                                            <div
                                                                                class="border-[1px] rounded-lg border-orange-500 p-4 w-[30%]">
                                                                                <img src="{{ $pos->thumbnail_link }}"
                                                                                    alt="">
                                                                            </div>

                                                                            <p
                                                                                class="text-start text-[18px] max-md:text-[16px]">
                                                                                {{ $pos->title }}</p>
                                                                        </div>
                                                                    @endif
                                                                @endforeach
                                                            @endforeach
                                                        </div>

                                                        <div class="px-4 text-start" id="content-ck">
                                                            {!! $product->details_content !!}
                                                        </div>
                                                    </div>

                                                    <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D]  relative">
                                                        <img class=" absolute left-0 top-0 h-[100%]"
                                                            src="/images/circle/Intersect (2).png" alt="">
                                                        <div class="flex items-center justify-between py-6 px-4">

                                                            <p class="text-white text-left text-[18px] max-md:text-[16px] ">
                                                                ราคา
                                                            </p>
                                                            <p class="text-white font-medium text-center text-3xl">
                                                                {{ number_format($product->price) }}</p>
                                                            <p
                                                                class="text-white text-right text-[18px] max-md:text-[16px]  ">
                                                                บาท
                                                                <br> /เดือน
                                                            </p>

                                                        </div>
                                                    </div>

                                                    <div
                                                        class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 ss:px-2 gap-3">

                                                        <a href="#"
                                                            class="cursor-pointer py-2 xl:px-1 2xl:px-2  px-[0.5rem]  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                                        <a href="/movedetail"
                                                            class="cursor-pointer py-2 md:px-10 2xl:px-16 px-16 ss:px-[1.8rem] xs:  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                                                    </div>
                                                </div>
                                            </div>
                                        {{-- @endfor --}}
                                    @endif
                                @endforeach
                            </div>
                        </div>


                        <div class="swiper-button-next swiper-button-next{{$j}}"></div>
                        <div class="swiper-button-prev swiper-button-prev{{$j}}"></div>
                        @php $j++; @endphp

                    </div>
                </div>
                {!! $circle2 !!}
            </section>
        @endforeach


        {{-- 5G Together+ --}}
        {{-- <section class="bg-[#F8F9FA] py-6 relative z-0 px-3 max-md:px-4">
            <img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt="">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px]">5G Together+</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม
                    ที่คุณอาจสนใจ</p>
            </div>
            <div class="overflow-x-scroll 2xl:overflow-hidden mt-10 w-full py-2 z-[2]">
                <div
                    class="2xl:w-[1536px] xl:w-[1250px] lg:w-[1300px] md:w-[1300px] w-[1100px] dm:w-[1380px] my-0 grid grid-cols-3 2xl:mx-auto items-center gap-6">

                    @for ($i = 1; $i <= 3; $i++)
                        <div
                            class="drop-shadow-md flex justify-center items-center  ">
                            <div class="mx-auto 2xl:w-full xl:w-[410px] md:w-[424px] w-[350px] max-md:w-[350px] h-[100%]">
                                <div
                                    class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2 relative ">
                                    <p class="text-white text-left ml-3 text-[18px] max-md:text-[16px]">ซิมเทพ
                                        เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>
                                    <img class=" absolute top-0 right-0" src="/images/circle/Intersect.png" alt="">

                                </div>

                                <div class="bg-white flex items-center justify-center flex-col p-4 ">
                                    <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                    <div class="flex justify-center items-baseline gap-10">
                                        <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">เน็ต</p>
                                        <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">70</p>
                                        <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">GB</p>

                                    </div>
                                    <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                    <div class="flex justify-center items-baseline gap-10">
                                        <p class="2xl:text-[1.5rem] text-[1rem]">เน็ต</p>
                                        <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">150</p>
                                        <p class="2xl:text-[1.5rem] text-[1rem]">GB</p>

                                    </div>
                                </div>
                                <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                    <div class="flex items-center justify-center gap-2">
                                        <img src="/images/arcticons_wifianalyzer (1).png" alt="">
                                        <p class="font-bold 2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">WiFi ไม่จำกัด
                                        </p>
                                    </div>
                                    <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                    <div class="flex items-center flex-col justify-center">
                                        <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">4G HD Voice</p>
                                        <p class="2xl:text-[1.2rem] text-[14px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                    </div>
                                </div>
                                <div class="bg-white  2xl:flex flex-col gap-5 md:block hidden h-[450px]">
                                    <div class="orange-plate-container pb-2">
                                        <div class="orange-plate-line"></div>
                                        <div class="orange-plate-group">
                                            <div class="orange-plate-box-s">
                                                <div class="orange-plate-circleS"></div>
                                                <div class="orange-plate-textboxS"></div>
                                            </div>
                                            <div class="orange-plate-textboxC">
                                                <p class="orange-plate-text text-white text-[18px] max-md:text-[16px]">
                                                    รับทันที</p>
                                            </div>
                                            <div class="orange-plate-box-e">
                                                <div class="orange-plate-textboxE"></div>
                                                <div class="orange-plate-circleE"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-start gap-2 px-4 ">
                                        <div class="border-[1px]  border-orange-500 rounded-lg p-4 w-[35%] pb-2">
                                            <img src="/images/Rectangle1617.png" alt="">
                                        </div>

                                        <p class="text-start text-[18px] max-md:text-[16px]">รับชมความบันเทิงซีรีย์ดัง และ
                                            EPL FanPack ฤดูกาล
                                            2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                            โทรออก</p>
                                    </div>
                                    <div class="flex items-start gap-2 px-4 ">
                                        <div class="border-[1px]  border-orange-500 rounded-lg p-4 w-[35%] pb-2">
                                            <img src="/images/Rectangle1617.png" alt="">
                                        </div>

                                        <p class="text-start text-[18px] max-md:text-[16px]">รับชมความบันเทิงซีรีย์ดัง และ
                                            EPL FanPack ฤดูกาล
                                            2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                            โทรออก</p>
                                    </div>
                                    <div class="flex items-start gap-2 px-4 ">
                                        <div class="border-[1px]  border-orange-500 rounded-lg p-4 w-[35%] pb-2">
                                            <img src="/images/Rectangle1617.png" alt="">
                                        </div>

                                        <p class="text-start text-[18px] max-md:text-[16px]">รับชมความบันเทิงซีรีย์ดัง และ
                                            EPL FanPack ฤดูกาล
                                            2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                            โทรออก</p>
                                    </div>


                                    <div class="px-4 ">
                                        <p class="text-start text-[18px] max-md:text-[16px] ">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5
                                            วัน</p>
                                        <ul class="text-start list-disc ml-7 text-[18px] max-md:text-[16px]">
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>
                                    </div>
                                  
                                </div>

                                <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D]  relative">
                                    <img class=" absolute left-0 top-0 h-[100%]" src="/images/circle/Intersect (2).png"
                                        alt="">
                                    <div class="flex items-center justify-between py-6 px-2">

                                        <p class="text-white text-left text-[18px] max-md:text-[16px] ">ราคา</p>
                                        <p class="text-white font-medium text-center text-3xl">350</p>
                                        <p class="text-white text-right text-[18px] max-md:text-[16px]  ">บาท <br> /เดือน
                                        </p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 gap-3">

                                    <a href="#"
                                        class="cursor-pointer py-2 max-2xl:px-1  px-4  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                    <a href="/move/movenow"
                                        class="cursor-pointer py-2 max-md:px-10 px-16  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                                </div>
                            </div>
                        </div>
                    @endfor


                </div>

            </div>

            <img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png" alt="">
        </section> --}}

        {{-- 5G Super Smart --}}
        {{-- <section class="bg-[#ffff] py-6 px-3">
            <div class="max-w-[1536px] my-0 mx-auto   ">
                <div class="">
                    <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px] ">5G Super Smart</p>
                    <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">ซิมเติมเงิน
                        พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
                </div>
                <div class="max-w-[1536px] my-0 mx-auto flex justify-center px-4 ">
                    <div class="drop-shadow-md flex justify-center ">
                        <div class=" 2xl:w-[480px] xl:w-[425px] md:w-[424px] w-[350px] max-md:w-[350px] h-[100%] ">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2 relative ">
                                <p class="text-white text-left ml-3 text-[18px] max-md:text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น
                                    ใช้ได้ไม่จำกัด</p>
                                <img class=" absolute top-0 right-0" src="/images/circle/Intersect.png" alt="">

                            </div>

                            <div class="bg-white flex items-center justify-center flex-col p-4">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">เน็ต</p>
                                    <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">70</p>
                                    <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="2xl:text-[1.5rem] text-[1rem]">เน็ต</p>
                                    <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">150</p>
                                    <p class="2xl:text-[1.5rem] text-[1rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center gap-2">
                                    <img src="/images/arcticons_wifianalyzer (1).png" alt="">
                                    <p class="font-bold 2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">WiFi ไม่จำกัด</p>
                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">4G HD Voice</p>
                                    <p class="2xl:text-[1.2rem] text-[14px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                            </div>
                            <div class="bg-white  2xl:flex flex-col gap-5 md:block hidden h-[200px] ">
                                <div class="orange-plate-container pb-2">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleS"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white text-[18px] max-md:text-[16px]">รับทันที
                                            </p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 px-4 ">
                                    <div class="border-[1px]  border-orange-500 rounded-lg p-4 w-[35%] pb-2">
                                        <img src="/images/Rectangle1617.png" alt="">
                                    </div>

                                    <p class="text-start text-[18px] max-md:text-[16px]">รับชมความบันเทิงซีรีย์ดัง และ
                                        EPL FanPack ฤดูกาล
                                        2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                        โทรออก</p>
                                </div>

                               
                            </div>

                            <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D]  relative">
                                <img class=" absolute left-0 top-0 h-[100%]" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="flex items-center justify-between py-6 px-2">

                                    <p class="text-white text-left text-[18px] max-md:text-[16px] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">350</p>
                                    <p class="text-white text-right text-[18px] max-md:text-[16px]  ">บาท <br> /เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 gap-3">

                                <a href="#"
                                    class="cursor-pointer py-2 xl:px-1 2xl:px-2 px-4  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                <a href="/move/movenow"
                                    class="cursor-pointer py-2 max-md:px-10 px-16  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </section> --}}

    </div>

    @include('frontend.pages.move_company.move_footer')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/move/swiper.js')
@endsection

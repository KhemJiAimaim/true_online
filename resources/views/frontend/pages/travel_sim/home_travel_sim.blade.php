@extends('frontend.layouts.main')
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        .title-plate-textboxC {
            width: auto;
            height: 60px;

        }

        .plate-box-e,
        .detail-plate-box-e {
            bottom: 22px;
        }

        .plate-box-s,
        .detail-plate-box-s {
            bottom: 20px;
        }

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
            top: 110%;
            height: 30rem;

        }

        .swiper-button-prev {
            left: 5%;
            position: absolute;
            color: #000;
            widows: 50px;
            height: 30rem;
            top: 110%;

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

        .swiper-button-next1 {
            right: 5%;
            position: absolute;
            color: #000;
            top: 110%;
            height: 30rem;

        }

        .swiper-button-prev1 {
            left: 5%;
            position: absolute;
            color: #000;
            widows: 50px;
            height: 30rem;
            top: 110%;

        }

        .swiper-button-next1:after {
            font-size: 25px;
            margin-left: 300%;
            margin-top: 50%;
        }

        .swiper-button-prev1:after {
            font-size: 25px;
            margin-right: 300%;
            margin-top: 50%;
        }

        @media only screen and (width: 1280px) {
            .swiper-button-next {
                right: 3% !important;
                top: 95%;
            }

            .swiper-button-prev {
                left: 3% !important;
                top: 95%;

            }
        }

        @media only screen and (width: 1024px) and (height: 600px) {
            .swiper-button-next {
                top: 114%;
                right: 6% !important;
            }

            .swiper-button-prev {
                top: 114%;
                left: 6% !important;
            }
        }

        @media only screen and (width: 1024px) and (height: 1366px) {
            .swiper-button-next {
                top: 50%;
                right: 6% !important;
            }

            .swiper-button-prev {
                top: 50%;
                left: 6% !important;
            }
        }

        @media only screen and (max-width:912px) {

            .swiper-button-next {
                right: 5% !important;
                top: 55%;
            }

            .swiper-button-prev {
                left: 5% !important;
                top: 55%;
            }
        }

        @media only screen and (max-width:768px) {

            .swiper-button-next {
                right: 5% !important;
                top: 60%;
            }

            .swiper-button-prev {
                left: 5% !important;
                top: 60%;
            }
        }

        @media only screen and (max-width:540px) {

            .swiper-button-next {
                right: 14% !important;
                top: 75%;
            }

            .swiper-button-prev {
                left: 14% !important;
                top: 75%;
            }
        }

        @media only screen and (max-width:430px) {

            .swiper-button-next {
                right: 10% !important;
                top: 60%;
            }

            .swiper-button-prev {
                left: 10% !important;
                top: 60%;
            }
        }

        @media only screen and (max-width:414px) {

            .swiper-button-next {
                right: 10% !important;
                top: 75%;
            }

            .swiper-button-prev {
                left: 10% !important;
                top: 75%;
            }
        }
    </style>
@endsection

@section('content')
    <div class="2xl:mt-12 mt-6 ">
        <div class="flex flex-wrap justify-center gap-x-20 max-es:gap-10 gap-y-5 mb-4">
            @foreach($cates as $cate)
            <a href="/{{$cate->cate_redirect}}"
                class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                <img class="w-[54px] h-[54px] mb-2" src="/{{$cate->cate_thumbnail}}" alt="">
                <p class="text-[18px] se:text-[16px]">{{$cate->cate_title}}</p>
            </a>
            @endforeach
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container pt-4 px-3 ">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[16px] px-3 py-4">ซิม อันดับ 1
                        สำหรับเดินทางท่องเที่ยวทั้งในประเทศ และ ต่างประเทศ</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        @php $j = 1; @endphp
        @foreach($cates as $cate)
        <section id="travel" class="bg-white py-6 2xl:mt-16 px-3">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px]">{{$cate->cate_keyword}}</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">{{$cate->cate_description}}</p>
            </div>

            <div class="2xl:my-16 my-4 z-2 w-full">
                <div class="max-w-[1548px] my-0 mx-auto flex justify-center">
                    @php
                        $productCount = 0;
                    @endphp
                    <div class="swiper swiper{{$j}} flex justify-center items-center mx-auto w-full">
                        <div class="swiper-wrapper flex items-center ">
                            @foreach ($travel_sim as $sim)
                                @if($sim->travel_cate_id == $cate->id)
                                <div class="swiper-slide flex justify-center items-center">
                                    <div
                                        class="drop-shadow-md 2xl:w-[480px] xl:w-[380px] md:w-[390px] xs:w-[415px] w-[350px] max-md:w-[350px] h-[100%] ss:px-3">
                                        <div class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0 ">

                                            <p class="text-white mr-2 text-left text-[18px] max-es:text-[16px]">{{$sim->lifetime}} DAYS {{$sim->price}} BAHT</p>
                                            <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                                        </div>

                                        <div class="bg-white">
                                            <div class="flex justify-center py-4 ">
                                                <img src="/images/Rectangle 179.png" alt=""
                                                    class="max-es:w-[150px]">
                                            </div>
                                        </div>

                                        <div class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 ">
                                            <div class=" flex gap-4">
                                                <img src="/images/travel/majesticons_sim-card-line.png" alt=""
                                                    class=" w-[26px]">
                                                <p class="text-left text-[16px] 2xl:text-[18px] ">{{$sim->title}}</p>
                                            </div>
                                            <div class=" flex gap-4">
                                                <img src="/images/travel/quill_calendar.png" alt=""
                                                    class="w-[26px] h-[26px]">
                                                <p class="text-left text-[16px] 2xl:text-[18px] ">{{$sim->lifetime}} Days</p>
                                            </div>
                                            @if($sim->unlimited_5g == true)
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/tabler_world.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited 5G Internet</p>
                                                </div>
                                            @else
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/tabler_world.png" alt="" class="w-[26px] h-[26px]">
                                                    <div class="flex flex-col">
                                                        <p class="text-left text-[16px] 2xl:text-[18px] ">Free {{$sim->lifetime}} Days</p>
                                                        <p class="text-left text-sm">{{$sim->internet_details}}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($cate->id == 23)
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/majesticons_coins-line.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">{{$sim->call_credit}} THB calling credit for international call</p>
                                                </div>
                                            @else
                                                <div class=" flex gap-4 ">
                                                    <img src="/images/travel/majesticons_coins-line.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <div class="flex flex-col">
                                                        <p class="text-left text-[16px] 2xl:text-[18px] ">{{$sim->call_credit}} Baht call credit</p>
                                                        <p class="text-sm"> for local and international calls</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($cate->id == 23)
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/icon-park-outline_phone-call.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">{{$sim->free_call}}</p>
                                                </div>
                                            @else
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/icon-park-outline_phone-call.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <div class="flex flex-col">
                                                        <p class="text-left text-[16px] 2xl:text-[18px] ">{{$sim->free_call}}</p>
                                                        <p class="text-sm">{{$sim->free_call_details}}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($cate->id == 23)
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/arcticons_wifianalyzer.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited WiFi</p>
                                                </div>
                                            @else
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/arcticons_wifianalyzer.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Free WiFi</p>
                                                </div>
                                            @endif
                                            @if($sim->free_tiktok)
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/arcticons_tiktok.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <div class="flex flex-col">
                                                        <p class="text-left text-[16px] 2xl:text-[18px] ">{{$sim->free_tiktok_details}}</p>
                                                        <p class="text-sm"> for TikTok and Douyin</p>
                                                    </div>
                                                </div>
                                            @endif
                                            @if($sim->free_socials)
                                                <div class=" flex gap-4">
                                                    <img src="/images/travel/like-thumb-hand.png" alt=""
                                                        class="w-[26px] h-[26px]">
                                                    <div class="flex flex-col">
                                                        <p class="text-left text-[16px] 2xl:text-[18px] ">Free 14 social apps</p>
                                                        <p class="text-left">(no data charges)</p>
                                                        <div class="mt-1 grid grid-cols-7 gap-x-2 gap-y-2">
                                                            <img src="/images/travel/social/facebook icon.png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector.png" alt="" class="max-w-[20px]">
                                                            <img src="/images/travel/social/Group 6.png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (1).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Group 7.png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (2).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (3).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (4).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (5).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (6).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (7).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (8).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (9).png" alt=""
                                                                class="max-w-[20px]">
                                                            <img src="/images/travel/social/Vector (10).png" alt=""
                                                                class="max-w-[20px]">
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif

                                        </div>

                                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2 relative">
                                            <div class="grid grid-cols-3">
                                                <p class="text-white text-left text-[18px] max-es:text-[16px] mt-2">ราคา</p>
                                                <p class="text-white font-medium text-center text-3xl">{{$sim->price}}</p>
                                                <p class="text-white text-right text-[18px] max-es:text-[16px]  mt-2">บาท
                                                </p>

                                            </div>
                                            <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png">
                                        </div>

                                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px]   flex justify-center py-1 md:px-0 lg:px-0 items-center gap-2">
                                            <div id="addBerToCart" data-id="{{$sim->id}}" data-type="6" class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]   flex justify-center items-center p-2 hover:bg-red-600">
                                                <img src="/images/mdi_cart-arrow-down.png" alt="" class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                            </div>
                                            <div class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]  flex justify-center items-center p-2 hover:bg-red-600">
                                                <img src="/images/icons8-line-app (1) 9.png" alt="" class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                            </div>

                                            <a href="{{url('/travel_sim_buy/'.$sim->id)}}"
                                                class="cursor-pointer flex items-center lg:px-2 xl:px-4  ss:px-1 2xl:px-4 px-4 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2 mx-1 ss:mx-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                            <button data-id="{{$sim->id}}" data-type="6" id="buyProductNow"
                                                class="cursor-pointer flex items-center lg:px-4  xl:px-6 ss:px-4 2xl:px-8 px-6 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2  2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
                                        </div>

                                    </div>
                                </div>
                                @php
                                    $productCount++; // เพิ่มจำนวนรายการ
                                @endphp
                                @endif
                            @endforeach
                        </div>
                    </div>
                   
                    
                        <div class="swiper-button-next swiper-button-next{{$j}}"></div>
                        <div class="swiper-button-prev swiper-button-prev{{$j}}"></div>
                       
                        @php $j++; @endphp
                </div>
            </div>
        </section>
        @endforeach
    </div>

    @include('frontend.pages.travel_sim.footer_sim')
@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/travel/swiper.js')
    @vite('resources/js/global_js/add_cart_product.js')
@endsection

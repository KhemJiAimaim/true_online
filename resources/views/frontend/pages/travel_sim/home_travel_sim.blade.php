@extends('frontend.layouts.main')

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/travel.css')
@endsection

@section('content')
    <div class="2xl:mt-12 mt-6 ">
        <div class=" max-2xl:overflow-x-scroll max-uu::overflow-hidden  mb-2 px-3">
            <div class="flex justify-center max-md:justify-start  gap-x-6  py-2  items-center mx-auto ">
                @foreach ($cates as $cate)
                    <a href="/{{ $cate->cate_url }}"
                        class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-105 transition-all duration-500 ease-in-out">
                        <div class="flex-initial w-[10rem]  flex flex-col justify-center items-center">
                            <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5" src="/{{ $cate->cate_thumbnail }}"
                                alt="">
                            <p class="max-uu:text-[18px] max-xs:text-[16px]">{{ $cate->cate_title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container pt-4 px-3 ">
            <div class="mx-auto w-[90%] max-2xl:w-4/5 max-lg:w-full">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text yy:text-[1.5rem]  md:text-[20px]   text-[16px] px-3 py-4">ซิม อันดับ 1
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
        @foreach ($cates as $cate)
            <section id="travel" class="bg-white py-6 2xl:mt-16 px-3">
                <div class="">
                    <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px]">{{ $cate->cate_keyword }}
                    </p>
                    <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">
                        {{ $cate->cate_description }}</p>
                </div>

                <div class="2xl:my-16 my-4 z-2 w-full">
                    <div class="w-4/5 max-2xl:max-w-[90%] max-lg:w-full my-0 mx-auto flex justify-center">
                        <div class="swiper swiper{{ $j }} flex justify-center items-center mx-auto w-full">
                            @php
                                $count = 0;
                                $justify = 'justify-center max-2xl:justify-start';

                                foreach ($travel_sim as $sim) {
                                    if ($sim->travel_cate_id == $cate->id) {
                                        // ทำสิ่งที่คุณต้องการทำ
                                        $count++;
                                    }
                                }
                                $justify = $count > 3 ? 'justify-start' : $justify;
                                // echo " $count $justify";
                            @endphp
                            <div class="swiper-wrapper flex items-center {{ $justify }}">
                                @foreach ($travel_sim as $sim)
                                    @if ($sim->travel_cate_id == $cate->id)
                                        <div class="swiper-slide flex justify-center items-center">
                                            <div
                                                class="drop-shadow-md py-4 w-[460px] max-yy:w-[360px]  max-xs:w-[310px] max-se:w-[300px] h-[100%] ">
                                                <div
                                                    class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0 ">

                                                    <p class="text-white mr-2 text-left text-[18px] max-es:text-[16px]">
                                                        {{ $sim->lifetime }} DAYS {{ $sim->price }} BAHT</p>
                                                    <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png"
                                                        alt="">
                                                </div>

                                                <div class="bg-white">
                                                    <div
                                                        class="flex justify-center py-4 mx-auto w-[180px] h-[200px] max-ex:w-[160px] max-ex:h-[180px]">
                                                        <img src="{{ $sim->thumbnail_link }}" alt=""
                                                            class="w-full h-full object-contain">
                                                    </div>
                                                </div>

                                                @if ($cate->id == 22)
                                                    <div
                                                        class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 h-[400px] overflow-scroll overflow-y-auto ">
                                                        <div class=" flex gap-4">
                                                            <img src="/images/travel/majesticons_sim-card-line.png"
                                                                alt="" class=" w-[26px]">
                                                            <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                {{ $sim->title }}</p>
                                                        </div>
                                                        <div class=" flex gap-4">
                                                            <img src="/images/travel/quill_calendar.png" alt=""
                                                                class="w-[26px] h-[26px]">
                                                            <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                {{ $sim->lifetime }} Days</p>
                                                        </div>
                                                        @if ($sim->unlimited_5g == true)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/tabler_world.png" alt=""
                                                                    class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited
                                                                    5G
                                                                    Internet</p>
                                                            </div>
                                                        @else
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/tabler_world.png" alt=""
                                                                    class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Free
                                                                        {{ $sim->lifetime }} Days</p>
                                                                    <p class="text-left text-sm">
                                                                        {{ $sim->internet_details }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($cate->id == 23)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/majesticons_coins-line.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px]">
                                                                    {{ $sim->call_credit }}</p>
                                                            </div>
                                                        @else
                                                            <div class=" flex gap-4 ">
                                                                <img src="/images/travel/majesticons_coins-line.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                        {{ $sim->call_credit }}</p>
                                                                    <p class="text-sm">{{ $sim->call_credit_details }}</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($cate->id == 23)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/icon-park-outline_phone-call.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                    {{ $sim->free_call }}</p>
                                                            </div>
                                                        @else
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/icon-park-outline_phone-call.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                        {{ $sim->free_call }}</p>
                                                                    <p class="text-sm">{{ $sim->free_call_details }}</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($sim->free_wifi == true)
                                                            @php
                                                                $wifiLabel = $cate->id == 23 ? 'Unlimited WiFi' : 'Free WiFi';
                                                                $wifiImage = '/images/travel/arcticons_wifianalyzer.png';
                                                            @endphp

                                                            <div class="flex gap-4">
                                                                <img src="{{ $wifiImage }}" alt=""
                                                                    class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px]">
                                                                    {{ $wifiLabel }}</p>
                                                            </div>
                                                        @endif
                                                        @if ($sim->free_tiktok)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/arcticons_tiktok.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                        {{ $sim->free_tiktok_details }}</p>
                                                                    <p class="text-sm"> for TikTok and Douyin</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($sim->free_socials)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/like-thumb-hand.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Free
                                                                        14
                                                                        social apps</p>
                                                                    <p class="text-left">(no data charges)</p>
                                                                    <div class="mt-1 grid grid-cols-7 gap-x-2 gap-y-2">
                                                                        <img src="/images/travel/social/facebook icon.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Group 6.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (1).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Group 7.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (2).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (3).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (4).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (5).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (6).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (7).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (8).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (9).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (10).png"
                                                                            alt="" class="max-w-[20px]">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif

                                                    </div>
                                                @else
                                                    <div
                                                        class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 h-[250px] overflow-scroll overflow-y-auto ">
                                                        <div class=" flex gap-4">
                                                            <img src="/images/travel/majesticons_sim-card-line.png"
                                                                alt="" class=" w-[26px]">
                                                            <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                {{ $sim->title }}</p>
                                                        </div>
                                                        <div class=" flex gap-4">
                                                            <img src="/images/travel/quill_calendar.png" alt=""
                                                                class="w-[26px] h-[26px]">
                                                            <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                {{ $sim->lifetime }} Days</p>
                                                        </div>
                                                        @if ($sim->unlimited_5g == true)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/tabler_world.png" alt=""
                                                                    class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited
                                                                    5G
                                                                    Internet</p>
                                                            </div>
                                                        @else
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/tabler_world.png" alt=""
                                                                    class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Free
                                                                        {{ $sim->lifetime }} Days</p>
                                                                    <p class="text-left text-sm">
                                                                        {{ $sim->internet_details }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($cate->id == 23)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/majesticons_coins-line.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px]">
                                                                    {{ $sim->call_credit }}</p>
                                                            </div>
                                                        @else
                                                            <div class=" flex gap-4 ">
                                                                <img src="/images/travel/majesticons_coins-line.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                        {{ $sim->call_credit }}</p>
                                                                    <p class="text-sm">{{ $sim->call_credit_details }}</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($cate->id == 23)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/icon-park-outline_phone-call.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                    {{ $sim->free_call }}</p>
                                                            </div>
                                                        @else
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/icon-park-outline_phone-call.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                        {{ $sim->free_call }}</p>
                                                                    <p class="text-sm">{{ $sim->free_call_details }}</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($sim->free_wifi == true)
                                                            @php
                                                                $wifiLabel = $cate->id == 23 ? 'Unlimited WiFi' : 'Free WiFi';
                                                                $wifiImage = '/images/travel/arcticons_wifianalyzer.png';
                                                            @endphp

                                                            <div class="flex gap-4">
                                                                <img src="{{ $wifiImage }}" alt=""
                                                                    class="w-[26px] h-[26px]">
                                                                <p class="text-left text-[16px] 2xl:text-[18px]">
                                                                    {{ $wifiLabel }}</p>
                                                            </div>
                                                        @endif
                                                        @if ($sim->free_tiktok)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/arcticons_tiktok.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">
                                                                        {{ $sim->free_tiktok_details }}</p>
                                                                    <p class="text-sm"> for TikTok and Douyin</p>
                                                                </div>
                                                            </div>
                                                        @endif
                                                        @if ($sim->free_socials)
                                                            <div class=" flex gap-4">
                                                                <img src="/images/travel/like-thumb-hand.png"
                                                                    alt="" class="w-[26px] h-[26px]">
                                                                <div class="flex flex-col">
                                                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Free
                                                                        14
                                                                        social apps</p>
                                                                    <p class="text-left">(no data charges)</p>
                                                                    <div class="mt-1 grid grid-cols-7 gap-x-2 gap-y-2">
                                                                        <img src="/images/travel/social/facebook icon.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Group 6.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (1).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Group 7.png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (2).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (3).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (4).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (5).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (6).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (7).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (8).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (9).png"
                                                                            alt="" class="max-w-[20px]">
                                                                        <img src="/images/travel/social/Vector (10).png"
                                                                            alt="" class="max-w-[20px]">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif

                                                    </div>
                                                @endif
                                                <div
                                                    class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2 relative">
                                                    <div class="flex justify-between items-center">
                                                        <p
                                                            class="text-white text-left text-[18px] max-xs:text-[16px] mt-2">
                                                            ราคา</p>
                                                        <p class="text-white font-medium text-center text-[50px]">
                                                            {{ $sim->price }}</p>
                                                        <p
                                                            class="text-white text-right text-[18px] max-xs:text-[16px] mt-2">
                                                            บาท
                                                        </p>
                                                    </div>
                                                    <img class=" absolute left-0 bottom-0"
                                                        src="/images/circle/Intersect (2).png">
                                                </div>

                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between py-4 px-4 max-xs:px-1 items-center gap-2 max-se:gap-1 ">
                                                    <div id="addBerToCart" data-id="{{ $sim->id }}"
                                                        data-type="6"
                                                        class="group rounded-full border border-red-500  w-[50px] h-[50px]  max-yy:w-[45px] max-yy:h-[45px]   flex justify-center items-center p-2 hover:bg-red-600">
                                                        <img src="/images/mdi_cart-arrow-down.png" alt=""
                                                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-30">
                                                    </div>

                                                    <a href="https://line.me/ti/p/~@berhoro"
                                                        class="flex justify-center items-center">
                                                        <div
                                                            class="  group rounded-full border border-green-500 w-[50px] h-[50px]  max-yy:w-[45px] max-yy:h-[45px]   p-2 hover:bg-green-600 ">
                                                            <img src="/images/icons8-line-app (1) 6.png" alt=""
                                                                class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                                        </div>
                                                    </a>

                                                    <a href="{{ url('/travel_sim_buy/' . $sim->id) }}" target="_blank"
                                                        class="cursor-pointer flex justify-center items-center py-2.5  w-36 max-yy:w-28 max-xs:w-24 max-uu:text-[18px]  max-yy:text-[16px] max-xs:text-[14px]  font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                                    <button data-id="{{ $sim->id }}"
                                                        data-type="6" id="buyProductNow"
                                                        class="cursor-pointer flex justify-center items-center py-2.5  w-36 max-yy:w-28 max-xs:w-24  max-uu:text-[18px]  max-yy:text-[16px] max-xs:text-[14px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
                                                </div>

                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        </div>


                        <div class="swiper-button-next swiper-button-next{{ $j }}"></div>
                        <div class="swiper-button-prev swiper-button-prev{{ $j }}"></div>

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

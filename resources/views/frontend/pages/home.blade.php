@extends('frontend.layouts.main')
@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/home.css')
@endsection

@section('content')
    <div class="2xl:my-12">

        <div class=" max-2xl:overflow-x-scroll max-uu::overflow-hidden  mb-2 px-3">
            <div class="flex justify-center max-md:justify-start  gap-x-10 max-xs:gap-x-2  py-2  items-center mx-auto ">
                @foreach ($cate_home as $cate)
                    <a href="#{{ $cate->cate_url }} "
                        class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-110 transition-all duration-500 ease-in-out">
                        <div class="flex-initial max-uu:w-[9rem] max-xs:w-[7rem] flex flex-col justify-center items-center">
                            <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5" src="/{{ $cate->cate_thumbnail }}"
                                alt="">
                            <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">{{ $cate->cate_title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container pt-4 px-3">
            <div class="mx-auto  w-[90%] max-2xl:w-4/5 max-lg:w-full">
                <div class="title-plate-line "></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <h1 class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[18px]">{{ $seo->cate_h1 }}</h1>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        <div class="2xl:my-12 my-6 md:w-[600px] 2xl:w-[1536px] mx-auto px-3">
            <h2 class="text-gray-400 2xl:text-[20px] md:text-[18px] text-[16px] ">{{ $seo->cate_h2 }}</h2>
        </div>

        {{-- --- --}}
        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden py-2 mb-4  ">
            <div
                class="2xl:w-[1536px] xl:w-[1200px] w-[1200px] se:w-[1000px] md:w-[1100px] lg:w-[1000px] ss:w-[1050px] ss:gap-4 xl:gap-10 grid grid-cols-3 md:gap-1 se:gap-4 se:p-0  gap-4 xs:gap-0  lg:gap-6 2xl:gap-4 mx-auto 2xl:p-4 p-1 items-center place-content-center ">
                @foreach ($menus as $menu)
                    <a href="{{ $menu->slug }}"
                        class="w-[350px] max-xl:w-[320px] max-xs:w-[300px]  2xl:w-[450px] mx-auto h-auto bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col rounded-[2rem] drop-shadow-md">
                        <img class="w-full h-auto rounded-tl-3xl rounded-tr-3xl" src="{{ $menu->thumbnail_link }}"
                            alt="">

                        <div class="grid grid-cols-3 mb-2">
                            <div class="flex justify-center items-center">
                                <img src="{{ $menu->image_link }}" class="w-14 h-14" alt="">
                            </div>
                            <div class="col-span-2">
                                <p class="text-white text-left font-medium  text-[20px] mt-2 mb-2 ">{{ $menu->title }}</p>
                                <p class="text-white text-left text-[16px] ">{{ $menu->description }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        {{-- --- --}}

        @php
            $j = 1;
        @endphp
        @foreach ($cate_home as $cate)
            {{-- @dd($cate) --}}
            @php
                $bg = '';
                $circle1 = '';
                $circle2 = '';
                if ($j % 2 != 0) {
                    $bg = 'bg-gray-100';
                    $circle1 = '<img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt="">';
                    $circle2 = '<img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png" alt="">';
                } else {
                    $bg = '';
                    $circle1 = '';
                    $circle2 = '';
                }
                $j++;
                $i = 0;
            @endphp
            <section id="{{ $cate->cate_url }}" class="{{ $bg }} py-6 relative z-0 px-3 ss:px-6">
                {!! $circle1 !!}
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">
                    {{ $cate->cate_title }}</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] text-[16px]">{{ $cate->cate_description }}</p>

                <div class="2xl:my-16 my-4 z-2 w-full">
                    <div class="w-4/5 max-lg:w-full my-0 mx-auto flex justify-center ">
                        {{-- เน็ตไฟเบอร์ --}}
                        @if ($cate->id == 2)
                            <div class="swiper swiper1 items-center w-full mx-auto">
                                @php
                                    $justify = 'justify-center max-xs:justify-start';
                                    if (count($product_fiber) > 3) {
                                        $justify = 'justify-start';
                                    }
                                @endphp
                                <div class="swiper-wrapper items-center  mx-auto flex {{ $justify }}">
                                    @foreach ($product_fiber as $fiber)
                                        <div class="swiper-slide flex justify-center items-center  ">
                                            <div class="drop-shadow-md w-[350px]  max-es:w-[310px]  h-[100%] py-4">
                                                <div
                                                    class=" flex bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">
                                                    <p class="text-white text-left text-[16px]">{{ $fiber->details }}</p>
                                                    {{-- <img class="bg-imag-head" src="/images/Intersect2.png" alt=""> --}}
                                                    <img class="absolute top-0 right-0" src="/images/Intersect2.png"
                                                        alt="">
                                                </div>

                                                <div class="bg-[#F8F9FA]">
                                                    <div class="">
                                                        <p class="py-3 text-[20px]">{{ $fiber->title }}</p>
                                                    </div>
                                                </div>
                                                {{-- @php
                                                    $download = $fiber->download_speed >= 1000 ? $fiber->download_speed / 1000 : $fiber->download_speed;
                                                    $unit_download = $fiber->download_speed >= 1000 ? 'Gbps' : 'Mbps';

                                                    $upload = $fiber->upload_speed >= 1000 ? $fiber->upload_speed / 1000 : $fiber->upload_speed;
                                                    $unit_upload = $fiber->upload_speed >= 1000 ? 'Gbps' : 'Mbps';
                                                @endphp --}}
                                                <div class="bg-white">
                                                    <div class="flex justify-center py-2 items-center">
                                                        <p class="text-[70px] text-center font-medium">
                                                            {{ $fiber->download_speed }}
                                                        </p>
                                                        <div
                                                            class="border-l border border-gray-500 text-center mx-4 max-xs:mx-2 py-8 rounded-full">
                                                        </div>
                                                        <p class="text-lg text-left text-[16px]">
                                                            Mbps<br>/{{ $fiber->upload_speed }}Mbps
                                                        </p>
                                                    </div>

                                                    <div class="blue-plate-container">
                                                        <div class="blue-plate-line"></div>
                                                        <div class="blue-plate-group">
                                                            <div class="blue-plate-box-s">
                                                                <div class="blue-plate-circleS"></div>
                                                                <div class="blue-plate-textboxS"></div>
                                                            </div>
                                                            <div class="blue-plate-textboxC">
                                                                <p class="blue-plate-text text-white text-[18px]">รับทันที
                                                                </p>
                                                            </div>
                                                            <div class="blue-plate-box-e">
                                                                <div class="blue-plate-textboxE"></div>
                                                                <div class="blue-plate-circleE"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $benefit_ids = explode(',', $fiber->benefit_ids);
                                                        $post_ids = $post_benefits->pluck('id')->toArray();

                                                        // หาค่าที่เหมือนกัน
                                                        $same_benefit = array_intersect($benefit_ids, $post_ids);
                                                        $benefit_items = array_slice($same_benefit, 0, 3);
                                                    @endphp
                                                    <div class="flex justify-center py-6 px-2">
                                                        @php
                                                            $showDivider = false;
                                                        @endphp

                                                        @foreach ($benefit_items as $item)
                                                            @foreach ($post_benefits as $post)
                                                                @if ($post->id == $item)
                                                                    <div
                                                                        class="w-[6rem] h-[96px] flex justify-center items-center">
                                                                        <img class="w-full"
                                                                            src="/{{ $post->thumbnail_link }}"alt="">
                                                                    </div>
                                                                    @php
                                                                        $showDivider = true;
                                                                    @endphp
                                                                @endif
                                                            @endforeach

                                                            {{-- ตรวจสอบว่าไม่ใช่การวนลูปครั้งสุดท้ายก่อนที่จะเพิ่ม div --}}
                                                            @if ($showDivider && !$loop->last)
                                                                <div
                                                                    class="border-l border border-gray-500 text-center mx-1 rounded-full">
                                                                </div>
                                                                @php
                                                                    $showDivider = false;
                                                                @endphp
                                                            @endif
                                                        @endforeach
                                                    </div>

                                                </div>

                                                <div
                                                    class=" relative bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2 items-center">
                                                    <img class="absolute bottom-0 left-0" src="/images/Intersect (1).png"
                                                        alt="">
                                                    <div class="grid grid-cols-3 items-center">
                                                        <p class="text-white text-left  text-[18px] max-xs:text-[16px] ">
                                                            ราคา
                                                        </p>
                                                        <p class="text-white font-medium text-center text-[50px] ">
                                                            {{ number_format($fiber->special_price > 0 ? $fiber->special_price : $fiber->price_per_month) }}
                                                        </p>
                                                        <p class="text-white text-right text-[18px] max-xs:text-[16px] ">
                                                            บาท/เดือน</p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                                    <a href="{{ url('/fiber/detail_true_dtac/' . $fiber->id) }}"
                                                        class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>

                            <div class="items-center  mx-auto">
                                <div class="swiper-button-next swiper-button-next1 "></div>
                                <div class="swiper-button-prev swiper-button-prev1 "></div>
                            </div>



                            {{-- เน็ตไฟเบอร์ --}}

                            {{-- เบอร์มงคลรายเดือน --}}
                        @elseif($cate->id == 3)
                            <div class="swiper swiper2 items-center  w-full mx-auto">
                                @php
                                    $justify = 'justify-center max-xs:justify-start';
                                    if (count($berproducts) > 3) {
                                        $justify = 'justify-start';
                                    }
                                @endphp
                                <div class="swiper-wrapper items-center w-full mx-auto flex {{ $justify }}">
                                    @foreach ($berproducts as $ber)
                                        <div class="swiper-slide flex justify-center items-center">
                                            <div class="drop-shadow-md w-[350px]  max-es:w-[310px]   h-[100%] py-4">
                                                <div
                                                    class="relative  bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] px-3 z-0">
                                                    <div class="flex justify-start items-center gap-1 ">
                                                        <p class="text-white text-[16px]">เกรด</p>
                                                        <p class="text-white font-medium text-[1.5rem]">
                                                            {{ $ber->product_grade }}</p>
                                                    </div>
                                                    <div
                                                        class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full rounded-tr-[20px] w-3/4 xl:w-4/6 md:w-4/6 transform -skew-x-12 px-2 flex justify-end items-center">
                                                        <p class="text-white mr-1 text-[16px]">ผลรวม</p>
                                                        <p class="text-white font-bold text-[1.5rem]">
                                                            {{ $ber->product_sumber }}</p>
                                                    </div>
                                                    <img class=" absolute right-0 top-0"
                                                        src="/images/circle/Intersect.png" alt="">
                                                </div>

                                                {{-- berproduct --}}
                                                <div class="bg-white flex items-center justify-center px-2 gap-[1rem]">
                                                    <div class="max-w-[70px] max-h-[40px]">
                                                        <img src="{{ isset($ber->thumbnail) ? $ber->thumbnail : '/images/651e616b04c02CnURE.png' }}"
                                                            alt="" class="w-full h-full">
                                                    </div>
                                                    <a href="{{ url('/detailber/' . $ber->product_phone) }}">
                                                        <div class="flex justify-center py-10 max-ex:py-2">
                                                            <h2 class="2xl:text-[2rem] text-[1.5rem] text-center font-bold">
                                                                {{ substr($ber->product_phone, 0, 3) }}-{{ substr($ber->product_phone, 3, 3) }}-{{ substr($ber->product_phone, 6) }}
                                                            </h2>
                                                        </div>
                                                    </a>
                                                </div>
                                                {{-- berproduct --}}

                                                <div
                                                    class="bg-[#F8F9FA] flex justify-start px-4 py-2 max-dm:h-[80px] h-[110px]">
                                                    {{-- <img src="/images/Ellipse 6.png" alt="" class="px-4"> --}}
                                                    
                                                    <p class="text-left 2xl:text-[16px] text-[14px] px-2 col-span-4 font-light">{{ $ber->product_comment }}</p>
                                                </div>

                                                <div
                                                    class=" relative bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2 items-center">
                                                    <img class=" absolute left-0 bottom-0"
                                                        src="/images/circle/Intersect (2).png" alt="">
                                                    <div class="flex justify-between items-center">
                                                        <p class="text-white text-left text-[18px] max-xs:text-[16px] ">
                                                            ราคา
                                                        </p>
                                                        <p class="text-white font-medium  text-[50px]">
                                                                {{$ber->product_price==0 ?"แจกฟรี":number_format($ber->product_price) }}
                                                            </p>
                                                        <p class="text-white text-right text-[18px] max-xs:text-[16px] ">
                                                            บาท
                                                        </p>
                                                    </div>
                                                </div>


                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between py-4 px-4 max-xs:px-2 items-center ">
                                                    <div id="addBerToCart" data-id="{{ $ber->product_id }}"
                                                        data-type="{{$cate->id}}"
                                                        class="group rounded-full border border-red-500  w-[45px]  h-[45px]   flex justify-center items-center p-2 hover:bg-red-600">
                                                        <img src="/images/mdi_cart-arrow-down.png" alt=""
                                                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-30">
                                                    </div>

                                                    <a href=""
                                                        class="flex justify-center items-center">
                                                        <div
                                                            class="  group rounded-full border border-green-500 w-[45px] h-[45px]  p-2 hover:bg-green-600">
                                                            <img src="/images/icons8-line-app (1) 6.png" alt=""
                                                                class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                                        </div>
                                                    </a>
                                                    <a href="{{ url('/detailber/' . $ber->product_phone) }}"
                                                        target="_blank"
                                                        class="cursor-pointer flex items-center py-2.5 px-4 max-uu:px-4 max-xs:px-2 max-uu:text-[18px] max-2xl:max-uu:text-[16px]  font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                                    <button id="addBerToCart" data-id="{{ $ber->product_id }}"
                                                        data-type="{{ $cate->id }}"
                                                        class="cursor-pointer flex items-center py-2.5 px-6 max-uu:px-6 max-uu:text-[18px] max-2xl:max-uu:text-[16px]  font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
                                                </div>


                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="items-center  mx-auto">
                                <div class="swiper-button-next swiper-button-next2 "></div>
                                <div class="swiper-button-prev swiper-button-prev2 "></div>
                            </div>
                            {{-- เบอร์มงคลรายเดือน --}}

                            {{-- ซิมเติมเงิน --}}
                        @elseif($cate->id == 4)
                            <div class="swiper swiper3 items-center w-full mx-auto">
                                @php
                                    $justify = 'justify-center max-xs:justify-start';
                                    if (count($prepaid_cate) > 3) {
                                        $justify = 'justify-start';
                                    }
                                @endphp
                                <div class="swiper-wrapper items-center w-full mx-auto flex {{ $justify }}">
                                    @foreach ($prepaid_cate as $prepaid)
                                        <div class="swiper-slide flex justify-center items-center">
                                            <div class="drop-shadow-md w-[350px]  max-es:w-[310px]   h-[100%] py-4">
                                                <div
                                                    class="relative  bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                                    {{-- <div class="flex justify-start items-center"> --}}
                                                    <p class="text-white text-left ml-3 text-[16px]">{{ $prepaid->title }}
                                                    </p>
                                                    <img class=" absolute right-0 top-0"
                                                        src="/images/circle/Intersect.png" alt="">
                                                    {{-- </div> --}}

                                                </div>

                                                <div class="bg-white">
                                                    <div
                                                        class="flex justify-center py-4 mx-auto w-[180px] h-[180px] max-ex:w-[160px] max-ex:h-[160px]">
                                                        <img src="/{{ $prepaid->thumbnail_link }}" alt=""
                                                            class="w-full h-full object-contain">
                                                    </div>
                                                </div>

                                                <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[120px]">
                                                    <img src="images/Ellipse 6.png" alt="" class="px-4">
                                                    <p class="text-left 2xl:text-[16px] text-[14px] p-2  py-1 col-span-4">
                                                        {{ $prepaid->details }}</p>
                                                </div>


                                                <div
                                                    class=" relative bg-gradient-to-r from-[#ED4312] to-[#F6911D]  py-2 px-2 items-center">
                                                    <img class=" absolute left-0 bottom-0"
                                                        src="/images/circle/Intersect (2).png" alt="">
                                                    <div class="flex justify-between items-center">
                                                        <p class="text-white text-left text-[18px] max-xs:text-[16px] ">
                                                            ราคาเริ่มต้น
                                                        </p>
                                                        <p class="flex items-center flex-col">
                                                            <span class="text-white font-medium text-center text-[50px]">
                                                                {{ $price = $prepaid->price ? number_format($prepaid->price) : 0 }}</span>
                                                        </p>
                                                        <p class="text-white text-right text-[18px] max-xs:text-[16px] ">
                                                            บาท / เดือน
                                                        </p>

                                                    </div>
                                                </div>

                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 items-center">
                                                    {{-- <a href="{{ url('/prepaid_sim/buy_sim/' . $prepaid->id) }}" class="cursor-pointer py-2  px-6 mb-2 mt-2 2xl:text-[16px] text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a> --}}
                                                    <a href="{{ url('/prepaid_sim/buy_sim/' . $prepaid->id) }}"
                                                        data-id="{{ $i }}" data-type="{{ $cate->id }}"
                                                        data-prepaid="{{ $prepaid->prepaid_sim_id }}"
                                                        class="cursor-pointer py-2 px-10  mb-2 mt-2 2xl:text-[16px] text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="items-center  mx-auto">
                                <div class="swiper-button-next swiper-button-next3"></div>
                                <div class="swiper-button-prev swiper-button-prev3"></div>
                            </div>
                            {{-- ซิมเติมเงิน --}}

                            {{-- ซิมท่องเที่ยว --}}
                        @elseif($cate->id == 6)
                            <div class="swiper swiper4 items-center w-full mx-auto">
                                @php
                                    $justify = 'justify-center max-xs:justify-start';
                                    if (count($travel_sim) > 3) {
                                        $justify = 'justify-start';
                                    }
                                @endphp
                                <div class="swiper-wrapper items-center w-full mx-auto flex {{ $justify }}">
                                    @foreach ($travel_sim as $sim)
                                        <div class="swiper-slide flex justify-center items-center">
                                            <div class="drop-shadow-md w-[350px]  max-es:w-[310px]  h-[100%] py-4">
                                                <div
                                                    class="relative  bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                                                    <p class="text-white mr-2 text-left text-[16px]">{{ $sim->lifetime }}
                                                        DAYS {{ $sim->price }} BAHT</p>
                                                    <img class=" absolute right-0 top-0"
                                                        src="/images/circle/Intersect.png" alt="">
                                                </div>

                                                <div class="bg-white">
                                                    <div
                                                        class="flex justify-center py-4 mx-auto w-[180px] h-[200px] max-ex:w-[160px] max-ex:h-[180px]">
                                                        <img src="/{{ $sim->thumbnail_link }}" alt=""
                                                            class="w-full h-full object-contain">
                                                    </div>
                                                </div>

                                                <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                                                    <img src="/images/travel/majesticons_sim-card-line.png" alt=""
                                                        class="px-4">
                                                    <p class="text-left text-[16px] py-1 col-span-4">{{ $sim->title }}
                                                    </p>
                                                </div>

                                                <div
                                                    class="relative bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                                                    <img class=" absolute left-0 bottom-0"
                                                        src="/images/circle/Intersect (2).png" alt="">
                                                    <div class="flex justify-between items-center">
                                                        <p class="text-white text-left text-[18px] max-xs:text-[16px] ">
                                                            ราคา
                                                        </p>
                                                        <p class="text-white font-medium text-center text-[50px]">
                                                            {{ $sim->price }}</p>
                                                        <p class="text-white text-right text-[18px] max-xs:text-[16px] ">
                                                            บาท
                                                        </p>

                                                    </div>
                                                </div>

                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between py-4 px-4 max-xs:px-2 items-center ">
                                                    <div id="addBerToCart" data-id="{{ $sim->id }}"
                                                        data-type="{{ $cate->id }}"
                                                        class="group rounded-full border border-red-500  w-[45px]  h-[45px]   flex justify-center items-center p-2 hover:bg-red-600">
                                                        <img src="/images/mdi_cart-arrow-down.png" alt=""
                                                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-30">
                                                    </div>

                                                    <a href=""
                                                        class="flex justify-center items-center">
                                                        <div
                                                            class="  group rounded-full border border-green-500 w-[45px] h-[45px]  p-2 hover:bg-green-600">
                                                            <img src="/images/icons8-line-app (1) 6.png" alt=""
                                                                class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                                        </div>
                                                    </a>

                                                    <a href="{{ url('/travel_sim_buy/' . $sim->id) }}" target="_blank"
                                                        class="cursor-pointer flex items-center py-2.5 px-4 max-uu:px-4 max-xs:px-2 max-uu:text-[18px] max-2xl:max-uu:text-[16px]  font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                                    <button data-id="{{ $sim->id }}"
                                                        data-type="{{ $cate->id }}" id="buyProductNow"
                                                        class="cursor-pointer flex items-center py-2.5 px-6 max-uu:px-6 max-uu:text-[18px] max-2xl:max-uu:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="items-center  mx-auto">
                                <div class="swiper-button-next swiper-button-next4 "></div>
                                <div class="swiper-button-prev swiper-button-prev4 "></div>
                            </div>
                            {{-- ซิมท่องเที่ยว --}}
                        @endif
                    </div>

                </div>

                <div class="items-center mx-auto mt-4 pt-6">
                    <a href="{{ url('/' . $cate->cate_url) }}"
                        class="py-2.5 px-5 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ดูทั้งหมด</a>
                </div>
                {!! $circle2 !!}
            </section>
        @endforeach
        {{-- --- --}}

    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/home_true/swiper.js')
    @vite('resources/js/home_true/home.js')
@endsection

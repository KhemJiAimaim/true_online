@extends('frontend.layouts.main')


@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/prepaid_sim.css')
@endsection


@section('content')
    <div class="2xl:mt-16 mt-[1rem]">
        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container pt-4 px-3">
            <div class="mx-auto  w-[90%] max-2xl:w-4/5 max-lg:w-full ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[16px]">ทรู ซิมเติมเงิน และ แพ็กเกจเสริม
                        ทั้งเน็ตและโทร</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        @php $j = 1 @endphp
        @foreach ($cates as $cate)
            <section id="sim" class="py-6 px-3 {!! $bg = $j % 2 == 0 ? 'bg-gray-100 relative' : 'bg-white' !!} z-[1]">
                {!! $circle1 =
                    $j % 2 == 0 ? '<img class="absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt="">' : '' !!}

                <div class="mb-10 ">
                    <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px] z-50 font-medium">
                        {{ $cate->cate_title }}</p>
                    <p class="text-[#838383] mt-2  2xl:text-[20px] xl:text-[18px] text-[16px] z-50">
                        {{ $cate->cate_description }}</p>
                </div>
                @if ($cate->id == 17)
                    <div class="2xl:my-16 my-4 z-2 w-full">
                        <div class=" w-[90%] max-2xl:w-4/5 max-lg:w-full my-0 mx-auto flex justify-center ">
                            <div class="swiper swiper1 flex justify-center items-center mx-auto w-full">
                                @php
                                    $justify = 'justify-center max-xs:justify-start';
                                    if (count($prepaid_cate) > 3) {
                                        $justify = 'justify-start';
                                    }

                                    $color_bg = [
                                        "TRUE" => 'bg-gradient-to-r from-[#ED4312] to-[#F6911D]',
                                        "DTAC" => 'bg-gradient-to-r from-[#00BCFF] to-[#5642CD]',
                                        "true" => 'bg-gradient-to-r from-[#ED4312] to-[#F6911D]',
                                        "dtac" => 'bg-gradient-to-r from-[#00BCFF] to-[#5642CD]'
                                    ];
                                @endphp
                                <div class="swiper-wrapper items-center w-full mx-auto flex {{ $justify }}">
                                    @foreach ($prepaid_cate as $prepaid)
                                        <div class="swiper-slide flex justify-center items-center">
                                            <div
                                                class="drop-shadow-md py-4 w-[350px] max-xx:w-[330px] max-es:w-[300px] h-[100%]">
                                                <div
                                                    class="{{ $color_bg[$prepaid->network_name] }} relative overflow-hidden rounded-tl-[10px] rounded-tr-[10px] py-2">
                                                    {{-- <div class="flex justify-start items-center"> --}}
                                                    <p class="text-white text-left ml-3 text-[16px]">{{ $prepaid->title }}
                                                    </p>
                                                    <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png"
                                                        alt="">
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
                                                    <img src="{{ url($prepaid->network_thumbnail )}}" alt="" class="px-4">
                                                    <p class="text-left 2xl:text-[16px] text-[14px] p-2  py-1 col-span-4">
                                                        {{ $prepaid->details }}</p>
                                                </div>

                                                <div
                                                    class="{{ $color_bg[$prepaid->network_name] }} relative py-2 px-2 items-center">
                                                    <img class=" absolute left-0 bottom-0"
                                                        src="/images/circle/Intersect (2).png" alt="">
                                                    <div class="flex justify-between items-center">
                                                        <p class="text-white text-left text-[18px] max-xs:text-[16px]  ">
                                                            ราคาเริ่มต้น
                                                        </p>
                                                        <p class="flex items-center flex-col">
                                                            <span class="text-white font-medium text-center text-[50px]">
                                                                {{ $price = $prepaid->price ? number_format($prepaid->price) : 0 }}</span>
                                                        </p>
                                                        <p class="text-white text-right text-[18px] max-xs:text-[16px] ">
                                                            บาท/เดือน
                                                        </p>

                                                    </div>
                                                </div>

                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 items-center">
                                                    {{-- <a href="{{ url('/prepaid_sim/buy_sim/' . $prepaid->id) }}" class="cursor-pointer py-2  px-6 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a> --}}
                                                    <a href="{{ url('/prepaid_sim/buy_sim/' . $prepaid->id) }}"
                                                        data-id="{{ $prepaid->prepaid_sim_id }}" data-type="4"
                                                        prepaid_id="{{ $prepaid->prepaid_sim_id }}"
                                                        class="cursor-pointer py-2 px-10  mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="items-center mx-auto ">
                                <div class="swiper-button-next  swiper-button-next1"></div>
                                <div class="swiper-button-prev swiper-button-prev1"></div>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="2xl:my-16 my-4 z-2 w-full">
                        <div class=" w-[90%] max-2xl:w-4/5 max-lg:w-full my-0 mx-auto flex justify-center ">
                            <div class="swiper swiper2 flex justify-center items-center mx-auto w-full">
                                @php
                                    $justify = 'justify-center max-xs:justify-start';
                                    if (count($package) > 3) {
                                        $justify = 'justify-start';
                                    }
                                @endphp
                                <div class="swiper-wrapper items-center w-full mx-auto flex {{ $justify }}">

                                    @foreach ($package as $pack)
                                        <div class="swiper-slide flex justify-center items-center">
                                            <div
                                                class="drop-shadow-md py-4 w-[350px] max-xx:w-[330px] max-es:w-[300px] h-[100%]">
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

                                                <div
                                                    class="bg-[#F8F9FA] flex flex-col justify-center items-center py-2  h-[150px]">
                                                    <p class="text-[18px]">เน็ต</p>
                                                    <p class="text-[30px] font-medium">{{ $pack->title }} /
                                                        {{ $pack->lifetime }}วัน</p>
                                                </div>



                                                <div
                                                    class=" relative bg-gradient-to-r from-[#ED4312] to-[#F6911D]  py-2 px-2 items-center">
                                                    <img class=" absolute left-0 bottom-0"
                                                        src="/images/circle/Intersect (2).png" alt="">
                                                    <div class="grid grid-cols-3 items-center">
                                                        <p class="text-white text-left text-[18px] max-xs:text-[16px]">
                                                            ราคา
                                                        </p>

                                                        <span
                                                            class="text-white font-medium text-center text-[50px] max-xs:text-">
                                                            {{ number_format($pack->price) }}</span>

                                                        <p class="text-white text-right text-[18px] max-xs:text-[16px]">
                                                            บาท<br>/แบบรายครั้ง
                                                        </p>

                                                    </div>
                                                </div>

                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4 items-center">

                                                    <a href="{{ url('/prepaid_sim/buy_package/' . $pack->id) }}"
                                                        target="_blank"
                                                        class="cursor-pointer py-2 px-6 mb-2 mt-2 text-[18px] max-es:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                                    <a href="tel:{{ $pack->package_code }}"
                                                        class="cursor-pointer py-2 px-10 mb-2 mt-2 text-[18px] max-es:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="items-center mx-auto">
                                <div class="swiper-button-next  swiper-button-next2"></div>
                                <div class="swiper-button-prev swiper-button-prev2"></div>
                            </div>
                        </div>
                    </div>
                @endif
                <div class="items-center mx-auto mt-4 pt-6">
                    <a href="{{ url($cate->cate_url) }}"
                        class="py-2.5 px-5 mb-2 mt-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ดูทั้งหมด</a>
                </div>
                {!! $circle2 = $j % 2 == 0 ? '<img class=" absolute left-0 bottom-0 " src="/images/circle/ci2.png" alt="">' : '' !!}
            </section>
            @php $j++; @endphp
        @endforeach
        {{-- --- --}}

    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/prepaid_sim/swiper.js')
    @vite('resources/js/global_js/add_cart_product.js')
@endsection

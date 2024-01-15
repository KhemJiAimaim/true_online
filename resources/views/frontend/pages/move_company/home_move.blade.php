@extends('frontend.layouts.main')

@section('title')
    ย้ายค่ายเบอร์เดิมมาทรูมูฟ เอช
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/move.css')
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
                        <div class="swiper swiper{{ $j }} flex justify-center items-center mx-auto w-full ">
                            @php
                                $count = 0;
                                $justify = 'justify-center max-xs:justify-start';

                                foreach ($move_product as $product) {
                                    if ($product->move_cate_id == $cate->id) {
                                        // ทำสิ่งที่คุณต้องการทำ
                                        $count++;
                                    }
                                }
                                $justify = $count > 3 ? 'justify-start' : $justify;
                                echo " $count $justify";
                            @endphp
                            <div class="swiper-wrapper flex items-center py-4 {{ $justify }}">
                                @foreach ($move_product as $product)
                                    @if ($product->move_cate_id == $cate->id)
                                        {{-- @for ($i = 1; $i <= 4; $i++) --}}
                                        <div class="swiper-slide flex justify-center items-center">
                                            <div
                                                class="drop-shadow-md 2xl:w-[480px] xl:w-[380px] md:w-[390px] w-[350px] max-md:w-[300px] h-[100%] ">
                                                <div
                                                    class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2 relative ">
                                                    <p class="text-white text-left ml-3 text-[18px] max-md:text-[16px]">
                                                        {{ $product->details }}</p>
                                                    <img class=" absolute top-0 right-0" src="/images/circle/Intersect.png"
                                                        alt="">
                                                </div>

                                                <div class="bg-white flex items-center justify-center flex-col p-4 ">
                                                    <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                                    <div class="flex justify-center items-baseline gap-10">
                                                        <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">เน็ต
                                                        </p>
                                                        <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">
                                                            {{ $product->internet_volume }}</p>
                                                        <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]"> GB</p>

                                                    </div>
                                                    <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                                    <div class="flex justify-center items-baseline gap-10">
                                                        <p class="2xl:text-[1.5rem] text-[1rem]">โทร</p>
                                                        <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">
                                                            {{ $product->call_minutes }} </p>
                                                        <p class="2xl:text-[1.5rem] text-[1rem]">Mins</p>

                                                    </div>
                                                </div>
                                                <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                                    <div class="flex items-center justify-center gap-2">
                                                        <img src="/images/arcticons_wifianalyzer (1).png" alt="">
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
                                                    @if ($product->voice_hd == true)
                                                        <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                                        <div class="flex items-center flex-col justify-center">
                                                            <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">4G HD Voice
                                                            </p>
                                                            <p class="2xl:text-[1.2rem] text-[14px]">
                                                                เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                                        </div>
                                                    @endif
                                                </div>
                                                <div class="bg-white  2xl:flex flex-col gap-5 md:block hidden p-4">
                                                    <div class="orange-plate-container pb-2">
                                                        <div class="orange-plate-line"></div>
                                                        <div class="orange-plate-group">
                                                            <div class="orange-plate-box-s">
                                                                <div class="orange-plate-circleSM"></div>
                                                                <div class="orange-plate-textboxS"></div>
                                                            </div>
                                                            <div class="orange-plate-textboxC">
                                                                <p
                                                                    class="orange-plate-text text-white text-[18px] max-md:text-[16px]">
                                                                    รับทันที</p>
                                                            </div>
                                                            <div class="orange-plate-box-e">
                                                                <div class="orange-plate-textboxE"></div>
                                                                <div class="orange-plate-circleEM"></div>
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
                                                                    <div class="grid grid-cols-[90px,1fr] gap-2 px-4 mb-2">
                                                                        <div
                                                                            class="border-[1px] rounded-lg border-orange-500 p-1 w-[80px] h-[80px]">
                                                                            <img class="w-full h-full object-contain"
                                                                                src="{{ $pos->thumbnail_link }}"
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

                                                    {{-- <div class="px-4 text-start" id="content-ck">
                                                            {!! $product->details_content !!}
                                                        </div> --}}
                                                </div>

                                                <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D]  relative">
                                                    <img class=" absolute left-0 top-0 h-[100%]"
                                                        src="/images/circle/Intersect (2).png" alt="">
                                                    <div class="flex items-center justify-between py-6 px-4">

                                                        <p class="text-white text-left text-[18px] max-md:text-[16px]">ราคา
                                                        </p>
                                                        <p class="text-center flex flex-col">
                                                            @if ($product->discount > 0)
                                                                <span
                                                                    class="line-through text-gray-100">{{ number_format($product->price) }}</span>
                                                            @endif
                                                            <span
                                                                class="text-white font-medium text-3xl">{{ number_format($product->discount > 0 ? $product->discount : $product->price) }}</span>
                                                        </p>
                                                        <p class="text-white text-right text-[18px] max-md:text-[16px]">บาท
                                                            <br> /เดือน </p>
                                                    </div>
                                                </div>

                                                <div
                                                    class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 ss:px-2 gap-3">

                                                    <button id="btn-termOfService" data-id="{{ $product->id }}"
                                                        class="cursor-pointer py-2 xl:px-1 2xl:px-2  px-[0.5rem]  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงื่อนไข</button>
                                                    <a href="{{ url('/movedetail/' . $product->move_cate_id . '/' . $product->id) }}"
                                                        class="cursor-pointer py-2 md:px-10 2xl:px-16 px-16 ss:px-[1.8rem] xs:  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                                                </div>
                                            </div>
                                        </div>
                                        {{-- @endfor --}}
                                    @endif
                                @endforeach
                            </div>
                        </div>


                        <div class="items-center  mx-auto">
                            <div class="swiper-button-next swiper-button-next{{ $j }} "></div>
                            <div class="swiper-button-prev swiper-button-prev{{ $j }} "></div>
                        </div>
                        @php $j++; @endphp

                    </div>
                </div>
                {!! $circle2 !!}
            </section>
        @endforeach

        {{-- box manual --}}
        <div class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-80 flex justify-center items-center z-10"
            id="modal-container">
            <div
                class="w-[700px] max-lg:w-[444px] max-xs:w-[355px] h-[616px] max-es:h-[500px] max-lg:p-2 p-4 bg-white rounded-[10px]">
                <div class="w-full flex justify-end">
                    <img class="cursor-pointer" src="/icons/cancel-btn.png" alt="" id="close-modal">
                </div>
                <div class="text-center flex flex-col items-center gap-3">
                    <h1 class="text-xl font-bold mb-4">ข้อกำหนดและเงื่อนไข</h1>
                </div>
                <div id="modal-content" class="text-left h-[calc(100%-68px)] overflow-auto">

                </div>
            </div>
        </div>
        {{-- box manual --}}
    </div>

    @include('frontend.pages.move_company.move_footer')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/move/swiper.js')
    @vite('resources/js/move/modal_termservice.js')
@endsection

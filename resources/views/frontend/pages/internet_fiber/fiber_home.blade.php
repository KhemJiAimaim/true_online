@extends('frontend.layouts.main')



@section('description')
@endsection

@section('keywords')
@endsection

@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/fiber.css')
@endsection

@section('content')
    <div class="2xl:mt-16">
        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden mb-2 px-3">
            <div class="grid grid-cols-7 py-2 se:w-[1000px] md:w-[1200px] 2xl:w-[1536px] items-center mx-auto gap-2">
                @foreach ($cate_fiber as $cate)
                    <a href="{{ url($cate->cate_url) }}"
                        class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-110 transition-all duration-500 ease-in-out">
                        <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5" src="/{{ $cate->cate_thumbnail }}"
                            alt="">
                        @foreach (explode(' ', $cate->cate_title) as $word)
                            <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">{{ $word }}</p>
                        @endforeach
                    </a>
                @endforeach
            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container py-4 px-3 ">
            <div class="mx-auto w-[90%]">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[18px]">{{$seo->cate_h1}}</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        @php $j = 1; @endphp
        @foreach ($cate_fiber as $cate)
            @php
                $style1 = $loop->last ? 'bg-gray-100 relative' : '';
                $circle1 = $loop->last ? '<img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png">' : '';
                $circle2 = $loop->last ? '<img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png">' : '';
            @endphp

            <section id="fiber" class="py-6 z-0 px-3 {{ $style1 }}">
                {!! $circle1 !!}
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">
                    {{ $cate->cate_keyword }}
                </p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">
                    {{ $cate->cate_description }}
                </p>


                <div class="2xl:my-16 my-4 z-2 w-full">
                    <div class="w-4/5 my-0 mx-auto flex justify-center ">

                        <div class="swiper swiper{{ $j }} flex justify-center items-center mx-auto w-full">

                            {{-- @php
                                $count = 0;
                                $justify = 'justify-center max-xs:justify-start';

                                foreach ($fiber_products as $product) {
                                    if ($product->fiber_cate_id == $cate->id) {
                                        // ทำสิ่งที่คุณต้องการทำ
                                        $count++;
                                    }
                                }
                                $justify = $count > 4 ? 'justify-start' : $justify;
                                // echo "Total count for fiber_cate_id  $justify";
                            @endphp --}}

                            <div class="swiper-wrapper items-center w-full mx-auto flex">
                                @foreach ($fiber_products as $product)
                                    @if ($product->fiber_cate_id == $cate->id)
                                        @for ($i = 0; $i < 5; $i++)
                                            <div class="swiper-slide flex justify-center items-center">

                                                <div class="drop-shadow-md py-4 rounded-[10px] w-[350px] max-es:w-[325px] h-[100%]">
                                                    <div
                                                        class="flex bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">
                                                        <p class="text-white text-left text-[16px]">{{ $product->details }}
                                                        </p>
                                                        <img class="absolute top-0 right-0" src="/images/Intersect2.png"
                                                            alt="">
                                                    </div>

                                                    <div class="bg-[#F8F9FA]">
                                                        <div class="">
                                                            <p class="py-3 text-[20px]">{{ $product->title }}</p>
                                                        </div>
                                                    </div>
                                                    @php
                                                        $download = $product->download_speed >= 1000 ? $product->download_speed / 1000 : $product->download_speed;
                                                        $unit_download = $product->download_speed >= 1000 ? 'Gbps' : 'Mbps';

                                                        $upload = $product->upload_speed >= 1000 ? $product->upload_speed / 1000 : $product->upload_speed;
                                                        $unit_upload = $product->upload_speed >= 1000 ? 'Gbps' : 'Mbps';
                                                    @endphp
                                                    <div class="bg-white">
                                                        <div class="flex justify-center py-6 ml-12">
                                                            <p class="text-[35px] text-center font-medium">
                                                                {{ $download }}
                                                            </p>
                                                            <div
                                                                class="border-l border border-gray-500 text-center mx-6 rounded-full">
                                                            </div>
                                                            <p class="text-lg text-left text-[16px]">
                                                                {{ $unit_download }}<br>/{{ $upload }}{{ $unit_upload }}
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
                                                                    <p class="blue-plate-text text-white text-[18px]">
                                                                        รับทันที
                                                                    </p>
                                                                </div>
                                                                <div class="blue-plate-box-e">
                                                                    <div class="blue-plate-textboxE"></div>
                                                                    <div class="blue-plate-circleE"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        @php
                                                            $benefit_ids = explode(',', $product->benefit_ids);
                                                            $post_ids = $post_benefits->pluck('id')->toArray();

                                                            // หาค่าที่เหมือนกัน
                                                            $same_benefit = array_intersect($benefit_ids, $post_ids);
                                                            $benefit_items = array_slice($same_benefit, 0, 3);
                                                        @endphp
                                                        {{-- <div class="flex justify-center py-6">
                                                                @foreach ($benefit_items as $item)
                                                                    @foreach ($post_benefits as $post)
                                                                        @if ($post->id == $item)
                                                                            <img class="w-20" src="/{{$post->thumbnail_link}}" alt="">
                                                                            <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                                                        @endif
                                                                    @endforeach
                                                                @endforeach
                                                            </div> --}}
                                                        <div class="flex justify-center py-6">
                                                            @php
                                                                $showDivider = false;
                                                            @endphp

                                                            @foreach ($benefit_items as $item)
                                                                @foreach ($post_benefits as $post)
                                                                    @if ($post->id == $item)
                                                                        <img class="w-20"
                                                                            src="/{{ $post->thumbnail_link }}"
                                                                            alt="">
                                                                        @php
                                                                            $showDivider = true;
                                                                        @endphp
                                                                    @endif
                                                                @endforeach

                                                                {{-- ตรวจสอบว่าไม่ใช่การวนลูปครั้งสุดท้ายก่อนที่จะเพิ่ม div --}}
                                                                @if ($showDivider && !$loop->last)
                                                                    <div
                                                                        class="border-l border border-gray-500 text-center mx-3 rounded-full">
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
                                                        <img class="absolute bottom-0 left-0"
                                                            src="/images/Intersect (1).png" alt="">
                                                        <div class="grid grid-cols-3 items-center">
                                                            <p class="text-white text-left text-[16px]  ">ราคา</p>
                                                            <p
                                                                class="text-white font-medium text-center 2xl:text-3xl text-2xl">
                                                                {{ number_format($product->special_price > 0 ? $product->special_price : $product->price_per_month) }}
                                                            </p>
                                                            <p class="text-white text-right text-[16px] ">บาท<br>/เดือน</p>
                                                        </div>
                                                    </div>

                                                    <div
                                                        class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                                        <a href="{{ url('/fiber/detail_true_dtac/' . $product->id) }}"
                                                            class="py-2 px-5 mr-2 mb-2 mt-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">สมัครเลย</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @endfor
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

                <div class="items-center mx-auto mt-4 pt-6">
                    <a href="{{ url($cate->cate_url) }}"
                        class="py-2.5 px-5 mb-2 mt-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ดูทั้งหมด</a>
                </div>

                {!! $circle2 !!}
            </section>
        @endforeach
        {{-- --- --}}

    </div>
    @include('frontend.pages.internet_fiber.footer_fiber')
@endsection


@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/internet_fiber/swiper.js')
@endsection

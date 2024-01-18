@extends('frontend.layouts.main')

@section('content')
    <div class="2xl:my-16 px-3">
        <div class="overflow-x-scroll 2xl:overflow-hidden overflow-hidden py-2">
            <div
                class="grid grid-cols-7 px-3 py-6 se:w-[1000px] ss:w-[1000px] md:w-[1200px] 2xl:w-[1536px] items-center mx-auto gap-2">
                @foreach ($cate_fiber as $cate)
                    <a href="{{ url($cate->cate_url) }}"
                        class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
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
        <div class="my-4">
            <div class="plate-line max-w-[200px] "></div>
        </div>
        {{-- มหัศจรรย์ --}}
{{-- @dd($current_cate) --}}
        <section id="fiber" class="py-10  z-0 px-3">
            <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">{{ $current_cate['keyword'] }}</p>
            <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">{{ $current_cate['description'] }}</p>

            <div class="2xl:my-16 my-6 z-2">
                <div
                    class="max-w-[1536px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 mx-auto py-12 gap-4 gap-y-6 px-4">
                    @foreach ($fiber_products as $product)
                        {{-- @for ($i = 1; $i <= 10; $i++) --}}
                        <div class="drop-shadow-md flex justify-center">
                            <div class=" w-[350px] xl:w-[350px] lg:w-[310px] h-[100%] ">
                                <div class=" flex bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">
                                    <p class="text-white text-left text-[16px]">{{ $product->details }}</p>
                                    <img class="absolute top-0 right-0" src="/images/Intersect2.png" alt="">
                                </div>

                                <div class="bg-[#F8F9FA]">
                                    <div class="">
                                        <p class="py-3 text-[20px]">{{$product->title}}</p>
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
                                        <p class="text-[35px] text-center font-medium">{{ $download }}</p>
                                        <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                        <p class="text-lg text-left text-[16px]">
                                            {{ $unit_download }}<br>/{{ $upload }}{{ $unit_upload }}</p>
                                    </div>

                                    <div class="blue-plate-container">
                                        <div class="blue-plate-line"></div>
                                        <div class="blue-plate-group">
                                            <div class="blue-plate-box-s">
                                                <div class="blue-plate-circleS"></div>
                                                <div class="blue-plate-textboxS"></div>
                                            </div>
                                            <div class="blue-plate-textboxC">
                                                <p class="blue-plate-text text-white text-[16px]">รับทันที</p>
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
                                    <div class="flex justify-center py-6">
                                        @php
                                            $showDivider = false;
                                        @endphp

                                        @foreach ($benefit_items as $item)
                                            @foreach ($post_benefits as $post)
                                                @if ($post->id == $item)
                                                    <img class="w-20" src="/{{ $post->thumbnail_link }}" alt="">
                                                    @php
                                                        $showDivider = true;
                                                    @endphp
                                                @endif
                                            @endforeach

                                            {{-- ตรวจสอบว่าไม่ใช่การวนลูปครั้งสุดท้ายก่อนที่จะเพิ่ม div --}}
                                            @if ($showDivider && !$loop->last)
                                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full">
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
                                    <img class="absolute bottom-0 left-0" src="/images/Intersect (1).png" alt="">
                                    <div class="grid grid-cols-3 items-center">
                                        <p class="text-white text-left  text-[16px]  ">ราคา</p>
                                        <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">{{ number_format( ($product->special_price > 0)?$product->special_price : $product->price_per_month ) }}</p>
                                        <p class="text-white text-right text-[16px] ">บาท<br>/เดือน</p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                    <a href="{{ url('/fiber/detail_true_dtac/' . $product->id) }}"
                                        class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                                </div>
                            </div>
                        </div>
                        {{-- @endfor --}}
                    @endforeach
                </div>

            </div>

            {{-- <div class="items-center mx-auto mt-4 pt-6">
                <a href="/fiber"
                class="py-2.5 px-5 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</a>
            </div> --}}
            {{-- <img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png" alt=""> --}}
        </section>
        {{-- --- --}}


    </div>


    @include('frontend.pages.internet_fiber.footer_fiber')
@endsection

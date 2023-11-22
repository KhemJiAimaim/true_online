@extends('frontend.layouts.main')

@section('content')
    <div class="2xl:mt-16">
        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden mb-2 px-3">
            <div class="grid grid-cols-7 py-6 se:w-[1000px] md:w-[1200px] 2xl:w-[1536px] items-center mx-auto gap-2">
                @foreach($cate_fiber as $cate)
                <a href="{{url('/fiber/true_dtac/'.$cate->cate_url)}}"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5" src="{{$cate->cate_thumbnail}}" alt="">
                    @foreach(explode(' ', $cate->cate_title) as $word)
                        <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">{{ $word }}</p>
                    @endforeach
                </a>
                @endforeach
            </div>
        </div>

         {{-- มหัศจรรย์ --}}
         <div class="title-plate-container py-4 px-3">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[18px]">ทรู ออนไลน์ อันดับ 1 เน็ตบ้านไฟเบอร์อัจฉริยะ</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        @foreach($cate_fiber as $cate)
        @php
            $style1 = ($loop->last) ? "bg-gray-100 relative" : "";
            $circle1 = ($loop->last) ? '<img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png">' : "";
            $circle2 = ($loop->last) ? '<img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png">' : "";
        @endphp
        <section id="fiber" class="py-6 z-0 px-3 {{ $style1 }}">
            {!!$circle1!!}
            <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">True Gigatex PRO Special.</p>
            {{-- <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">แพ็กราคาสุดพิเศษ สำหรับลูกค้าดีแทค และ ทรูมูฟเอช รายเดือนเท่านั้น สนใจสมัครด้วยตนเองที่นี่ หรือ โทร 02-700-8000</p> --}}
            <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">{{$cate->cate_title}}</p>


            <div class=" overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4 z-2">

                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-[1200px] w-[1400px] dm:w[1380px] grid grid-cols-4 xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">
                    @foreach($fiber_products as $product)
                        @if($product->fiber_cate_id == $cate->id)
                        <div class="drop-shadow-md">
                            <div
                                class=" flex bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">

                                <p class="text-white text-left text-[18px]">แพ็กเกจยอดนิยม</p>
                                {{-- <img class="bg-imag-head" src="/images/Intersect2.png" alt=""> --}}
                                <img class="absolute top-0 right-0" src="/images/Intersect2.png" alt="">
                            </div>

                            <div class="bg-[#F8F9FA]">
                                <div class="">
                                    <p class="py-3 text-[20px]">{{$product->title}}</p>
                                </div>
                            </div>
                            @php 
                                $download = 0;
                                $upload = 0;
                                $unit_download = "Mbps";
                                $unit_upload = "Mbps";
                                if($product->download_speed >= 1000) {
                                    $download = $product->download_speed / 1000;
                                    $unit_download = "Gbps";
                                } else {
                                    $download = $product->download_speed;
                                }
                                if($product->upload_speed >= 1000) {
                                    $upload = $product->upload_speed / 1000;
                                    $unit_upload = "Gbps";
                                } else {
                                    $upload = $product->upload_speed;
                                }
                            @endphp
                            <div class="bg-white">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">{{$download}}</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">{{$unit_download}}<br>/{{$upload}}{{$unit_upload}}</p>
                                </div>

                                <div class="blue-plate-container">
                                    <div class="blue-plate-line"></div>
                                    <div class="blue-plate-group">
                                        <div class="blue-plate-box-s">
                                            <div class="blue-plate-circleS"></div>
                                            <div class="blue-plate-textboxS"></div>
                                        </div>
                                        <div class="blue-plate-textboxC">
                                            <p class="blue-plate-text text-white text-[18px]">รับทันที</p>
                                        </div>
                                        <div class="blue-plate-box-e">
                                            <div class="blue-plate-textboxE"></div>
                                            <div class="blue-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center py-6">
                                    <img class="w-20" src="images/Rectangle 235.png" alt="">
                                    <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                    <img class="w-20" src="images/Rectangle 234.png" alt="">
                                </div>
                            </div>

                            <div class=" relative bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2 items-center">
                                <img class="absolute top-5 left-0" src="/images/Intersect (1).png" alt="">
                                <div class="grid grid-cols-3 items-center">
                                    <p class="text-white text-left 2xl:text-[18px] text-[1rem]  ">ราคา</p>
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">{{ number_format($product->price_per_month) }}</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href="{{url('/fiber/detail_true_dtac/'.$product->id)}}"
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                        @endif
                    @endforeach
                </div>

            </div>

            <div class="items-center mx-auto mt-4 pt-6">
                <a href="{{url('/fiber/true_dtac/'.$cate->cate_url)}}"
                class="py-2.5 px-5 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</a>
            </div>
            {!! $circle2 !!}
        </section>
        @endforeach
        {{-- --- --}}

    </div>
    @include('frontend.pages.internet_fiber.footer_fiber')
@endsection

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
            max-width: 1536px;
            height: 100%;

        }

        .swiper-wrapper {
            position: relative;
            width: 100%;
        }

        .swiper-slide {
            text-align: center;
            font-size: 18px;
            background: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .swiper-button-next {
            position: absolute;
            right: 0%;
            color: #000;
        }

        .swiper-button-prev {
            position: absolute;
            left: 0%;
            color: #000;
            widows: 40px;
            height: 40px;
        }

        .swiper-button-next:after {
            font-size: 20px;
            margin-left: 60%;
            margin-top: 50%;
        }

        .swiper-button-prev:after {
            font-size: 20px;
            margin-right: 60%;
            margin-top: 50%;
        }
    </style>
@endsection

@extends('frontend.layouts.main')
@section('content')
    <div class="2xl:my-16">
        <section class="py-2 px-3">
            <div class="py-6 mb-6">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[1.5rem] text-[18px] font-medium">
                    {{ $fiber_products->cate_keyword }}</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[18px] text-[16px]">
                    {{ $fiber_products->cate_description }}
                </p>
            </div>

            {{-- มหัศจรรย์ --}}
            <div class="plate-line max-w-[200px]"></div>
            {{-- มหัศจรรย์ --}}

            <div class="max-w-[1536px] gap-4 m-auto p-4 mt-10 ">

                <div class="flex flex-wrap justify-center gap-4 mx-auto">
                    <div class="w-[456px] drop-shadow-sm bg-[#F5F5F7] rounded-lg items-center py-4">
                        <p
                            class="text-transparent bg-clip-text font-medium bg-gradient-to-r from-[#5741CD] to-[#00ACEE] text-[18px]">
                            {{ $fiber_products->title }}
                        </p>
                        <div class="grid grid-cols-3 px-10 ss:px-[1.5rem] mt-4">
                            <p class="text-black font-medium text-[1rem] pt-[26px] ">ราคา</p>
                            <p
                                class="text-transparent bg-clip-text font-bold bg-gradient-to-r from-[#5741CD] to-[#00ACEE] text-center text-4xl pt-3">
                                {{ number_format($fiber_products->price_per_month) }}
                            </p>
                            <p class="text-black font-medium text-[1rem]">บาท<br>/เดือน</p>
                        </div>
                        <p class="text-md mt-2">ระยะสัญญา {{ $fiber_products->duration }} เดือน</p>
                    </div>

                    @if ($fiber_products->fiber_cate_id == 10)
                        <div class="w-[456px] drop-shadow-sm bg-[#F5F5F7] rounded-lg items-center ">
                            <div class="orange-plate-container">
                                <div class="orange-plate-group">
                                    <div class="orange-plate-box-s">
                                        <div class="orange-plate-circleS"></div>
                                        <div class="orange-plate-textboxS"></div>
                                    </div>
                                    <div class="orange-plate-textboxC">
                                        <p class="orange-plate-text text-white text-xl items-center">พิเศษ</p>
                                    </div>
                                    <div class="orange-plate-box-e">
                                        <div class="orange-plate-textboxE"></div>
                                        <div class="orange-plate-circleE"></div>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-4 font-medium text-[18px]">สำหรับลูกค้าดีแทค และ ทรูมูฟ เอช รายเดือน</p>
                            <div class="grid grid-cols-3 px-10 mt-3">
                                <p class="text-black font-medium text-[1rem] pt-[26px] ">ราคา</p>
                                <p class="font-bold text-center text-4xl pt-3">
                                    {{ number_format($fiber_products->special_price) }}</p>
                                <p class="text-black font-medium text-[1rem] ">บาท<br>/เดือน</p>
                            </div>
                        </div>
                    @endif

                    @php
                        $download = $fiber_products->download_speed >= 1000 ? $fiber_products->download_speed / 1000 : $fiber_products->download_speed;
                        $unit_download = $fiber_products->download_speed >= 1000 ? 'Gbps' : 'Mbps';

                        $upload = $fiber_products->upload_speed >= 1000 ? $fiber_products->upload_speed / 1000 : $fiber_products->upload_speed;
                        $unit_upload = $fiber_products->upload_speed >= 1000 ? 'Gbps' : 'Mbps';
                    @endphp
                    <div class="w-[456px] drop-shadow-sm bg-[#F5F5F7] rounded-lg items-center ">
                        <div class="grid grid-cols-2 mt-6">
                            <div class="flex justify-center">
                                <img src="/images/Rectangle 1233.png" alt="" class="w-[7rem] h-[7rem]">
                            </div>
                            <div class="">
                                <p
                                    class="text-transparent bg-clip-text font-medium bg-gradient-to-r from-[#ED4312] to-[#F6911D] text-2xl text-left">
                                    ความเร็ว</p>
                                <p class="text-left">( ดาวน์โหลด / อัปโหลด )</p>
                                <div class="flex justify-start py-6 ">
                                    <p
                                        class="text-transparent bg-clip-text font-medium bg-gradient-to-r from-[#ED4312] to-[#F6911D] text-left text-4xl">
                                        {{ $download }}
                                    </p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full "></div>
                                    <p class="text-md text-md text-left font-medium">
                                        {{ $unit_download }}<br>/{{ $upload }}{{ $unit_upload }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- --- --}}

        <section class="py-16 px-3">
            <p class="2xl:text-[1.5rem] xl:text-[1.5rem] text-[18px] font-medium mb-6">รับเพิ่มในแพ็กเกจนี้</p>
            <!-- Swiper -->
            <div class="swiper items-center mx-auto ">
                <div class="swiper-wrapper ">
                    @foreach ($posts as $pos)
                        @for ($i = 1; $i <= 10; $i++)
                            <div
                                class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                                <img src="/{{ $pos->thumbnail_link }}" alt=""
                                    class="w-[171px] h-[150px] se:w-[150px] block ">
                                <p class="se:text-[16px]">{{ $pos->title }}</p>
                            </div>
                        @endfor
                    @endforeach
                </div>
                <div class="swiper-button-next "></div>
            <div class="swiper-button-prev"></div>
            </div>
            
    </div>
    </section>

    <section class="py-16 ">
        <div class="2xl:text-[1.5rem] xl:text-[1.5rem] text-[18px] font-medium mb-6">สิทธิพิเศษ</div>
        <div class="flex justify-center mt-2">
            <div class="flex flex-col justify-center w-[550px] gap-4 px-3 text-left ">
                @foreach ($privilege as $previl)
                    <div class="flex items-center">
                        <img src="/images/quill_star.png" alt="" class="mr-2 h-[35px] w-[35px]">
                        <p class="">{!! $previl->content !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
        <a href="{{ url('/fiber/form_true_dtac/' . $fiber_products->id) }}"
            class="py-2.5 px-5 mr-2 mb-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ให้เจ้าหน้าที่ติดต่อกลับ</a>
    </div>
    <a href="" class="text-[#838383] text-[16px]">ข้อกำหนดและเงื่อนไข</a>


    </div>

    @include('frontend.pages.internet_fiber.footer_fiber')
@endsection

@section('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 6,
            spaceBetween: 0,
            // direction: getDirection(),
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                340: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                640: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 4,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 5,
                    spaceBetween: 50,
                },
                1536: {
                    slidesPerView: 6,
                    spaceBetween: 50,
                },
            },
        });
    </script>
@endsection

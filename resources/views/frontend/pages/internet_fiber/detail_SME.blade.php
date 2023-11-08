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
    <div class="my-36">
        <section class="py-6">
            <div class="py-6 mb-6">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO SME</p>
                <p class="text-[#838383] mt-2 mb-2 text-[18px]">เน็ตเร็ว แรง เพื่อธุรกิจ ฟรีค่าโทร พร้อมบริการ Public Fixed IP กับ True Gigatex PRO SME</p>
            </div>

            {{-- มหัศจรรย์ --}}
            <div class="plate-line max-w-[200px]"></div>
            {{-- มหัศจรรย์ --}}

            <div
                class="max-w-[1536px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4 2xl:grid-cols-4 gap-4 m-auto p-4 mt-10 ">

                <div class="drop-shadow-sm col-start-2 bg-[#F5F5F7] rounded-lg items-center py-4 ">
                    <p
                        class="text-transparent bg-clip-text font-medium bg-gradient-to-r from-[#5741CD] to-[#00ACEE] text-[18px]">
                        True Gigatex PRO SME 1399</p>
                    <div class="grid grid-cols-3 px-10 mt-4">
                        <p class="text-black font-medium text-[1rem] pt-[26px] ">ราคา</p>
                        <p
                            class="text-transparent bg-clip-text font-bold bg-gradient-to-r from-[#5741CD] to-[#00ACEE] text-center text-4xl pt-3">
                            1,399</p>
                        <p class="text-black font-medium text-[1rem] ">บาท<br>/เดือน</p>
                    </div>
                    <p class="text-md mt-2">ระยะสัญญา 24 เดือน</p>
                </div>

                <div class="drop-shadow-sm bg-[#F5F5F7] rounded-lg items-center ">
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
                                    2</p>                                <div class="border-l border border-gray-500 text-center mx-6 rounded-full "></div>
                                <p class="text-md text-md text-left font-medium">Gbps<br>/500Mbps</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- --- --}}

        <section class="py-16">
            <p class="text-xl font-medium mb-6">รับเพิ่มในแพ็กเกจนี้</p>
            <!-- Swiper -->
            <div class="swiper items-center mx-auto">
                <div class="swiper-wrapper">
                    <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                        <img src="/images/Rectangle 1223.png" alt="" class="w-[171px] h-[171px] block ">
                        <p>กล่องทรูไอดีทีวี +True ID Basic HD</p>
                    </div>
                    <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                        <img src="/images/Rectangle 1221.png" alt="" class="w-[171px] h-[171px]">
                        <p>True Gigatex Fiber Router WiFi6</p>
                    </div>
                    <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                        <img src="/images/Rectangle 1225.png" alt="" class="w-[171px] h-[171px]">
                        <p>EPL ฤดูกาล 2023/24 สด ครบทุกแมตช์</p>
                    </div>
                    <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                        <img src="/images/Rectangle 1220.png" alt="" class="w-[171px] h-[171px]">
                        <p>กล่องทรูไอดีทีวี +True ID Basic HD</p>
                    </div>
                    <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                        <img src="/images/Rectangle 1227.png" alt="" class="w-[171px] h-[171px]">
                        <p>VIU Premium นาน 24 เดือน</p>
                    </div>
                    <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                        <img src="/images/Rectangle 1224.png" alt="" class="w-[171px] h-[171px]">
                        <p>อุปกรณ์กระจายสัญญาณ Mesh WiFi 6</p>
                    </div>
                    <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center">
                        <img src="/images/Rectangle 1223.png" alt="" class="w-[171px] h-[171px]">
                        <p> ชำระค่าแรกเข้า 890 บาท รับกล้อง CCTV</p>
                    </div>
                </div>
                <div class="swiper-button-next ml-20"></div>
                <div class="swiper-button-prev"></div>
            </div>


        </section>

        <section class="py-16 ">
            <div class="text-xl font-medium mb-6">สิทธิพิเศษ</div>
            <div class="flex justify-center mt-2">
                <div class="flex flex-col justify-center w-[500px]">
                    <div class="flex">
                        <img src="/images/quill_star.png" alt="" class="mr-2">
                        <p class="text-red-500 font-medium mr-2">ฟรี!</p>
                        <p> สิทธิยืม True Gigatex Fiber Router Pro รองรับ WiFi6</p>
                    </div>
                    <div class="flex">
                        <img src="/images/quill_star.png" alt="" class="mr-2">
                        <p class="text-red-500 font-medium mr-2">ฟรี!</p>
                        <p> ค่าติดตั้งและค่าเดินสายอินเทอร์เน็ต</p>
                    </div>
                    <div class="flex">
                        <img src="/images/quill_star.png" alt="" class="mr-2">
                        <p class="text-red-500 font-medium mr-2">ฟรี!</p>
                        <p class="text-left"> ชำระค่าแรกเข้าเพียง 890 บาท (จากปกติ 2,000 บาท) รับทันที! กล้อง CCTV Full HD
                            1080p พร้อมดูย้อนหลัง 7 วัน (รวมมูลค่า 3,666 บาท)</p>
                    </div>
                </div>
            </div>
        </section>


        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
            <a href="/fiber/form_true_dtac"
                class="py-2.5 px-5 mr-2 mb-2 text-[18px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ให้เจ้าหน้าที่ติดต่อกลับ</a>
        </div>
        <a href="" class="text-[#838383]">ข้อกำหนดและเงื่อนไข</a>


    </div>


    <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF] ">
        <div class="p-6 flex justify-center gap-[2rem] md:gap-[4rem] 2xl:gap-[15rem]">
            <div class="flex flex-col items-center">
                <img class="mt-2 mb-6 max-xs:w-[50px]" src="/images/code-qr.png" alt="">
                <p class="text-[1rem] text-white">ช้อปผ่านแชท</p>
                <p class="text-[0.8rem] text-white">Line ID QR Coed</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="max-xs:w-[80px] " src="/images/Rectangle 1245.png" alt="">
                <p class="text-[1rem] text-white">แจ้งขนส่ง</p>
                <p class="text-[0.8rem] text-white">เช็ครหัสขนส่งสินค้า</p>
            </div>
        </div>
    
    </div>
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

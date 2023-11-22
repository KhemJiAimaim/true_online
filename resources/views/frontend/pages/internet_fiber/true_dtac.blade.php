@extends('frontend.layouts.main')

@section('content')
    <div class="2xl:my-16">
        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden py-2 px-3">
            <div class="grid grid-cols-7 px-3 py-6 se:w-[1000px] ss:w-[1000px] md:w-[1200px] 2xl:w-[1536px] items-center mx-auto gap-2">
                <a href="#fiber"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5" src="/images/arcticons_trueid.png" alt="">
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เน็ตบ้าน</p>
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">สำหรับทรูและดีแทค</p>
                </a>

                <a
                    href="#ber_lucky"class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5" src="/images/iconoir1.png" alt="">
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เน็ตบ้าน</p>
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]"> สำหรับใช้งานพื้นฐาน</p>
                </a>


                <a href="#sim"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[40px] mb-4 max-sm:mt-5" src="/images/icon-park-outline_shield-add (1).png"
                        alt="">
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เน็ตบ้าน</p>
                     <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">พร้อมประกัน</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5" src="/images/gala_tv.png" alt="">
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เน็ตบ้าน</p>
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">พร้อมทรูวิชั่น</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[40px] mb-4 max-sm:mt-5" src="/images/solar_wi-fi-router-minimalistic-linear.png"
                        alt="">
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เน็ตบ้าน</p>
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เลือกเราเตอร์เอง</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[40px] mb-4 max-sm:mt-5" src="/images/ion_game-controller-outline.png"
                        alt="">
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เน็ตบ้าน</p>
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">สำหรับเกมเมอร์</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-[1.1] transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4  max-sm:mt-5" src="/images/iconoir_small-shop.png" alt="">
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">เน็ตบ้าน</p>
                    <p class="2xl:text-[18px] md:text-[18px] se:text-[14px]">สำหรับธุรกิจ SME</p>
                </a>

            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="my-4">
         <div class="plate-line max-w-[200px] "></div>
       </div>
        {{-- มหัศจรรย์ --}}

        <section id="fiber" class="py-10  z-0 px-3">
            
            {{-- <img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt=""> --}}
            <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">True Gigatex PRO Special.</p>
            <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">แพ็กราคาสุดพิเศษ สำหรับลูกค้าดีแทค และ ทรูมูฟเอช รายเดือนเท่านั้น สนใจสมัครด้วยตนเองที่นี่ หรือ โทร 02-700-8000</p>


            <div class="2xl:my-16 my-6 z-2">

                <div
                    class="2xl:w-[1536px] xl:w-[1200px]  w-full grid grid-cols-1 2xl:grid-cols-4  xl:grid-cols-4 lg:grid-cols-3 dm:grid-cols-2 ex:grid-cols-2 md:grid-cols-2    xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">
                    @foreach ($fiber_products as $product)
                        <div class="drop-shadow-md">
                            <div
                                class=" flex bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">

                                <p class="text-white text-left text-[18px]">แพ็กเกจยอดนิยม</p>
                                {{-- <img class="bg-imag-head" src="/images/Intersect2.png" alt=""> --}}
                                <img class="absolute top-0 right-0" src="/images/Intersect2.png" alt="">
                            </div>

                            <div class="bg-[#F8F9FA]">
                                <div class="">
                                    <p class="py-3 text-[20px]">True Gigatex PRO Gold</p>
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
                                    <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                    <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                    <img class="w-20" src="/images/Rectangle 234.png" alt=""> 
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

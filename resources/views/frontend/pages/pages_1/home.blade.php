@extends('frontend.layouts.layout.main')
@section('content')
    <div class="my-16 ">
        <div class="flex flex-wrap justify-center gap-x-20 gap-y-5 mb-16">
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-2" src="/images/solar_wi-fi-router-linear (1).png" alt="">
                <a href="#">เน็ตบ้านไฟเบอร์</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-3" src="/images/icon-park-outline_sim-card.png" alt="">
                <a href="#">เบอร์มงคล</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 " src="/images/system-uicons_box-add1.png" alt="">
                <a href="#">แพ็กเกจเน็ตซิมเทพ</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-4" src="/images/solar_wi-fi-router-linear.png" alt="">
                <a href="#">ซิมท่องเที่ยว</a>
            </div>
        </div>

        {{-- <div class="flex justify-center space-x-24 mb-10">
            <a>เน็ตบ้านไฟเบอร์</a>
            <a>เบอร์มงคล</a>
            <a>แพ็กเกจเน็ตซิมเทพ</a>
            <a>ซิมท่องเที่ยว</a>
        </div> --}}


        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container ">
            <div class="title-plate-line"></div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text">ทรู คอร์ปอเรชั่น ผู้นำดิจิทัลไลฟ์สไตล์ครบวงจร</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        <div class="">
            <span class="text-gray-400">ค้นหาเบอร์มงคล แพ็กเกจเสริม อินเตอร์เน็ตไฟเบอร์ความเร็วสูงสุด แรงสุด
                และซิมท่องเทียวในประเทศและต่างประเทศ ที่เหมาะกับคุณได้เลยที่นี่</span>
        </div>

        {{-- --- --}}
        <div class="overflow-x-scroll lg:overflow-hidden my-16">
            <div class="w-[1000px] grid grid-cols-3 gap-4 mx-auto p-4">
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col items-center rounded-3xl">
                    <a href="">
                        <img class="w-[500px] max-sm:w-[350px] h-[260px]" src="/images/Rectangle 20.png" alt="">
                        <div class="grid grid-cols-3 mb-2">
                            <div class="flex justify-center items-center">
                                <img src="images/iconoir_internet.png" class="w-14 h-14" alt="">
                            </div>
                            <div class="col-span-2">
                                <p class="text-white text-left font-medium text-lg">อินเตอร์เน็ตไฟเบอร์</p>
                                <p class="text-white text-left">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col items-center rounded-3xl">
                    <a href="">
                        <img class="w-[500px] max-sm:w-[350px] h-[260px]" src="/images/Rectangle 21.png" alt="">
                        <div class="grid grid-cols-3 mb-2">
                            <div class="flex justify-center items-center">
                                <img src="images/solar_sim-cards-linear.png" class="w-14 h-14" alt="">
                            </div>
                            <div class="col-span-2">
                                <p class="text-white text-left font-medium text-lg">เบอร์มงคลรายเดือน</p>
                                <p class="text-white text-left">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col items-center rounded-3xl">
                    <a href="">
                        <img class="w-[500px] max-sm:w-[350px] h-[260px]" src="/images/Rectangle 22.png" alt="">
                        <div class="grid grid-cols-3 mb-2">
                            <div class="flex justify-center items-center">
                                <img src="images/system-uicons_box-add.png" class="w-14 h-14" alt="">
                            </div>
                            <div class="col-span-2">
                                <p class="text-white text-left font-medium text-lg">แพ็กเกจเสริม</p>
                                <p class="text-white text-left">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด
                                </p>
                            </div>
                        </div>
                    </a>
                </div>




            </div>
        </div>
        {{-- --- --}}

        <section class="bg-black">
            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1000px] grid grid-cols-3 gap-4 mx-auto p-4">

                    <div class="">
                        <div
                            class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-2">
                            <p class="text-white text-left">แพ็กเกจยอดนิยม</p>
                        </div>

                        <div class="bg-[#F8F9FA]">
                            <div class="">
                                <p>True Gigatex PRO Gold</p>
                            </div>
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 px-6">
                                    <p class="text-lg text-right">1</p>
                                     <div class="border-l"></div>
                                    <p class="text-lg text-left">Gbps/1Gbps</p>
                                </div>
                            </div>
                        </div>

                        <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  py-2 px-2 ">
                            <div class="grid grid-cols-3">
                                
                                <p class="text-white text-left">ราคา</p>
                                <p class="text-white  text-lg font-medium">2,499</p>
                                <p class="text-white text-right ">บาท/เดือน</p>
                            
                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <button type="button" class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
    </div>
@endsection

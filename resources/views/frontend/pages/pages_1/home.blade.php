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

        <div class="py-3">
            <span class="text-gray-400 text-[1rem]">ค้นหาเบอร์มงคล แพ็กเกจเสริม อินเตอร์เน็ตไฟเบอร์ความเร็วสูงสุด แรงสุด
                และซิมท่องเทียวในประเทศและต่างประเทศ ที่เหมาะกับคุณได้เลยที่นี่</span>
        </div>

        {{-- --- --}}
        <div class="overflow-x-scroll lg:overflow-hidden my-16">
            <div class="w-[1280px] grid grid-cols-3 gap-4 mx-auto p-4">
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col items-center rounded-3xl drop-shadow-md">
                    <a href="">
                        <img class="w-[500px] max-sm:w-[350px] h-[280px]" src="/images/Rectangle 20.png" alt="">
                        <div class="grid grid-cols-3 mb-2">
                            <div class="flex justify-center items-center">
                                <img src="images/iconoir_internet.png" class="w-14 h-14" alt="">
                            </div>
                            <div class="col-span-2">
                                <p class="text-white text-left font-medium text-lg mt-2 mb-2">อินเตอร์เน็ตไฟเบอร์</p>
                                <p class="text-white text-left">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col items-center rounded-3xl drop-shadow-md">
                    <a href="">
                        <img class="w-[500px] max-sm:w-[350px] h-[280px]" src="/images/Rectangle 21.png" alt="">
                        <div class="grid grid-cols-3 mb-2">
                            <div class="flex justify-center items-center">
                                <img src="images/solar_sim-cards-linear.png" class="w-14 h-14" alt="">
                            </div>
                            <div class="col-span-2">
                                <p class="text-white text-left font-medium text-lg mt-2 mb-2">เบอร์มงคลรายเดือน</p>
                                <p class="text-white text-left">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col items-center rounded-3xl drop-shadow-md">
                    <a href="">
                        <img class="w-[500px] max-sm:w-[350px] h-[280px]" src="/images/Rectangle 22.png" alt="">
                        <div class="grid grid-cols-3 mb-2">
                            <div class="flex justify-center items-center">
                                <img src="images/system-uicons_box-add.png" class="w-14 h-14" alt="">
                            </div>
                            <div class="col-span-2">
                                <p class="text-white text-left font-medium text-lg mt-2 mb-2">แพ็กเกจเสริม</p>
                                <p class="text-white text-left">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น เร็วสุด แรงสุด
                                </p>
                            </div>
                        </div>
                    </a>
                </div>




            </div>
        </div>
        {{-- --- --}}

        <section class="bg-gray-100 py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">อินเทอร์เน็ตไฟเบอร์</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">เน็ตแรงที่สุด 2Gbps ดูเต็มอิ่ม หนัง กีฬา ความบันเทิง | True
                    Gigatex PRO</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1280px] grid grid-cols-4 gap-4 mx-auto p-4">

                    <div class="drop-shadow-md">
                        <div
                            class=" flex bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">

                            <p class="text-white text-left text-[1rem]">แพ็กเกจยอดนิยม</p>
                            {{-- <img class="bg-imag-head" src="/images/Intersect2.png" alt=""> --}}
                            <img class="absolute top-0 right-0" src="/images/Intersect2.png" alt="">
                        </div>

                        <div class="bg-[#F8F9FA]">
                            <div class="">
                                <p class="py-3">True Gigatex PRO Gold</p>
                            </div>
                        </div>
                        <div class="bg-white"">
                            <div class="flex justify-center py-6 ml-12">
                                <p class="text-3xl text-center">1</p>
                                <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                <p class="text-md text-left text-md">Gbps<br>/500Mbps</p>
                            </div>

                            <div class="blue-plate-container">
                                <div class="blue-plate-line"></div>
                                <div class="blue-plate-group">
                                    <div class="blue-plate-box-s">
                                        <div class="blue-plate-circleS"></div>
                                        <div class="blue-plate-textboxS"></div>
                                    </div>
                                    <div class="blue-plate-textboxC">
                                        <p class="blue-plate-text text-white">รับทันที</p>
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

                        <div class=" relative bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2">
                            <img class="absolute top-5 left-0" src="/images/Intersect (1).png" alt="">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem]  pt-3">ราคา</p>
                                <p class="text-white font-medium text-center text-xl pt-3">2,499</p>
                                <p class="text-white text-right text-[1rem] ">บาท<br>/เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <button type="button"
                                class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</button>
                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">
                            <p class="text-white text-left text-[1rem]">แพ็กเกจยอดนิยม</p>
                        </div>

                        <div class="bg-[#F8F9FA]">
                            <div class="">
                                <p class="py-3">True Gigatex PRO Gold</p>
                            </div>
                        </div>
                        <div class="bg-white"">
                            <div class="flex justify-center py-6 ml-12">
                                <p class="text-3xl text-center">2</p>
                                <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                <p class="text-md text-left text-md">Gbps<br>/500Mbps</p>
                            </div>

                            <div class="blue-plate-container">
                                <div class="blue-plate-line"></div>
                                <div class="blue-plate-group">
                                    <div class="blue-plate-box-s">
                                        <div class="blue-plate-circleS"></div>
                                        <div class="blue-plate-textboxS"></div>
                                    </div>
                                    <div class="blue-plate-textboxC">
                                        <p class="blue-plate-text text-white">รับทันที</p>
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

                        <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem]  pt-3">ราคา</p>
                                <p class="text-white font-medium text-center text-xl pt-3">1,399</p>
                                <p class="text-white text-right text-[1rem] ">บาท<br>/เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <button type="button"
                                class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</button>
                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">
                            <p class="text-white text-left text-[1rem]">แพ็กเกจยอดนิยม</p>
                        </div>

                        <div class="bg-[#F8F9FA]">
                            <div class="">
                                <p class="py-3">True Gigatex PRO Gold</p>
                            </div>
                        </div>
                        <div class="bg-white"">
                            <div class="flex justify-center py-6 ml-12">
                                <p class="text-3xl text-center">1</p>
                                <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                <p class="text-md text-left text-md">Gbps<br>/500Mbps</p>
                            </div>

                            <div class="blue-plate-container">
                                <div class="blue-plate-line"></div>
                                <div class="blue-plate-group">
                                    <div class="blue-plate-box-s">
                                        <div class="blue-plate-circleS"></div>
                                        <div class="blue-plate-textboxS"></div>
                                    </div>
                                    <div class="blue-plate-textboxC">
                                        <p class="blue-plate-text text-white">รับทันที</p>
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

                        <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem]  pt-3">ราคา</p>
                                <p class="text-white font-medium text-center text-xl pt-3">2,499</p>
                                <p class="text-white text-right text-[1rem] ">บาท<br>/เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <button type="button"
                                class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</button>
                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">
                            <p class="text-white text-left text-[1rem]">แพ็กเกจยอดนิยม</p>
                        </div>

                        <div class="bg-[#F8F9FA]">
                            <div class="">
                                <p class="py-3">True Gigatex PRO Gold</p>
                            </div>
                        </div>
                        <div class="bg-white"">
                            <div class="flex justify-center py-6 ml-3">
                                <p class="text-3xl text-center">500</p>
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <p class="text-md text-left text-md">Mbps<br>/500Mbps</p>
                            </div>

                            <div class="blue-plate-container">
                                <div class="blue-plate-line"></div>
                                <div class="blue-plate-group">
                                    <div class="blue-plate-box-s">
                                        <div class="blue-plate-circleS"></div>
                                        <div class="blue-plate-textboxS"></div>
                                    </div>
                                    <div class="blue-plate-textboxC">
                                        <p class="blue-plate-text text-white">รับทันที</p>
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

                        <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem]  pt-3">ราคา</p>
                                <p class="text-white font-medium text-center text-xl pt-3">2,499</p>
                                <p class="text-white text-right text-[1rem] ">บาท<br>/เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <button type="button"
                                class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</button>
                        </div>
                    </div>

                </div>
                <div class="items-center">
                    <button type="button"
                        class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
                </div>
            </div>

        </section>


        <section class="bg-white py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">ซิมเติมเงิน</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1280px] grid grid-cols-4 gap-2 mx-auto p-4">

                    <div class="drop-shadow-md">
                        <div
                            class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF]  rounded-tl-[10px] rounded-tr-[10px] py-2 px-3">
                            <p class="text-white text-left text-[1rem] bg-[black]">แพ็กเกจยอดนิยม</p>
                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-6 ">
                                <p class="text-3xl text-center">063-782-5555</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA]">
                            <p class="text-left text-[1rem] mx-2">แพ็กเกจนี้ใช้ฟรี 3 เดือน</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] ">ราคา</p>
                                <p class="text-white font-medium text-center text-xl">9,999,999</p>
                                <p class="text-white text-right text-[1rem]  ">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <button type="button"
                                class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</button>
                        </div>
                    </div>



                </div>
                <div class="items-center">
                    <button type="button"
                        class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
                </div>
            </div>

        </section>


    </div>
    </div>
@endsection

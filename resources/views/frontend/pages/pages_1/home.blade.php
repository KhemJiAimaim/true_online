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
                <img class="w-30 h-30" src="/images/system-uicons_box-add1.png" alt="">
                <a href="#">แพ็กเกจเน็ตซิมเทพ</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-4" src="/images/solar_wi-fi-router-linear.png" alt="">
                <a href="#">ซิมท่องเที่ยว</a>
            </div>
        </div>

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
                        <img class="w-[500px] max-sm:w-[420px] h-[280px]" src="/images/Rectangle 20.png" alt="">
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
                        <img class="w-[500px] max-sm:w-[420px] h-[280px]" src="/images/Rectangle 21.png" alt="">
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
                        <img class="w-[500px] max-sm:w-[420px] h-[280px]" src="/images/Rectangle 22.png" alt="">
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
                                <p class="text-white font-medium text-center text-3xl pt-3">2,499</p>
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
                                <p class="text-white font-medium text-center text-3xl pt-3">1,399</p>
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
                                <p class="text-white font-medium text-center text-3xl pt-3">2,499</p>
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
                                <p class="text-white font-medium text-center text-3xl pt-3">2,499</p>
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
        {{-- --- --}}


        <section class="bg-white py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">เบอร์มงคลรายเดือน</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">เบอร์มงคล พร้อมแพ็กเกจ ที่คุณอาจสนใจ</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1280px] grid grid-cols-4 gap-4 mx-auto p-4 z-0">

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <div class="flex justify-start items-center">
                                <p class="text-white mr-2">เกรด</p>
                                <p class="text-white font-medium text-[1rem]">A+</p>
                            </div>
                            <div
                                class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 transform -skew-x-12 px-2 flex justify-end items-center">
                                <p class="text-white mr-2">ผลรวม</p>
                                <p class="text-white font-medium text-[1rem]">59</p>
                            </div>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-10 ">
                                <p class="text-3xl text-center">063-782-5555</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">เน็ต Unlimited + โทร 1700 Mins</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">99,999</p>
                                <p class="text-white text-right text-[1rem] mt-2 ">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <div class="flex justify-start items-center">
                                <p class="text-white mr-2">เกรด</p>
                                <p class="text-white font-medium text-[1rem]">A+</p>
                            </div>
                            <div
                                class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 transform -skew-x-12 px-2 flex justify-end items-center">
                                <p class="text-white mr-2">ผลรวม</p>
                                <p class="text-white font-medium text-[1rem]">59</p>
                            </div>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-10 ">
                                <p class="text-3xl text-center">063-782-5555</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">เน็ต Unlimited + โทร 1700 Mins</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">999,999</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <div class="flex justify-start items-center">
                                <p class="text-white mr-2">เกรด</p>
                                <p class="text-white font-medium text-[1rem]">A+</p>
                            </div>
                            <div
                                class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 transform -skew-x-12 px-2 flex justify-end items-center">
                                <p class="text-white mr-2">ผลรวม</p>
                                <p class="text-white font-medium text-[1rem]">59</p>
                            </div>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-10 ">
                                <p class="text-3xl text-center">063-782-5555</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">เน็ต Unlimited + โทร 1700 Mins</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">999,999</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <div class="flex justify-start items-center">
                                <p class="text-white mr-2">เกรด</p>
                                <p class="text-white font-medium text-[1rem]">A+</p>
                            </div>
                            <div
                                class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 transform -skew-x-12 px-2 flex justify-end items-center">
                                <p class="text-white mr-2">ผลรวม</p>
                                <p class="text-white font-medium text-[1rem]">59</p>
                            </div>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-10 ">
                                <p class="text-3xl text-center">063-782-5555</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">เน็ต Unlimited + โทร 1700 Mins</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">9,999</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>




                </div>
                <div class="items-center">
                    <button type="button"
                        class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
                </div>
            </div>

        </section>
        {{-- --- --}}


        <section class="bg-gray-100 py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">ซิมเติมเงิน</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1280px] grid grid-cols-4 gap-4 mx-auto p-4 z-0">

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="images/Rectangle 98.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">( เล่นฟรีเดือนแรก )
                                เล่นเน็ตไม่อั้น ความเร็ว 4Mbps (พร้อมใช้ฟรี
                                True wifi max speed แบบไม่จำกัด)</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] ">ราคา <br> เริ่มต้น</p>
                                <p class="text-white font-medium text-center text-3xl">150</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="images/Rectangle 98.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">( เล่นฟรีเดือนแรก )
                                เล่นเน็ตไม่อั้น ความเร็ว 4Mbps (พร้อมใช้ฟรี
                                True wifi max speed แบบไม่จำกัด)</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] ">ราคา <br> เริ่มต้น</p>
                                <p class="text-white font-medium text-center text-3xl">300</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="images/Rectangle 116.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2 h-[100px]">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">( เล่นฟรีเดือนแรก ) เล่นเน็ตไม่อั้น +
                                โทรฟรี 24ชม. ความเร็ว 30Mbps ไม่ลดสปีด
                                (ใช้ฟรี wifi แบบไม่จำกัด ทุกแพ็กเกจ)</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] ">ราคา <br> เริ่มต้น</p>
                                <p class="text-white font-medium text-center text-3xl">235</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="images/Rectangle 125.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                            <img src="images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">( เล่นฟรีเดือนแรก ) เล่นเน็ตไม่อั้น +โทรฟรี
                                ทุกเครือข่าย 24ชม. ความเร็ว 15Mbps</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] ">ราคา <br> เริ่มต้น</p>
                                <p class="text-white font-medium text-center text-3xl">250</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                </div>
                <div class="items-center">
                    <button type="button"
                        class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
                </div>
            </div>

        </section>
        {{-- --- --}}

        <section class="bg-white py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">ซิมท่องเที่ยว</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมสำหรับท่องเที่ยว เชื่อมต่อได้ไม่มีสะดุด</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1280px] grid grid-cols-4 gap-4 mx-auto p-4 z-0">

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <p class="text-white mr-2 text-left">8 DAYS 449 BAHT</p>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 [h-110px]">
                                <img src="images/Rectangle 179.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/majesticons_sim-card-line.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">Thailand Tourist infinite sim</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">499</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <p class="text-white mr-2 text-left">8 DAYS 449 BAHT</p>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 [h-110px]">
                                <img src="images/Rectangle 158.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/majesticons_sim-card-line.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">Thailand Tourist infinite sim</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">499</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer flex items-center px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <p class="text-white mr-2 text-left">8 DAYS 449 BAHT</p>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 [h-110px]">
                                <img src="images/Rectangle 170.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/majesticons_sim-card-line.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">Thailand Tourist infinite sim</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">499</p>
                                <p class="text-white text-right text-[1rem] mt-2 ">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <p class="text-white mr-2 text-left">8 DAYS 449 BAHT</p>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 [h-110px]">
                                <img src="images/Rectangle 188.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                            <img src="images/majesticons_sim-card-line.png" alt="" class="px-4">
                            <p class="text-left text-[0.9rem] py-1 col-span-4">Thailand Tourist sim</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">299</p>
                                <p class="text-white text-right text-[1rem] mt-2 ">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
                                <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
                            </div>
                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a src="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>




                </div>
                <div class="items-center">
                    <button type="button"
                        class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
                </div>
            </div>

        </section>
        {{-- --- --}}

    </div>
   
@endsection

@extends('frontend.layouts.main')

@section('content')
    <div class="py-16">
        <div class="grid grid-cols-1 xs:grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6  2xl:grid-cols-7 gap-4 px-4 mb-16 max-w-[1536px] m-auto">
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-2" src="/images/arcticons_trueid.png" alt="">
                <a href="#" class="text-[18px]">เน็ตบ้านสำหรับ
                    ทรูและดีแทค</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-3" src="/images/iconoir1.png" alt="">
                <a href="#" class="text-[18px]">เน็ตบ้านสำหรับ
                    ใช้งานพื้นฐาน</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-3" src="/images/icon-park-outline_shield-add (1).png" alt="">
                <a href="#" class="text-[18px]">เน็ตบ้าน
                    พร้อมประกัน</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-4" src="/images/gala_tv.png" alt="">
                <a href="#" class="text-[18px]">เน็ตบ้าน
                    พร้อมทรูวิชั่น</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-4" src="/images/solar_wi-fi-router-minimalistic-linear.png" alt="">
                <a href="#" class="text-[18px]">เน็ตบ้าน
                    เลือกเราเตอร์เอง</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-4" src="/images/ion_game-controller-outline.png" alt="">
                <a href="#" class="text-[18px]">เน็ตบ้าน
                    สำหรับเกมเมอร์</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-4" src="/images/iconoir_small-shop.png" alt="">
                <a href="#" class="text-[18px]">เน็ตบ้าน
                    สำหรับธุรกิจ SME</a>
            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container">
            <div class="title-plate-line max-w-[1536px]"></div>
            <div class="plate-group ">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text">ทรู ออนไลน์ อันดับ 1 เน็ตบ้านไฟเบอร์อัจฉริยะ</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">อินเทอร์เน็ตไฟเบอร์</p>
                <p class="text-[#838383] mt-2 mb-2 text-[18px]">เน็ตแรงที่สุด 2Gbps ดูเต็มอิ่ม หนัง กีฬา ความบันเทิง | True
                    Gigatex PRO</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

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
                                        <p class="blue-plate-text text-white ">รับทันที</p>
                                    </div>
                                    <div class="blue-plate-box-e">
                                        <div class="blue-plate-textboxE"></div>
                                        <div class="blue-plate-circleE"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-center py-6">
                                <p>ลูกค้าดีแทค และทรูมูฟเอช แบบรายเดือน
                                    รับส่วนลด 200 บาท / เดือน
                                    จากราคาปกติ 999 บาท</p>
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 278.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO Special.</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">แพ็กราคาสุดพิเศษ สำหรับลูกค้าดีแทค และ ทรูมูฟเอช
                    รายเดือนเท่านั้น สนใจสมัครด้วยตนเองที่นี่ หรือ โทร 02-700-8000</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ครบกว่า คุ้มกว่า แรงกว่าทุกกระแส ดูเต็มอิ่ม หนัง กีฬา
                    ความบันเทิง</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO Security</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">แพ็กเกจเน็ตบ้าน ครอบคลุมทุกย่าน ด้วยความห่วงใย</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO CYOD</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ทางเลือกสุดคุ้ม นำเราเตอร์ของคุณเองมาใช้
                    ร่วมกับแพ็กเกจเน็ตบ้านทรู ราคาสุดพิเศษ</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16 ">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

                    <div class="drop-shadow-md col-start-2 ">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

                </div>

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO Gold</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">กล่องทรูไฮบริด พร้อมคอนเทนท์พรีเมียม | สตรีมมิง | แอพสุดฮิต
                    มาพร้อมเน็ตบ้านไฟเบอร์ทรู 1Gbps</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16 ">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

                    <div class="drop-shadow-md col-start-2 ">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

                </div>

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO Gamer</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">แพ็กเกจเน็ตบ้าน ครอบคลุมทุกย่าน ด้วยความห่วงใย</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO SME</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">เน็ตเร็ว แรง เพื่อธุรกิจ ฟรีค่าโทร พร้อมบริการ Public
                    Fixed IP กับ True Gigatex PRO SME</p>
            </div>

            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4">

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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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
                                <img class="w-20" src="/images/Rectangle 235.png" alt="">
                                <div class="border-l border border-gray-500 text-center mx-3 rounded-full"></div>
                                <img class="w-20" src="/images/Rectangle 234.png" alt="">
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

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}
    </div>
    <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF] ">
        <div class="p-6 flex justify-center gap-[15rem]">
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mt-2 mb-6 " src="/images/code-qr.png" alt="">
                <p class="text-[1rem] text-white">ช้อปผ่านแชท</p>
                <p class="text-[0.8rem] text-white">Line ID QR Coed</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 " src="/images/Rectangle 1245.png" alt="">
                <p class="text-[1rem] text-white">แจ้งขนส่ง</p>
                <p class="text-[0.8rem] text-white">เช็ครหัสขนส่งสินค้า</p>
            </div>
        </div>
    </div>
@endsection

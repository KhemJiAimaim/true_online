@extends('frontend.layouts.main')

@section('content')
    <div class="2xl:mt-16">
        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden mb-2">
            <div class="grid grid-cols-7 py-6 w-[1200px] 2xl:w-[1536px] items-center mx-auto">
                <a href="#fiber"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[40px] mb-4" src="/images/arcticons_trueid.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้านสำหรับ
                        ทรูและดีแทค</p>
                </a>

                <a
                    href="#ber_lucky"class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[30px] mb-4" src="/images/iconoir1.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้านสำหรับ
                        ใช้งานพื้นฐาน</p>
                </a>


                <a href="#sim"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[40px] mb-4" src="/images/icon-park-outline_shield-add (1).png"
                        alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้าน
                        พร้อมประกัน</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[30px] mb-4" src="/images/gala_tv.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้าน
                        พร้อมทรูวิชั่น</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[30px] mb-4" src="/images/solar_wi-fi-router-minimalistic-linear.png"
                        alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้าน
                        เลือกเราเตอร์เอง</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[30px] mb-4" src="/images/ion_game-controller-outline.png"
                        alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้าน
                        สำหรับเกมเมอร์</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-[45px] h-[45px] max-sm:w-[30px] mb-4" src="/images/iconoir_small-shop.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้าน
                        สำหรับธุรกิจ SME</p>
                </a>

            </div>
        </div>

         {{-- มหัศจรรย์ --}}
         <div class="title-plate-container pt-4">
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

        <section id="fiber" class="bg-gray-100 py-6 relative z-0 px-3">
            
            <img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt="">
            <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">อินเทอร์เน็ตไฟเบอร์</p>
            <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">เน็ตแรงที่สุด 2Gbps ดูเต็มอิ่ม
                หนัง กีฬา
                ความบันเทิง | True
                Gigatex PRO</p>


            <div class=" overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4 z-2">

                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-[1200px] w-[1400px] dm:w[1380px] grid grid-cols-4 xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>

            <div class="items-center mx-auto mt-4 pt-6">
                <a href="/fiber"
                class="py-2.5 px-5 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</a>
            </div>
            <img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png" alt="">
        </section>
        {{-- --- --}}

        <section class="py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">True Gigatex PRO Special.</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">แพ็กราคาสุดพิเศษ สำหรับลูกค้าดีแทค และ ทรูมูฟเอช
                    รายเดือนเท่านั้น สนใจสมัครด้วยตนเองที่นี่ หรือ โทร 02-700-8000</p>
            </div>


            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-full w-[1400px] dm:w-[1380px] grid grid-cols-4 gap-4 dm:gap-8 ss:gap-6 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                    @endfor
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

            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-full w-[1400px] dm:w-[1380px] grid grid-cols-4 gap-4 dm:gap-8 ss:gap-6 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                    @endfor
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


            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-full w-[1400px] dm:w-[1380px] grid grid-cols-4 gap-4 dm:gap-8 ss:gap-6 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                    @endfor
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

            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-full w-[1400px] dm:w-[1380px] grid grid-cols-4 gap-4 dm:gap-8 ss:gap-6 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                    @endfor
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

            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-full w-[1400px] dm:w-[1380px] grid grid-cols-4 gap-4 dm:gap-8 ss:gap-6 mx-auto ss:p-1 p-4 2xl:col-start-2">

                        <div class="drop-shadow-md 2xl:col-start-2">
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
                                <div class="bg-white"">
                                    <div class="flex justify-center py-6 ml-12">
                                        <p class="text-[35px] text-center font-medium">1</p>
                                        <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                        <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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

                                <div
                                    class=" relative bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2 items-center">
                                    <img class="absolute top-5 left-0" src="/images/Intersect (1).png" alt="">
                                    <div class="grid grid-cols-3 items-center">
                                        <p class="text-white text-left 2xl:text-[18px] text-[1rem]  ">ราคา</p>
                                        <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                        <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                    <a href=""
                                        class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                                </div>
                        </div>
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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

                            <div
                                class=" relative bg-gradient-to-r from-[#5642CD] to-[#00BCFF]   py-3 px-2 items-center">
                                <img class="absolute top-5 left-0" src="/images/Intersect (1).png" alt="">
                                <div class="grid grid-cols-3 items-center">
                                    <p class="text-white text-left 2xl:text-[18px] text-[1rem]  ">ราคา</p>
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
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

            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-full w-[1400px] dm:w-[1380px] grid grid-cols-4 gap-4 dm:gap-8 ss:gap-6 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                    @endfor
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

            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-full w-[1400px] dm:w-[1380px] grid grid-cols-4 gap-4 dm:gap-8 ss:gap-6 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
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
                            <div class="bg-white"">
                                <div class="flex justify-center py-6 ml-12">
                                    <p class="text-[35px] text-center font-medium">1</p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full"></div>
                                    <p class="text-lg text-left text-[16px]">Gbps<br>/500Mbps</p>
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
                                    <p class="text-white font-medium text-center 2xl:text-3xl text-2xl">2,499</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] ">บาท<br>/เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mx-auto">
                                <a href=""
                                    class="py-2 px-5 mr-2 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">สมัครเลย</a>
                            </div>
                        </div>
                    @endfor
                </div>

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}
    </div>
    @include('frontend.pages.internet_fiber.footer_fiber')
@endsection

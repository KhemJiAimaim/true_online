@extends('frontend.layouts.main')



@section('content')
    <div class="2xl:mt-16">
        
        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden mb-2 px-3">
            <div class="grid grid-cols-4 py-6 w-[500px] 2xl:w-[800px] items-center mx-auto">
                <a href="#fiber"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[40px] mb-2" src="/images/solar_wi-fi-router-linear (1).png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เน็ตบ้านไฟเบอร์</p>
                </a>

                <a
                    href="#ber_lucky"class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[30px] mb-3" src="/images/icon-park-outline_sim-card.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เบอร์มงคล</p>
                </a>


                <a href="#sim"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[40px]" src="/images/system-uicons_box-add1.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">แพ็กเกจเน็ตซิมเทพ</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[30px] mb-4" src="/images/solar_wi-fi-router-linear.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">ซิมท่องเที่ยว</p>
                </a>

            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container pt-4 px-3">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[18px]">ทรู คอร์ปอเรชั่น
                        ผู้นำดิจิทัลไลฟ์สไตล์ครบวงจร</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        <div class="2xl:my-12 my-6 md:w-[600px] 2xl:w-[1536px] mx-auto px-3">
            <span class="text-gray-400 2xl:text-[20px] md:text-[18px] text-[16px] ">ค้นหาเบอร์มงคล แพ็กเกจเสริม
                อินเตอร์เน็ตไฟเบอร์ความเร็วสูงสุด แรงสุด
                และซิมท่องเทียวในประเทศและต่างประเทศ ที่เหมาะกับคุณได้เลยที่นี่</span>
        </div>

        {{-- --- --}}
        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden py-2 mb-4 px-3">
            <div
                class="2xl:w-[1536px] xl:w-[1200px] w-[1200px] se:w-[1000px] md:w-[1100px] lg:w-[1000px] ss:w-[1050px] ss:gap-4 xl:gap-10 grid grid-cols-3 md:gap-1 se:gap-4 se:p-0  gap-4 xs:gap-0  lg:gap-4 2xl:gap-4 mx-auto 2xl:p-4 p-1 items-center place-content-center">

                <a href=""
                    class="w-[350px] lg:w-[330px]  2xl:w-[450px] md:w-[340px]  se:w-[325px] ss:w-[330px] mx-auto h-auto bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col rounded-3xl drop-shadow-md">
                    <img class="w-full h-auto rounded-tl-3xl rounded-tr-3xl" src="/images/internet_fiber_c476c5e742.webp"
                        alt="">

                    <div class="grid grid-cols-3 mb-2">
                        <div class="flex justify-center items-center">
                            <img src="/images/iconoir_internet.png" class="w-14 h-14" alt="">
                        </div>
                        <div class="col-span-2">
                            <p class="text-white text-left font-medium  text-[20px] mt-2 mb-2 ">อินเตอร์เน็ตไฟเบอร์</p>
                            <p class="text-white text-left text-[17px] ">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น
                                เร็วสุด แรงสุด
                            </p>
                        </div>
                    </div>
                </a>


                <a href=""
                    class="w-[350px] lg:w-[330px]  2xl:w-[450px] md:w-[340px] se:w-[325px] ss:w-[330px] mx-auto h-auto bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col rounded-3xl drop-shadow-md">
                    <img class="w-full h-auto rounded-tl-3xl rounded-tr-3xl" src="/images/mobile_cc0d791368.webp"
                        alt="">
                    <div class="grid grid-cols-3 mb-2">
                        <div class="flex justify-center items-center">
                            <img src="images/solar_sim-cards-linear.png" class="w-14 h-14" alt="">
                        </div>
                        <div class="col-span-2">
                            <p class="text-white text-left font-medium text-[20px] mt-2 mb-2">เบอร์มงคลรายเดือน</p>
                            <p class="text-white text-left text-[17px]">เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น
                                เร็วสุด แรงสุด
                            </p>
                        </div>
                    </div>
                </a>

                <a href=""
                    class="w-[350px] lg:w-[330px]  2xl:w-[450px] md:w-[340px] se:w-[325px] ss:w-[330px] mx-auto h-auto bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex flex-col rounded-3xl drop-shadow-md">
                    <img class="w-full h-auto rounded-tl-3xl rounded-tr-3xl" src="/images/entertainment_3063ccb225.webp"
                        alt="">
                    <div class="grid grid-cols-3 mb-2">
                        <div class="flex justify-center items-center">
                            <img src="images/system-uicons_box-add.png" class="w-14 h-14" alt="">
                        </div>
                        <div class="col-span-2">
                            <p class="text-white text-left font-medium text-[20px] ss:text-[18px] mt-2 mb-2">แพ็กเกจเสริม
                            </p>
                            <p class="text-white text-left text-[17px] ss:text-[16px]">
                                เต็มที่กับการท่องเว็บและสตรีมมิ่งอย่างราบรื่น
                                เร็วสุด แรงสุด
                            </p>
                        </div>
                    </div>
                </a>





            </div>
        </div>
        {{-- --- --}}


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


        <section id="ber_lucky" class="bg-white py-6 px-3">

            <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[22px] text-[20px] font-medium ">เบอร์มงคลรายเดือน</p>
            <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">เบอร์มงคล พร้อมแพ็กเกจ
                ที่คุณอาจสนใจ</p>


            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-[1200px] w-[1400px] dm:w[1380px] grid grid-cols-4 xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="drop-shadow-md">
                            <div
                                class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] px-3 z-0">
                                <div class="flex justify-start items-center gap-1 ">
                                    <p class="text-white text-[18px]">เกรด</p>
                                    <p class="text-white font-medium text-[1.5rem]">A+</p>
                                </div>
                                <div
                                    class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 xl:w-4/6 md:w-4/6 transform -skew-x-12 px-2 flex justify-end items-center">
                                    <p class="text-white mr-1 text-[18px]">ผลรวม</p>
                                    <p class="text-white font-bold text-[1.5rem]">59</p>
                                </div>
                                <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                            </div>
                            {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                            <div class="bg-white"">
                                <div class="flex justify-center py-10 ">
                                    <p class="2xl:text-[2.5rem] text-[2rem] text-center font-bold">063-782-5555</p>
                                </div>
                            </div>

                            <div class="bg-[#F8F9FA] grid grid-cols-5 py-2 h-[100px] ">
                                <img src="images/Ellipse 6.png" alt="" class="px-4 py-2">
                                <p class="text-left 2xl:text-[16px] text-[14px] p-2 py-1 col-span-4 ">พลังแห่งปัญญา การสนับสนุนค้ำจุน สติปัญญา
                                    นำพาสู่ความสำเร็จ ( แพ็กเกจนี้ใช้ฟรี 3 เดือน )</p>
                            </div>

                            <div
                                class=" relative bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2 items-center">
                                <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left 2xl:text-[18px] text-[1rem] md:text-[18px] ">ราคา</p>
                                    <p class="text-white font-medium text-center 2xl:text-3xl md:text-[2rem]  text-2xl">
                                        99,999</p>
                                    <p class="text-white text-right 2xl:text-[18px] text-[1rem] md:text-[18px] ">บาท</p>

                                </div>
                            </div>

                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px] 2xl:flex 2xL:justify-center  flex justify-center px-2 md:px-0 lg:px-0 items-center ">
                                <div
                                    class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]   flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                </div>
                                <div
                                    class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]  flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/icons8-line-app (1) 9.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                </div>

                                <a src="#"
                                    class="cursor-pointer flex items-center lg:px-2 xl:px-1  ss:px-2 2xl:px-4 px-4 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2 mx-1 ss:mx-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                <a src="#"
                                    class="cursor-pointer flex items-center lg:px-4  xl:px-4 ss:px-6 2xl:px-8 px-6 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2  2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                            </div>

                        </div>
                    @endfor


                </div>

            </div>
            <div class="items-center mx-auto mt-4 pt-6">
                <a href="/fiber"
                class="py-2.5 px-5 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</a>
            </div>

        </section>
        {{-- --- --}}


        <section id="sim" class="bg-gray-100 py-6 relative z-0 px-3">
            <img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt="">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[22px] text-[20px] font-medium">ซิมเติมเงิน</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">ซิมเติมเงิน
                    พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ
                </p>
            </div>
            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-[1200px] w-[1400px] dm:w[1380px] grid grid-cols-4 xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="drop-shadow-md">
                            <div
                                class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                {{-- <div class="flex justify-start items-center"> --}}
                                <p class="text-white text-left ml-3 text-[18px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>
                                <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                                {{-- </div> --}}

                            </div>

                            <div class="bg-white"">
                                <div class="flex justify-center py-4 ">
                                    <img src="images/Rectangle 98.png" alt="">
                                </div>
                            </div>

                            <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                                <img src="images/Ellipse 6.png" alt="" class="px-4">
                                <p class="text-left 2xl:text-[16px] text-[14px] p-2  py-1 col-span-4">( เล่นฟรีเดือนแรก )
                                    เล่นเน็ตไม่อั้น ความเร็ว 4Mbps (พร้อมใช้ฟรี
                                    True wifi max speed แบบไม่จำกัด)</p>
                            </div>

                            <div class=" relative bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 items-center">
                                <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left 2xl:text-[18px] text-[1rem] md:text-[18px] ">ราคา <br>
                                        เริ่มต้น</p>
                                    <p
                                        class="text-white font-medium text-center 2xl:text-3xl md:text-[2rem] pt-3 text-2xl">
                                        150</p>
                                    <p class="text-white text-right text-[1rem] 2xl:text-[18px] md:text-[18px]">บาท <br>
                                        /เดือน</p>

                                </div>
                            </div>

                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4 items-center">

                                <a href="#"
                                    class="cursor-pointer py-2  px-6 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                                <a href="#"
                                    class="cursor-pointer py-2 px-10  mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

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

        <section id="travel" class="bg-white py-6 px-3">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[22px] text-[20px] font-medium">ซิมท่องเที่ยว</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">ซิมสำหรับท่องเที่ยว
                    เชื่อมต่อได้ไม่มีสะดุด
                </p>
            </div>

            <div class="overflow-x-scroll 2xl:overflow-hidden 2xl:my-16 my-4">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-[1200px] w-[1400px] dm:w[1380px] grid grid-cols-4 xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">
                    @for ($i = 1; $i <= 4; $i++)
                        <div class="drop-shadow-md">
                            <div
                                class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                                <p class="text-white mr-2 text-left text-[18px]">8 DAYS 449 BAHT</p>
                                <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                            </div>
                            {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                            <div class="bg-white"">
                                <div class="flex justify-center py-4 [h-110px]">
                                    <img src="/images/Rectangle 179.png" alt="">
                                </div>
                            </div>

                            <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
                                <img src="/images/travel/majesticons_sim-card-line.png" alt="" class="px-4">
                                <p class="text-left text-[16px] py-1 col-span-4">Thailand Tourist infinite sim</p>
                            </div>

                            <div class=" relative bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                                <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">499</p>
                                    <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                                </div>
                            </div>

                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px] 2xl:flex 2xL:justify-center  flex justify-center px-2 md:px-0 lg:px-0 items-center ">
                                <div
                                    class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]   flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                </div>
                                <div
                                    class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]  flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/icons8-line-app (1) 9.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                </div>

                                <a src="#"
                                    class="cursor-pointer flex items-center lg:px-2 xl:px-1  ss:px-2 2xl:px-4 px-4 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2 mx-1 ss:mx-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                <a src="#"
                                    class="cursor-pointer flex items-center lg:px-4  xl:px-4 ss:px-6 2xl:px-8 px-6 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2  2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                            </div>

                        </div>
                    @endfor

                </div>

            </div>

            <div class="items-center mx-auto mt-4 pt-6">
                <a href="/fiber"
                class="py-2.5 px-5 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</a>
            </div>

        </section>
        {{-- --- --}}

   
</div>
@endsection

@section('scripts')
@endsection
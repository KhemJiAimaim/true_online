@extends('frontend.layouts.main')



@section('content')
    <div class="my-36">

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container ">
            <div class="title-plate-line"></div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text">ย้ายค่ายเบอร์เดิมมาทรูมูฟ เอช พร้อมรับส่วนลดสุดคุ้มที่นี่</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        @include('frontend.pages.move_company.tabmenu')

        <section class="bg-white py-6">

            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">Fixxy No Limit</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            <div class=" my-16 w-full">
                <div class="max-w-[1536px] my-0 mx-auto flex justify-center px-4 ">

                    <div class="drop-shadow-md 2xl:w-[424px] w-[350px] ">
                        <div class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                            {{-- </div> --}}

                        </div>





                        <div class="bg-white flex items-center justify-center flex-col p-4 gap-4  ">
                            <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                            <div class="flex justify-center items-baseline gap-10">
                                <p class="text-[1.5rem]">เน็ต</p>
                                <p class="text-[4rem] text-[#F98E24] ">70</p>
                                <p class="text-[1.5rem]">GB</p>

                            </div>
                            <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                            <div class="flex justify-center items-baseline gap-10">
                                <p class="text-[1.5rem]">เน็ต</p>
                                <p class="text-[4rem] text-[#F98E24] ">150</p>
                                <p class="text-[1.5rem]">GB</p>

                            </div>
                        </div>
                        <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                            <div class="flex items-center justify-center">
                                <img src="/images/arcticons_wifianalyzer.png" alt="">
                                <p class="font-bold text-[1.5rem]">WiFiไม่จำกัด</p>
                            </div>
                            <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                            <div class="flex items-center flex-col justify-center">
                                <p class="font-bold text-[1.5rem]">4G HD Voice</p>
                                <p class="text-[20px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                            </div>
                        </div>
                        <div class="bg-white  flex flex-col gap-5">
                            <div class="orange-plate-container">
                                <div class="orange-plate-line"></div>
                                <div class="orange-plate-group">
                                    <div class="orange-plate-box-s">
                                        <div class="orange-plate-circleS"></div>
                                        <div class="orange-plate-textboxS"></div>
                                    </div>
                                    <div class="orange-plate-textboxC">
                                        <p class="orange-plate-text text-white">รับทันที</p>
                                    </div>
                                    <div class="orange-plate-box-e">
                                        <div class="orange-plate-textboxE"></div>
                                        <div class="orange-plate-circleE"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex items-start gap-2 px-4">
                                <div class="border-[1px]  border-orange-500 p-4 w-[30%]">
                                    <img src="/images/Rectangle1617.png" alt="">
                                </div>

                                <p class="text-start">รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล
                                    2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                    โทรออก</p>
                            </div>
                            <div class="p-4 ">
                                <p class="text-start text-[1rem]">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</p>
                                <ul class="text-start list-disc ml-7 text-[1rem]">
                                    <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                    <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                    <li>WiFi ไม่อั้น</li>
                                </ul>
                            </div>
                            <div class="px-4">
                                <p class="text-start text-[1rem]">จากนั้น ทุกๆ 5 วัน
                                    ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                    49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                            </div>
                            <p class="text-start font-[700] text-[1rem] px-4">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>
                        </div>

                        <div
                            class="bg-gradient-to-r
                                    from-[#ED4312] to-[#F6911D] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] ">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">350</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                            <a href="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                            <a href="/prepaid_sim/buy_sim"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                        </div>
                    </div>


                </div>

            </div>


        </section>
        {{-- --- --}}
        <section class="bg-[#F8F9FA] py-6 w-full">

            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">5G Together+</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            <div class=" my-16 w-full sm:px-4">
                <div
                    class="max-w-[1536px] my-0 mx-auto grid  2xl:grid-cols-3 md:grid-cols-2 gap-10 md:px-6 grid-cols-1 px-4 ">

                    <div class="drop-shadow-md flex justify-center max-h-[1062px] h-[100%]  ">
                        <div class=" 2xl:w-[424px] md:w-[100%] w-[350px] h-[100%] ">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                {{-- <div class="flex justify-start items-center"> --}}
                                <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                                {{-- </div> --}}

                            </div>





                            <div class="bg-white flex items-center justify-center flex-col p-4 gap-4  ">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">70</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">150</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center">
                                    <img src="/images/arcticons_wifianalyzer.png" alt="">
                                    <p class="font-bold text-[25px]">WiFiไม่จำกัด</p>
                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold text-[25px]">4G HD Voice</p>
                                    <p class="text-[20px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                            </div>
                            <div class="bg-white  flex flex-col gap-5">
                                <div class="orange-plate-container">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleS"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white">รับทันที</p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 px-4">
                                    <div class="border-[1px]  border-orange-500 p-4 w-[30%]">
                                        <img src="/images/Rectangle1617.png" alt="">
                                    </div>

                                    <p class="text-start">รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล
                                        2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                        โทรออก</p>
                                </div>
                                <div class="p-4 ">
                                    <p class="text-start text-[1rem]">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</p>
                                    <ul class="text-start list-disc ml-7 text-[1rem]">
                                        <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                        <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                        <li>WiFi ไม่อั้น</li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <p class="text-start text-[1rem]">จากนั้น ทุกๆ 5 วัน
                                        ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                </div>
                                <p class="text-start font-[700] text-[1rem] px-4">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>
                            </div>

                            <div
                                class="bg-gradient-to-r
                                        from-[#ED4312] to-[#F6911D] py-3 px-2">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[1rem] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">350</p>
                                    <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                                <a href="#"
                                    class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                <a href="/prepaid_sim/buy_sim"
                                    class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>
                    <div class="drop-shadow-md flex justify-center max-h-[1062px] h-[100%] ">
                        <div class="2xl:w-[424px] md:w-[100%]  w-[350px]  h-[100%] ">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                {{-- <div class="flex justify-start items-center"> --}}
                                <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                                {{-- </div> --}}

                            </div>





                            <div class="bg-white flex items-center justify-center flex-col p-4 gap-4  ">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">70</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">150</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center">
                                    <img src="/images/arcticons_wifianalyzer.png" alt="">
                                    <p class="font-bold text-[25px]">WiFiไม่จำกัด</p>
                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold text-[25px]">4G HD Voice</p>
                                    <p class="text-[20px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                            </div>
                            <div class="bg-white  flex flex-col gap-5">
                                <div class="orange-plate-container">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleS"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white">รับทันที</p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 px-4">
                                    <div class="border-[1px]  border-orange-500 p-4 w-[30%]">
                                        <img src="/images/Rectangle1617.png" alt="">
                                    </div>

                                    <p class="text-start">รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล
                                        2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                        โทรออก</p>
                                </div>
                                <div class="p-4 ">
                                    <p class="text-start text-[1rem]">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</p>
                                    <ul class="text-start list-disc ml-7 text-[1rem]">
                                        <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                        <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                        <li>WiFi ไม่อั้น</li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <p class="text-start text-[1rem]">จากนั้น ทุกๆ 5 วัน
                                        ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                </div>
                                <p class="text-start font-[700] text-[1rem] px-4">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>
                            </div>

                            <div
                                class="bg-gradient-to-r
                                        from-[#ED4312] to-[#F6911D] py-3 px-2">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[1rem] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">350</p>
                                    <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                                <a href="#"
                                    class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                <a href="/prepaid_sim/buy_sim"
                                    class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>
                    <div class="drop-shadow-md flex justify-center max-h-[1062px] h-[100%] ">
                        <div class="2xl:w-[480px] md:w-[100%] sm:w-[100%] w-[350px]  h-[100%]   ">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                {{-- <div class="flex justify-start items-center"> --}}
                                <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                                {{-- </div> --}}

                            </div>





                            <div class="bg-white flex items-center justify-center flex-col p-4 gap-4  ">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">70</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">150</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center">
                                    <img src="/images/arcticons_wifianalyzer.png" alt="">
                                    <p class="font-bold text-[25px]">WiFiไม่จำกัด</p>
                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold text-[25px]">4G HD Voice</p>
                                    <p class="text-[20px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                            </div>
                            <div class="bg-white  flex flex-col gap-5">
                                <div class="orange-plate-container">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleS"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white">รับทันที</p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 px-4">
                                    <div class="border-[1px]  border-orange-500 p-4 w-[30%]">
                                        <img src="/images/Rectangle1617.png" alt="">
                                    </div>

                                    <p class="text-start">รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล
                                        2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                        โทรออก</p>
                                </div>
                                <div class="p-4 ">
                                    <p class="text-start text-[1rem]">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</p>
                                    <ul class="text-start list-disc ml-7 text-[1rem]">
                                        <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                        <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                        <li>WiFi ไม่อั้น</li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <p class="text-start text-[1rem]">จากนั้น ทุกๆ 5 วัน
                                        ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                </div>
                                <p class="text-start font-[700] text-[1rem] px-4">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>
                            </div>

                            <div
                                class="bg-gradient-to-r
                                        from-[#ED4312] to-[#F6911D] py-3 px-2">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[1rem] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">350</p>
                                    <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                                <a href="#"
                                    class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                <a href="/prepaid_sim/buy_sim"
                                    class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>




                </div>

            </div>


        </section>
        {{-- --- --}}
        <section class="bg-[#ffff] py-6">


            <div class="max-w-[1536px] my-0 mx-auto   ">
                <div class="">
                    <p class="text-[#000] mt-2 mb-2 text-[2rem] ">5G Together+</p>
                    <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
                </div>
                <div class=" grid 2xl:grid-cols-2 gap-5 md:grid-cols-2 grid-cols-1 px-4 ">
                    <div class="drop-shadow-md w-full  flex 2xl:justify-end justify-center ">
                        <div class="2xl:w-[480px] md:w-full w-[350px]">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                {{-- <div class="flex justify-start items-center"> --}}
                                <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                                {{-- </div> --}}

                            </div>





                            <div class="bg-white flex items-center justify-center flex-col p-4 gap-4  ">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">70</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">150</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center">
                                    <img src="/images/arcticons_wifianalyzer.png" alt="">
                                    <p class="font-bold text-[25px]">WiFiไม่จำกัด</p>
                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold text-[25px]">4G HD Voice</p>
                                    <p class="text-[20px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                            </div>
                            <div class="bg-white  flex flex-col gap-5">
                                <div class="orange-plate-container">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleS"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white">รับทันที</p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 px-4">
                                    <div class="border-[1px]  border-orange-500 p-4 w-[30%]">
                                        <img src="/images/Rectangle1617.png" alt="">
                                    </div>

                                    <p class="text-start">รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล
                                        2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                        โทรออก</p>
                                </div>
                                <div class="p-4 ">
                                    <p class="text-start text-[1rem]">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</p>
                                    <ul class="text-start list-disc ml-7 text-[1rem]">
                                        <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                        <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                        <li>WiFi ไม่อั้น</li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <p class="text-start text-[1rem]">จากนั้น ทุกๆ 5 วัน
                                        ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                </div>
                                <p class="text-start font-[700] text-[1rem] px-4">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>
                            </div>

                            <div
                                class="bg-gradient-to-r
                                    from-[#ED4312] to-[#F6911D] py-3 px-2">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[1rem] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">350</p>
                                    <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                                <a href="#"
                                    class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                <a href="/prepaid_sim/buy_sim"
                                    class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>

                    <div class="drop-shadow-md w-full  flex 2xl:justify-start justify-center ">
                        <div class="2xl:w-[480px] md:w-full w-[350px]">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2">
                                {{-- <div class="flex justify-start items-center"> --}}
                                <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                                {{-- </div> --}}

                            </div>





                            <div class="bg-white flex items-center justify-center flex-col p-4 gap-4  ">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">70</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="text-[1.5rem]">เน็ต</p>
                                    <p class="text-[4rem] text-[#F98E24] ">150</p>
                                    <p class="text-[1.5rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center">
                                    <img src="/images/arcticons_wifianalyzer.png" alt="">
                                    <p class="font-bold text-[25px]">WiFiไม่จำกัด</p>
                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold text-[25px]">4G HD Voice</p>
                                    <p class="text-[20px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                            </div>
                            <div class="bg-white  flex flex-col gap-5">
                                <div class="orange-plate-container">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleS"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white">รับทันที</p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-start gap-2 px-4">
                                    <div class="border-[1px]  border-orange-500 p-4 w-[30%]">
                                        <img src="/images/Rectangle1617.png" alt="">
                                    </div>

                                    <p class="text-start">รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล
                                        2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                        โทรออก</p>
                                </div>
                                <div class="p-4 ">
                                    <p class="text-start text-[1rem]">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5 วัน</p>
                                    <ul class="text-start list-disc ml-7 text-[1rem]">
                                        <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                        <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                        <li>WiFi ไม่อั้น</li>
                                    </ul>
                                </div>
                                <div class="px-4">
                                    <p class="text-start text-[1rem]">จากนั้น ทุกๆ 5 วัน
                                        ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                        49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                </div>
                                <p class="text-start font-[700] text-[1rem] px-4">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>
                            </div>

                            <div
                                class="bg-gradient-to-r
                                    from-[#ED4312] to-[#F6911D] py-3 px-2">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[1rem] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">350</p>
                                    <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                                <a href="#"
                                    class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                <a href="/prepaid_sim/buy_sim"
                                    class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>


                </div>

            </div>


        </section>

    </div>

    <div class="bg-gradient-to-r from-[#F6911D] to-[#ED4312]">
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

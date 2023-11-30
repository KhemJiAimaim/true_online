@extends('frontend.layouts.main')



@section('content')
<div class="2xl:mt-16 mt-6">

    {{-- มหัศจรรย์ --}}
    <div class="title-plate-container px-3 xs:px-8">
        <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
            <div class="title-plate-line"></div>
        </div>
        <div class="plate-group">
            <div class="plate-box-s">
                <div class="plate-circleS"></div>
                <div class="title-plate-textboxS"></div>
            </div>
            <div class="title-plate-textboxC">
                <p class="plate-text 2xl:text-[1.5rem] md:text-[16px]  text-[16px] p-4  ">ย้ายค่ายเบอร์เดิมมาทรูมูฟ เอช
                    พร้อมรับส่วนลดสุดคุ้มที่นี่</p>
            </div>
            <div class="plate-box-e">
                <div class="title-plate-textboxE"></div>
                <div class="plate-circleE"></div>
            </div>
        </div>
    </div>
    {{-- มหัศจรรย์ --}}

    @include('frontend.pages.move_company.tabmenu')

    <section class="bg-[#fff] py-6 relative z-0 px-3 max-md:px-4">
        {{-- <img class=" absolute right-0 top-0 z-[-1]" src="/images/circle/ci1.png" alt=""> --}}
        <div class="">
            <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px]">5G Together+</p>
            <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] xl:text-[18px] text-[16px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม
                ที่คุณอาจสนใจ</p>
        </div>
        <div class="mt-10 w-full py-2 z-[2]">
            <div
                class="2xl:w-[1536px] my-0 flex justify-center flex-wrap  mx-auto items-center  gap-6 ">

                @for ($i = 1; $i <= 2; $i++)
                    <div
                        class="drop-shadow-md flex ">
                        <div class=" 2xl:w-[425px] xl:w-[380px] lg:w-[420px] w-[350px] h-[100%]">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2 relative ">
                                {{-- <div class="flex justify-start items-center"> --}}
                                <p class="text-white text-left ml-3 text-[18px] max-md:text-[16px]">ซิมเทพ
                                    เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>
                                <img class=" absolute top-0 right-0" src="/images/circle/Intersect.png" alt="">
                                {{-- </div> --}}

                                </div>
                            <div class="bg-white flex items-center justify-center flex-col p-4  max-md:p-2">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">เน็ต</p>
                                    <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">70</p>
                                    <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="2xl:text-[1.5rem] text-[1rem]">เน็ต</p>
                                    <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">150</p>
                                    <p class="2xl:text-[1.5rem] text-[1rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center gap-2">
                                    <img src="/images/arcticons_wifianalyzer (1).png" alt="">
                                    <p class="font-bold 2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">WiFi ไม่จำกัด
                                    </p>
                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">4G HD Voice</p>
                                    <p class="2xl:text-[1.2rem] text-[14px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                            </div>
                            <div class="bg-white  2xl:flex flex-col gap-5 dm:block hidden ">
                                <div class="orange-plate-container pb-2">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleS"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white text-[18px] max-md:text-[16px]">
                                                รับทันที</p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleE"></div>
                                        </div>
                                    </div>
                                </div>

                               
                                    <div class="flex items-start gap-2 px-4">
                                        <div class="border-[1px]  border-orange-500 p-4 w-[35%] pb-2">
                                            <img src="/images/Rectangle1617.png" alt="">
                                        </div>

                                        <p class="text-start text-[18px] max-md:text-[16px]">รับชมความบันเทิงซีรีย์ดัง
                                            และ EPL FanPack ฤดูกาล
                                            2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56#
                                            โทรออก</p>
                                    </div>


                                    <div class="px-4">
                                        <p class="text-start text-[18px] max-md:text-[16px] ">เปอดเบอร์ใหม่ ใช้ฟรีทันที
                                            5 วัน</p>
                                        <ul class="text-start list-disc ml-7 text-[18px] max-md:text-[16px]">
                                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                                            <li>WiFi ไม่อั้น</li>
                                        </ul>
                                    </div>

                                    <div class="px-4">
                                        <p class="text-start text-[18px] max-md:text-[16px]">จากนั้น ทุกๆ 5 วัน
                                            ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                            49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                    </div>
                                    <p class="text-start font-[700] text-[18px] max-md:text-[16px] px-4 py-2">เริ่ม 11
                                        ต.ค. 66 - 31 ต.ค. 66</p>
                                
                            </div>


                            <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D]  relative">
                                <img class=" absolute left-0 top-0 h-[100%]" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="flex items-center justify-between py-6 max-md:p-2 px-2">

                                    <p class="text-white text-left text-[18px] max-md:text-[16px] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">350</p>
                                    <p class="text-white text-right text-[18px] max-md:text-[16px]  ">บาท <br> /เดือน
                                    </p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 gap-3">

                                <a href="#"
                                    class="cursor-pointer py-2 xl:px-2 px-1  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                <a href="/move/movenow"
                                    class="cursor-pointer py-2 max-md:px-12 xl:px-10 px-10  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>
                @endfor


            </div>

        </div>

        {{-- <img class=" absolute left-0 bottom-0 z-[-1]" src="/images/circle/ci2.png" alt=""> --}}
    </section>
        <div />
        @include('frontend.pages.move_company.move_footer')
    @endsection

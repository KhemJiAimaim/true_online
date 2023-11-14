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
        <section class=" py-6 w-full ">

            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">5G Together+</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            <div class=" my-16 w-full sm:px-4 z-[2]">
                <div
                    class="max-w-[1536px] my-0 mx-auto grid  2xl:grid-cols-3 md:grid-cols-2 gap-10 md:px-6 grid-cols-1 px-4 ">
                    @for ($i = 1; $i < 10; $i++)
                        <div class="drop-shadow-md flex justify-center max-h-[1062px] h-[100%]  ">
                            <div class=" 2xl:w-[424px] md:w-[100%] w-[350px] min-[375px]:w-[300px] h-[100%] ">
                                <div
                                    class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2 relative ">
                                    {{-- <div class="flex justify-start items-center"> --}}
                                    <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด
                                    </p>
                                    <img class=" absolute top-0 right-0" src="/images/circle/Intersect.png" alt="">
                                    {{-- </div> --}}

                                </div>





                                <div class="bg-white flex items-center justify-center flex-col p-4 gap-4  ">
                                    <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                    <div class="flex justify-center items-baseline gap-10">
                                        <p class="2xl:text-[1.5rem] text-[1rem]">เน็ต</p>
                                        <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">70</p>
                                        <p class="2xl:text-[1.5rem] text-[1rem]">GB</p>

                                    </div>
                                    <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                    <div class="flex justify-center items-baseline gap-10">
                                        <p class="2xl:text-[1.5rem] text-[1rem]">เน็ต</p>
                                        <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">150</p>
                                        <p class="2xl:text-[1.5rem] text-[1rem]">GB</p>

                                    </div>
                                </div>
                                <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                    <div class="flex items-center justify-center">
                                        <img src="/images/arcticons_wifianalyzer.png" alt="">
                                        <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">WiFiไม่จำกัด</p>
                                    </div>
                                    <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                    <div class="flex items-center flex-col justify-center">
                                        <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">4G HD Voice</p>
                                        <p class="2xl:text-[1.2rem] text-[14px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                    </div>
                                </div>
                                <div class="bg-white  2xl:flex flex-col gap-5 md:block hidden ">
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
                                    <div class="flex items-start gap-2 p-4">
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
                                    <div class="p-4">
                                        <p class="text-start text-[1rem]">จากนั้น ทุกๆ 5 วัน
                                            ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                                            49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>
                                    </div>
                                    <p class="text-start font-[700] text-[1rem] px-4">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66</p>
                                </div>

                                <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D]  relative">
                                    <img class=" absolute left-0 top-0 h-[100%]" src="/images/circle/Intersect (2).png"
                                        alt="">
                                    <div class="grid grid-cols-3 py-3 px-2">

                                        <p class="text-white text-left text-[1rem] ">ราคา</p>
                                        <p class="text-white font-medium text-center text-3xl">350</p>
                                        <p class="text-white text-right text-[1rem]  ">บาท <br> /เดือน</p>

                                    </div>
                                </div>

                                <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4">

                                    <a href="#"
                                        class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-[12px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ข้อกำหนดและเงือนไข</a>
                                    <a href="/prepaid_sim/buy_sim"
                                        class="cursor-pointer py-2 px-8  mb-2 mt-2 text-[12px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                                </div>
                            </div>
                        </div>
                    @endfor

                </div>

            </div>


        </section>
        {{-- --- --}}


    </div>

    @include('frontend.pages.move_company.move_footer')
@endsection

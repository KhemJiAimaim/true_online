@extends('frontend.layouts.main')



@section('content')
    <div class="mt-16">
       
        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container ">
            <div class="title-plate-line"></div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text">ทรู ซิมเติมเงิน และ แพ็กเกจเสริม ทั้งเน็ตและโทร</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}


        <section class="bg-white py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">ซิมเติมเงิน</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4 z-0">

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="/images/Rectangle 98.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                            <img src="/images/Ellipse 6.png" alt="" class="px-4">
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

                            <a href="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a href="/prepaid_sim/buy_sim"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น + โทรฟรีทุกค่าย 24 ซม.</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="/images/Rectangle 98.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                            <img src="/images/Ellipse 6.png" alt="" class="px-4">
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

                            <a href=""
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a href="/prepaid_sim/buy_sim"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">ซิมเทพ เล่นเน็ตไม่อั้น ไม่ลดสปิด</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="/images/Rectangle 116.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2 h-[100px]">
                            <img src="/images/Ellipse 6.png" alt="" class="px-4">
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

                            <a href="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a href="/prepaid_sim/buy_sim"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">ซิมเทพเล่นเน็ตไม่อั้น ใช้ได้ไม่จำกัด+โทรฟรี 24ซม.</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="/images/Rectangle 125.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                            <img src="/images/Ellipse 6.png" alt="" class="px-4">
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

                            <a href="#"
                                class="cursor-pointer py-2 px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <a href="/prepaid_sim/buy_sim"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                </div>

            </div>
            <div class="items-center">
                <a href="/prepaid_sim/sim_includ"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</a>
            </div>

        </section>
        {{-- --- --}}

        <section class="bg-gray-100 py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">แพ็กเกจเสริม</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1rem]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            <div class="overflow-x-scroll lg:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-4 gap-4 mx-auto p-4 z-0">

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">เล่นเน็ตไม่อั้น 8Mbps (ปกติ 4Mbps)</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-2 ">
                               <p class="text-[22px]">เน็ต</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] py-2 ">
                            <p class="text-[2rem] font-medium">8Mbps/1วัน</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 ">
                            <div class="grid grid-cols-3 items-center ">
                                <p class="text-white text-left text-[1rem]">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">32</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> แบบรายครั้ง</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4">

                        <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">เล่นเน็ตไม่อั้น 12Mbps (ปกติ 6Mbps)</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-2 ">
                               <p class="text-[22px]">เน็ต</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] py-2 ">
                            <p class="text-[2rem] font-medium">12Mbps/1วัน</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 ">
                            <div class="grid grid-cols-3 items-center ">
                                <p class="text-white text-left text-[1rem]">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">45</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> แบบรายครั้ง</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4">

                        <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">เล่นเน็ตไม่อั้น 20Mbps (ปกติ 10Mbps)</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-2 ">
                               <p class="text-[22px]">เน็ต</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] py-2 ">
                            <p class="text-[2rem] font-medium">20Mbps/1วัน</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 ">
                            <div class="grid grid-cols-3 items-center ">
                                <p class="text-white text-left text-[1rem]">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">55</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br> แบบรายครั้ง</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4">

                        <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">แพ็กเกจเสริม เน็ต 5G เต็มสปีด-5GB</p>

                            {{-- </div> --}}

                        </div>

                        <div class="bg-white"">
                            <div class="flex justify-center py-2 ">
                               <p class="text-[22px]">เน็ต</p>
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] py-2 ">
                            <p class="text-[2rem] font-medium">5Gbps/30วัน</p>
                        </div>

                        <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 ">
                            <div class="grid grid-cols-3 items-center ">
                                <p class="text-white text-left text-[1rem]">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">199</p>
                                <p class="text-white text-right text-[1rem]  ">บาท <br>ต่ออายุอัตโนมัติ</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4">

                        <a src="#"
                                class="cursor-pointer py-2 px-8  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>

                        </div>
                    </div>

                </div>

            </div>
            <div class="items-center">
                <button type="button"
                    class="py-2.5 px-5 mr-2 mb-2 mt-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ดูทั้งหมด</button>
            </div>

        </section>
        {{-- --- --}}
        
    </div>
    
    <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF]">
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

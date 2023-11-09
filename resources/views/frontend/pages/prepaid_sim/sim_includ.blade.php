@extends('frontend.layouts.main')

@section('content')
    <div class="my-36">
        <section class="">
            <div class="py-6">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">ซิมเติมเงิน</p>
                <p class="text-[#838383] mt-2 mb-2 text-[18px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            {{-- มหัศจรรย์ --}}

            <div class="plate-line max-w-[200px] "></div>

            {{-- มหัศจรรย์ --}}

            <div
                class="max-w-[1536px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-6 m-auto p-4 mt-10">
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
                            <img src="/images/Rectangle 107.png" alt="">
                        </div>
                    </div>

                    <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                        <img src="/images/Ellipse 6.png" alt="" class="px-4">
                        <p class="text-left text-[0.9rem] py-1 col-span-4">( เล่นฟรีเดือนแรก ) เล่นเน็ตไม่อั้น
                            ความเร็ว 100Mbps (พร้อมใช้ฟรี True wifi
                            max speed แบบไม่จำกัด)</p>
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
                            <img src="/images/Rectangle 107.png" alt="">
                        </div>
                    </div>

                    <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                        <img src="/images/Ellipse 6.png" alt="" class="px-4">
                        <p class="text-left text-[0.9rem] py-1 col-span-4">( เล่นฟรีเดือนแรก ) เล่นเน็ตไม่อั้น
                            ความเร็ว 100Mbps (พร้อมใช้ฟรี True wifi
                            max speed แบบไม่จำกัด)</p>
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
                            <img src="/images/Rectangle 107.png" alt="">
                        </div>
                    </div>

                    <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                        <img src="/images/Ellipse 6.png" alt="" class="px-4">
                        <p class="text-left text-[0.9rem] py-1 col-span-4">( เล่นฟรีเดือนแรก ) เล่นเน็ตไม่อั้น
                            ความเร็ว 100Mbps (พร้อมใช้ฟรี True wifi
                            max speed แบบไม่จำกัด)</p>
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
               

            </div>

        </section>
        {{-- --- --}}


    </div>


    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection

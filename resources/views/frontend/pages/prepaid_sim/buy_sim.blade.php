@extends('frontend.layouts.main')



@section('content')
    <div class="2xl:mt-16 mt-[5rem]">
        <div class=" flex justify-center items-center">
            <div class="w-[1536px] max-2xl:max-w-[90%] grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-3  gap-4 m-3">

                <div class="bg-white w-full 2xl:h-[500px]  items-center px-4 lg:px-1 mb-6 relative">
                    <div class="flex justify-center lg:mb-6 2xl:mb-2">
                        <img id="featured" src="/images/Rectangle 1281.png" alt=""
                            class="max-ex:w-[250px] max-ex:h-[250px] w-[370px] cursor-pointer pb-4">
                    </div>
                    <div id="slide-wrapper" class="flex  items-center">


                        <img id="slideLeft" class="arrow absolute left-0 cursor-pointer " src="/images/prev.png">

                        <div id="slider" class="flex gap-4 overflow-x-hidden mx-4 ">
                            {{-- @for ($i = 1; $i <= 6; $i++)  --}}
                            <img src="/images/Rectangle 1281.png" alt=""
                                class="thumnail active w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1283.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1284.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1285.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1281.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            {{-- @endfor --}}
                        </div>
                        <img id="slideRight" class="arrow absolute right-0 cursor-pointer" src="/images/next.png">

                    </div>
                </div>

                <div class="col-span-2 space-y-6 text-left mx-3">
                    <p class=" font-medium 2xl:text-2xl text-xl ">(เล่นฟรีเดือนแรก) ซิมเทพ True เล่นเน็ตไม่อั้น ความเร็ว 4Mbps
                        (พร้อมใช้ฟรี
                        True wifi max
                        speed แบบไม่จำกัด)</p>

                    <div
                        class="flex justify-center border-l border border-gray-500 text-center  rounded-full px-2">
                    </div>

                    <p class="2xl:text-xl text-lg font-medium">ตัวเลือก</p>
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-2 2xl:gap-4 overflow-auto 2xl:h-[380px] h-[280px] w-full">
                        @for ($i = 1; $i <= 10; $i++)
                            <div id="box{{ $i }}"
                                class="box border border-gray-10 hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 h-[8rem] cursor-pointer">
                                <div class="flex ">
                                    <img src="/images/Rectangle 98.png" alt="" class="w-16">
                                    <p class="text-lg font-medium ml-2">4Mbps</p>
                                </div>
                                <div class="flex items-center">
                                    <img src="/images/check-one.png" alt="" class="check-box w-10">
                                    <p class="text-xl 2xl:text-[2rem] font-bold ml-10 text-red-600">150 </p>
                                    <p class="2xl:text-lg font-medium ml-2">บาท</p>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>

            </div>
        </div>


         {{-- box package --}}
         <div class="w-[1536px] max-2xl:max-w-[90%] pt-6 mx-auto mb-6">
            <div class="">
                <div class="flex">
                    <button id="btn-package"
                        class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px] text-[16px]">รายละเอียด
                        แพ็กเกจ</button>
                    <button id="btn-condition" class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px] text-[16px]">เงื่อนไข</button>
                </div>
                {{-- content detail --}}
                <div id="box-package"
                    class="h-[200px] overflow-hidden bg-[#F8F9FA] border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] relative">
                    <img src="/images/Intersect.png" alt="" class="bottom-0 right-0 absolute">
                    <div class="w-full lg:w-[400px] ml-3 text-left">
                        <p class="text-[16px] font-medium mt-3">ซิมเทพ เล่นเน็ตไม่อั้น +โทรฟรีทุกค่าย ลูกค้าจะได้เล่นเน็ตไม่จำกัด ฟรีเดือนแรก โปรโมชั่นเครือข่าย
                            True
                        </p>

                        <ol class="mx-6">
                            <li  class="text-[16px]">True ความเร็ว 10Mbps (ไม่ลดสปีด) "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน 210 บาท (รวมภาษีแล้ว)
                            </li>
                            <li class="text-[16px]" >True ความเร็ว 20Mbps (ไม่มีโทรฟรี) เล่นเน็ตไม่อั้น 70GB (FUP 1Mbps) "ฟรีเดือนแรก"
                                เดือนต่อไป
                                เติมเงิน
                                200 บาท (รวมภาษีแล้ว)</li>
                            <li class="text-[16px]" >True ความเร็ว 15Mbps +โทรฟรีทุกค่าย เล่นเน็ตไม่อั้น 80GB (FUP 1Mbps) "ฟรีเดือนแรก"
                                เดือนต่อไป
                                เติมเงิน
                                300 บาท (รวมภาษีแล้ว)</li>
                            <li class="text-[16px]" >True ความเร็ว 15Mbps + เล่นเน็ตไม่อั้น 55GB (FUP 1Mbps) "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน
                                250
                                บาท
                                (รวมภาษีแล้ว)</li>
                            <li class="text-[16px]" >True ความเร็ว 15Mbps +โทรฟรีทุกค่าย เล่นเน็ตไม่อั้น 30GB (FUP 384Kbps) "ฟรีเดือนแรก"
                                เดือนต่อไป
                                เติมเงิน 200 บาท (รวมภาษีแล้ว)</li>
                            <li class="text-[16px]" >True ความเร็ว 4Mbps (ไม่มีโทรฟรี) เล่นเน็ตไม่อั้น 30GB (FUP 1Mbps) "ฟรีเดือนแรก"
                                เดือนต่อไป
                                เติมเงิน 150 บาท (รวมภาษีแล้ว)</li>
                        </ol>
                        <p class="text-[16px]">** ทำไมถึงต้องเลือกทรู ตอบ เล่นได้ทุกแอพ เน็ตไม่มีหมด 8 แอพดังนี้ เล่นโซเชียล Facebook, Line,
                            instagram, TikTok</p>

                    </div>
                    <div class="w-full flex justify-center bg-[#F8F9FA] rounded-b-[10px] sticky bottom-0 py-1">
                        <button class="text-center text-[#EC1F25]" id="show-more">แสดงเพิ่มเติม ˅</button>
                    </div>
                </div>

                {{-- content condition --}}
                <div id="box-condition" 
                    class="hidden bg-[#F8F9FA] text-left min-h-[200px] p-2 border-solid border-2 border-[#ED4312] text-[16px] font-medium rounded-r-[10px] rounded-bl-[10px]">
                    เงื่อนไขการได้รับสิทธิพิเศษ ย้ายค่ายเบอร์เดิมรับส่วนลดรายเดือน
                </div>
            </div>
        </div>
        {{-- box package --}}
    </div>

    <div class="bg-white drop-shadow-md items-center w-full" style="box-shadow: 0px -4px 10px 0px rgba(0, 0, 0, 0.15);">
        <div class="flex items-center justify-center gap-4 p-2 w-full flex-wrap ">
            <p class="2xl:text-lg">ราคา</p>
            <p class="2xl:text-2xl text-xl font-bold">150</p>
            <p class="2xl:text-lg">บาท</p>
            <p class="2xl:text-2xl font-bold text-xl">X</p>

            <div class="custom-number-input w-32">
                <div class="flex flex-row 2xl:h-10 w-full rounded-2xl relative bg-transparent mt-1 ">
                    <button data-action="decrement"
                        class="bg-white hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer border  border-[#838383]">
                        <span class="m-auto 2xl:text-2xl">−</span>
                    </button>
                    <input type=""
                        class="text-center font-bold w-full bg-white hover:text-black focus:text-black  2xl:text-2xl cursor-default flex items-center text-gray-700 border  border-t-[#838383]  border-b-[#838383] outline-none"
                        name="custom-input-number" value="0"></input>
                    <button data-action="increment"
                        class="bg-white text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer border border-[#838383]">
                        <span class="m-auto 2xl:text-2xl">+</span>
                    </button>
                </div>
            </div>


            <div class="border-l border border-[#838383] text-center py-8 rounded-full max-xs:hidden"></div>

            <div class="flex gap-2 ">
                <button id="buynow" data-id="0933501625"
                    class="cursor-pointer flex items-center px-6 2xl:py-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
                
                <button id="addtocart" data-id="0933501625"
                    class="group rounded-full border border-red-500 mx-1 w-[40px] h-[40px] 2xl:w-[50px] 2xl:h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                </button>

                <a href="https://line.me/ti/p/~@berhoro"
                    class="group rounded-full border border-red-500 mx-1  w-[40px] h-[40px] 2xl:w-[50px] 2xl:h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                    <img src="/images/icons8-line-app (1) 9.png" alt=""
                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                </a>
            </div>      

        </div>
    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')


@endsection

@section('scripts')
    @vite('resources/js/buy_sim/buy_sim.js')
@endsection

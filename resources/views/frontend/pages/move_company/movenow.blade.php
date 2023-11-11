@extends('frontend.layouts.main')

@section('style')
    @vite('resources/css/move_company/move.css')
@endsection

@section('content')
    <div class=" 2xl:my-36 ">
        <div id="movenow" class=" flex justify-center items-center max-xl:mt-48 ">
            <div class="w-[1536px] max-2xl:max-w-[90%] grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-3   gap-4 m-3">

                <div class="bg-white w-full 2xl:h-[590px]  items-center px-4 lg:px-1 mb-6 relative ">
                    <div class="flex justify-center lg:mb-6 2xl:mb-2 ">
                        <img id="featured" src="/images/Rectangle1282.png" alt=""
                            class="2xl:w-full 2xl:h-[500px] w-[350px] lg:h-[350px] cursor-pointer ">
                    </div>
                    <div id="slide-wrapper" class="flex  items-center">


                        <img id="slideLeft" class="arrow absolute left-0 cursor-pointer " src="/images/prev.png">

                        <div id="slider" class="flex items-center gap-4 overflow-x-hidden m-4 p-3">
                            {{-- @for ($i = 1; $i <= 6; $i++)  --}}
                            <img src="/images/Rectangle1282.png" alt=""
                                class="thumnail active w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            {{-- <img src="/images/Rectangle 1283.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1284.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1285.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1281.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 "> --}}

                            {{-- @endfor --}}
                        </div>
                        <img id="slideRight" class="arrow absolute right-0 cursor-pointer" src="/images/next.png">

                    </div>
                </div>

                <div class="col-span-2 space-y-10 text-left m-3">
                    <p class=" font-medium text-2xl ">ย้ายค่ายเบอร์เดิมแพ็กแกจ Fixxy Nolimit 399</p>

                    <div
                        class="flex justify-center border-l border border-gray-500 text-center  rounded-full px-auto py-0 m-3">
                    </div>

                    <p class="text-xl font-medium">ตัวเลือก</p>
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-2 2xl:gap-4 m-3 overflow-auto 2xl:overflow-hidden h-[280px] w-full">
                        @for ($i = 1; $i <= 3; $i++)
                            <div id="box{{ $i }}"
                                class="box border border-gray-10 hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 h-[8rem] cursor-pointer">
                                <div class="flex ">
                                    <img src="/images/Rectangle1282.png" alt="" class="w-16">
                                    <p class="text-lg font-medium ml-2">Fixxy No Limited
                                        399</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <img src="/images/check-one.png" alt="" class="check-box w-10">
                                    <p class="text-xl 2xl:text-[2rem] font-bold ml-10 text-red-600">399</p>
                                    <p class="2xl:text-lg font-medium ml-2">บาท</p>
                                </div>
                            </div>
                        @endfor
                    </div>

                </div>

            </div>
        </div>

        {{-- box package --}}
        <div class="max-w-[1536px] max-2xl:max-w-[80%] pt-10 mx-auto mb-6 mt-0">
            <div class="">
                <div class="flex">
                    <button id="btn-package"
                        class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px]">รายละเอียด
                        แพ็กเกจ</button>
                    <button id="btn-condition" class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px]">เงื่อนไข</button>
                </div>
                {{-- content detail --}}
                <div id="box-package"
                    class="p-4 border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] w-full h-full 2xl:h-[100%] text-left">
                    <img src="/images/Rectangle1282.png" alt="" class="w-full flex justify-center">
                    <div class="w-full 2xl:w-[450px] ml-3 mt-5">
                        <p>ซิมเทพ เล่นเน็ตไม่อั้น +โทรฟรีทุกค่ายลูกค้าจะได้เล่นเน็ตไม่จำกัด ฟรีเดือนแรกโปรโมชั่นเครือข่าย
                            True
                        </p>
                        <p>1. True ความเร็ว 10Mbps (ไม่ลดสปีด) "ฟรีเดือนแรก"เดือนต่อไป เติมเงิน 210 บาท (รวมภาษีแล้ว)</p>
                        <p>2. True ความเร็ว 20Mbps (ไม่มีโทรฟรี)เล่นเน็ตไม่อั้น 70GB (FUP 1Mbps)"ฟรีเดือนแรก"เดือนต่อไป
                            เติมเงิน 200 บาท (รวมภาษีแล้ว)</p>
                        <p>3. True ความเร็ว 15Mbps +โทรฟรีทุกค่าย เล่นเน็ตไม่อั้น 80GB (FUP 1Mbps) "ฟรีเดือนแรก" เดือนต่อไป
                            เติมเงิน
                            300 บาท (รวมภาษีแล้ว)</p>
                        <p>4. True ความเร็ว 15Mbps +โทรฟรีทุกค่ายเล่นเน็ตไม่อั้น 55GB (FUP 1Mbps) "ฟรีเดือนแรก"เดือนต่อไป
                            เติมเงิน 250 บาท (รวมภาษีแล้ว)</p>
                        <p>5. True ความเร็ว 15Mbps +โทรฟรีทุกค่ายเล่นเน็ตไม่อั้น 30GB (FUP 384Kbps) "ฟรีเดือนแรก"เดือนต่อไป
                            เติมเงิน 200 บาท (รวมภาษีแล้ว)
                            เติมเงิน 150 บาท (รวมภาษีแล้ว)</p>
                        <p>6. True ความเร็ว 4Mbps (ไม่มีโทรฟรี)เล่นเน็ตไม่อั้น 30GB (FUP 1Mbps)"ฟรีเดือนแรก"เดือนต่อไป
                            เติมเงิน 150 บาท (รวมภาษีแล้ว)</p>
                        <p>** ทำไมถึงต้องเลือกทรู ตอบ เล่นได้ทุกแอพ เน็ตไม่มีหมด 8 แอพดังนี้ เล่นโซเชียล Facebook, Line,
                            instagram, TikTok</p>

                    </div>
                    <div class="w-full sticky top-[100vh]">
                        <p class="text-center text-[#EC1F25] cursor-pointer hover:text-red-500 ">แสดงเพิ่มเติม ˅</p>
                    </div>
                </div>

                {{-- content condition --}}
                <div id="box-condition"
                    class="hidden p-4 border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] w-full h-full 2xl:h-[450px] lg:h-[350px] ">
                    <div class="w-[450px] ">
                        เงื่อนไขการได้รับสิทธิพิเศษ ย้ายค่ายเบอร์เดิมรับส่วนลดรายเดือน
                    </div>
                </div>
            </div>
        </div>
        {{-- box package --}}
    </div>

    {{-- <div class="bg-white drop-shadow-md items-center w-full">
        <div class="flex lg:justify-center 2xl:justify-center items-center gap-4 py-6 w-full flex-wrap ">
            <p class="text-lg">ราคา</p>
            <p class="text-2xl font-bold">150</p>
            <p class="text-lg">บาท</p>
            <p class="text-2xl font-bold">X</p>

            <div class="custom-number-input w-32">
                <div class="flex flex-row h-10 w-full rounded-2xl relative bg-transparent mt-1">
                    <button data-action="decrement"
                        class="bg-white hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-l cursor-pointer border  border-[#838383]">
                        <span class="m-auto text-2xl">−</span>
                    </button>
                    <input type=""
                        class="text-center font-bold w-full bg-white text-md hover:text-black focus:text-black  text-2xl cursor-default flex items-center text-gray-700 border  border-t-[#838383]  border-b-[#838383] outline-none"
                        name="custom-input-number" value="0"></input>
                    <button data-action="increment"
                        class="bg-white text-gray-600 hover:text-gray-700 hover:bg-gray-400 h-full w-20 rounded-r cursor-pointer border border-[#838383]">
                        <span class="m-auto text-2xl">+</span>
                    </button>
                </div>
            </div>


            <div class="border-l border border-[#838383] text-center py-8 rounded-full"></div>

            <div class="flex gap-2">
                <button id="buynow" data-id="0933501625"
                    class="cursor-pointer flex items-center px-6 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
                <button id="addtocart" data-id="0933501625"
                    class="group rounded-full border border-red-500 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                </button>
                <a href="https://line.me/ti/p/~@berhoro"
                    class="group rounded-full border border-red-500 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                    <img src="/images/icons8-line-app (1) 9.png" alt=""
                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                </a>
            </div>

        </div>
    </div> --}}


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

@section('scripts')
    @vite('resources/js/move_company/movenow.js')
@endsection

@extends('frontend.layouts.main')



@section('content')
    <div class="mt-16">
        <div class="flex flex-wrap justify-center gap-x-20 gap-y-5 mb-16">
            <a href="/travel_sim/travelling"
                class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                <img class="w-30 h-30 mb-2" src="/images/solar_wi-fi-router-linear.png" alt="">
                <p class="text-[1rem]">เดินทาง ไปต่างประเทศ</p>
            </a>

            <a
                href="/travel_sim/visiting"class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                <img class="w-30 h-30 " src="/images/travel/icon-park_elephant.png" alt="">
                <p class="text-[1rem]">มาเที่ยว
                    ประเทศไทย</p>
            </a>

        </div>

         {{-- มหัศจรรย์ --}}

         <div class="plate-line max-w-[200px] "></div>

         {{-- มหัศจรรย์ --}}


      
         <section id="travel" class="bg-white py-6">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 text-[2rem] ">Thailand Tourist infinite sim</p>
                <p class="text-[#838383] mt-2 mb-2 text-[1.3rem]">ซิมสำหรับท่องเที่ยวในประเทศไทย เชื่อมต่อได้ไม่มีสะดุด</p>
            </div>

            <div class="overflow-x-scroll 2xl:overflow-hidden my-16">
                <div class="w-[1536px] grid grid-cols-3 gap-8 mx-auto p-4 z-0">

                    <div class="drop-shadow-md w-[450px]">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <p class="text-white mr-2 text-left text-[18px]">8 DAYS 449 BAHT</p>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-4">
                                <img src="/images/Rectangle 179.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 ">
                            <div class=" flex gap-4">
                                <img src="/images/travel/majesticons_sim-card-line.png" alt="" class=" ">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Thailand Tourist infinite sim</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/quill_calendar.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">8 Days</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/tabler_world.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited 5G Internet</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/majesticons_coins-line.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">100 THB calling credit for international
                                    call</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/icon-park-outline_phone-call.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited call to all network in Thailand
                                </p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/arcticons_wifianalyzer.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited WiFi</p>
                            </div>

                        </div>

                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">499</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 ">
                            <div
                                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                                <img src="/images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                            </div>
                            <div
                                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                                <img src="/images/icons8-line-app (1) 9.png" alt=""
                                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                            </div>

                            <a src="#"
                                class="cursor-pointer flex items-center  px-4 mb-4 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                            <a href="/travel_sim/buy"
                                class="cursor-pointer flex items-center px-6  mb-4 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                        </div>
                    </div>


                    <div class="drop-shadow-md w-[450px]">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <p class="text-white mr-2 text-left text-[18px]">10 DAYS 699 BAHT</p>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-4">
                                <img src="/images/travel/Rectangle 289.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 ">
                            <div class=" flex gap-4">
                                <img src="/images/travel/majesticons_sim-card-line.png" alt="" class=" ">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Thailand Tourist infinite sim</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/quill_calendar.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">8 Days</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/tabler_world.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited 5G Internet</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/majesticons_coins-line.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">100 THB calling credit for international
                                    call</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/icon-park-outline_phone-call.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited call to all network in Thailand
                                </p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/arcticons_wifianalyzer.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited WiFi</p>
                            </div>

                        </div>

                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">699</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex  justify-center px-4 ">
                            <div
                                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                                <img src="/images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                            </div>
                            <div
                                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                                <img src="/images/icons8-line-app (1) 9.png" alt=""
                                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                            </div>

                            <a src="#"
                                class="cursor-pointer flex items-center  px-4 mb-4 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                            <a href="/travel_sim/buy"
                                class="cursor-pointer flex items-center px-6  mb-4 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                        </div>
                    </div>


                    <div class="drop-shadow-md w-[450px]">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                            <p class="text-white mr-2 text-left text-[18px]">8 DAYS 449 BAHT</p>
                        </div>
                        {{-- <div
                            class="">
                            <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                        </div> --}}

                        <div class="bg-white"">
                            <div class="flex justify-center py-4 ">
                                <img src="/images/travel/Rectangle 297.png" alt="">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 ">
                            <div class=" flex gap-4">
                                <img src="/images/travel/majesticons_sim-card-line.png" alt="" class=" ">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Thailand Tourist infinite sim</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/quill_calendar.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">8 Days</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/tabler_world.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited 5G Internet</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/majesticons_coins-line.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">100 THB calling credit for international
                                    call</p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/icon-park-outline_phone-call.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited call to all network in Thailand
                                </p>
                            </div>
                            <div class=" flex gap-4">
                                <img src="/images/travel/arcticons_wifianalyzer.png" alt="" class="">
                                <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited WiFi</p>
                            </div>

                        </div>

                        <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                                <p class="text-white font-medium text-center text-3xl">499</p>
                                <p class="text-white text-right text-[1rem]  mt-2">บาท</p>

                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4  ">
                            <div
                                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                                <img src="/images/mdi_cart-arrow-down.png" alt=""
                                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                            </div>
                            <div
                                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                                <img src="/images/icons8-line-app (1) 9.png" alt=""
                                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                            </div>

                            <a src="#"
                                class="cursor-pointer flex items-center  px-4 mb-4 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                            <a href="/travel_sim/buy"
                                class="cursor-pointer flex items-center px-6  mb-4 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                        </div>
                    </div>

                </div>

            </div>

        </section>


    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection

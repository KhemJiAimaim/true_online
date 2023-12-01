@extends('frontend.layouts.main')
@section('style')
    <style>
        .title-plate-textboxC {
            width: auto;
            height: 60px;

        }

        .plate-box-e,
        .detail-plate-box-e {
            bottom: 22px;
        }

        .plate-box-s,
        .detail-plate-box-s {
            bottom: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="2xl:mt-12 mt-6 ">
        <div class="flex flex-wrap justify-center gap-x-20 max-es:gap-10 gap-y-5 mb-4">
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
        <div class="title-plate-container pt-4 px-3 ">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px]  text-[16px] px-3 py-4">ซิม อันดับ 1
                        สำหรับเดินทางท่องเที่ยวทั้งในประเทศ และ ต่างประเทศ</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}


        <section id="travel" class="bg-white py-6 2xl:mt-16 px-3">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px]">Thailand Tourist infinite sim
                </p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">
                    ซิมสำหรับท่องเที่ยวในประเทศไทย เชื่อมต่อได้ไม่มีสะดุด</p>
            </div>

            <div class="overflow-x-scroll 2xl:overflow-hidden py-2 my-4 max-es:my-8">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-[1200px] w-[1200px] dm:w[1380px] grid grid-cols-3 justify-center xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">


                    @for ($i = 1; $i <= 3; $i++)
                        <div class="drop-shadow-md w-[450px] max-2xl:max-w-full max-es:w-[90%] ">
                            <div
                                class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0 ">
                                
                                <p class="text-white mr-2 text-left text-[18px] max-es:text-[16px]">8 DAYS 449 BAHT</p>
                            <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                            </div>
                            {{-- <div
                            class="">
                            <  p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</>
                            </div> --}}

                            <div class="bg-white"">
                                <div class="flex justify-center py-4 ">
                                    <img src="/images/Rectangle 179.png" alt="" class="max-es:w-[150px]">
                                </div>
                            </div>

                            <div class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 ">
                                <div class=" flex gap-4">
                                    <img src="/images/travel/majesticons_sim-card-line.png" alt=""
                                        class=" w-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Thailand Tourist infinite sim</p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/quill_calendar.png" alt="" class="w-[26px] h-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">8 Days</p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/tabler_world.png" alt="" class="w-[26px] h-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited 5G Internet</p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/majesticons_coins-line.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">100 THB calling credit for
                                        international
                                        call</p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/icon-park-outline_phone-call.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited call to all network in
                                        Thailand
                                    </p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/arcticons_wifianalyzer.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Unlimited WiFi</p>
                                </div>

                            </div>

                            <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2 relative">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[18px] max-es:text-[16px] mt-2">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">499</p>
                                    <p class="text-white text-right text-[18px] max-es:text-[16px]  mt-2">บาท</p>

                                </div>
                                <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"> 
                            </div>

                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px]   flex justify-center py-1 md:px-0 lg:px-0 items-center gap-2">
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

                                <a href="#"
                                    class="cursor-pointer flex items-center lg:px-2 xl:px-1  ss:px-2 2xl:px-4 px-4 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2 mx-1 ss:mx-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                <a href="/travel_sim/buy"
                                    class="cursor-pointer flex items-center lg:px-4  xl:px-4 ss:px-6 2xl:px-8 px-6 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2  2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                            </div>
                            
                        </div>
                    @endfor
                </div>
        </section>


        <section id="travel_thai" class="bg-white pb-6 2xl:mt-16 px-3">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px] ">Thailand Tourist sim</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">
                    ซิมสำหรับท่องเที่ยวต่างประเทศ เชื่อมต่อได้ไม่มีสะดุด</p>
            </div>

            <div class="overflow-x-scroll 2xl:overflow-hidden py-2 my-4 max-es:my-8">
                <div
                    class="2xl:w-[1536px] lg:w-[1350px] xl:w-[1200px] w-[1200px] dm:w[1380px] grid grid-cols-3 justify-center xl:gap-3 2xl:gap-6 gap-4 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4">

                    @for ($i = 1; $i <= 3; $i++)
                        <div class="drop-shadow-md w-[450px] max-2xl:max-w-full max-es:w-[90%]">
                            <div
                                class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                                <p class="text-white mr-2 text-left text-[18px] max-es:text-[16px]">8 DAYS 449 BAHT</p>
                            </div>
                            {{-- <div
                        class="">
                        <p class="text-white text-left text-[1rem] ">แพ็กเกจยอดนิยม</p>
                    </div> --}}

                            <div class="bg-white"">
                                <div class="flex justify-center py-4 ">
                                    <img src="/images/Rectangle 179.png" alt="" class="max-es:w-[150px]">
                                </div>
                            </div>

                            <div class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 h-[500px] ">
                                <div class=" flex gap-4">
                                    <img src="/images/travel/majesticons_sim-card-line.png" alt=""
                                        class="h-[30px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Thailand Tourist infinite sim</p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/quill_calendar.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">8 Days</p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/tabler_world.png" alt="" class="w-[26px] h-[26px]">
                                    <div class="flex flex-col">
                                        <p class="text-left text-[16px] 2xl:text-[18px] ">Free 8 Days</p>
                                        <p class="text-left "> NON-STOP INTERNET for 50GB at 5G/4G MAX SPEED</p>
                                    </div>
                                </div>
                                <div class=" flex gap-4 ">
                                    <img src="/images/travel/majesticons_coins-line.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <div class="flex flex-col">
                                        <p class="text-left text-[16px] 2xl:text-[18px] ">100 Baht call credit</p>
                                        <p> for local and international calls</p>
                                    </div>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/icon-park-outline_phone-call.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <div class="flex flex-col">
                                        <p class="text-left text-[16px] 2xl:text-[18px] ">Free</p>
                                        <p class="text-left"> among TrueMove H numbers</p>
                                    </div>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/arcticons_wifianalyzer.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <p class="text-left text-[16px] 2xl:text-[18px] ">Free WiFi</p>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/arcticons_tiktok.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <div class="flex flex-col">
                                        <p class="text-left text-[16px] 2xl:text-[18px] ">Free 10 GB</p>
                                        <p> for TikTok and Douyin</p>
                                    </div>
                                </div>
                                <div class=" flex gap-4">
                                    <img src="/images/travel/like-thumb-hand.png" alt=""
                                        class="w-[26px] h-[26px]">
                                    <div class="flex flex-col">
                                        <p class="text-left text-[16px] 2xl:text-[18px] ">Free 14 social apps</p>
                                        <p class="text-left">(no data charges)</p>
                                    </div>
                                </div>
                                <div class="flex mt-4">
                                    <div class="w-[40px]"></div>
                                    <div class="grid grid-cols-7 gap-x-8 gap-y-4">
                                        <img src="/images/travel/social/facebook icon.png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector.png" alt="" class="max-w-[20px]">
                                        <img src="/images/travel/social/Group 6.png" alt="" class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (1).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Group 7.png" alt="" class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (2).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (3).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (4).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (5).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (6).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (7).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (8).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (9).png" alt=""
                                            class="max-w-[20px]">
                                        <img src="/images/travel/social/Vector (10).png" alt=""
                                            class="max-w-[20px]">
                                    </div>

                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-[#960004]  to-[#EC1F25] py-3 px-2">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left text-[18px] max-es:text-[16px] mt-2">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">499</p>
                                    <p class="text-white text-right text-[18px] max-es:text-[16px]  mt-2">บาท</p>

                                </div>
                            </div>

                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px]   flex justify-center py-1 md:px-0 lg:px-0 items-center gap-2">
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

                                <a href="#"
                                    class="cursor-pointer flex items-center lg:px-2 xl:px-1  ss:px-2 2xl:px-4 px-4 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2 mx-1 ss:mx-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                <a href="/travel_sim/buy"
                                    class="cursor-pointer flex items-center lg:px-4  xl:px-4 ss:px-6 2xl:px-8 px-6 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2  2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                            </div>
                        </div>
                    @endfor
                </div>
        </section>



    </div>

    @include('frontend.pages.travel_sim.footer_sim')
@endsection

@extends('frontend.layouts.main')



@section('content')
    <div class="mt-16">
        <div class="flex flex-wrap justify-center gap-x-20 gap-y-5 mb-16">
            @foreach($cates as $cate)
            <a href="/{{$cate->cate_redirect}}"
                class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                <img class="w-30 h-30 mb-2" src="/{{$cate->cate_thumbnail}}" alt="">
                <p class="text-[1rem]">{{$cate->cate_title}}</p>
            </a>
            @endforeach
        </div>

        {{-- มหัศจรรย์ --}}

        <div class="plate-line max-w-[200px] "></div>

        {{-- มหัศจรรย์ --}}



        <section id="travel" class="bg-white py-6 2xl:mt-16 px-3">
            <div class="">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem]  xl:text-[22px] text-[20px]">Thailand Tourist infinite sim
                </p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px]  xl:text-[18px] text-[16px]">
                    ซิมสำหรับท่องเที่ยวในประเทศไทย เชื่อมต่อได้ไม่มีสะดุด</p>
            </div>

            <div class="pt-6 w-full">
                <div
                    class="max-w-[1536px] my-0 mx-auto 2xl:grid 2xl:grid-cols-3 flex flex-wrap justify-center items-center  px-4 gap-x-6 gap-y-6">

                    @for ($i = 1; $i <= 10; $i++)
                        <div class="drop-shadow-md">
                            <div class="2xl:w-[480px] md:w-[424px] xl:w-[410px] w-[350px] max-md:w-[350px] h-[100%] ">
                                <div
                                    class="relative overflow-hidden bg-gradient-to-r from-[#960004]  to-[#EC1F25] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
                                    <p class="text-white mr-2 text-left text-[18px] max-es:text-[16px]">8 DAYS 449 BAHT</p>
                                    <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
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

                                <div class="bg-[#F8F9FA] flex flex-col py-2 gap-y-2 p-3 ">
                                    <div class=" flex gap-4">
                                        <img src="/images/travel/majesticons_sim-card-line.png" alt=""
                                            class=" w-[26px]">
                                        <p class="text-left text-[16px] 2xl:text-[18px] ">Thailand Tourist infinite sim</p>
                                    </div>
                                    <div class=" flex gap-4">
                                        <img src="/images/travel/quill_calendar.png" alt=""
                                            class="w-[26px] h-[26px]">
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
                                    <a href="/travel_sim_buy"
                                        class="cursor-pointer flex items-center lg:px-4  xl:px-4 ss:px-6 2xl:px-8 px-6 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2  2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>
        </section>

    </div>

    @include('frontend.pages.travel_sim.footer_sim')
@endsection
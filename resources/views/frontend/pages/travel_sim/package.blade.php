@extends('frontend.layouts.main')


@section('style')
    <style>
        .main {
            height: auto;
            min-height: 100% !important;
            display: flex;
            flex-direction: column;
            /* overflow-y: auto; */
        }
    </style>
@endsection


@section('content')
    <div class="">
        <div class="py-10">
            <p class="text-[#000] mt-2 mb-2 text-lg 2xl:text-[2rem] ">แพ็กเกจเสริม</p>
            <p class="text-[#838383] mt-2 mb-2 text-md 2xl:text-[18px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
        </div>
        {{-- มหัศจรรย์ --}}

        <div class="plate-line max-w-[200px] "></div>

        {{-- มหัศจรรย์ --}}

        <div class=" flex justify-center px-4 gap-4 items-center mt-10">

            <a src="#"
                class="cursor-pointer py-3  px-10 mb-2 mt-2   2xl:text-lg font-medium text-white focus:outline-none bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-lg border  hover:bg-gradient-to-br">เติมเงิน</a>
            <a src="#"
                class="cursor-pointer py-3 px-8  mb-2 mt-2 2xl:text-lg font-medium text-white focus:outline-none bg-[#4f4f4f] rounded-lg border hover:bg-[#666] hover:text-white ">รายเดือน</a>
        </div>

        <section class="flex justify-center items-center m-6">
            <div class="drop-shadow-md w-[1536px]">
                <div
                    class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-3">
                    <p class="text-white text-center ml-3 2xl:text-[16px]">Flash Sale</p>
                    
                </div>
                <div class="box-package rounded-bl-[10px] rounded-br-[10px]">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="item flex justify-between 2xl:px-40  px-2 py-2 2xl:py-8 dm:px-4 xs:px-2  2xl:8items-center">
                        <div class="text-left">
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-medium">เน็ต 1GB</p>
                            <p class="2xl:text-lg  md:text-[18px] xs:text-[16px] text-[13px] font-medium">ประกันอุบัติเหตุ
                                100,000 บ.</p>
                            <p class="2xl:text-lg text-gray-500 md:text-[16px] xs:text-[16px] text-[13px]">ต่ออายุอัตโนมัติ
                            </p>
                        </div>
                        <div class="flex justify-center items-center gap-1  2xl:gap-4 md:gap-2 xs:gap-2">
                            <div class="border-l border border-[#838383] text-center py-4 rounded-full "></div>
                            <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[13px]">30 วัน</p>
                            <div class="border-l border border-[#838383] text-center py-4  rounded-full "></div>
                            <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[13px]">79 บาท</p>
                            <div class="border-l border border-[#838383] text-center  py-4 rounded-full "></div>
                            <a href="/prepaid_sim/buy_package"
                                class="cursor-pointer py-2 2xl:px-8 px-3 mb-2 mt-2 2xl:text-lg dm:text-[14px] text-[12px]  xs:text-[12px] font-medium text-white focus:outline-none bg-[#EC1F25] rounded-full border hover:bg-red-500 hover:text-white ">ซื้อเลย</a>
                        </div>
                    </div>

                    @endfor
                </div>
            </div>
        </section>

        <section class="flex justify-center items-center m-6">
            <div class="drop-shadow-md w-[1536px]">
                <div
                    class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-3">
                    <p class="text-white text-center ml-3 2xl:text-[16px]">เน็ต 5G เต็มสปีด</p>
                    
                </div>
                <div class="box-package rounded-bl-[10px] rounded-br-[10px]">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="item flex justify-between 2xl:px-40  px-2 py-2 2xl:py-8 dm:px-4 xs:px-2  2xl:8items-center">
                        <div class="text-left">
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-medium">เน็ต 1GB</p>
                            <p class="2xl:text-lg  md:text-[18px] xs:text-[16px] text-[13px] font-medium">ประกันอุบัติเหตุ
                                100,000 บ.</p>
                            <p class="2xl:text-lg text-gray-500 md:text-[16px] xs:text-[16px] text-[13px]">ต่ออายุอัตโนมัติ
                            </p>
                        </div>
                        <div class="flex justify-center items-center gap-1  2xl:gap-4 md:gap-2 xs:gap-2">
                            <div class="border-l border border-[#838383] text-center py-4 rounded-full "></div>
                            <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[13px]">30 วัน</p>
                            <div class="border-l border border-[#838383] text-center py-4  rounded-full "></div>
                            <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[13px]">79 บาท</p>
                            <div class="border-l border border-[#838383] text-center  py-4 rounded-full "></div>
                            <a href="/prepaid_sim/buy_package"
                                class="cursor-pointer py-2 2xl:px-8 px-3 mb-2 mt-2 2xl:text-lg dm:text-[14px] text-[12px]  xs:text-[12px] font-medium text-white focus:outline-none bg-[#EC1F25] rounded-full border hover:bg-red-500 hover:text-white ">ซื้อเลย</a>
                        </div>
                    </div>

                    @endfor
                </div>
            </div>
        </section>

        <section class="flex justify-center items-center m-6">
            <div class="drop-shadow-md w-[1536px]">
                <div
                    class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-3">
                    <p class="text-white text-center ml-3 2xl:text-[16px]">เพิ่มสปีดเน็ต</p>
                    
                </div>
                <div class="box-package rounded-bl-[10px] rounded-br-[10px]">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="item flex justify-between 2xl:px-40  px-2 py-2 2xl:py-8 dm:px-4 xs:px-2  2xl:8items-center">
                        <div class="text-left">
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-medium">เน็ต 1GB</p>
                            <p class="2xl:text-lg  md:text-[18px] xs:text-[16px] text-[13px] font-medium">ประกันอุบัติเหตุ
                                100,000 บ.</p>
                            <p class="2xl:text-lg text-gray-500 md:text-[16px] xs:text-[16px] text-[13px]">ต่ออายุอัตโนมัติ
                            </p>
                        </div>
                        <div class="flex justify-center items-center gap-1  2xl:gap-4 md:gap-2 xs:gap-2">
                            <div class="border-l border border-[#838383] text-center py-4 rounded-full "></div>
                            <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[13px]">30 วัน</p>
                            <div class="border-l border border-[#838383] text-center py-4  rounded-full "></div>
                            <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[13px]">79 บาท</p>
                            <div class="border-l border border-[#838383] text-center  py-4 rounded-full "></div>
                            <a href="/prepaid_sim/buy_package"
                                class="cursor-pointer py-2 2xl:px-8 px-3 mb-2 mt-2 2xl:text-lg dm:text-[14px] text-[12px]  xs:text-[12px] font-medium text-white focus:outline-none bg-[#EC1F25] rounded-full border hover:bg-red-500 hover:text-white ">ซื้อเลย</a>
                        </div>
                    </div>

                    @endfor
                </div>
            </div>
        </section>
      

    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection

@section('scripts')
@endsection

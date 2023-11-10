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
    <div class="mt-16">
        <div class="py-10">
            <p class="text-[#000] mt-2 mb-2 text-lg 2xl:text-[2rem] ">แพ็กเกจเสริมที่เลือกคือ</p>
        </div>
        {{-- มหัศจรรย์ --}}

        <div class="plate-line max-w-[200px] "></div>

        {{-- มหัศจรรย์ --}}
        <section class="flex justify-center items-center my-10 ">
            <div class="drop-shadow-md w-[500px] max-sm:w-[350px] pb-3 mx-6">
                <div
                    class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-3">
                    <p class="text-white text-left ml-3 2xl:text-[16px]">แพ็กเสริม 5G แม็กซ์ สปีด</p>

                </div>
                <div class="bg-white box-package rounded-bl-[10px] rounded-br-[10px] ">
                    <div class="text-left w-[500px] max-sm:w-[350px] mb-4 p-6">
                        <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">เน็ต 1GB</p>
                        <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold"> ประกันอุบัติเหตุ
                            100,000 บ.</p>

                        <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] mt-4">เปอดเบอร์ใหม่ ใช้ฟรีทันที 5
                            วัน</p>
                        <div class="pl-6 2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px]">
                            <li>เน็ตเร็ว 15Mbps 5GB (FUP 384KBps)</li>
                            <li>โทรฟรีทุกเครือข่าย 30 นาที</li>
                            <li> WiFi ไม่อั้น
                        </div>

                        <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] mt-4">จากนั้น ทุกๆ 5 วัน
                            ระบบจะทำการหักค่าบริการอัตโนมัติโดยคิดค่าบริการ
                            49 บาท (ราคาดังกล่าวรวมภาษีมูลค่าเพิ่มแล้ว)</p>

                        <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] mt-4 ">เริ่ม 11 ต.ค. 66 - 31 ต.ค. 66
                        </p>
                    </div>

                    <div class="border-l border border-[#838383] text-center rounded-full "></div>
                    
                    <div class="py-4 p-6">
                        <div class="flex justify-between">
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">ประเภทแพ็กเกจ</p>
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">ต่ออายุอัตโนมัติ</p>
                        </div>
                        <div class="flex justify-between">
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">อายุการใช้งาน</p>
                            <div class="flex gap-2">
                                <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">30</p>
                                <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px]">วัน</p>
                            </div>
                        </div>
                    </div>

                    <div class="border-l border border-[#838383] text-center rounded-full "></div>
                    
                    <div class="py-4 p-6">
                        <div class="flex justify-between">
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">ราคาแพ็กเกจ</p>
                            <div class="flex gap-2">
                                <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">400</p>
                                <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px]">บาท</p>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">ภาษีมูลค่าเพิ่ม 7%
                            </p>
                            <div class="flex gap-2">
                                <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold">28</p>
                                <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px]">บาท</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D] flex justify-between p-6 items-center">
                        <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] font-bold text-white" >รวม ราคา</p>
                        <div class="flex gap-2 items-center">
                            <p class="2xl:text-2xl md:text-[18px] xs:text-[16px] text-[13px] text-white font-bold">428</p>
                            <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[13px] text-white">บาท</p>
                        </div>
                    </div>

                    <div class=" flex justify-center px-4 gap-4 items-center pt-4">
                        <a src="#"
                            class="cursor-pointer py-3 px-8  mb-2 mt-2 2xl:text-lg font-medium text-red-700 focus:outline-none bg-[#fff] rounded-full border border-red-700 hover:bg-red-700 hover:text-white ">กด
                            *900*7430# เพื่อซื้อ</a>
                    </div>
                </div>
            </div>
        </section>


    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection

@section('scripts')
@endsection

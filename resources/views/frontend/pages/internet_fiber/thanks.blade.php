@extends('frontend.layouts.main')
@section('content')
    <div class="py-16">

        <div class="max-w-[1000px] bg-[#F8F9FA] rounded-lg m-auto p-6 mt-10">
            <div class=" w-full flex flex-col justify-center items-center gap-y-10 mt-20 mb-20">
                <p class="xl:text-[1.5rem] font-bold text-[18px]">เราได้รับข้อมูลของคุณเรียบร้อยแล้ว</p>
                <img src="images/solar_chat-square-like-bold.png" alt="" class=" ">
                <p class="xl:text-[1rem] text-[#838383] mt-6 text-[16px]">คุณจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30 นาที</p>

                <div class="rounded-bl-[10px] rounded-br-[10px] flex justify-center gap-4 ">
                    <a href="/fiber/true_dtac"
                        class="py-2.5 px-12 mr-2 mt-2 xl:text-md text-sm font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">กลับหน้าหลัก</a>
                </div>
            </div>

        </div>
    </div>

    <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF] ">
        <div class="p-6 flex justify-center gap-[2rem] md:gap-[4rem] 2xl:gap-[15rem]">
            <div class="flex flex-col items-center">
                <img class="mt-2 mb-6 max-xs:w-[50px]" src="/images/code-qr.png" alt="">
                <p class="text-[1rem] text-white">ช้อปผ่านแชท</p>
                <p class="text-[0.8rem] text-white">Line ID QR Coed</p>
            </div>
            <div class="flex flex-col items-center">
                <img class="max-xs:w-[80px] " src="/images/Rectangle 1245.png" alt="">
                <p class="text-[1rem] text-white">แจ้งขนส่ง</p>
                <p class="text-[0.8rem] text-white">เช็ครหัสขนส่งสินค้า</p>
            </div>
        </div>
    
        </div>
@endsection

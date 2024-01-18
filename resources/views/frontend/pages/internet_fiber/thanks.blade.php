@extends('frontend.layouts.main')

@section('content')
    <div class="my-16">

        <div class="max-w-[800px] bg-[#F8F9FA] rounded-lg m-auto p-6 mt-10">
            <div class=" w-full flex flex-col justify-center items-center gap-y-10 mt-20 mb-20">
                <p class="xl:text-[1.5rem] font-bold text-[18px]">เราได้รับข้อมูลของคุณเรียบร้อยแล้ว</p>
                <img src="images/solar_chat-square-like-bold.png" alt="" class=" ">
                <p class="xl:text-[1rem] text-[#838383] mt-6 text-[16px]">คุณจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30
                    นาที</p>

                <div class="rounded-bl-[10px] rounded-br-[10px] flex justify-center gap-4 ">
                    <a href="/fiber/true_dtac"
                        class="py-2.5 px-12 mr-2 mt-2 xl:text-md text-sm font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">กลับหน้าหลัก</a>
                </div>
            </div>

        </div>
    </div>

@endsection

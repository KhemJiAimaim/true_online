@extends('frontend.layouts.main')



@section('content')
    <div class="py-16 flex justify-center items-center">
        <div class="w-[1536px] grid lg:grid-cols-3 2xl:grid-cols-3 grid-rows-2 gap-4 m-3">

            <div class="grid grid-rows-2 bg-indigo-300 w-full  ">
                swiper
            </div>

            <div class="col-span-2 space-y-10 text-left">
                <p class=" font-medium text-2xl m-3">(เล่นฟรีเดือนแรก) ซิมเทพ True เล่นเน็ตไม่อั้น ความเร็ว 4Mbps
                    (พร้อมใช้ฟรี
                    True wifi max
                    speed แบบไม่จำกัด)</p>

                <div class="flex justify-center border-l border border-gray-500 text-center  rounded-full px-auto py-0 m-3">
                </div>

                <div class="m-3">
                    <p class="text-xl font-medium">ตัวเลือก</p>
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-4  gap-2 2xl:gap-4 m-3 overflow-auto 2xl:overflow-hidden h-[280px] w-full">
                        @for ($i = 1; $i <= 8; $i++)
                        <div
                        class="border border-gray-10 hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 h-[8rem] cursor-pointer"
                        onclick="handleBoxClick(this)"
                    >
                                <div class="flex ">
                                    <img src="/images/Rectangle 98.png" alt="" class="w-16">
                                    <p class="text-lg font-medium ml-2">4Mbps</p>
                                </div>
                                <div class="flex items-center mt-2">
                                    <img src="/images/check-one.png" alt="" class="check-box w-10">
                                    <p class="text-[2rem] font-bold ml-10 text-red-600">150 </p>
                                    <p class="text-lg font-medium ml-2">บาท</p>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


    <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] ">
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

@section('scripts')
<script>
    let lastClickedBox = null;
    
    function handleBoxClick(box) {
        if (lastClickedBox) {
            lastClickedBox.classList.remove('border-gray-500');
            lastClickedBox.classList.add('border-gray-10');
            // แก้ไขรูปภาพ checkbox เป็นรูปภาพปกติ
            const checkbox = lastClickedBox.querySelector('.check-box');
            checkbox.src = '/images/check-one.png';
        }
    
        if (box !== lastClickedBox) {
            box.classList.remove('border-gray-10');
            box.classList.add('border-gray-500');
            // แก้ไขรูปภาพ checkbox เป็นรูปภาพ active
            const checkbox = box.querySelector('.check-box');
            checkbox.src = '/images/check-one-active.png';
            lastClickedBox = box;
        } else {
            lastClickedBox = null;
        }
    }
    </script>
    

    
@endsection

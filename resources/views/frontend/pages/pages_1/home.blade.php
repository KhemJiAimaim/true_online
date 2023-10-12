@extends('frontend.layouts.layout.main')
@section('content')
    <div class="my-16 ">
        <div class="flex flex-wrap justify-center gap-x-20 gap-y-5 mb-16">
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-2" src="/images/solar_wi-fi-router-linear (1).png" alt="">
                <a href="#">เน็ตบ้านไฟเบอร์</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-3" src="/images/icon-park-outline_sim-card.png" alt="">
                <a href="#">เบอร์มงคล</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 " src="/images/system-uicons_box-add.png" alt="">
                <a href="#">แพ็กเกจเน็ตซิมเทพ</a>
            </div>
            <div class="flex flex-col items-center">
                <img class="w-30 h-30 mb-4" src="/images/solar_wi-fi-router-linear.png" alt="">
                <a href="#">ซิมท่องเที่ยว</a>
            </div>
        </div>

        {{-- <div class="flex justify-center space-x-24 mb-10">
            <a>เน็ตบ้านไฟเบอร์</a>
            <a>เบอร์มงคล</a>
            <a>แพ็กเกจเน็ตซิมเทพ</a>
            <a>ซิมท่องเที่ยว</a>
        </div> --}}


        {{-- มหัศจรรย์ --}}
        {{-- <div class="title-plate-container ">
            <div class="title-plate-line"></div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="text-xl text-white flex items-center">ทรู คอร์ปอเรชั่น ผู้นำดิจิทัลไลฟ์สไตล์ครบวงจร</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div> --}}
        {{-- มหัศจรรย์ --}}
        <div class="">
            <span class="text-gray-400">ค้นหาเบอร์มงคล แพ็กเกจเสริม อินเตอร์เน็ตไฟเบอร์ความเร็วสูงสุด แรงสุด
                และซิมท่องเทียวในประเทศและต่างประเทศ ที่เหมาะกับคุณได้เลยที่นี่</span>
        </div>


        <div class="overflow-x-scroll my-16">
            <div class="w-[1000px] grid grid-cols-3 gap-4 mx-auto p-4">
                <div class="bg-gradient-to-r from-red-600 via-pink-700 to-blue-500 flex flex-col items-center rounded-3xl">
                    <img class="w-[500px] max-sm:w-[350px] h-[280px]" src="/images/Rectangle 20.png" alt="">
                    <a href="#" class="text-lg text-white">อินเตอร์เน็ตไฟเบอร์</a>
                </div>
                <div class="bg-gradient-to-r from-red-600 via-pink-700 to-blue-500 flex flex-col items-center rounded-3xl">
                    <img class="w-[500px] max-sm:w-[350px] h-[280px]" src="/images/Rectangle 21.png" alt="">
                    <a href="#" class="text-lg text-white">เบอร์มงคลรายเดือน</a>
                </div>
                <div class="bg-gradient-to-r from-red-600 via-pink-700 to-blue-500 flex flex-col items-center rounded-3xl">
                    <img class="w-[500px] max-sm:w-[350px] h-[280px] " src="/images/Rectangle 22.png" alt="">
                    <div class="">
                        <a href="#" class="text-lg text-white">แพ็กเกจเสริม</a>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
@endsection

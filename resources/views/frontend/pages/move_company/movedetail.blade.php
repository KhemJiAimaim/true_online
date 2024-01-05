@extends('frontend.layouts.main')
@section('title')
{{$move_product->title}}
@endsection
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
    <div class=" mt-[120px] max-xl:mt-[74px]">
        <div class=" flex justify-center items-center">
            <div class="w-[1536px] max-2xl:max-w-[90%] grid grid-cols-1 lg:grid-cols-3 2xl:grid-cols-3  gap-4 m-3">

                <div class="bg-white w-full 2xl:h-[500px]  items-center px-4 lg:px-1 mb-6 relative">
                    <div class="flex justify-center lg:mb-6 2xl:mb-2">
                        <img id="featured" src="/{{$move_product->thumbnail_link}}" alt=""
                            class="max-ex:w-[250px] max-ex:h-[250px]  w-[340px] cursor-pointer pb-4 lg:pb-12 xl:pb-[1.5rem] ">
                    </div>
                    <div id="slide-wrapper" class="flex items-center">


                        <img id="slideLeft" class="arrow absolute left-0 cursor-pointer " src="/images/prev.png">

                        <div id="slider" class="flex gap-4 overflow-x-hidden mx-4 ">
                            @for ($i = 1; $i <= 4; $i++)
                                <img src="/images/Rectangle1282.png" alt=""
                                    class="thumnail active  w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                                {{-- <img src="/images/Rectangle 1283.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1284.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1285.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">

                            <img src="/images/Rectangle 1281.png" alt=""
                                class="thumnail w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 "> --}}
                            @endfor

                        </div>
                        <img id="slideRight" class="arrow absolute right-0 cursor-pointer" src="/images/next.png">

                    </div>

                </div>

                <div class="col-span-2 space-y-6 text-left mx-3">
                    <p class=" font-medium 2xl:text-2xl text-xl ">{{$move_product->title}}</p>

                    <div class="flex justify-center border-l border border-gray-500 text-center  rounded-full px-2">
                    </div>

                    <p class="2xl:text-xl text-lg font-medium">ตัวเลือก</p>
                    
                    @php 
                        $package_option = explode(',', $move_product->package_options);
                        // dd($package_option);
                    @endphp
                    <div
                        class="grid grid-cols-2 md:grid-cols-3 2xl:grid-cols-4 gap-2 2xl:gap-4 overflow-auto 2xl:h-[380px] h-[280px] w-full">
                        @foreach ($package_option as $option)
                            @php 
                                $array_opt = explode(':', $option);
                                // dd($option)
                            @endphp
                            <div id="box" data-option="{{$array_opt[1]}}"
                                class="box border border-gray-10 hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 max-ex:h-[8rem] h-[9rem] cursor-pointer">
                                <div class="flex mb-2 ">
                                    <img src="/images/Rectangle1282.png" alt="" class="w-20 max-ex:w-[70px]">
                                    <p class="text-lg font-medium ml-3 ">{{$array_opt[0]}} {{$array_opt[1]}}</p>
                                </div>
                                <div class="flex items-center">
                                    <img src="/images/check-one.png" alt="" class="check-box w-10 max-ex:w-[35px] ">

                                    <p
                                        class="text-xl 2xl:text-[2rem] font-bold ml-[3.5rem] max-ex:ml-[2.5rem] text-red-600">{{$array_opt[1]}}</p>
                                    <p class="2xl:text-lg font-medium ml-2">บาท</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="w-[100%] mt-0 flex justify-start max-lg:justify-center items-center">
                        <button id="btn-move-form" data-id="{{$move_product->id}}" class=" bg-red-500  hover:bg-red-700 w-[200px] text-center rounded-full py-2 text-white text-[16px] "
                            href="/move/movenow/form">ติดต่อเจ้าหน้าที่</button>
                    </div>
                </div>

            </div>
        </div>


        {{-- box package --}}
        <div class="w-[1536px] max-2xl:max-w-[90%] pt-6 mx-auto mb-6">

            <div class="flex">
                <button id="btn-package"
                    class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px] text-[16px]">รายละเอียด
                    แพ็กเกจ</button>
                <button id="btn-condition"
                    class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px] text-[16px]">เงื่อนไข</button>
            </div>
            {{-- content detail --}}
            <div id="box-package"
                class="h-[200px] text-left p-2 overflow-hidden bg-[#F8F9FA] border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] relative ">
                {{-- <img src="/images/Intersect.png" alt="" class="bottom-0 right-0 absolute">
                <div class="flex justify-center p-10">
                    <img src="/images/Rectangle 1669.png" alt="" class="w-[800px]">
                </div>
                <div class="w-full lg:w-[400px] ml-3 text-left">
                    <p class="text-[16px] font-medium mt-3">ซิมเทพ เล่นเน็ตไม่อั้น +โทรฟรีทุกค่าย
                        ลูกค้าจะได้เล่นเน็ตไม่จำกัด ฟรีเดือนแรก โปรโมชั่นเครือข่าย True
                    </p>

                    <ol class="mx-6">
                        <li class="text-[16px]">True ความเร็ว 10Mbps (ไม่ลดสปีด) "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน 210 บาท
                            (รวมภาษีแล้ว)</li>
                        <li class="text-[16px]">True ความเร็ว 20Mbps (ไม่มีโทรฟรี) เล่นเน็ตไม่อั้น 70GB (FUP 1Mbps)
                            "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน 200 บาท (รวมภาษีแล้ว)</li>
                        <li class="text-[16px]">True ความเร็ว 15Mbps +โทรฟรีทุกค่าย เล่นเน็ตไม่อั้น 80GB (FUP 1Mbps)
                            "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน 300 บาท (รวมภาษีแล้ว)</li>
                        <li class="text-[16px]">True ความเร็ว 15Mbps +โทรฟรีทุกค่าย เล่นเน็ตไม่อั้น 55GB (FUP 1Mbps)
                            "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน 250 บาท (รวมภาษีแล้ว)</li>
                        <li class="text-[16px]">True ความเร็ว 15Mbps +โทรฟรีทุกค่าย เล่นเน็ตไม่อั้น 30GB (FUP 384Kbps)
                            "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน 200 บาท (รวมภาษีแล้ว)</li>
                        <li class="text-[16px]">True ความเร็ว 4Mbps (ไม่มีโทรฟรี) เล่นเน็ตไม่อั้น 30GB (FUP 1Mbps)
                            "ฟรีเดือนแรก" เดือนต่อไป เติมเงิน 150 บาท (รวมภาษีแล้ว)</li>
                    </ol>
                    <p class="text-[16px]">** ทำไมถึงต้องเลือกทรู ตอบ เล่นได้ทุกแอพ เน็ตไม่มีหมด 8 แอพดังนี้ เล่นโซเชียล
                        Facebook, Line, instagram, TikTok</p>

                </div> --}}
                <div class="m-4">
                {!!$move_product->details_content!!}</div>
                <div class="w-full flex justify-center bg-[#F8F9FA] rounded-b-[10px] sticky bottom-0 py-1">
                    <button class="text-center text-[#EC1F25]" id="show">แสดงเพิ่มเติม ˅</button>
                </div>
            </div>

            {{-- content condition --}}
            <div id="box-condition"
                class="hidden bg-[#F8F9FA] text-left min-h-[300px] p-2 border-solid border-2 border-[#ED4312] text-[16px] font-medium  rounded-r-[10px] rounded-bl-[10px]">
                {!!$move_product->terms_content!!}
            </div>

        </div>
        {{-- box package --}}
    </div>

    @include('frontend.pages.move_company.move_footer')
@endsection

@section('scripts')
    @vite('resources/js/move/movenow.js')
@endsection

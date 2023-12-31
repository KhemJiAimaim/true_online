@extends('frontend.layouts.main')
@section('title')
    รายละเอียดเบอร์มงคล
@endsection
@section('style')
@endsection
@section('content')
    <div class="text-left 2xl:mt-32 xl:mt-32 mt-16">

        {{-- box fortune --}}
        <div class="bg-[#F8F9FA]">
            <div
                class="2xl:w-[1536px] max-2xl:max-w-[80%] max-lg:max-w-[80%] max-xs:max-w-[80%] py-10 mx-auto flex max-xs:flex-col  max-2xl:grid max-2xl:grid-cols-2 max-xs:grid-cols-1 gap-4">
                <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] p-1 rounded-[10px] 2xl:w-[25%]">
                    <div class="bg-white flex flex-col drop-shadow-md rounded-[8px] h-full p-4">
                        <h1 class="text-lg font-semibold">หมายเลขเบอร์</h1>
                        @php $formattedTel = substr($berproduct->product_phone, 0, 3) . '-' . substr($berproduct->product_phone, 3, 3) . '-' . substr($berproduct->product_phone, 6); @endphp
                        <h1 class="text-4xl font-semibold mt-4">{{ $formattedTel }}</h1>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-[10px] drop-shadow-md 2xl:w-[25%]">
                    <div class="flex justify-between gap-4">
                        <h1 class="text-lg font-semibold">กราฟคะแนน</h1>
                        <div class="flex items-center cursor-pointer" id="manual-fortune">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                fill="none">
                                <path
                                    d="M2.66797 2.66668V13.3333C2.66797 13.687 2.80844 14.0261 3.05849 14.2762C3.30854 14.5262 3.64768 14.6667 4.0013 14.6667H12.0013C12.3549 14.6667 12.6941 14.5262 12.9441 14.2762C13.1942 14.0261 13.3346 13.687 13.3346 13.3333V5.56134C13.3346 5.38372 13.2991 5.20788 13.2302 5.04417C13.1613 4.88046 13.0603 4.73217 12.9333 4.60801L9.9733 1.71334C9.72421 1.46978 9.38968 1.33339 9.0413 1.33334H4.0013C3.64768 1.33334 3.30854 1.47382 3.05849 1.72387C2.80844 1.97392 2.66797 2.31305 2.66797 2.66668Z"
                                    stroke="#EC1F25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M9.33594 1.33334V4.00001C9.33594 4.35363 9.47641 4.69277 9.72646 4.94282C9.97651 5.19287 10.3156 5.33334 10.6693 5.33334H13.3359"
                                    stroke="#EC1F25" stroke-width="1.5" stroke-linejoin="round" />
                            </svg>
                            <p class="text-red-500 underline text-[16px] ">ตาราง</p>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center justify-between gap-4 max-2xl:gap-2 cursor-pointer">
                        <div class="w-[150px] h-[100px]">
                            <canvas id="myChart" class="se:w-[97px]"></canvas>
                        </div>
                        <div class="w-full">
                            <div class="flex justify-between items-center gap-4">
                                <div class="flex gap-1">
                                    <div class="w-4 h-4 bg-[#2AB200] rounded-[2px]"></div>
                                    <p class="w-full text-[16px]">ความดี/สุข</p>
                                </div>
                                <div class="text-[#2AB200] text-[16px]">{{ $score['happy'] }}</div>
                            </div>
                            <div class="flex justify-between items-center gap-4">
                                <div class="flex gap-1">
                                    <div class="w-4 h-4 bg-[#CE090E] rounded-[2px]"></div>
                                    <p class="w-full text-[16px]">ความร้าย/ทุกข์</p>
                                </div>
                                <div class="text-[#CE090E] text-[16px]">{{ $score['sad'] }}</div>
                            </div>
                            <div class="flex justify-between items-center gap-4">
                                <div class="flex gap-1">
                                    <div class="w-4 h-4 bg-[#838383] rounded-[2px]"></div>
                                    <p class="w-full text-[16px]">ความว่างเปล่า</p>
                                </div>
                                <div class="text-[#838383] text-[16px]">{{ $score['empty'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white p-4 rounded-[10px] drop-shadow-md 2xl:w-[35%]">
                    <div class="">
                        <h1 class="text-lg font-semibold">แพ็กเกจ/ความหมาย</h1>
                        <div class="flex items-center gap-4 mt-4">
                            <img src="/icons/package.png" alt="">
                            <p class="">{{ $berproduct->product_comment }}</p>
                        </div>
                    </div>
                </div>

                <div class="flex gap-4">
                    <div class="w-28 max-2xl:w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
                        <h1 class="text-lg font-semibold">เกรด</h1>
                        <h1 class="text-4xl font-semibold mt-4">{{ $berproduct->product_grade }}</h1>
                    </div>

                    <div class="w-28 max-2xl:w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
                        <h1 class="text-lg font-semibold">ผลรวม</h1>
                        <h1 class="text-4xl font-semibold mt-4">{{ $data_sumber->predict_sum }}</h1>
                    </div>
                </div>
            </div>
        </div>
        {{-- box fortune --}}

        {{-- box manual --}}
        <div class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-80 flex justify-center items-center z-[51]"
            id="modal-container">
            <div class="w-[444px] max-xs:w-[355px] h-[421px] p-2 bg-white rounded-[10px]">
                <div class="w-full flex justify-end">
                    <img class="cursor-pointer" src="/icons/cancel-btn.png" alt="" id="close-manual">
                </div>
                <div class="text-center flex flex-col items-center gap-3">
                    <img src="/icons/icon-document.png" alt="">
                    <h1 class="text-xl font-bold">รายละเอียดกราฟคะแนน</h1>
                    <p>ท่านสามารถนำข้อมูลนี้ไปประกอบการตัดสินใจในการเลือกเบอร์ได้</p>
                </div>
                <div class="mx-auto mt-4 w-[52%] max-xs:w-[55%] grid grid-cols-[70px,20px,1fr]">
                    <p>ดีเยี่ยม</p>
                    <p>=</p>
                    <p>900 - 1000</p>

                    <p>ดีมาก</p>
                    <p>=</p>
                    <p>800 - 899</p>

                    <p>ดี</p>
                    <p>=</p>
                    <p>700 - 799</p>

                    <p>ปานกลาง</p>
                    <p>=</p>
                    <p>600 - 699</p>

                    <p>พอใช้</p>
                    <p>=</p>
                    <p>500 - 599</p>

                    <p>แย่</p>
                    <p>=</p>
                    <p>0 - 499</p>

                    <p>เสีย บอด</p>
                    <p>=</p>
                    <p>แต้มลบ ไม่ควรใช้</p>

                    <p>ร้ายมาก</p>
                    <p>=</p>
                    <p>ติดลบ เปลี่ยนเบอร์ทันที</p>
                </div>
            </div>
        </div>
        {{-- box manual --}}


        {{-- box package --}}
        <div class="max-w-[1536px] max-2xl:max-w-[80%] mt-10 mx-auto">
            <div class="">
                <div class="flex">
                    <button id="btn-package"
                        class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px] ">รายละเอียด
                        แพ็กเกจ</button>
                    <button id="btn-condition" class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px] ">เงื่อนไข</button>
                </div>
                {{-- content detail --}}
                <div id="box-package"
                    class="h-[250px] overflow-hidden bg-[#F8F9FA] border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] ">
                    <div class="p-6">
                        {{-- <p>ย้ายค่ายเบอร์เดิมรับส่วนลดรายเดือน 25% เหลือ 1499.- (ปกติ 1999.-) นาน 12 เดือน</p> --}}
                        @foreach ($package as $pack)
                            <div class="flex gap-2 mb-2 ">
                                <div class="p-1 border border-solid border-1 border-[#ED4312] rounded-[10px]">
                                    <img class="w-[60px] h-[60px]" src="/{{ $pack->thumbnail_link }}" alt="">
                                </div>
                                <div class="">
                                    <p>{{ $pack->title }}</p>
                                </div>
                            </div>
                        @endforeach
                        {{-- <p>รับฟรีโค้ดความบันเทิง iQIYI,WeTV,Viu   จนถึง 31 ธ.ค. 66</p> --}}
                        {{-- <p>รับสิทธิประกันชีวิตและอุบัติเหตุ ความคุ้มครองรวมสูงสุด 320,000 บาท</p> --}}
                    </div>

                    <div class="w-full flex justify-center rounded-b-[10px] sticky bottom-0 py-1 ">
                        <button class="text-center text-[#EC1F25]" id="show-more">แสดงเพิ่มเติม ˅</button>
                    </div>
                </div>

                {{-- content condition --}}
                <div id="box-condition"
                    class="hidden bg-[#F8F9FA] min-h-[250px] border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] p-6">
                    เงื่อนไขการได้รับสิทธิพิเศษ ย้ายค่ายเบอร์เดิมรับส่วนลดรายเดือน
                </div>
            </div>
        </div>
        {{-- box package --}}

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container px-3 2xl:py-16 py-10">
            <div class="mx-auto max-w-[1536px] max-2xl:max-w-[80%]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC 2xl:w-[13%] xl:w-[15%] lg:w-[17%] md:w-[22%]">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[20px] text-[18px]">คำทำนายคู่เลข</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        {{-- box meaning ber --}}
        <div class="max-w-[1536px] max-2xl:max-w-[80%] mx-auto pb-6">
            <div class="bg-[#F8F9FA]  rounded-[10px]">
                <h1 class="text-lg font-semibold mb-1">ผลรวม {{ $data_sumber->predict_sum }} :
                    {{ $data_sumber->predict_name }}</h1>
                <p class="indent-8 text-[16px]">{{ $data_sumber->predict_description }}</p>
            </div>

            <h1 class="text-lg font-semibold mt-2 mb-1">เบอร์มังกร</h1>
            @foreach ($data_fortune as $data)
                <div class="mb-4">
                    <h1 class="text-lg font-semibold mb-1">คู่เลข {{ $data->prophecy_numb }} : {{ $data->prophecy_name }}
                    </h1>
                    <p class="indent-8 text-[16px]">{{ $data->prophecy_desc }}</p>
                </div>
            @endforeach
        </div>
        {{-- box meaning ber --}}

        {{-- box buy detail --}}

        <div class="bg-white drop-shadow-md items-center w-full"
            style="box-shadow: 0px -4px 10px 0px rgba(0, 0, 0, 0.15);">
            <div class="flex items-center justify-center gap-4 p-2 w-full flex-wrap ">
                <p class="2xl:text-lg">ราคา</p>
                <p class="2xl:text-2xl text-xl font-bold">{{ number_format($berproduct->product_price) }}</p>
                <p class="2xl:text-lg">บาท</p>

                <div class="border-l border border-[#838383] text-center py-8 rounded-full max-xs:hidden"></div>

                <div class="flex gap-2 ">
                    <button id="buyProductNow" data-id="{{ $berproduct->product_id }}" data-type="3"
                        class="cursor-pointer flex items-center px-6 2xl:py-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>

                    <button id="addBerToCart" data-id="{{ $berproduct->product_id }}" data-type="3"
                        class="group rounded-full border border-red-500 mx-1 w-[40px] h-[40px] 2xl:w-[50px] 2xl:h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                        <img src="/images/mdi_cart-arrow-down.png" alt=""
                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                    </button>

                    <a href="https://line.me/ti/p/~@berhoro"
                        class="group rounded-full border border-red-500 mx-1  w-[40px] h-[40px] 2xl:w-[50px] 2xl:h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                        <img src="/images/icons8-line-app (1) 9.png" alt=""
                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- end box product -->
    @include('frontend.pages.bermonthly_lucky.footer_bermonthly_lucky')
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        let data = {!! json_encode($score) !!}
    </script>
    @vite('resources/js/bermonthly_lucky/detail_ber.js')
@endsection

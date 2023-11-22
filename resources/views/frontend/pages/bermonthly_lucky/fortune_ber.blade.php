@extends('frontend.layouts.main')
@section('content')
    <div class="text-left mt-[120px] max-xl:mt-[74px]">

        {{-- box fortune --}}
        <div class="bg-[#F8F9FA] mb-10 ">
            <div
                class="max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[90%] w-[90%] py-10 mx-auto flex max-xs:flex-col justify-center max-lg:grid max-lg:grid-cols-2 max-xs:grid-cols-1 gap-4">
                <div class="bg-white flex flex-col p-4 rounded-[10px] drop-shadow-md">
                    <h1 class="text-lg font-semibold">หมายเลขเบอร์</h1>
                    @php $formattedTel = substr($tel, 0, 3) . '-' . substr($tel, 3, 3) . '-' . substr($tel, 6); @endphp
                    <h1 class="text-4xl font-semibold mt-4">{{ $formattedTel }}</h1>
                </div>

                <div class="bg-white p-4 rounded-[10px] drop-shadow-md">
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
                            <p class="text-red-500 underline">ตาราง</p>
                        </div>
                    </div>
                    <div class="mt-2 flex items-center justify-between gap-4 max-2xl:gap-2">
                        <div class="w-[150px] h-[90px]">
                            <canvas id="myChart"></canvas>
                        </div>

                        @php
                            // dd($score);
                        @endphp

                        <div class="w-full">
                            <div class="flex justify-between items-center gap-4">
                                <div class="flex gap-1">
                                    <div class="w-4 h-4 bg-[#2AB200] rounded-[2px]"></div>
                                    <p class="w-full">ความดี/สุข</p>
                                </div>
                                <div class="text-[#2AB200]">{{ $score['happy'] }}</div>
                            </div>
                            <div class="flex justify-between items-center gap-4">
                                <div class="flex gap-1">
                                    <div class="w-4 h-4 bg-[#CE090E] rounded-[2px]"></div>
                                    <p class="w-full">ความร้าย/ทุกข์</p>
                                </div>
                                <div class="text-[#CE090E]">{{ $score['sad'] }}</div>
                            </div>
                            <div class="flex justify-between items-center gap-4">
                                <div class="flex gap-1">
                                    <div class="w-4 h-4 bg-[#838383] rounded-[2px]"></div>
                                    <p class="w-full">ความว่างเปล่า</p>
                                </div>
                                <div class="text-[#838383]">{{ $score['empty'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4 max-lg:col-span-2 max-xs:col-span-1">
                    <div class="w-28 max-lg:w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
                        <h1 class="text-lg font-semibold">เกรด</h1>
                        <h1 class="text-4xl font-semibold mt-4">{{ $score['grade']->grade_name }}</h1>
                    </div>

                    <div class="w-28 max-lg:w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
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

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container">
            <div class="title-plate-line"></div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text">คำทำนายคู่เลข</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        <div class="max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[90%] w-[90%] py-10 mx-auto">

            {{-- box meaning sum --}}
            <div class="bg-[#F8F9FA] p-4 rounded-[10px]">
                <h1 class="text-lg font-semibold mb-1">ผลรวม {{ $data_sumber->predict_sum }} :
                    {{ $data_sumber->predict_name }}</h1>
                <p class="indent-8">{{ $data_sumber->predict_description }}</p>
            </div>
            {{-- box meaning sum --}}

            {{-- box meaning ber --}}
            <h1 class="text-lg font-semibold mt-2 mb-1">เบอร์มังกร</h1>
            @if (count($data_fortune) > 0)
                @foreach ($data_fortune as $data)
                    <div class="mb-4">
                        <h1 class="text-lg font-semibold mb-1">คู่เลข {{ $data->prophecy_numb }} :
                            {{ $data->prophecy_name }}</h1>
                        <p class="indent-8">{{ $data->prophecy_desc }}</p>
                    </div>
                @endforeach
            @else
            @endif
            {{-- box meaning ber --}}
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
    @vite('resources/js/bermonthly_lucky/fortune_ber.js')
@endsection

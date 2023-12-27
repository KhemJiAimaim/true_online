@extends('frontend.layouts.main')



@section('content')
    <div class="2xl:mt-16 mt-6">

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container px-3 ">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text 2xl:text-[1.5rem] md:text-[16px]  text-[16px] p-4">ย้ายค่ายเบอร์เดิมมาทรูมูฟ เอช พร้อมรับส่วนลดสุดคุ้มที่นี่</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        @include('frontend.pages.move_company.tabmenu')
        <section class="bg-white py-6 px-3 max-md:px-4">
            <div class="">
                @foreach($data_category['move_cate'] as $cate)
                @if($cate->id == $data_category['cate_id'])
                    <p class="text-[#000]   2xl:text-[2rem] xl:text-[25px] text-[22px]">{{$cate->title}}</p>
                    <p class="text-[#838383] 2xl:text-[20px] xl:text-[18px] text-[16px] ">{{$cate->details}}</p>
                @endif
                @endforeach
            </div>
            <div class="pt-6 w-full">
                <div class="max-w-[1536px] my-0 mx-auto 2xl:grid 2xl:grid-cols-3 flex flex-wrap justify-center items-center  px-4 gap-x-6 gap-y-6">
                    @foreach($move_product as $product)
                    <div class="drop-shadow-md ">
                        <div class="2xl:w-[480px] md:w-[424px] xl:w-[410px] w-[350px] max-md:w-[350px] h-[100%] ">
                            <div
                                class=" bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-tl-[10px] rounded-tr-[10px] py-2 relative ">
                                <p class="text-white text-left ml-3 text-[18px] max-md:text-[16px]">{{$product->details}}</p>
                                <img class=" absolute top-0 right-0" src="/images/circle/Intersect.png" alt="">

                            </div>

                            <div class="bg-white flex items-center justify-center flex-col p-4 ">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 ">
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">เน็ต</p>
                                    <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">{{$product->internet_volume}}</p>
                                    <p class="2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">GB</p>

                                </div>
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex justify-center items-baseline gap-10">
                                    <p class="2xl:text-[1.5rem] text-[1rem]">เน็ต</p>
                                    <p class="2xl:text-[4rem] text-[2rem] text-[#F98E24] ">{{$product->call_minutes}}</p>
                                    <p class="2xl:text-[1.5rem] text-[1rem]">GB</p>

                                </div>
                            </div>
                            <div class="bg-gray-100 p-4 flex flex-col items-center gap-3">
                                <div class="flex items-center justify-center gap-2">
                                    <img src="/images/arcticons_wifianalyzer (1).png" alt="">
                                    @if($product->unlimited_wifi == true)
                                    <p class="font-bold 2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">WiFi ไม่จำกัด</p>
                                    @else
                                    <p class="font-bold 2xl:text-[1.5rem] text-[18px] max-md:text-[16px]">จำกัดการใช้ WiFi</p>
                                    @endif
                                </div>
                                @if($product->voice_hd == true)
                                <div class="h-[1px] w-[90%] bg-gray-500 "></div>
                                <div class="flex items-center flex-col justify-center">
                                    <p class="font-bold 2xl:text-[1.5rem] text-[1rem]">4G HD Voice</p>
                                    <p class="2xl:text-[1.2rem] text-[14px]">เสียงโทรคมชัดยิ่งขึ้นแบบสัญญาณ 4G</p>
                                </div>
                                @endif
                            </div>
                            <div class="bg-white  2xl:flex flex-col gap-5 md:block hidden ">
                                <div class="orange-plate-container pb-2">
                                    <div class="orange-plate-line"></div>
                                    <div class="orange-plate-group">
                                        <div class="orange-plate-box-s">
                                            <div class="orange-plate-circleSM"></div>
                                            <div class="orange-plate-textboxS"></div>
                                        </div>
                                        <div class="orange-plate-textboxC">
                                            <p class="orange-plate-text text-white text-[18px] max-md:text-[16px]">รับเพิ่ม</p>
                                        </div>
                                        <div class="orange-plate-box-e">
                                            <div class="orange-plate-textboxE"></div>
                                            <div class="orange-plate-circleEM"></div>
                                        </div>
                                    </div>
                                </div>
                                
                                @php 
                                    $benefit_ids = explode(',', $product->benefit_ids);
                                    $post_ids = $posts->pluck('id')->toArray();

                                    // หาค่าที่เหมือนกัน
                                    $same_benefit = array_intersect($benefit_ids, $post_ids);
                                    $benefit_items = array_slice($same_benefit, 0, 3);
                                    // dd($benefit_items)
                                @endphp
                                <div>
                                    @foreach($benefit_items as $item)
                                        @foreach($posts as $pos)
                                        @if($pos->id == $item)
                                        <div class="flex items-start gap-2 px-4 mb-2">
                                            <div class="border-[1px] border-orange-500 p-4 w-[30%]  rounded-lg">
                                                <img src="/{{$pos->thumbnail_link}}" alt="">
                                            </div>
        
                                            <p class="text-start text-[18px] max-md:text-[16px]">{{$pos->title}}</p>
                                        </div>
                                        @endif
                                        @endforeach
                                    @endforeach
                                </div>

                                <div class="px-4 text-start" id="content-ck">
                                    {!!$product->details_content!!}
                                </div>
                            </div>

                            <div class="bg-gradient-to-r from-[#ED4312] to-[#F6911D]  relative">
                                <img class=" absolute left-0 top-0 h-[100%]" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="flex items-center justify-between py-6 px-2">

                                    <p class="text-white text-left text-[18px] max-md:text-[16px] ">ราคา</p>
                                    <p class="text-white font-medium text-center text-3xl">{{number_format($product->price)}}</p>
                                    <p class="text-white text-right text-[18px] max-md:text-[16px]  ">บาท <br> /เดือน</p>

                                </div>
                            </div>

                            <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center px-4 gap-3">

                                <button id="btn-termOfService" data-id="{{$product->id}}"
                                    class="cursor-pointer py-2 xl:px-2 px-4  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ข้อกำหนดและเงือนไข</button>
                                <a href="{{ url('/movedetail/'.$product->id) }}"
                                    class="cursor-pointer py-2 max-md:px-10 px-16  mb-2 mt-2 text-[18px] max-md:text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ย้ายเลย</a>

                            </div>
                        </div>
                    </div>
                    

                    @endforeach
                </div>
            </div>
        </section>
        {{-- box manual --}}
        <div class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-80 flex justify-center items-center z-10" id="modal-container">
            <div class="w-[700px] max-lg:w-[444px] max-xs:w-[355px] h-[616px] max-lg:p-2 p-4 bg-white rounded-[10px]">
                <div class="w-full flex justify-end">
                    <img class="cursor-pointer" src="/icons/cancel-btn.png" alt="" id="close-modal">
                </div>
                <div class="text-center flex flex-col items-center gap-3">
                    <h1 class="text-xl font-bold mb-4">ข้อกำหนดและเงื่อนไข</h1>
                </div>
                <div id="modal-content" class="text-left h-[calc(100%-68px)] overflow-auto">
                    
                </div>
            </div>
        </div>
        {{-- box manual --}}


    </div>

    @include('frontend.pages.move_company.move_footer')
@endsection


@section('scripts')
    @vite('resources/js/move/modal_termservice.js')
@endsection

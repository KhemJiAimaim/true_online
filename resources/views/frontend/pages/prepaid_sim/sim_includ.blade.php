@extends('frontend.layouts.main')

@section('title')
ซิมเติมเงิน
@endsection

@section('content')
    <div class="2xl:mt-16">
        <section class="">
            <div class="2xl:py-6 ">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px] ">ซิมเติมเงิน</p>
                <p class="text-[#838383] mt-2 mb-10  2xl:text-[20px] md:text-[18px] text-[16px] ">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</p>
            </div>
            {{-- มหัศจรรย์ --}}

            <div class="plate-line max-w-[200px]"></div>

            {{-- มหัศจรรย์ --}}

            <div
                class="max-w-[1536px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-4 gap-6 m-auto p-4 2xl:mt-16 mt-6 mb-10 ">
                @foreach ($prepaid_cate as $prepaid)
                    <div class="drop-shadow-md">
                        <div
                            class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-2">
                            {{-- <div class="flex justify-start items-center"> --}}
                            <p class="text-white text-left ml-3 text-[16px]">{{$prepaid->title}}</p>
                            <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                            {{-- </div> --}}
                        </div>

                        <div class="bg-white">
                            <div class="flex justify-center py-4 ">
                                <img src="/images/Rectangle 98.png" alt=""
                                    class="max-ex:w-[120px] max-ex:h-[120px]">
                            </div>
                        </div>

                        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2  h-[100px]">
                            <img src="/images/Ellipse 6.png" alt="" class="px-4">
                            <p class="text-left 2xl:text-[16px] text-[14px] p-2  py-1 col-span-4">{{$prepaid->details}}</div>

                        <div class=" relative bg-gradient-to-r from-[#ED4312] to-[#F6911D] py-3 px-2 items-center">
                            <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png" alt="">
                            <div class="grid grid-cols-3">
                                <p class="text-white text-left text-[16px] ">ราคา <br> เริ่มต้น</p>
                                <p class="text-white font-medium text-center 2xl:text-3xl md:text-[2rem] pt-3 text-2xl">{{ $price = ($prepaid->price)?number_format($prepaid->price):0;}}</p>
                                <p class="text-white text-right text-[16px]">บาท <br> /เดือน</p>
                            </div>
                        </div>

                        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4 items-center">

                            <a href="{{ url('/prepaid_sim/buy_sim/'.$prepaid->id)}}"
                                class="cursor-pointer py-2  px-6 mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
                            <button id="buyProductNow" data-id="{{$prepaid->prepaid_sim_id}}" data-type="4" data-prepaid="{{$prepaid->prepaid_sim_id}}"
                                class="py-2 px-10  mb-2 mt-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</button>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        {{-- --- --}}
    </div>
    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection
@section('scripts')
@vite('resources/js/global_js/add_cart_product.js')
@endsection
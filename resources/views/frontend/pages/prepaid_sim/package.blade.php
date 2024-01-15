@extends('frontend.layouts.main')
@section('title')
    แพ็กเกจเสริม
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
    <div class="2xl:mt-16">
        <div class="py-6">
            <p class="text-[#000] mt-2 mb-2 2xl:text-[2rem] xl:text-[25px] text-[22px] ">แพ็กเกจเสริม</p>
            <p class="text-[#838383] mt-2 mb-2 2xl:text-[20px] md:text-[18px] text-[16px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม
                ที่คุณอาจสนใจ</p>
        </div>
        {{-- มหัศจรรย์ --}}

        <div class="plate-line max-w-[200px] "></div>

        {{-- มหัศจรรย์ --}}

        <div class=" flex justify-center px-4 gap-4 items-center 2xl:mt-10 mt-6">
            {{-- @dd($css_btnMonth) --}}
            <button id="btn-package" data-type="paysim"
                class="py-3 px-10 mb-2 mt-2 2xl:text-[20px] md:text-[18px] text-[16px] font-medium text-white focus:outline-none rounded-lg border {{ $paysim = $css_btnPaysim == true ? 'bg-gradient-to-r from-[#ED4312] to-[#F6911D] hover:bg-gradient-to-br active' : 'bg-[#4f4f4f] hover:bg-[#666] hover:text-white' }}">เติมเงิน</button>
            <button id="btn-package" data-type="month"
                class="py-3 px-8 mb-2 mt-2 2xl:text-[20px] md:text-[18px] text-[16px] font-medium text-white focus:outline-none rounded-lg border {{ $month = $css_btnMonth == true ? 'bg-gradient-to-r from-[#ED4312] to-[#F6911D] hover:bg-gradient-to-br active' : 'bg-[#4f4f4f] hover:bg-[#666] hover:text-white' }}">รายเดือน</button>
        </div>

        @foreach ($cate_package as $cate)
            <section class="flex justify-center items-center my-6 px-3">
                <div class="drop-shadow-md w-[1536px] mx-auto">
                    <div
                        class="relative overflow-hidden bg-gradient-to-r from-[#ED4312] to-[#F6911D] rounded-tl-[10px] rounded-tr-[10px] py-3 ">
                        <p class="text-white text-center ml-3 2xl:text-[20px] md:text-[18px] text-[16px]">
                            {{ $cate->title }}</p>

                    </div>
                    <div class="box-package rounded-bl-[10px] rounded-br-[10px]">
                        @foreach ($package_product as $product)
                            @if ($cate->id == $product->package_cate_id)
                                <div
                                    class="item flex justify-between 2xl:px-40  px-2 py-2 2xl:py-8 dm:px-4 xs:px-2  2xl:items-center">
                                    <div class="text-left">
                                        <p class="2xl:text-lg md:text-[18px] xs:text-[16px] text-[14px] font-medium">
                                            {{ $product->title }}</p>
                                        <p class="2xl:text-lg  md:text-[18px] xs:text-[16px] text-[14px] font-medium">
                                            {{ $product->details }}</p>
                                        <p class="2xl:text-lg text-gray-500 md:text-[16px] xs:text-[16px] text-[14px]">
                                            {{ $product->package_type }}</p>
                                    </div>
                                    <div class="flex justify-center items-center gap-1  2xl:gap-4 md:gap-2 xs:gap-2">
                                        <div class="border-l border border-[#838383] text-center py-4 rounded-full "></div>
                                        <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[14px]">
                                            {{ $product->lifetime }} วัน</p>
                                        <div class="border-l border border-[#838383] text-center py-4  rounded-full "></div>
                                        <p class="2xl:text-lg font-medium md:text-[18px]  xs:text-[16px] text-[14px]">
                                            {{ number_format($product->price) }} บาท</p>
                                        <div class="border-l border border-[#838383] text-center  py-4 rounded-full "></div>
                                        <a href="{{ url('/prepaid_sim/buy_package/' . $product->id) }}"
                                            class="cursor-pointer py-2 2xl:px-8 px-3 mb-2 mt-2 2xl:text-lg dm:text-[14px] text-[14px]  xs:text-[12px] font-medium text-white focus:outline-none bg-[#EC1F25] rounded-full border hover:bg-red-500 hover:text-white ">ซื้อเลย</a>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
        @endforeach
    </div>

    @include('frontend.pages.prepaid_sim.footer_sim')
@endsection

@section('scripts')
    @vite('resources/js/prepaid_sim/package.js')
@endsection

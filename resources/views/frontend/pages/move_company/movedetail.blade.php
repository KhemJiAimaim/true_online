@extends('frontend.layouts.main')

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
    <div class="mt-[10%] max-xs:mt-[20%]  mx-3">
        <div class=" flex justify-center items-center">
            <div class="w-[1536px] max-2xl:max-w-[90%] grid grid-cols-1  2xl:grid-cols-3  gap-4 m-3">

                <div class="bg-white w-full 2xl:h-[500px]  items-center px-4 lg:px-1 mb-6 relative">
                    <div class="flex justify-center lg:mb-6 2xl:mb-2">
                        <img id="featured" src="/{{$move_product->thumbnail_link}}" alt=""
                            class="max-ex:w-[250px] max-ex:h-[250px]  w-[340px] cursor-pointer pb-4 lg:pb-12 xl:pb-[1.5rem] ">
                    </div>
                    <div id="slide-wrapper" class="flex justify-center items-center">


                        <img id="slideLeft" class="arrow absolute left-0 cursor-pointer " src="/images/prev.png">

                        <div id="slider" class="flex gap-4 overflow-x-hidden mx-4 ">
                            <img src="/{{$move_product->thumbnail_link}}" alt="" class="thumnail active w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100 ">
                            @foreach ($moveRelates as $relate)
                                @if($relate->id != $move_product->id)
                                <img src="/{{$relate->thumbnail_link}}" alt="" class="thumnail   w-[100px] h-[100px] cursor-pointer rounded-lg opacity-50 hover:opacity-100">
                                @endif
                            @endforeach

                        </div>
                        <img id="slideRight" class="arrow absolute right-0 cursor-pointer" src="/images/next.png">

                    </div>

                </div>

                <div class="col-span-2 space-y-6 text-left mx-3">
                    <p class=" font-medium 2xl:text-2xl text-xl ">{{$move_product->title}}</p>

                    <div class="flex justify-center border-l border border-gray-500 text-center  rounded-full px-2">
                    </div>

                    <p class="2xl:text-xl text-lg font-medium">ตัวเลือก</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 2xl:grid-cols-3 gap-x-4 gap-y-4 overflow-auto 2xl:h-[350px] h-[280px] w-full px-2">
                        <div id="box" data-option="{{$move_product->id}}" class="box border border-gray-500 active hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 max-ex:h-[8rem] h-[9rem] cursor-pointer">
                            <div class="flex mb-2">
                                <img src="/{{$move_product->thumbnail_link}}" alt="" class="w-20 max-ex:w-[70px] rounded-lg">
                                <p class="text-lg font-medium ml-3 ">{{$move_product->package_options}}</p>
                            </div>
                            <div class="flex items-center">
                                <img src="/images/check-one-active.png" alt="" class="check-box w-10 max-ex:w-[35px] ">
                                <p class="text-xl 2xl:text-[2rem] font-bold ml-[3.5rem] max-ex:ml-[2.5rem] text-red-600">{{number_format(($move_product->discount > 0)? $move_product->discount : $move_product->price)}}</p>
                                <p class="2xl:text-lg font-medium ml-2">บาท</p>
                            </div>
                        </div>
                        @foreach ($moveRelates as $relateOption)
                            @if($relateOption->id != $move_product->id)
                                <div id="box" data-option="{{$relateOption->id}}" class="box border border-gray-10 hover:border-gray-500 bg-[#F8F9FA] rounded-lg px-2 py-2 max-ex:h-[8rem] h-[9rem] cursor-pointer">
                                    <div class="flex mb-2 ">
                                        <img src="/{{$relateOption->thumbnail_link}}" alt="" class="w-20 max-ex:w-[70px] rounded-lg">
                                        <p class="text-lg font-medium ml-3 ">{{$relateOption->package_options}}</p>
                                    </div>
                                    <div class="flex items-center">
                                        <img src="/images/check-one.png" alt="" class="check-box w-10 max-ex:w-[35px] ">

                                        <p class="text-xl 2xl:text-[2rem] font-bold ml-[3.5rem] max-ex:ml-[2.5rem] text-red-600">{{ number_format(($relateOption->discount > 0)? $relateOption->discount : $relateOption->price)}}</p>
                                        <p class="2xl:text-lg font-medium ml-2">บาท</p>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                    <div class="w-[100%] mt-0 flex justify-start max-xl:justify-center items-center">
                        <button id="btn-move-form" data-id="{{$move_product->id}}" class=" bg-red-500  hover:bg-red-700 w-[200px] text-center rounded-full py-2 text-white text-[16px] "
                            href="/move/movenow/form">ติดต่อเจ้าหน้าที่</button>
                    </div>
                </div>

            </div>
        </div>


        {{-- box package --}}
        <div class="w-[1536px] max-2xl:max-w-[90%] pt-6 mx-auto mb-6">

            <div class="flex">
                <button id="btn-package" class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px] text-[16px]">แพ็กเกจ</button>
                <button id="btn-detailPackage" class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px] text-[16px]">รายละเอียด แพ็กเกจ</button>
                <button id="btn-condition" class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px] text-[16px]">เงื่อนไข</button>
            </div>
            {{-- content detail --}}
            <div id="box-package" class="h-[300px] text-left overflow-hidden bg-[#F8F9FA] border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px] relative ">
                @php
                    $benefit_ids = explode(',', $move_product->benefit_ids);
                    $post_ids = $posts->pluck('id')->toArray();

                    // หาค่าที่เหมือนกัน
                    $same_benefit = array_intersect($benefit_ids, $post_ids);
                    $benefit_items = array_slice($same_benefit, 0, 3);
                    // dd($benefit_items)
                @endphp
                <div id="contentPackage" class="m-4">
                    @foreach ($benefit_items as $item)
                        @foreach ($posts as $pos)
                            @if ($pos->id == $item)
                                <div class="grid grid-cols-[90px,1fr] gap-2 px-4 mb-2">
                                    <div
                                        class="border-[1px] rounded-lg border-orange-500 p-1 w-[80px] h-[80px]">
                                        <img class="w-full h-full object-contain"
                                            src="/{{ $pos->thumbnail_link }}"
                                            alt="">
                                    </div>

                                    <p
                                        class="text-start text-[18px] max-md:text-[16px]">
                                        {{ $pos->title }}</p>
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
                <div id="contentDetail" class="m-4 hidden">{!!$move_product->details_content!!}</div>
                <div id="contentCondition" class="m-4 hidden">{!!$move_product->terms_content!!}</div>
                <div class="w-full flex justify-center bg-[#F8F9FA] rounded-b-[10px] absolute bottom-0 py-1">
                    <button class="text-center text-[#EC1F25]" id="show">แสดงเพิ่มเติม ˅</button>
                </div>
            </div>

            {{-- content condition --}}
            {{-- <div id="box-condition"
                class="hidden bg-[#F8F9FA] text-left min-h-[300px] p-2 border-solid border-2 border-[#ED4312] text-[16px] font-medium  rounded-r-[10px] rounded-bl-[10px]">
                {!!$move_product->terms_content!!}
            </div> --}}

        </div>
        {{-- box package --}}
    </div>

    @include('frontend.pages.move_company.move_footer')
@endsection

@section('scripts')
    @vite('resources/js/move/movenow.js')
@endsection

@extends('frontend.layouts.main')
@section('style')
    <style>
        .box-package .item:nth-child(odd) {
            background-color: #FFF;
        }

        .box-package .item:nth-child(even) {
            background-color: #F3F3F3;
        }
    </style>
@endsection
@section('content')
    <div class="text-left mb-4 mt-40 max-xl:mt-20">
        <div class="w-4/5 mx-auto">
            <img class="w-full" src="{{$seo->cate_thumbnail}}" alt="">
        </div>
        <div class="w-4/5 my-8 mx-auto text-center">
            <h1 class="text-[25px] text-[#CE090E] font-semibold mb-2">{{$seo->cate_h1}}</h1>
            <h1 class="text-[20px]">{!! nl2br(e($seo->cate_h2)) !!}</h1>
        </div>
        {{-- @dd($post_all) --}}
        <div class="bg-[#F2FBFF] py-2">
            <div class="w-4/5 mx-auto flex flex-col gap-4 my-4">
                @foreach ($post_all as $post)
                    @if($post->pin == true)
                        @continue
                    @endif
                    {{-- @dd() --}}
                    <div class="">
                        <h2 class="text-center text-xl text-[#CE090E] font-semibold">{{$post->title}}</h2>
                        <div class="mx-auto">
                            <div class="mb-4 flex justify-evenly gap-4 overflow-auto" id="image-container">
                                @foreach($post['images'] as $image) 
                                    <img src="{{url($image->image_link)}}" alt="">
                                @endforeach
                            </div>
                        </div>
                        <div class="flex justify-between max-md:flex-col max-md:items-center gap-4">
                            <div class="max-lg:hidden w-[150px]"></div>
                            <div class="flex gap-4">
                                <a href="{{$webInfo->contact->line1->link}}" class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-green-500 rounded-[30px]">
                                    <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/line.png" alt=""></span>
                                    <span>@fiber-true</span>
                                </a>
                                <a href="tel:{{$webInfo->contact->phone->value}}" class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-red-500 rounded-[30px]">
                                    <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/tell.png" alt=""></span>
                                    <span>ติดต่อสอบถาม</span>
                                </a>
                            </div>
                            <div id="moreDetail" class="flex items-center gap-1 cursor-pointer" data-index="{{$post->id}}">
                                <button class="font-semibold">รายละเอียดเพิ่มเติม</button>
                                <button class="">
                                    <img id="arrowDetail" class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px] rotate-90 duration-300" src="/icons/arrowicon.png" alt="">
                                </button>
                            </div>
                        </div>
                        <div id="promotionCk" data-index="{{$post->id}}" class="overflow-hidden h-0 w-[800px] max-lg:w-[auto] mx-auto duration-300">
                            {!! $post->content !!}
                        </div>
                    </div>
                    
                    <hr class="border-[1px] border-[#838383]">
                @endforeach
            </div>
            @foreach ($post_all as $post)
                @if($post->pin == false) 
                    @continue 
                @endif
                @if($post->id == 137)
                    <div class="relative">
                        <img class="w-full " src="{{ url($post->thumbnail_link)}}" alt="">
                        @if($post->content)
                        <div id="content" class="absolute top-0 w-[800px] max-lg:w-full max-lg:max-w-full max-lg:py-4 max-lg:px-8 top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 p-4 max-lg:px-2 box-border overflow-hidden break-words">
                            {!! $post->content !!}
                        </div>
                        @endif
                        <div class="absolute top-[60%] left-[50%] flex gap-4 transform -translate-x-1/2 -translate-y-1/2">
                            <a href="{{$webInfo->contact->line1->link}}" class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-green-500 rounded-[30px]">
                                <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/line.png" alt=""></span>
                                <span>@fiber-true</span>
                            </a>
                            <a href="tel:{{$webInfo->contact->phone->value}}" class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-red-500 rounded-[30px]">
                                <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/tell.png" alt=""></span>
                                <span>ติดต่อสอบถาม</span>
                            </a>
                        </div>
                    </div>
                @elseif($post->id == 139)
                    <div 
                        style="background-image: url('{{ url($post->thumbnail_link) }}'); background-size: cover; background-position: center; background-repeat: no-repeat;" 
                        class="w-full max-lg:max-w-full top-[30%] left-[50%] p-20 max-lg:px-8 box-border overflow-hidden break-words">
                        {!! $post->content !!}
                    </div>
                @else
                    <div class="relative">
                        <img class="w-full " src="{{ url($post->thumbnail_link)}}" alt="">
                        @if($post->content)
                        <div id="content" class="absolute top-0 w-[800px] max-lg:w-full max-lg:max-w-full max-lg:py-4 max-lg:px-8 top-[50%] left-[50%] transform -translate-x-1/2 -translate-y-1/2 p-4 max-lg:px-2 box-border overflow-hidden break-words">
                            {!! $post->content !!}
                        </div>
                        @endif
                    </div>
                @endif

            @endforeach
        </div>

    </div>
@endsection
@section('scripts')
  @vite('resources/js/promotion/promotion.js')
@endsection
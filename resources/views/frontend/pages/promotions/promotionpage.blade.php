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
    <div class="text-left mb-12 mt-40 max-lg:mt-20">
        {{-- @dd($seo) --}}
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
                            <div class="flex gap-4 overflow-auto">
                                @foreach($post['images'] as $image) 
                                    <img src="{{url($image->image_link)}}" alt="">
                                @endforeach
                            </div>
                        </div>
                        <div class="flex justify-between max-md:flex-col max-md:items-center gap-4">
                            <div class="max-lg:hidden"></div>
                            <div class="flex gap-4">
                                <button class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-green-500 rounded-[30px]">
                                    <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/line.png" alt=""></span>
                                    <span>@fiber-true</span>
                                </button>
                                <button class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-red-500 rounded-[30px]">
                                    <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/tell.png" alt=""></span>
                                    <span>ติดต่อสอบถาม</span>
                                </button>
                            </div>
                            <div id="moreDetail" class="flex items-center gap-1 cursor-pointer" data-index="{{$post->id}}">
                                <button class="font-semibold">รายละเอียดเพิ่มเติม</button>
                                <button class="">
                                    <img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/arrowicon.png" alt="">
                                </button>
                            </div>
                        </div>
                        <div id="promotionCk" data-index="{{$post->id}}" class="overflow-hidden h-0 duration-300 p-10">
                            {!! $post->content !!}
                        </div>
                    </div>
                    
                    <hr class="border-[1px] border-[#838383]">
                @endforeach
            </div>
            @foreach ($post_all as $post)
                @if($post->pin == false) @continue @endif
                <div class="relative">
                    <img class="w-full " src="{{ url($post->thumbnail_link)}}" alt="">
                    <div class="absolute top-0">{!! $post->content !!}</div>
                    @if($post->id == 137)
                    <div class="absolute top-[60%] left-[50%] flex gap-4 transform -translate-x-1/2 -translate-y-1/2">
                        <button class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-green-500 rounded-[30px]">
                            <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/line.png" alt=""></span>
                            <span>@fiber-true</span>
                        </button>
                        <button class="w-[200px] max-lg:w-[150px] flex justify-center items-center text-white bg-red-500 rounded-[30px]">
                            <span><img class="w-[35px] h-[35px] max-md:w-[25px] max-md:h-[25px]" src="/icons/tell.png" alt=""></span>
                            <span>ติดต่อสอบถาม</span>
                        </button>
                    </div>
                    @endif
                </div>
            @endforeach
        </div>

    </div>
@endsection
<script>
</script>
@section('scripts')
  @vite('resources/js/promotion/promotion.js')
@endsection
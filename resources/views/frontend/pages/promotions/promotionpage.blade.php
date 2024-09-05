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
    <div class="text-left my-12">
        {{-- @dd($seo) --}}
        <div class="w-4/5 mx-auto">
            <img class="w-full" src="{{$seo->cate_thumbnail}}" alt="">
        </div>
        <div class="w-4/5 my-4 mx-auto text-center">
            <h1 class="text-[25px]">{{$seo->cate_h1}}</h1>
            <h1 class="text-[20px]">{!! nl2br(e($seo->cate_h2)) !!}</h1>
        </div>
        {{-- @dd($post_all) --}}
        <div class="bg-[#F2FBFF] py-2">
            <div class="w-4/5 mx-auto flex flex-col gap-4 my-4">
                @foreach ($post_all as $post)
                    <div class="">
                        <h2 class="text-center text-xl text-[#CE090E] font-semibold">{{$post->title}}</h2>
                        <div class="flex justify-center gap-4">
                            <img src="/upload/2024/09/05/111(2).png" alt="">
                            <img src="/upload/2024/09/05/111(2).png" alt="">
                            <img src="/upload/2024/09/05/111(2).png" alt="">
                        </div>
                        <div class="flex justify-between">
                            <div></div>
                            <div class="flex gap-4">
                                <button class="w-[200px] text-white bg-green-500">@fiber-true</button>
                                <button class="w-[200px] text-white bg-red-500">ติดต่อสอบถาม</button>
                            </div>
                            <div class="" id="more">
                                <span>รายละเอียดเพิ่มเติม</span>
                                <span class="">+</span>
                            </div>
                        </div>
                        <div id="promotionCk" class="">
                            {!! $post->content !!}
                        </div>
                    </div>
                    
                    <hr class="border-[1px] border-[#838383]">
                @endforeach
            </div>
            <img class="w-full" src="/upload/2024/09/05/footimage.png" alt="">
        </div>

    </div>
@endsection
<script>
    // let swiper = document.querySelector('.mySwiper')
    // console.log("ogo", swiper)
    // swiper.remove();
    import './resources/js/global_js/hide_banner.js'
    // const promotionCk = document.querySelector('#promotionCk');
    // promotionCk.addEventListener('click', () => {

    // })
</script>
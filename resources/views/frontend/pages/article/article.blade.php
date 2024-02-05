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
    <div class="text-left my-12 px-3">
        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container px-3 ">
            <div class="mx-auto w-[90%] max-2xl:w-4/5 max-lg:w-full">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text  2xl:text-[1.5rem] md:text-[20px]  text-[18px]">บทความ</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        {{-- @dd($post_all) --}}
        <div class="max-w-[1536px] mx-auto flex flex-col gap-4 my-10">
            @foreach ($post_all as $post)
                <div class="">
                    <div class="item flex max-xs:flex-col  gap-4 relative">
                        <a href="{{ url('article/' . $post->keyword) }}">
                            <div class="w-[350px] h-[200px] max-xs:w-full max-xs:h-[150px] shadow-md">
                                <img class="w-full h-full" src="{{ url($post->thumbnail_link) }}" alt="">
                            </div>
                        </a>


                        <div class="flex flex-col w-full gap-y-4">
                            <div class="flex justify-between w-full">
                                <a href="{{ url('article/' . $post->keyword) }}">
                                    <h1 class="text-[20px] font-semibold">{{ $post->title }}</h1>
                                </a>
                                <p class="text-[20px] font-semibold max-xs:hidden">
                                    @if ($post->created_at)
                                        {{ $post->created_at->locale('th')->addYears(543)->isoFormat('D MMM Y') }}
                                    @endif
                                </p>
                            </div>

                            <div class="">
                                {{-- @dd($post) --}}
                                {{-- <p>{!!$post->content!!}</p> --}}
                                <?php
                                $content = strip_tags($post->content); // ลบแท็ก HTML
                                $trimmed_content = mb_substr($content, 0, 250); // ตัดคำเหลือ 300 ตัวอักษร
                                
                                // echo "";
                                
                                ?>
                                <p class="text-[16px] max-xs:text-[14px] mb-4">{{ $trimmed_content }}.........</p>
                            </div>
                        </div>

                    </div>
                    <div class="flex justify-end">
                        <a href="{{ url('article/' . $post->keyword) }}" class="">
                            <p
                                class="text-[16px] font-semibold border border-red-600 rounded-full px-2 py-1 cursor-pointer hover:bg-red-700">
                                อ่านต่อ</p>
                        </a>
                    </div>
                </div>

                <hr>
            @endforeach

            <div class="">
                {{ $post_all->links() }}
            </div>

        </div>

    </div>
@endsection

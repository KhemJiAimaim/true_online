@extends('frontend.layouts.main')

@section('title', 'วิธีการสั่งซื้อ')

@section('content')
<div class="text-left mt-[120px] max-xl:mt-[74px]">
  <div class="p-8 h-20" style="background: var(--RP-GD, linear-gradient(180deg, #EC1F25 0%, #CD1A70 100%));">
    <h1 class=" text-white text-center text-[22px] font-medium">{{$post->keyword}}</h1>
  </div>
  <div class="w-full mt-4 mx-auto max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[95%]">
    <figure>
      <img class="w-[1305px] h-[653px] max-lg:h-[350px] max-xs:h-[240px] mx-auto" src="{{$post->thumbnail_link}}" alt="">
    </figure>
    <h1 class="mt-8 mb-16 text-center 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">{{$post->title}}</h1>

    {{-- box content --}}
    <div class="w-full mb-4 max-w-[1536px]">
      {!! $post->content !!}
    </div>
  </div>
  
</div>

@endsection

@section('scripts')
  @vite('resources/js/howtobuy_product/howtobuy.js')
@endsection
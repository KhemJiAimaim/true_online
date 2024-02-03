@extends('frontend.layouts.main')

@section('content')
  <div class="text-left my-16 px-3">
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
    <div class="max-w-[1536px] mx-auto flex flex-col gap-4 ">
      @foreach($post_all as $post)
      <div class="flex gap-4">
        <a href="{{ url('article/'.$post->keyword) }}">
          <div class="w-[200px] h-[200px]">
            <img class="w-full h-full" src="{{ url($post->thumbnail_link) }}" alt="">
          </div>
        </a>

        <div>
          <a href="{{ url('article/'.$post->keyword) }}">
            <h1>{{$post->title}}</h1>
          </a>
          {{-- @dd($post) --}}
          <p>{{$post->description}}</p>
           
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

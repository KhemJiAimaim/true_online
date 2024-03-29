<style>
    html,
    body {
        /* position: relative; */
        height: 100%;
    }

    body {
        background: #ffffff;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        font-size: 14px;
        color: #000;
        margin: 0;
        padding: 0;
    }

    swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        display: flex;
        justify-content: center;
        align-items: center;

    }

    swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    swiper-slide-mobile img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    @media (max-width: 720px) {
        swiper-slide img {
            width: 100%;
            height: 150px;
        }
    }
</style>


<swiper-container class="mySwiper max-uu:mt-[8.5rem] mt-[7.5rem] max-xl:mt-[4.5rem] cursor-pointer" pagination="true"
    pagination-dynamic-bullets="true" loop="true" autoplay-delay="6000">
    @if ($slide_image)
    @foreach ($slide_image as $image)
        @if ($image->is_footer == 0)
            <swiper-slide>
                <img src="/{{ $image->ad_image }}" alt="" class="w-full h-auto">
            </swiper-slide>
        @endif
    @endforeach
@endif

    {{-- @dd($path) --}}
  
    {{-- <swiper-slide ><img src="{{ asset('images/14.webp') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{ asset('images/13.webp') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{ asset('images/14.webp') }}" alt=""></swiper-slide> --}}
</swiper-container>


<!-- mobile swiper -->



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

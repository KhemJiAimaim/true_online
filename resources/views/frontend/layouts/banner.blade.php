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


<swiper-container class="mySwiper relative z-[-1]" pagination="true" pagination-dynamic-bullets="true" loop="true"
    autoplay-delay="2000">
    <swiper-slide ><img src="{{ asset('images/13.webp') }}" alt=""></swiper-slide>
    <swiper-slide ><img src="{{ asset('images/14.webp') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{ asset('images/13.webp') }}" alt=""></swiper-slide>
    <swiper-slide><img src="{{ asset('images/14.webp') }}" alt=""></swiper-slide>
</swiper-container>


<!-- mobile swiper -->



<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-element-bundle.min.js"></script>

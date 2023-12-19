@extends('frontend.layouts.main')
@section('content')
<div class="text-left mt-[120px] max-xl:mt-[74px]">
  <div class="p-8 h-20" style="background: var(--RP-GD, linear-gradient(180deg, #EC1F25 0%, #CD1A70 100%));">
    <h1 class=" text-white text-center text-[22px] font-medium">วิธีการสั่งซื้อ</h1>
  </div>
  <div class="w-full mt-4 mx-auto max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[95%]">
    @php
    switch ($cate) {
      case 'fiber':
        $image_thumbnail = "/images/howtobuy/fiber.png";
        $header = "วิธีสั่งซื้อ เน็ตบ้านไฟเบอร์";
        break;
      case 'bermonth':
        $image_thumbnail = "/images/howtobuy/bermonthly.png";
        $header = "วิธีสั่งซื้อ เบอร์มงคล";
        break;
      case 'paysim':
        $image_thumbnail = "/images/howtobuy/paysim.png";
        $header = "วิธีสั่งซื้อ ซิมเต็มเงินแพ็กเกจเสริม";
        break;
      case 'travelsim':
        $image_thumbnail = "/images/howtobuy/travelsim.png";
        $header = "วิธีสั่งซื้อ ซิมท่องเที่ยงในประเทศ และต่างประเทศ";
        break;
      default:
        $image_thumbnail = "/images/howtobuy/fiber.png";
        $header = "หาหน้าไม่เจอ";
        break;
    }
    @endphp
    <figure>
      <img class="w-[1305px] h-[653px] max-lg:h-[350px] max-xs:h-[240px] mx-auto" src="{{$image_thumbnail}}" alt="">
    </figure>
    <h1 class="mt-8 mb-16 text-center 2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium">{{$header}}</h1>

    {{-- box content --}}
    <div class="w-full mb-4 max-w-[1536px]">
      <p>Lorem ipsum dolor sit amet consectetur. Vulputate aliquam nulla ut suspendisse sollicitudin molestie. Mattis porttitor neque
        lectus amet nibh purus malesuada. Imperdiet dolor nulla.</p>
      <p>Lorem ipsum dolor sit amet consectetur. Vulputate aliquam nulla ut suspendisse sollicitudin molestie. Mattis porttitor neque
        lectus amet nibh purus malesuada. Imperdiet dolor nulla.</p>
        
        <br><br>
      <h1 class="my-2 text-lg">Lorem ipsum dolor sit amet consectetur. Tortor convallis.</h1>
      <p>1.Lorem ipsum dolor sit amet consectetur. Dolor mi purus dolor proin at phasellus. Elementum non ut lectus sed.
        Mi turpis pulvinar sapien morbi pellentesque. Eget eu ut nisi in vel pharetra eu neque. Diam vehicula semper ornare eget. Faucibus.
      </p>
      <img src="/images/howtobuy/bermonthly.png" alt="">
      <br><br>
      <h1 class="my-2 text-lg">Lorem ipsum dolor sit amet consectetur. Tortor convallis.</h1>
      <p>1.Lorem ipsum dolor sit amet consectetur. Dolor mi purus dolor proin at phasellus. Elementum non ut lectus sed.
        Mi turpis pulvinar sapien morbi pellentesque. Eget eu ut nisi in vel pharetra eu neque. Diam vehicula semper ornare eget. Faucibus.
      </p>
      <p>2.Lorem ipsum dolor sit amet consectetur. Dolor mi purus dolor proin at phasellus. Elementum non ut lectus sed.
        Mi turpis pulvinar sapien morbi pellentesque. Eget eu ut nisi in vel pharetra eu neque. Diam vehicula semper ornare eget. Faucibus.
      </p>
      <p>3.Lorem ipsum dolor sit amet consectetur. Dolor mi purus dolor proin at phasellus. Elementum non ut lectus sed.
        Mi turpis pulvinar sapien morbi pellentesque. Eget eu ut nisi in vel pharetra eu neque. Diam vehicula semper ornare eget. Faucibus.
      </p>
      <br>

      <img src="/images/howtobuy/travelsim.png" alt="">
      <h1 class="my-2 text-lg">Lorem ipsum dolor sit amet consectetur. Tortor convallis.</h1>
      <p>1.Lorem ipsum dolor sit amet consectetur. Dolor mi purus dolor proin at phasellus. Elementum non ut lectus sed.
        Mi turpis pulvinar sapien morbi pellentesque. Eget eu ut nisi in vel pharetra eu neque. Diam vehicula semper ornare eget. Faucibus.
      </p>
      <p>2.Lorem ipsum dolor sit amet consectetur. Dolor mi purus dolor proin at phasellus. Elementum non ut lectus sed.
        Mi turpis pulvinar sapien morbi pellentesque. Eget eu ut nisi in vel pharetra eu neque. Diam vehicula semper ornare eget. Faucibus.
      </p>
      <p>3.Lorem ipsum dolor sit amet consectetur. Dolor mi purus dolor proin at phasellus. Elementum non ut lectus sed.
        Mi turpis pulvinar sapien morbi pellentesque. Eget eu ut nisi in vel pharetra eu neque. Diam vehicula semper ornare eget. Faucibus.
      </p>
      <br>
    </div>
  </div>
  
</div>

@endsection

@section('scripts')
  @vite('resources/js/howtobuy_product/howtobuy.js')
@endsection
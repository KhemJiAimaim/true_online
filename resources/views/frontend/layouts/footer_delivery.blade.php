@php
    if(isset($main_menu) && $main_menu->cate_url == 'fiber') {
        $bg = 'bg-gradient-to-r from-[#5642CD] to-[#00BCFF]';
    } else if (isset($main_menu) && $main_menu->cate_url == 'bermonthly') {
        $bg = 'bg-gradient-to-r from-[#960004] to-[#EC1F25]';
    } else if (isset($main_menu) && $main_menu->cate_url == 'prepaid_sim') {
        $bg = 'bg-gradient-to-r from-[#F6911D] to-[#ED4312]';
    } else if (isset($main_menu) && $main_menu->cate_url == 'move') {
        $bg = 'bg-gradient-to-r from-[#F6911D] to-[#ED4312]';
    } else if (isset($main_menu) && $main_menu->cate_url == 'travel_sim') {
        $bg = 'bg-gradient-to-r from-[#960004] to-[#EC1F25]';
    } else {
        $bg = 'bg-gradient-to-r from-[#960004] to-[#EC1F25]';
    }
@endphp
<div class="{{$bg}} mt-auto overflow-hidden relative">
  <img class=" absolute right-0 top-0" src="/images/circle/Intersect (3).png" alt="">
  <div class="p-6 flex justify-center gap-[6rem] 2xl:gap-[15rem]">
      <a href="https://line.me/ti/p/~@berhoro" target="_blank" class="flex flex-col items-center cursor-pointer z-50">
          <img class="mt-2 mb-6 max-xs:w-[50px]" src="/images/code-qr.png" alt="">
          <p class="text-[1rem] text-white">ช้อปผ่านแชท</p>
          <p class="text-[0.8rem] text-white">Line ID QR Coed</p>
      </a>
      <a href="{{ url('/delivery') }}" class="flex flex-col items-center cursor-pointer z-50">
          <img class="max-xs:w-[80px] " src="/images/Rectangle 1245.png" alt="">
          <p class="text-[1rem] text-white">แจ้งขนส่ง</p>
          <p class="text-[0.9rem] text-white">เช็ครหัสขนส่งสินค้า</p>
      </a>
  </div>
  <img class=" absolute left-0 bottom-0 top-0" src="/images/circle/Intersect (4).png" alt="">
</div>
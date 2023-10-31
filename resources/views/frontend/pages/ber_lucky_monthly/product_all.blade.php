@extends('frontend.layouts.main')
@section('content')
<div>
  <div class="max-w-[1280px] w-full mx-auto p-10 flex justify-between gap-10">
    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/icon-money.png" alt="">
      <p>เบอร์การเงิน</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/icon-money.png" alt="">
      <p>เบอร์การเงิน</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/icon-money.png" alt="">
      <p>เบอร์การเงิน</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/icon-money.png" alt="">
      <p>เบอร์การเงิน</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/icon-money.png" alt="">
      <p>เบอร์การเงิน</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/icon-money.png" alt="">
      <p>เบอร์การเงิน</p>
    </div>
  </div>

  {{-- มหัศจรรย์ --}}
  <div class="title-plate-container ">
    <div class="title-plate-line"></div>
    <div class="plate-group">
        <div class="plate-box-s">
            <div class="plate-circleS"></div>
            <div class="title-plate-textboxS"></div>
        </div>
        <div class="title-plate-textboxC">
            <p class="plate-text">เบอร์มงคล เบอร์เด็ด เบอร์มังกร เสริมดวง</p>
        </div>
        <div class="plate-box-e">
            <div class="title-plate-textboxE"></div>
            <div class="plate-circleE"></div>
        </div>
    </div>
  </div>
  {{-- มหัศจรรย์ --}}

  <!-- search box -->
  <div class="max-w-[1280px] w-full bg-[#F8F9FA] mx-auto my-4 rounded-[20px]">
    <div class="flex">
      <div class="w-full">
        left
      </div>
      <div class="w-full">
        right
      </div>
    </div>
    <div class="w-full flex justify-center gap-10">
      <button class="px-4 py-1 border border-red-400 rounded-[15px]">คืนค่า</button>
      <button class="px-4 py-1 bg-[#EC1F25] text-white rounded-[15px]">ค้นหา</button>
    </div>
  </div>
  <!-- end search box -->

  <!-- box all product -->
  <div class="max-w-[1280px] w-full grid grid-cols-4 max-xl:grid-cols-3 gap-4 mx-auto p-4 z-0">
    @for($i = 1; $i<=20; $i++) 
    <div class="drop-shadow-md">
      <div
          class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
          <div class="flex justify-start items-center">
              <p class="text-white mr-2">เกรด</p>
              <p class="text-white font-medium text-[1rem]">A+</p>
          </div>
          <div
              class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 transform -skew-x-12 px-2 flex justify-end items-center">
              <p class="text-white mr-2">ผลรวม</p>
              <p class="text-white font-medium text-[1rem]">59</p>
          </div>
      </div>
  
      <div class="bg-white"">
          <div class="flex justify-center py-10 ">
              <p class="text-3xl text-center">063-782-5555</p>
          </div>
      </div>
  
      <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
          <img src="images/Ellipse 6.png" alt="" class="px-4">
          <p class="text-left text-[0.9rem] py-1 col-span-4">เน็ต Unlimited + โทร 1700 Mins</p>
      </div>
  
      <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2">
          <div class="grid grid-cols-3">
              <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
              <p class="text-white font-medium text-center text-3xl">99,999</p>
              <p class="text-white text-right text-[1rem] mt-2 ">บาท</p>
  
          </div>
      </div>
  
      <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center">
          <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
              <img src="images/mdi_cart-arrow-down.png" alt=""
                  class="cursor-pointer w-5 h-5 mx-2 my-2">
          </div>
          <div class="rounded-full border border-red-500 mb-4 mt-2 mx-1">
              <img src="images/Vector.png" alt="" class="cursor-pointer w-5 h-5 mx-2 my-2">
          </div>
          <a src="#"
              class="cursor-pointer flex items-center px-4  mb-2 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">รายละเอียด</a>
          <a src="#"
              class="cursor-pointer flex items-center px-4  mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white ">ซื้อเลย</a>
  
      </div>
    </div>
    @endfor
  </div>
  <!-- end box product -->
</div>
@endsection
@extends('frontend.layouts.main')
@section('content')
<div class="text-left">
  <div class="max-w-[1536px] max-2xl:max-w-[90%] max-lg:max-w-[100%] w-full mx-auto max-xs:mb-1 p-10 max-xs:p-4 flex justify-between gap-10 max-xs:gap-4">
    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/category/icon-money-menu.png" alt="">
      <p class="text-[11px]">เบอร์การเงิน</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/category/icon-work-menu.png" alt="">
      <p class="text-[11px]">เบอร์การงาน</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/category/icon-swarn-menu.png" alt="">
      <p class="text-[11px]">เบอร์หงส์</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/category/icon-dragon-menu.png" alt="">
      <p class="text-[11px]">เบอร์มังกร</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/category/icon-god-menu.png" alt="">
      <p class="text-[11px]">เบอร์กวนอู</p>
    </div>

    <div class="flex flex-col justify-center items-center">
      <img class="w-10 h-10" src="/icons/category/icon-healt-menu.png" alt="">
      <p class="text-[11px]">สุขภาพดี</p>
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
  <div class="max-w-[1536px] max-2xl:max-w-[100%] max-lg:max-w-[100%] w-full bg-[#F8F9FA] mx-auto my-4 p-6 rounded-[20px]">
    <div class="flex max-lg:flex-col gap-6">
      {{-- box left --}}
      <div class="w-full max-xl:max-w-[54%] max-lg:max-w-full">
        <div class="w-full p-4 flex flex-col bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[10px]">
          <label class="text-white" for="input-fortune">กรอกเบอร์โทร</label>
          <div class="w-full flex gap-2">
            <input class="w-full h-7 text-center rounded-[3px]" type="text" id="input-fortune" maxlength="10">
            <button class="w-full max-w-[20%] max-xs:max-w-[29%] bg-white rounded-[15px]" id="fortune-ber">วิเคราะห์เบอร์</button>
          </div>
        </div>

        <div class="mt-4 flex flex-col">
          <label class="" for="">ค้นหาเบอร์</label>
          <div class="flex gap-2">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" data-position="0" value="0" readonly>
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="1" maxlength="1" placeholder="-">
            <input class="w-6 h-7 mr-4 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="2" maxlength="1" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="3" maxlength="1" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="4" maxlength="1" placeholder="-">
            <input class="w-6 h-7 mr-4 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="5" maxlength="1" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" data-positionid="search-num" ="6 h-7" maxlength="1" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="7" maxlength="1" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="8" maxlength="1" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="9" maxlength="1" placeholder="-">
          </div>
        </div>

        <div class="mt-4 flex justify-between gap-4 max-xs:grid max-xs:grid-cols-2">
          <div class="flex flex-col">
            <label for="slc-sum">ผลรวม</label>
            <select class="w-36 max-lg:w-44 h-7 border border-[#838383] rounded-[3px]" name="slc-sum" id="slc-sum">
              <option value="">ผลรวม</option>
              <option value="">30</option>
              <option value="">40</option>
              <option value="">50</option>
            </select>
          </div>

          <div class="flex flex-col order-1 max-xs:col-span-2">
            <label for="slc-category">หมวดหมู่เบอร์</label>
            <select class="w-52 max-xl:w-40 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" name="slc-category" id="slc-category">
              <option value="">หมวดหมู่เบอร์</option>
              <option value="">การเงิน</option>
              <option value="">การงาน</option>
              <option value="">ความรัก</option>
            </select>
          </div>

          <div class="flex flex-col">
            <label for="txt_favorite">ค้นหาเลขชุดที่ชอบ</label>
            <input class="w-80 max-xl:w-48 max-lg:w-80 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" type="text" name="txt_favorite" id="txt_favorite">
          </div>
        </div>

        <div class="mt-4 flex justify-between gap-4 max-xs:grid max-xs:grid-cols-2">
          <div class="flex flex-col">
            <label for="slc-sum">แพ็กเกจ</label>
            <select class="w-52 max-xl:w-36 max-lg:w-44 h-7 border border-[#838383] rounded-[3px]" name="slc-sum" id="slc-sum">
              <option value="">แพ็กเกจ</option>
              <option value="">เน็ต Unlimited + โทร 1700 Mins</option>
              <option value="">แพ็กเกจนี้ใช้ฟรี 3 เดือน</option>
              <option value="">พลังแห่งปัญญา การสนับสนุนค้ำจุน สติปัญญา</option>
            </select>
          </div>

          <div class="flex flex-col">
            <label for="slc-category">เรียงลำดับ ราคา</label>
            <select class="w-32 max-lg:w-40 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" name="slc-category" id="slc-category">
              <option value="">เรียงลำดับ ราคา</option>
              <option value="">ราคาน้อยไปมาก</option>
              <option value="">ราคามากไปน้อย</option>
            </select>
          </div>

          <div class="flex flex-col max-xs:col-span-2">
            <label for="txt_favorite">ช่วงราคา</label>
            <div class="flex gap-4 w-80 max-xl:w-48 max-lg:w-80 max-xs:w-full">
              <input class="w-full h-7 border border-[#838383] rounded-[3px] price-input" type="text" name="price-low" id="price-low">
              <input class="w-full h-7 border border-[#838383] rounded-[3px] price-input" type="text" name="price-hight" id="price-hight">
            </div>
          </div>
        </div>

        <div class="flex max-xl:flex-col max-xl:gap-4 justify-between mt-4">
          <div class="flex flex-col">
            <label for="">ตัวเลขที่ชอบ</label>
            <div class="flex gap-1 text-white">
              <button class="w-6 h-7 bg-gradient-to-r from-[#5741CD] to-[#00ACEE] rounded-[3px]">0</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">1</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">2</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">3</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">4</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">5</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">6</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">7</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">8</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">9</button>
            </div>
          </div>

          <div class="flex flex-col">
            <label for="">ตัวเลขที่ไม่ชอบ</label>
            <div class="flex gap-1 text-white">
              <button class="w-6 h-7 bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[3px]">0</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">1</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">2</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">3</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">4</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">5</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">6</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">7</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">8</button>
              <button class="w-6 h-7 bg-[#838383] rounded-[3px]">9</button>
            </div>
          </div>
        </div>

      </div>
      
      {{-- border center --}}
      <div class="border  border-1 border-[#838383]">
      </div>

      {{-- box right --}}
      <div class="w-full flex flex-col justify-between">
        <div class="flex flex-col max-lg:mb-4">
          <p class="mb-2">เสริมดวงด้าน</p>
          <div class="flex flex-wrap gap-3">
            <button class="relative p-2 bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[5px] group">
              <img style="filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);" src="/icons/category/icon-money.png" alt="">
              <div class="w-10 h-10 absolute -top-6 left-3 hidden group-hover:block">
                <img class="scale-150" src="/icons/category/union.png" alt="">
                <p class="w-full text-xs absolute top-0 left-0 text-center">การงาน</p>
              </div>
            </button>
            @for($i = 1; $i <= 9; $i++)
            <button class="relative p-2 bg-white rounded-[5px] group">
              <img src="/icons/category/icon-money.png" alt="">
              <div class="w-10 h-10 absolute -top-6 left-3 hidden group-hover:block">
                <img class="scale-150" src="/icons/category/union.png" alt="">
                <p class="w-full text-xs absolute top-0 left-0 text-center">การงาน</p>
              </div>
            </button>
            @endfor
          </div>
        </div>

        <div class="flex flex-col">
          <p class="mb-2">หมวดหมู่เบอร์</p>
          <div class="flex flex-wrap gap-3">
            <button class="relative p-2 bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[5px] group">
              <img style="filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);" src="/icons/category/icon-swarn.png" alt="">
              <div class="w-10 h-10 absolute -top-6 left-3 hidden group-hover:block">
                  <img class="scale-150" src="/icons/category/union.png" alt="">
                  <p class="w-full text-xs absolute top-0 left-0 text-center">การงาน</p>
              </div>
            </button>
            @for($i = 1; $i <= 25; $i++)
            <button class="relative p-2 bg-white rounded-[5px] group">
              <img src="/icons/category/icon-swarn.png" alt="">
              <div class="w-10 h-10 absolute -top-6 left-3 hidden group-hover:block">
                <img class="scale-150" src="/icons/category/union.png" alt="">
                <p class="w-full text-xs absolute top-0 left-0">การเงิน</p>
              </div>
            </button>
            @endfor
          </div>
        </div>
      </div>
    </div>

    <div class="w-full mt-4 flex justify-center gap-10">
      <button class="px-4 py-1 border border-red-400 rounded-[15px]">คืนค่า</button>
      <button class="px-4 py-1 bg-[#EC1F25] text-white rounded-[15px]">ค้นหา</button>
    </div>

  </div>
  <!-- end search box -->

  {{-- result search --}}
  <div class="text-center">
    <h1 class="font-bold text-xl">แหล่งรวมเบอร์มงคล</h1>
    <p class="text-[#838383]">เบอร์มงคล พร้อมแพ็กเกจ ที่คุณอาจสนใจ</p>
    <p class="text-[#EC1F25]">เบอร์มังกร ที่ค้นพบ 500 เบอร์</p>
  </div>

  <!-- box all product -->
  <div class="max-w-[1536px] max-2xl:max-w-[90%] max-lg:max-w-[100%] w-full grid grid-cols-4 max-2xl:grid-cols-3 max-lg:grid-cols-2 max-xs:grid-cols-1 gap-4 mx-auto p-4 z-0">
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
  
      <div class="bg-white">
          <a href="{{ url('/detailber/0933501625') }}"> 
            <div class="flex justify-center py-10 ">
              <h1 class="text-3xl font-medium text-center">063-782-5555</h1>
            </div>
          </a>
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

      <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4 ">
          <div
              class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
              <img src="/images/mdi_cart-arrow-down.png" alt=""
                  class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
          </div>
          <div
              class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
              <img src="/images/icons8-line-app (1) 9.png" alt=""
                  class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
          </div>

          <a src="#"
              class="cursor-pointer flex items-center  px-4 mb-4 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
          <a src="#"
              class="cursor-pointer flex items-center px-6  mb-4 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</a>
      </div>
    </div>
    @endfor
  </div>
</div>



<!-- end box product -->
<div class="bg-gradient-to-r from-[#960004] to-[#EC1F25] ">
  <div class="p-6 flex justify-center gap-[2rem] md:gap-[4rem] 2xl:gap-[15rem]">
      <div class="flex flex-col items-center">
          <img class="mt-2 mb-6 max-xs:w-[50px]" src="/images/code-qr.png" alt="">
          <p class="text-[1rem] text-white">ช้อปผ่านแชท</p>
          <p class="text-[0.8rem] text-white">Line ID QR Coed</p>
      </div>
      <div class="flex flex-col items-center">
          <img class="max-xs:w-[80px] " src="/images/Rectangle 1245.png" alt="">
          <p class="text-[1rem] text-white">แจ้งขนส่ง</p>
          <p class="text-[0.8rem] text-white">เช็ครหัสขนส่งสินค้า</p>
      </div>
  </div>
</div>
@endsection

@section('scripts')
  @vite('resources/js/bermonthly_lucky/allproduct.js')
@endsection
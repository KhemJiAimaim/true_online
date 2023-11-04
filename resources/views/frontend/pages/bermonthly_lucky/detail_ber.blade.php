@extends('frontend.layouts.main')
@section('content')
<div class="text-left">

  {{-- box fortune --}}
  <div class="bg-[#F8F9FA] mb-10">
    <div class="max-w-[1536px] max-2xl:max-w-[80%] max-lg:max-w-[80%] max-xs:max-w-[80%] py-10 mx-auto flex max-xs:flex-col justify-center max-2xl:grid max-2xl:grid-cols-2 max-xs:grid-cols-1 gap-4">
      <div class="bg-white flex flex-col p-4 rounded-[10px] drop-shadow-md">
        <h1 class="text-lg font-semibold">หมายเลขเบอร์</h1>
        @php $formattedTel = substr($tel, 0, 3) . '-' . substr($tel, 3, 3) . '-' . substr($tel, 6); @endphp
        <h1 class="text-4xl font-semibold mt-4">{{$formattedTel}}</h1>
      </div>
  
      <div class="bg-white p-4 rounded-[10px] drop-shadow-md">
        <div class="flex justify-between gap-4">
          <h1 class="text-lg font-semibold">กราฟคะแนน</h1>
          <div class="flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
              <path d="M2.66797 2.66668V13.3333C2.66797 13.687 2.80844 14.0261 3.05849 14.2762C3.30854 14.5262 3.64768 14.6667 4.0013 14.6667H12.0013C12.3549 14.6667 12.6941 14.5262 12.9441 14.2762C13.1942 14.0261 13.3346 13.687 13.3346 13.3333V5.56134C13.3346 5.38372 13.2991 5.20788 13.2302 5.04417C13.1613 4.88046 13.0603 4.73217 12.9333 4.60801L9.9733 1.71334C9.72421 1.46978 9.38968 1.33339 9.0413 1.33334H4.0013C3.64768 1.33334 3.30854 1.47382 3.05849 1.72387C2.80844 1.97392 2.66797 2.31305 2.66797 2.66668Z" stroke="#EC1F25" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.33594 1.33334V4.00001C9.33594 4.35363 9.47641 4.69277 9.72646 4.94282C9.97651 5.19287 10.3156 5.33334 10.6693 5.33334H13.3359" stroke="#EC1F25" stroke-width="1.5" stroke-linejoin="round"/>
            </svg>
            <p class="text-red-500 underline">ตาราง</p>
          </div>
        </div>
        <div class="mt-2 flex items-center justify-between gap-4 max-2xl:gap-2">
          <div class="">
            <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76" fill="none">
              <circle cx="38" cy="38" r="30.5" stroke="black" stroke-width="15"/>
            </svg>
          </div>
          <div class="w-full">
            <div class="flex justify-between items-center gap-4">
              <div class="flex gap-1">
                <div class="w-4 h-4 bg-[#2AB200] rounded-[2px]"></div>
                <p class="w-full">ความดี/สุข</p>
              </div>
              <div class="text-[#2AB200]">999</div>
            </div>
            <div class="flex justify-between items-center gap-4">
              <div class="flex gap-1">
                <div class="w-4 h-4 bg-[#CE090E] rounded-[2px]"></div>
                <p class="w-full">ความร้าย/ทุกข์</p>
              </div>
              <div class="text-[#CE090E]">999</div>
            </div>
            <div class="flex justify-between items-center gap-4">
              <div class="flex gap-1">
                <div class="w-4 h-4 bg-[#838383] rounded-[2px]"></div>
                <p class="w-full">ความว่างเปล่า</p>
              </div>
              <div class="text-[#838383]">999</div>
            </div>
          </div>
        </div>
      </div>
  
      <div class="bg-white p-4 rounded-[10px] drop-shadow-md">
        <div class="">
          <h1 class="text-lg font-semibold">แพ็กเกจ/ความหมาย</h1>
          <div class="flex items-center gap-4 mt-4">
            <img src="/icons/package.png" alt="">
            <p class="">เน็ต Unlimited + โทร 1700 Mins</p>
          </div>
        </div>
      </div>
  
      <div class="flex gap-4">
        <div class="w-28 max-2xl:w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
          <h1 class="text-lg font-semibold">เกรด</h1>
          <h1 class="text-4xl font-semibold mt-4">A+</h1>
        </div>
    
        <div class="w-28 max-2xl:w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
            <h1 class="text-lg font-semibold">ผลรวม</h1>
            <h1 class="text-4xl font-semibold mt-4">99</h1>
        </div>
      </div>
    </div>
  </div>
  {{-- box fortune --}}

  {{-- มหัศจรรย์ --}}
  <div class="max-w-[1536px]  max-2xl:max-w-[100%] pt-10 mx-auto">
    <div class="title-plate-container">
      <div class="title-plate-line"></div>
      <div class="plate-group">
          <div class="plate-box-s">
              <div class="plate-circleS"></div>
              <div class="title-plate-textboxS"></div>
          </div>
          <div class="title-plate-textboxC">
              <p class="plate-text">คำทำนายคู่เลข</p>
          </div>
          <div class="plate-box-e">
              <div class="title-plate-textboxE"></div>
              <div class="plate-circleE"></div>
          </div>
      </div>
    </div>
  </div>
  {{-- มหัศจรรย์ --}}

  {{-- box package --}}
  <div class="max-w-[1536px] max-2xl:max-w-[80%] pt-10 mx-auto">
    <div class="">
      <div class="flex">
        <button id="btn-package" class="py-2 px-4 text-white bg-gradient-to-r from-[#F6911D] to-[#ED4312] rounded-t-[10px]">รายละเอียด แพ็กเกจ</button>
        <button id="btn-condition" class="py-2 px-6 text-white bg-[#838383] rounded-t-[10px]">เงื่อนไข</button>
      </div>
      {{-- content detail --}}
      <div id="box-package" class="p-2 border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px]">
        <p>ย้ายค่ายเบอร์เดิมรับส่วนลดรายเดือน 25% เหลือ 1499.- (ปกติ 1999.-) นาน 12 เดือน</p>
        <div class="flex gap-2 mb-2">
          <div class="p-1 border border-solid border-1 border-[#ED4312] rounded-[10px]">
            <img src="/icons/truecard.png" alt="">
          </div>
          <div class="">
            <p>รับสิทธิ์ True Black card นาน 12 เดือน</p>
          </div>
        </div>
        <div class="flex gap-2 mb-2">
          <div class="p-1 border border-solid border-1 border-[#ED4312] rounded-[10px]">
            <img src="/icons/premierleague.png" alt="">
          </div>
          <div class="">
            <p>รับชมพรีเมียร์ ฟุตบอล (EPL)    ได้ตลอดฤดูกาล 2023-2024</p>
          </div>
        </div>
        <div class="flex gap-2 mb-2">
          <div class="p-1 border border-solid border-1 border-[#ED4312] rounded-[10px]">
            <img src="/icons/trueunlock.png" alt="">
          </div>
          <div class="">
            <p>รับชมความบันเทิงซีรีย์ดัง และ EPL FanPack ฤดูกาล 2023/24 (เลือกชมทีมโปรด 1 ทีม) รับสิทธิ์กด *555*56# โทรออก</p>
          </div>
        </div>
        <p>รับฟรีโค้ดความบันเทิง iQIYI,WeTV,Viu   จนถึง 31 ธ.ค. 66</p>
        <p>รับสิทธิประกันชีวิตและอุบัติเหตุ ความคุ้มครองรวมสูงสุด 320,000 บาท</p>
        <div class="w-full">
          <p class="text-center text-[#EC1F25]">แสดงเพิ่มเติม ˅</p>
        </div>
      </div>

      {{-- content condition --}}
      <div id="box-condition" class="hidden p-2 border-solid border-2 border-[#ED4312] rounded-r-[10px] rounded-bl-[10px]">
        เงื่อนไขการได้รับสิทธิพิเศษ ย้ายค่ายเบอร์เดิมรับส่วนลดรายเดือน
      </div>
    </div>
  </div>
  {{-- box package --}}

  {{-- box meaning ber --}}
  <div class="max-w-[1536px] max-2xl:max-w-[80%] pt-10 mx-auto">
    @php
      // data test 
      $sum = 99;
      $meaning_sum = "พลังแห่งนักวางแผน มุ่งมั่นเด็ดเดี่ยว";
      $detail_sum = "พลังปัญญาบริสุทธ์ ผู้ใดได้ครอบครองหมายเลขนี้มักเป็นคนใฝ่ดี รักความยุติธรรม อบอุ่น อ่อนโยน ใจดี ใจเย็น เป็นคนมีสมาธิ มีสติในการครองตนอย่างดีเยี่ยม ชีวิตมักประสบความสำเร็จ งานดี เงินดี เป็นคนมีความสุขได้จากภายในจิตใจตนเอง
                      รู้เท่าทันความคิดตน สมถะ ชีวิตโดยรวมมักมีความสงบและสมดุล รู้จักความพอดี โดยทั่วไปชะตาของคุณค่อนข้างสุขสบาย มีคนอุปถัมป์ค้ำชูเป็นอย่างดี มีการเดินทาง และมีโอกาสดีๆในชีวิตเข้ามาหลายครั้งรวมถึงมีโชคมีลาภ เป็นเลขสมาธิดีอีกเลขหนึ่ง เหมาะจะใช้แก้ปัญหาให้คนใจร้อน หรือเด็กๆที่ไม่ค่อยมีสมาธิ เลขชุดนี้จะช่วยให้สงบใจเย็น อยู่ในศีล มีคุณธรรมและเห็นอกเห็นใจผู้อื่นมากขึ้น";
      $kuunum = 55;
      $kuunum_meaning = "พลังปัญญาบริสุทธ์";
      $kuunum_detail = "     พลังปัญญาบริสุทธ์ ผู้ใดได้ครอบครองหมายเลขนี้มักเป็นคนใฝ่ดี รักความยุติธรรม อบอุ่น อ่อนโยน ใจดี ใจเย็น เป็นคนมีสมาธิ มีสติในการครองตนอย่างดีเยี่ยม ชีวิตมักประสบความสำเร็จ งานดี เงินดี เป็นคนมีความสุขได้จากภายในจิตใจตนเอง
                            รู้เท่าทันความคิดตน สมถะ ชีวิตโดยรวมมักมีความสงบและสมดุล รู้จักความพอดี โดยทั่วไปชะตาของคุณค่อนข้างสุขสบาย มีคนอุปถัมป์ค้ำชูเป็นอย่างดี มีการเดินทาง และมีโอกาสดีๆในชีวิตเข้ามาหลายครั้งรวมถึงมีโชคมีลาภ เป็นเลขสมาธิดีอีกเลขหนึ่ง
                            เหมาะจะใช้แก้ปัญหาให้คนใจร้อน หรือเด็กๆที่ไม่ค่อยมีสมาธิ เลขชุดนี้จะช่วยให้สงบใจเย็น อยู่ในศีล มีคุณธรรมและเห็นอกเห็นใจผู้อื่นมากขึ้น";
    @endphp
    <div class="bg-[#F8F9FA] p-4 rounded-[10px]">
      <h1 class="text-lg font-semibold mb-1">ผลรวม {{$sum}} : {{$meaning_sum}}</h1>
      <p class="indent-8">{{$detail_sum}}</p>
    </div>

    <h1 class="text-lg font-semibold mt-2 mb-1">เบอร์มังกร</h1>
    @for($i = 1; $i <= 6; $i++)
    <div class="mb-4">
      <h1 class="text-lg font-semibold mb-1">คู่เลข {{$kuunum}} : {{$kuunum_meaning}}</h1>
      <p class="indent-8">{{$kuunum_detail}}</p>
    </div>
    @endfor
  </div>
  {{-- box meaning ber --}}

  {{-- box buy detail --}}
  <div class="mt-10 p-4 flex justify-center" style="box-shadow: 0px -4px 15px 0px rgba(0, 0, 0, 0.15);">
    <div class="flex justify-between items-center gap-2">
      <div class="flex items-center gap-2">
        <p>ราคา</p>
        <h1 class="text-2xl font-semibold">333,850</h1>
        <p>บาท</p>
      </div>
      <div class="border border-1 border-[#838383] h-full"></div>
      <div class="flex gap-2">
        <button id="buynow" data-id="0933501625" class="cursor-pointer flex items-center px-4 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
        <button id="addtocart" data-id="0933501625" class="group rounded-full border border-red-500 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
          <img src="/images/mdi_cart-arrow-down.png" alt="" class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
        </button>
        <a href="https://line.me/ti/p/~@berhoro" class="group rounded-full border border-red-500 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
          <img src="/images/icons8-line-app (1) 9.png" alt="" class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
        </a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  @vite('resources/js/bermonthly_lucky/detail_ber.js')
@endsection
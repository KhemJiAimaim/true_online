@extends('frontend.layouts.main')
@section('content')
<div class="text-left">

  {{-- box fortune --}}
  <div class="bg-[#F8F9FA] mb-10 ">
    <div class="max-w-[1536px] max-2xl:max-w-[100%] max-lg:max-w-[100%] max-xs:max-w-[80%] py-10 mx-auto flex max-xs:flex-col justify-center gap-4">
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
  
      {{-- <div class="bg-white p-4 rounded-[10px] drop-shadow-md">
        <div class="">
          <h1 class="text-lg font-semibold">แพ็กเกจ/ความหมาย</h1>
          <div class="flex items-center gap-4 mt-4">
            <img src="/icons/package.png" alt="">
            <p class="">เน็ต Unlimited + โทร 1700 Mins</p>
          </div>
        </div>
      </div> --}}
  
      <div class="grid grid-cols-2 gap-4">
        <div class="w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
          <h1 class="text-lg font-semibold">เกรด</h1>
          <h1 class="text-4xl font-semibold mt-4">A+</h1>
        </div>
    
        <div class="w-full bg-white text-center p-4 rounded-[10px] drop-shadow-md">
            <h1 class="text-lg font-semibold">ผลรวม</h1>
            <h1 class="text-4xl font-semibold mt-4">99</h1>
        </div>
      </div>
    </div>
  </div>
  {{-- box fortune --}}

  {{-- มหัศจรรย์ --}}
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
  {{-- มหัศจรรย์ --}}

  <div class="max-w-[1536px] max-2xl:max-w-[80%] py-10 mx-auto">

    {{-- box meaning sum --}}
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
    {{-- box meaning sum --}}

    {{-- box meaning ber --}}
    <h1 class="text-lg font-semibold mt-2 mb-1">เบอร์มังกร</h1>
    @for($i = 1; $i <= 6; $i++)
    <div class="mb-4">
      <h1 class="text-lg font-semibold mb-1">คู่เลข {{$kuunum}} : {{$kuunum_meaning}}</h1>
      <p class="indent-8">{{$kuunum_detail}}</p>
    </div>
    @endfor
    {{-- box meaning ber --}}
  </div>
</div>

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
  @vite('resources/js/bermonthly_lucky/fortune_ber.js')
@endsection
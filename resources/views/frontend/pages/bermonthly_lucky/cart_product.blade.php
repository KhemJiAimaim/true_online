@extends('frontend.layouts.main')
@section('content')
<div class="text-left my-36">
  <div class="w-full max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[95%] py-10 mx-auto">
    <div class="text-center">
      <h1 class="text-xl ">ตระกร้าสินค้า</h1>
      <h1 class="text-lg text-[#838383]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</h1>
      <div class="w-[201px] h-1 bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF]  mx-auto mt-6 "></div>
    </div>
  </div>

  <div class="w-full max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[95%] py-10 mx-auto">
    <div class="bg-[#F8F9FA] flex flex-col justify-center">
      <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] text-white p-4 grid grid-cols-[700px,1fr,1fr,1fr,100px] max-xl:grid-cols-[500px,1fr,1fr,1fr,30px] max-lg:grid-cols-[400px,1fr,1fr,1fr,30px] max-xs:grid-cols-[150px,1fr,1fr,1fr,30px] max-xs:gap-2 rounded-t-[10px]">
        <p>สินค้า</p>
        <p class="text-center">ราคา</p>
        <p class="text-center">จำนวน</p>
        <p class="text-center">ราคารวม</p>
      </div>

      {{-- cart items list --}}
      <div class="p-4 grid grid-cols-[700px,1fr,1fr,1fr,100px] max-xl:grid-cols-[500px,1fr,1fr,1fr,30px] max-lg:grid-cols-[400px,1fr,1fr,1fr,30px] max-xs:grid-cols-[150px,1fr,1fr,1fr,30px] max-xs:gap-2">
        <div class="grid grid-cols-[100px,1fr] max-xs:grid-cols-1 gap-4">
          <figure>
            <img class="w-[100px] h-[100px]" src="/icons/category/imgcart.png" alt="">
          </figure>
          <div>
            <p class="font-semibold">เบอร์มงคล</p>
            <p>หมายเลขเบอร์ 096-554-6995</p>
            <p>เกรด A+</p>
            <p>เน็ต Unlimited + โทร 1700 Mins</p>
          </div>
        </div>
        <p class="text-center flex justify-center items-center">333,850</p>
        <p class="text-center flex justify-center items-center">1</p>
        <p class="text-center flex justify-center items-center">333,850</p>
        <figure class="flex justify-center items-center">
          <img src="/icons/cart_trash.png" alt="">
        </figure>
      </div>
      <hr>

      <div class="p-4 grid grid-cols-[700px,1fr,1fr,1fr,100px] max-xl:grid-cols-[500px,1fr,1fr,1fr,30px] max-lg:grid-cols-[400px,1fr,1fr,1fr,30px] max-xs:grid-cols-[150px,1fr,1fr,1fr,30px] max-xs:gap-2">
        <div class="grid grid-cols-[100px,1fr] max-xs:grid-cols-1 gap-4">
          <figure>
            <img class="w-[100px] h-[100px]" src="/icons/category/imgcart.png" alt="">
          </figure>
          <div>
            <p class="font-semibold">เบอร์มงคล</p>
            <p>หมายเลขเบอร์ 096-554-6995</p>
            <p>เกรด A+</p>
            <p>เน็ต Unlimited + โทร 1700 Mins</p>
          </div>
        </div>
        <p class="text-center flex justify-center items-center">333,850</p>
        <p class="text-center flex justify-center items-center">1</p>
        <p class="text-center flex justify-center items-center">333,850</p>
        <figure class="flex justify-center items-center">
          <img src="/icons/cart_trash.png" alt="">
        </figure>
      </div>
      <hr>

      {{-- total price --}}
      <div class="m-4 p-4 bg-white border border-[1px]-[#D9D9D9] rounded-[10px]">
        <div class="flex justify-between">
          <h1 class="">ยอดรวม สินค้า</h1>
          <div class="flex gap-4">
            <div>334,799</div>
            <p>บาท</p>
          </div>
        </div>
        <div class="flex justify-between">
          <h1 class="">ค่าจัดส่ง</h1>
          <div class="flex gap-4">
            <div>334,799</div>
            <p>บาท</p>
          </div>
        </div>
        <div class="flex justify-between">
          <h1 class="text-lg text-[#EC1F25]">ยอดรวมทั้งหมด</h1>
          <div class="flex items-end gap-4">
            <h1 class="text-lg text-[#EC1F25]">334,799</h1>
            <p>บาท</p>
          </div>
        </div>
      </div>

      {{-- customer contact --}}
      <div class="m-4 p-4 bg-white border border-[1px]-[#D9D9D9] rounded-[10px]">
        <h1 class="text-lg font-semibold">กรอกที่อยู่ในการจัดส่ง</h1>
        <div class="grid grid-cols-2 max-lg:grid-cols-1 gap-10 max-lg:gap-2">
          <div class="flex flex-col gap-2">
            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
              <label class="text-end" for="name">ชื่อ*</label>
              <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text" name="name" id="name">
            </div>
            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
              <label class="text-end" for="name">นามสกุล*</label>
              <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text" name="last-name" id="last-name">
            </div>
            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
              <label class="text-end" for="name">เบอร์โทร*</label>
              <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text" name="customer-tel" id="customer-tel" maxlength="10">
            </div>
            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
              <label class="text-end" for="name">อีเมล*</label>
              <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text" name="customer-email" id="customer-email">
            </div>
          </div>
          <div class="flex flex-col gap-2">
            <div class="grid grid-cols-[80px,1fr] gap-4">
              <label class="text-end" for="name">ที่อยู่*</label>
              <textarea class="px-2 h-14 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" name="customer-address" id="customer-address" cols="30" rows="3"></textarea>
            </div>
            <div class="grid grid-cols-2 max-xs:grid-cols-1 gap-4">
              <div class="grid grid-cols-[80px,1fr] gap-4">
                <label class="text-end" for="sub-district">ตำบล/แขวง*</label>
                <select class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" name="province" id="province">
                  <option value="ศิลา">ศิลา</option>
                </select>
              </div>
              <div class="grid grid-cols-[80px,1fr] gap-4">
                <label class="text-end" for="district">อำเภอ/เขต*</label>
                <select class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" name="province" id="province">
                  <option value="ในเมือง">ในเมือง</option>
                </select>
              </div>
            </div>
            <div class="grid grid-cols-2 max-xs:grid-cols-1 gap-4">
              <div class="grid grid-cols-[80px,1fr] gap-4">
                <label class="text-end" for="province">จังหวัด*</label>
                <select class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" name="province" id="province">
                  <option value="ขอนแก่น">ขอนแก่น</option>
                </select>
              </div>
              <div class="grid grid-cols-[80px,1fr] gap-4">
                <label class="text-end" for="post-code">รหัสไปรษณี*</label>
                <input class="w-full px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text" name="post-code" id="post-code" maxlength="5">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    {{-- btn submit --}}
    <div class="mt-5 flex justify-center gap-4">
      <a class="px-6 py-1 bg-white border border-[1px]-[#EC1F25] text-[#EC1F25] rounded-[15px]">กลับหน้าหลัก</a>
      <button class="px-3 py-1 bg-[#EC1F25] text-white rounded-[15px]" id="submit-buy">ยืนยันการสั่งซื้อ</button>
    </div>
    
  </div>
</div>


<div class="bg-gradient-to-r from-[#960004] to-[#EC1F25]">
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
  @vite('resources/js/bermonthly_lucky/cartproduct.js')
@endsection
@extends('frontend.layouts.main')
@section('content')
<div class="text-left">
  <div class="h-[158px] bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex justify-center items-center">
    <div class="flex max-xs:flex-col gap-4">
      <a href="/bermonthly?sim=month" class="bg-white flex justify-center items-center gap-2 py-2 pl-2 pr-6 rounded-[5px]">
        <img class="{{ isset($_GET['sim']) && $_GET['sim'] == 'month' ? '' : 'invisible' }}" src="/icons/check.png" alt="">
        <p class="text-[#CE090E]">เบอร์มงคลระบบรายเดือน</p>
      </a>
      <a href="/bermonthly?sim=paysim" class="bg-black flex justify-center items-center gap-2 py-2 pl-2 pr-6 rounded-[5px]">
        <img class="{{ isset($_GET['sim']) && $_GET['sim'] == 'paysim' ?'':'invisible'}}" src="/icons/check.png" alt="">
        <p class="text-white">เบอร์มงคลระบบเติมเงิน</p>
      </a>
    </div>
  </div>
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
  <div class="max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[100%] w-[90%] max-xs:w-[100%] bg-[#F8F9FA] mx-auto my-4 p-6 rounded-[20px]">
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
          <div class="flex gap-2 max-xs:gap-1">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" data-position="0" value="0" disabled>
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="1" maxlength="1" value="{{ isset($_GET['pos1']) ? $_GET['pos1'] :'' }}" placeholder="-">
            <input class="w-6 h-7 mr-4 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="2" maxlength="1" value="{{ isset($_GET['pos2']) ? $_GET['pos2'] :'' }}" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="3" maxlength="1" value="{{ isset($_GET['pos3']) ? $_GET['pos3'] :'' }}" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="4" maxlength="1" value="{{ isset($_GET['pos4']) ? $_GET['pos4'] :'' }}" placeholder="-">
            <input class="w-6 h-7 mr-4 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="5" maxlength="1" value="{{ isset($_GET['pos5']) ? $_GET['pos5'] :'' }}" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="6" maxlength="1" value="{{ isset($_GET['pos6']) ? $_GET['pos6'] :'' }}" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="7" maxlength="1" value="{{ isset($_GET['pos7']) ? $_GET['pos7'] :'' }}" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="8" maxlength="1" value="{{ isset($_GET['pos8']) ? $_GET['pos8'] :'' }}" placeholder="-">
            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text" id="search-num" data-position="9" maxlength="1" value="{{ isset($_GET['pos9']) ? $_GET['pos9'] :'' }}" placeholder="-">
          </div>
        </div>

        <div class="mt-4 flex justify-between gap-4 max-xs:grid max-xs:grid-cols-2">
          <div class="flex flex-col">
            <label for="slc-sum">ผลรวม</label>
            <select class="w-36 max-lg:w-44 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" name="slc-sum" id="slc-sum">
              <option value="">ผลรวม</option>
              @foreach($sumbers as $sum)
              @php 
                $selected = null;
                if(isset($_GET['sum'])){
                  if($sum->predict_sum == $_GET['sum']) {
                    $selected = "selected";
                  }
                }
              @endphp
              <option value="{{$sum->predict_sum}}" {{$selected}}>{{$sum->predict_sum}}</option>
              @endforeach
            </select>
          </div>

          <div class="flex flex-col order-1 max-xs:col-span-2">
            <label for="slc-category">หมวดหมู่เบอร์</label>
            <select class="w-52 max-xl:w-40 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" name="slc-category" id="slc-category">
              <option value="">หมวดหมู่เบอร์</option>
              @foreach($berproduct_cates as $bercate)
              <option value="{{$bercate->bercate_id}}" {{($select = ($bercate->bercate_id == $_GET['cate'])?"selected":"")}} >{{$bercate->bercate_name}}</option>
              @endforeach
            </select>
          </div>

          <div class="flex flex-col">
            <label for="txt_favorite">ค้นหาเลขชุดที่ชอบ</label>
            <input class="w-80 max-xl:w-32 max-lg:w-64 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" type="text" name="txt_favorite" id="txt_favorite" maxlength="10" value="{{ isset($_GET['fav']) ? $_GET['fav'] : '' }}">
          </div>
        </div>

        <div class="mt-4 flex justify-between gap-4 max-xs:grid max-xs:grid-cols-2">
          <div class="flex flex-col">
            <label for="slc-package">แพ็กเกจ</label>
            <select class="w-52 max-xl:w-36 max-lg:w-44 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" name="slc-package" id="slc-package">
              <option value="1">แพ็กเกจ</option>
              <option value="2">เน็ต Unlimited + โทร 1700 Mins</option>
              <option value="3">แพ็กเกจนี้ใช้ฟรี 3 เดือน</option>
              {{-- <option value="0">พลังแห่งปัญญา การสนับสนุนค้ำจุน สติปัญญา</option> --}}
            </select>
          </div>

          <div class="flex flex-col">
            <label for="slc-sort">เรียงลำดับ ราคา</label>
            <select class="w-32 max-lg:w-40 max-xs:w-full h-7 border border-[#838383] rounded-[3px]" name="slc-sort" id="slc-sort">
              <option value="">เรียงลำดับ ราคา</option>
              <option value="desc" {{ isset($_GET['sort']) && $_GET['sort'] == 'desc' ? 'selected' : '' }}>ราคามากไปน้อย</option>
              <option value="asc" {{ isset($_GET['sort']) && $_GET['sort'] == 'asc' ? 'selected' : '' }}>ราคาน้อยไปมาก</option>
              <option value="rand" {{ isset($_GET['sort']) && $_GET['sort'] == 'rand' ? 'selected' : '' }}>สุ่มราคาสินค้า</option>
            </select>
          </div>

          <div class="flex flex-col max-xs:col-span-2">
            <label for="txt_favorite">ช่วงราคา</label>
            <div class="flex gap-4 w-80 max-xl:w-40 max-lg:w-64 max-xs:w-full">
              <input class="w-full h-7 border border-[#838383] rounded-[3px] price-input" type="text" name="price-min" id="price-min" value="{{ isset($_GET['min']) ? number_format($_GET['min']) : '' }}">
              <input class="w-full h-7 border border-[#838383] rounded-[3px] price-input" type="text" name="price-max" id="price-max" value="{{ isset($_GET['max']) ? number_format($_GET['max']) : '' }}">
            </div>
          </div>
        </div>

        <div class="flex max-xl:flex-col max-xl:gap-4 justify-between mt-4">
          <div class="flex flex-col">
            <label for="">ตัวเลขที่ชอบ</label>
            <div class="flex gap-1 text-white">
              <button id="like" data-fav="0" class="w-6 h-7 bg-[#838383] rounded-[3px]">0</button>
              <button id="like" data-fav="1" class="w-6 h-7 bg-[#838383] rounded-[3px]">1</button>
              <button id="like" data-fav="2" class="w-6 h-7 bg-[#838383] rounded-[3px]">2</button>
              <button id="like" data-fav="3" class="w-6 h-7 bg-[#838383] rounded-[3px]">3</button>
              <button id="like" data-fav="4" class="w-6 h-7 bg-[#838383] rounded-[3px]">4</button>
              <button id="like" data-fav="5" class="w-6 h-7 bg-[#838383] rounded-[3px]">5</button>
              <button id="like" data-fav="6" class="w-6 h-7 bg-[#838383] rounded-[3px]">6</button>
              <button id="like" data-fav="7" class="w-6 h-7 bg-[#838383] rounded-[3px]">7</button>
              <button id="like" data-fav="8" class="w-6 h-7 bg-[#838383] rounded-[3px]">8</button>
              <button id="like" data-fav="9" class="w-6 h-7 bg-[#838383] rounded-[3px]">9</button>
            </div>
          </div>

          <div class="flex flex-col">
            <label for="">ตัวเลขที่ไม่ชอบ</label>
            <div class="flex gap-1 text-white">
              <button id="dislike" data-fav="0" class="w-6 h-7 bg-[#838383] rounded-[3px]">0</button>
              <button id="dislike" data-fav="1" class="w-6 h-7 bg-[#838383] rounded-[3px]">1</button>
              <button id="dislike" data-fav="2" class="w-6 h-7 bg-[#838383] rounded-[3px]">2</button>
              <button id="dislike" data-fav="3" class="w-6 h-7 bg-[#838383] rounded-[3px]">3</button>
              <button id="dislike" data-fav="4" class="w-6 h-7 bg-[#838383] rounded-[3px]">4</button>
              <button id="dislike" data-fav="5" class="w-6 h-7 bg-[#838383] rounded-[3px]">5</button>
              <button id="dislike" data-fav="6" class="w-6 h-7 bg-[#838383] rounded-[3px]">6</button>
              <button id="dislike" data-fav="7" class="w-6 h-7 bg-[#838383] rounded-[3px]">7</button>
              <button id="dislike" data-fav="8" class="w-6 h-7 bg-[#838383] rounded-[3px]">8</button>
              <button id="dislike" data-fav="9" class="w-6 h-7 bg-[#838383] rounded-[3px]">9</button>
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
            {{-- <button class="relative p-2 bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[5px] group">
              <img style="filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);" src="/icons/category/icon-money.png" alt="">
              <div class="w-10 h-10 absolute -top-6 left-3 hidden group-hover:block">
                <img class="scale-150" src="/icons/category/union.png" alt="">
                <p class="w-full text-xs absolute top-0 left-0 text-center">การงาน</p>
              </div>
            </button> --}}
            @foreach($berpredict_numbcate as $numbcate)
            <button id="improve-ber" data-id="{{$numbcate->numbcate_id}}" class="relative p-2 bg-white rounded-[5px] group">
              <img src="{{$numbcate->thumbnail}}" alt="">
              <div class="w-14 h-10 absolute -top-6 left-3 hidden group-hover:block">
                <img class="scale-150" src="/icons/category/union.png" alt="">
                <p class="w-full text-xs absolute top-1 left-0 text-center">{{$numbcate->numbcate_title}}</p>
              </div>
            </button>
            @endforeach
          </div>
        </div>

        <div class="flex flex-col">
          <p class="mb-2">หมวดหมู่เบอร์</p>
          <div class="flex flex-wrap gap-3">
            {{-- <button class="relative p-2 bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[5px] group">
              <img style="filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);" src="/icons/category/icon-swarn.png" alt="">
              <div class="w-10 h-10 absolute -top-6 left-3 hidden group-hover:block">
                  <img class="scale-150" src="/icons/category/union.png" alt="">
                  <p class="w-full text-xs absolute top-0 left-0 text-center">การงาน</p>
              </div>
            </button> --}}
            @foreach($berproduct_cates as $bercate)
            <button id="cate-ber" data-id="{{$bercate->bercate_id}}" class="relative p-2 bg-white rounded-[5px] group">
              <img src="{{$bercate->thumbnail}}" alt="">
              <div class="w-14 h-10 absolute -top-6 left-3 hidden group-hover:block">
                <img class="scale-150" src="/icons/category/union.png" alt="">
                <p class="w-full text-xs absolute top-1 left-0">{{$bercate->bercate_title}}</p>
              </div>
            </button>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    <div class="w-full mt-4 flex justify-center gap-10">
      <button id="reset-search" class="px-4 py-1 border border-red-400 rounded-[15px]">คืนค่า</button>
      <button id="search-product" class="px-4 py-1 bg-[#EC1F25] text-white rounded-[15px]">ค้นหา</button>
    </div>

  </div>
  <!-- end search box -->

  {{-- result search --}}
  <div class="text-center">
    <h1 class="font-bold text-xl">แหล่งรวมเบอร์มงคล</h1>
    <p class="text-[#838383]">เบอร์มงคล พร้อมแพ็กเกจ ที่คุณอาจสนใจ</p>
    <p class="text-[#EC1F25]">เบอร์มังกร ที่ค้นพบ {{ count($totalCount) }} เบอร์</p>
  </div>

  <!-- box all product -->
  @if(count($berproducts) > 0)
  <div class="max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[100%] w-[90%] max-xs:w-[100%] grid grid-cols-4 max-2xl:grid-cols-3 max-xl:grid-cols-2 max-lg:grid-cols-2 max-xs:grid-cols-1 gap-4 mx-auto p-4 z-0">
      @foreach($berproducts as $product) 
      <div class="drop-shadow-md">
        <div
            class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] py-2 px-3 z-0">
            <div class="flex justify-start items-center">
                <p class="text-white mr-2">เกรด</p>
                <p class="text-white font-medium text-[1rem]">{{$product->product_grade}}</p>
            </div>
            <div
                class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 transform -skew-x-12 px-2 flex justify-end items-center">
                <p class="text-white mr-2 skew-x-12">ผลรวม</p>
                <p class="text-white font-medium text-[1rem] skew-x-12">{{$product->product_sumber}}</p>
            </div>
        </div>
    
        <div class="bg-white">
            <a href="{{ url('/detailber/'.$product->product_phone) }}"> 
              <div class="flex justify-center py-10 ">
                <h2 class="text-3xl font-medium text-center">
                  {{ substr($product->product_phone, 0, 3) }}-{{ substr($product->product_phone, 3, 3) }}-{{ substr($product->product_phone, 6) }}
                </h2>
              </div>
            </a>
        </div>

        <div class="bg-[#F8F9FA] grid grid-cols-5 py-2">
            <img src="images/Ellipse 6.png" alt="" class="px-4">
            <p class="text-left text-[0.9rem] py-1 col-span-4">{{$product->product_comment}}</p>
        </div>

        <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-3 px-2">
            <div class="grid grid-cols-3">
                <p class="text-white text-left text-[1rem] mt-2">ราคา</p>
                <p class="text-white font-medium text-center text-3xl">{{ number_format($product->product_price) }}</p>
                <p class="text-white text-right text-[1rem] mt-2 ">บาท</p>

            </div>
        </div>

        <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between px-4 ">
            <div id="addtocart" data-id=""
                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                <img src="/images/mdi_cart-arrow-down.png" alt=""
                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
            </div>
            <div
                class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[50px] h-[50px] flex justify-center items-center p-2 hover:bg-red-600">
                <img src="/images/icons8-line-app (1) 9.png" alt=""
                    class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
            </div>

            <a href="{{url('/detailber/'. $product->product_phone)}}"
                class="flex items-center px-4 max-xl:px-2 max-xs:px-3 mb-4 mt-2 mx-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
            <button id="buynow" data-id=""
                class="flex items-center px-6 max-xl:px-4 max-xs:px-5  mb-4 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
        </div>
      </div>
      @endforeach
    </div>
    @else
      <div class="drop-shadow-md text-center">
        <p class="text-xl">ไม่พบสินค้า</p>
      </div>
    @endif
    <div class="flex justify-center my-4">
      <div class="flex border border-1-[#DFDFDF] gap-2 rounded-[4px]">
        <button id="fist-page" class="h-[28px] px-2 py-1">First</button>
        <button id="prev-page" class="h-[28px] px-2 py-1">Previous</button>
        {{-- <button id="" class="h-[28px] px-2 py-1">1</button> --}}
        <button id="" class="h-[28px] w-[28px] px-2 py-1 bg-gradient-to-r from-[#EC1F25] to-[#960004] text-white rounded-[4px]">{{$data_paginate['current_page']}}</button>
        {{-- <button id="" class="h-[28px] px-2 py-1">3</button> --}}
        <button id="next-page" class="h-[28px] px-2 py-1">Next</button>
        <button id="last-page" class="h-[28px] px-2 py-1">Last</button>
      </div>
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
  <script>
    let data_pagi = @json($data_paginate)
  </script>
  @vite('resources/js/bermonthly_lucky/allproduct.js')
@endsection
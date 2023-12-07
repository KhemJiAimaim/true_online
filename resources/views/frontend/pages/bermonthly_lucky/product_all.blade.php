@extends('frontend.layouts.main')
@section('content')
    <div class=" text-left">

        <div class="h-[158px] bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex justify-center items-center">
            <div class="flex max-xs:flex-col gap-4">
                <a href="/bermonthly?sim=month"
                    class="bg-white flex justify-center items-center gap-2 py-2 pl-2 pr-6 rounded-[5px]">
                    <img id="system-sim" data-sim="month"
                        class="{{ isset($_GET['sim']) && $_GET['sim'] == 'month' ? 'selected' : 'invisible' }}"
                        src="/icons/check.png" alt="">
                    <p class="text-[#CE090E] text-[17px]">เบอร์มงคลระบบรายเดือน</p>
                </a>
                <a href="/bermonthly?sim=paysim"
                    class="bg-black flex justify-center items-center gap-2 py-2 pl-2 pr-6 rounded-[5px]">
                    <img id="system-sim" data-sim="paysim"
                        class="{{ isset($_GET['sim']) && $_GET['sim'] == 'paysim' ? 'selected' : 'invisible' }}"
                        src="/icons/check.png" alt="">
                    <p class="text-white text-[17px]">เบอร์มงคลระบบเติมเงิน</p>
                </a>
            </div>
        </div>

        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden mb-2 px-3 2xl:mt-6">
            <div class="grid grid-cols-6 py-6 se:w-[750px] md:w-[1200px] 2xl:w-[1200px] dm:w-[800px] items-center mx-auto">
                <a href="#fiber"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[40px] mb-2" src="/icons/category/icon-money-menu.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เบอร์การเงิน</p>
                </a>

                <a
                    href="#ber_lucky"class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[30px] mb-3" src="/icons/category/icon-work-menu.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เบอร์การงาน</p>
                </a>


                <a href="#sim"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[40px] mb-3" src="/icons/category/icon-swarn-menu.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เบอร์หงส์</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[30px] mb-4" src="/icons/category/icon-dragon-menu.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เบอร์มังกร</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[30px] mb-4" src="/icons/category/icon-god-menu.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">เบอร์กวนอู</p>
                </a>

                <a href="#travel"
                    class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-125 transition-all duration-500 ease-in-out">
                    <img class="w-30 h-30 max-sm:w-[30px] mb-4" src="/icons/category/icon-healt-menu.png" alt="">
                    <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">สุขภาพดี</p>
                </a>

            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container px-3">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text  2xl:text-[1.5rem] md:text-[20px]  text-[18px]">เบอร์มงคล เบอร์เด็ด เบอร์มังกร เสริมดวง</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}

        <!-- search box -->
        <div
            class="xl:w-[1200px] 2xl:w-[1536px] max-xs:max-w-[100%] w-[90%] max-xs:w-[100%] bg-[#F8F9FA] mx-auto my-4 p-6 rounded-[20px] text-[17px]">
            <div class="flex max-lg:flex-col gap-6">
                {{-- box left --}}
                <div class="w-full max-xl:max-w-[54%] max-lg:max-w-full">
                    <div class="w-full p-4 flex flex-col bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[10px]">
                        <label class="text-white " for="input-fortune">กรอกเบอร์โทร</label>
                        <div class="w-full flex gap-2">
                            <input class="w-full h-7 text-center rounded-[3px] " type="text" id="input-fortune"
                                maxlength="10">
                            <button class="w-full max-w-[20%] max-xs:max-w-[29%] bg-white rounded-[15px] text-[17px] se:text-[14px] text-[#EC1F25] font-medium"
                                id="fortune-ber">วิเคราะห์เบอร์</button>
                        </div>
                    </div>

                    <div class="mt-4 flex flex-col">
                        <label class="" for="">ค้นหาเบอร์</label>
                        <div class="flex gap-2 max-xs:gap-1">
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text"
                                data-position="0" value="0" disabled>
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]" type="text"
                                id="search-num" data-position="1" maxlength="1"
                                value="{{ isset($_GET['pos1']) ? $_GET['pos1'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 mr-4 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="2" maxlength="1"
                                value="{{ isset($_GET['pos2']) ? $_GET['pos2'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="3" maxlength="1"
                                value="{{ isset($_GET['pos3']) ? $_GET['pos3'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="4" maxlength="1"
                                value="{{ isset($_GET['pos4']) ? $_GET['pos4'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 mr-4 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="5" maxlength="1"
                                value="{{ isset($_GET['pos5']) ? $_GET['pos5'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="6" maxlength="1"
                                value="{{ isset($_GET['pos6']) ? $_GET['pos6'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="7" maxlength="1"
                                value="{{ isset($_GET['pos7']) ? $_GET['pos7'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="8" maxlength="1"
                                value="{{ isset($_GET['pos8']) ? $_GET['pos8'] : '' }}" placeholder="-">
                            <input class="w-6 h-7 bg-white border border-[#838383] text-center rounded-[3px]"
                                type="text" id="search-num" data-position="9" maxlength="1"
                                value="{{ isset($_GET['pos9']) ? $_GET['pos9'] : '' }}" placeholder="-">
                        </div>
                    </div>

                    <div class="mt-4 flex justify-between gap-4 max-xs:grid max-xs:grid-cols-2">
                        <div class="flex flex-col">
                            <label for="slc-sum">ผลรวม</label>
                            <select class="w-36 max-lg:w-44 max-xs:w-full h-7 border border-[#838383] rounded-[3px]"
                                name="slc-sum" id="slc-sum">
                                <option value="">ผลรวม</option>
                                @foreach ($sumbers as $sum)
                                    @php
                                        $selected = null;
                                        if (isset($_GET['sum'])) {
                                            if ($sum->predict_sum == $_GET['sum']) {
                                                $selected = 'selected';
                                            }
                                        }
                                    @endphp
                                    <option value="{{ $sum->predict_sum }}" {{ $selected }}>{{ $sum->predict_sum }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-col order-1 max-xs:col-span-2">
                            <label for="slc-category">หมวดหมู่เบอร์</label>
                            <select class="w-52 max-xl:w-40 max-xs:w-full h-7 border border-[#838383] rounded-[3px]"
                                name="slc-category" id="slc-category">
                                <option value="">หมวดหมู่เบอร์</option>
                                @foreach ($berproduct_cates as $bercate)
                                    <option value="{{ $bercate->bercate_id }}"
                                        {{ isset($_GET['cate']) && $bercate->bercate_id == $_GET['cate'] ? 'selected' : '' }}>
                                        {{ $bercate->bercate_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-col">
                            <label for="txt_favorite">ค้นหาเลขชุดที่ชอบ</label>
                            <input
                                class="w-80 max-xl:w-32 max-lg:w-64 max-xs:w-full h-7 border border-[#838383] rounded-[3px] p-2"
                                type="text" name="txt_favorite" id="txt_favorite" maxlength="10"
                                value="{{ isset($_GET['fav']) ? $_GET['fav'] : '' }}">
                        </div>
                    </div>

                    @php
                        $packages = ['เน็ต Unlimited + โทร 1700 Mins', 'แพ็กเกจนี้ใช้ฟรี 3 เดือน', 'เน็ต 1mbs นาน 3 วัน'];
                        // dd($packages);
                    @endphp
                    <div class="mt-4 flex justify-between gap-4 max-xs:grid max-xs:grid-cols-2">
                        <div class="flex flex-col">
                            <label for="slc-package">แพ็กเกจ</label>
                            <select
                                class="w-52 max-xl:w-36 max-lg:w-44 max-xs:w-full h-7 border border-[#838383] rounded-[3px]"
                                name="slc-package" id="slc-package">
                                <option value="">เลือกแพ็กเกจ</option>
                                @foreach ($slc_package as $pack)
                                    <option value="{{ $pack->id }}"  class="text-[14px] w-[150px]"
                                        {{ isset($_GET['package']) && $_GET['package'] == $pack->id ? 'selected' : '' }}>
                                        {{ $pack->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="flex flex-col">
                            <label for="slc-sort">เรียงลำดับราคา</label>
                            <select class="w-36 max-lg:w-40 max-xs:w-full h-7 border border-[#838383] rounded-[3px]"
                                name="slc-sort" id="slc-sort">
                                <option value="">เรียงลำดับราคา</option>
                                <option value="desc"
                                    {{ isset($_GET['sort']) && $_GET['sort'] == 'desc' ? 'selected' : '' }}>ราคามากไปน้อย
                                </option>
                                <option value="asc"
                                    {{ isset($_GET['sort']) && $_GET['sort'] == 'asc' ? 'selected' : '' }}>ราคาน้อยไปมาก
                                </option>
                                <option value="rand"
                                    {{ isset($_GET['sort']) && $_GET['sort'] == 'rand' ? 'selected' : '' }}>สุ่มราคาสินค้า
                                </option>
                            </select>
                        </div>

                        <div class="flex flex-col max-xs:col-span-2">
                            <label for="txt_favorite">ช่วงราคา</label>
                            <div class="flex gap-4 w-80 max-xl:w-40 max-lg:w-64 max-xs:w-full ">
                                <input class="w-full h-7 border border-[#838383] rounded-[3px] price-input p-2" type="text"
                                    name="price-min" id="price-min"
                                    value="{{ isset($_GET['min']) ? number_format($_GET['min']) : '' }}">
                                <input class="w-full h-7 border border-[#838383] rounded-[3px] price-input p-2" type="text"
                                    name="price-max" id="price-max"
                                    value="{{ isset($_GET['max']) ? number_format($_GET['max']) : '' }}">
                            </div>
                        </div>
                    </div>

                    <div class="flex max-xl:flex-col max-xl:gap-4 justify-between mt-4">
                        @php
                            $explodeLike = [];
                            if (isset($_GET['like'])) {
                                $like = $_GET['like'];
                                $explodeLike = explode(',', $like);
                            }
                        @endphp
                        <div class="flex flex-col">
                            <label for="">ตัวเลขที่ชอบ</label>
                            <div class="flex gap-1 text-white">
                                @for ($i = 0; $i <= 9; $i++)
                                    <button id="like" data-fav="{{ $i }}"
                                        class="w-6 h-7 bg-[#838383] rounded-[3px] {{ in_array(strval($i), $explodeLike) ? 'bg-gradient-to-r from-[#5741CD] to-[#00ACEE] selected' : '' }}">
                                        {{ $i }}
                                    </button>
                                @endfor
                            </div>
                        </div>

                        @php
                            $explodedisLike = [];
                            if (isset($_GET['dislike'])) {
                                $dislike = $_GET['dislike'];
                                $explodedisLike = explode(',', $dislike);
                            }
                        @endphp
                        <div class="flex flex-col">
                            <label for="">ตัวเลขที่ไม่ชอบ</label>
                            <div class="flex gap-1 text-white">
                                @for ($i = 0; $i <= 9; $i++)
                                    <button id="dislike" data-fav="{{ $i }}"
                                        class="w-6 h-7 bg-[#838383] rounded-[3px] {{ in_array(strval($i), $explodedisLike) ? 'bg-gradient-to-r from-[#EC1F25] to-[#960004] selected' : '' }}">{{ $i }}</button>
                                @endfor
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
                            @php
                                $exImprove = [];
                                if (isset($_GET['improve'])) {
                                    $improve = $_GET['improve'];
                                    $exImprove = explode(',', $improve);
                                }
                            @endphp
                            @foreach ($berpredict_numbcate as $numbcate)
                                @php
                                    $imp_selected = in_array($numbcate->numbcate_id, $exImprove) ? 'bg-gradient-to-r from-[#EC1F25] to-[#960004] selected' : '';
                                    $image_selected = in_array($numbcate->numbcate_id, $exImprove) ? 'filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);' : '';
                                @endphp
                                <button id="improve-ber" data-id="{{ $numbcate->numbcate_id }}"
                                    class="relative p-2 bg-white rounded-[5px] group {{ $imp_selected }}">
                                    <img src="{{ $numbcate->thumbnail }}" alt="" style="{{ $image_selected }}">
                                    <div class="w-14 h-10 absolute -top-6 left-3 hidden group-hover:block">
                                        <img class="scale-150" src="/icons/category/union.png" alt="">
                                        <p class="w-full text-xs absolute top-1 left-0 text-center">
                                            {{ $numbcate->numbcate_title }}</p>
                                    </div>
                                </button>
                            @endforeach
                        </div>
                    </div>

                    @php
                        $exAuspicious = [];
                        if (isset($_GET['auspicious'])) {
                            $auspicious = $_GET['auspicious'];
                            $exAuspicious = explode(',', $auspicious);
                        }
                    @endphp
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
                            @foreach ($berproduct_cates as $bercate)
                                @php
                                    $aus_selected = in_array($bercate->bercate_id, $exAuspicious) ? 'bg-gradient-to-r from-[#EC1F25] to-[#960004] selected' : '';
                                    $img_selected = in_array($bercate->bercate_id, $exAuspicious) ? 'filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);' : '';
                                @endphp
                                <button id="cate-ber" data-id="{{ $bercate->bercate_id }}"
                                    class="relative p-2 bg-white rounded-[5px] group {{ $aus_selected }}">
                                    <img src="{{ $bercate->thumbnail }}" alt="" style="{{ $img_selected }}">
                                    <div class="w-14 h-10 absolute -top-6 left-3 hidden group-hover:block">
                                        <img class="scale-150" src="/icons/category/union.png" alt="">
                                        <p class="w-full text-xs absolute top-1 left-0">{{ $bercate->bercate_title }}</p>
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
        <div class="text-center py-6">
            <h1 class="2xl:text-[2rem] xl:text-[22px] text-[20px] font-medium ">แหล่งรวมเบอร์มงคล</h1>
            <p class="text-[#838383] 2xl:text-[20px] xl:text-[18px] text-[16px]">เบอร์มงคล พร้อมแพ็กเกจ ที่คุณอาจสนใจ</p>
            <p class="text-[#EC1F25] 2xl:text-[20px] xl:text-[18px] text-[16px]">เบอร์มังกร ที่ค้นพบ {{ count($totalCount) }} เบอร์</p>
        </div>

        <!-- box all product -->
        @if (count($berproducts) > 0)
            <div class="px-3">
                <div
                    class="2xl:w-[1536px] xl:w-[1200px] w-full grid grid-cols-1 2xl:grid-cols-4  xl:grid-cols-4 lg:grid-cols-3 dm:grid-cols-2 ex:grid-cols-2 md:grid-cols-2  xl:gap-4 2xl:gap-6 gap-6 dm:gap-8 ss:gap-4 mx-auto ss:p-1 p-4 ">
                    @foreach ($berproducts as $product)
                        <div class="drop-shadow-md">
                            <div
                                class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] px-3 z-0">
                                <div class="flex justify-start items-center gap-1 ">
                                    <p class="text-white text-[18px]">เกรด</p>
                                    <p class="text-white font-medium text-[1.5rem]">{{ $product->product_grade }}</p>
                                </div>
                                <div
                                    class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-3/4 xl:w-4/6 md:w-4/6 transform -skew-x-12 px-2 flex justify-end items-center">
                                    <p class="text-white mr-1 text-[18px]">ผลรวม</p>
                                    <p class="text-white font-bold text-[1.5rem]">{{ $product->product_sumber }}</p>
                                </div>
                                <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                            </div>

                            <div class="bg-white ">
                                <a href="{{ url('/detailber/' . $product->product_phone) }}">
                                    <div class="flex justify-center py-10 max-ex:py-2">
                                        <h2 class="2xl:text-[2.5rem] text-[1.5rem] text-center font-bold">
                                            {{ substr($product->product_phone, 0, 3) }}-{{ substr($product->product_phone, 3, 3) }}-{{ substr($product->product_phone, 6) }}
                                        </h2>
                                    </div>
                                </a>
                            </div>

                            <div class="bg-[#F8F9FA] grid grid-cols-5 py-2 max-dm:h-[80px] h-[100px]">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 py-1">
                                <p class="text-left 2xl:text-[16px] text-[14px] p-2 py-1 col-span-4">
                                    {{ $product->product_comment }}</p>
                            </div>

                            <div
                                class=" relative bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-2 px-2 items-center">
                                <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left 2xl:text-[18px] text-[1rem] md:text-[18px] pt-1 ">ราคา</p>
                                    <p class="text-white font-medium text-center 2xl:text-3xl md:text-[2rem]  text-2xl">
                                        {{ number_format($product->product_price) }}</p>
                                    <p class="text-white text-right 2xl:text-[18px] text-[1rem] md:text-[18px] pt-1 ">บาท</p>

                                </div>
                            </div>

                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px] 2xl:flex 2xL:justify-center  flex justify-center px-2 md:px-0 lg:px-0 items-center ">
                                <div
                                    class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]   flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                </div>
                                <div
                                    class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px]  h-[45px]  flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/icons8-line-app (1) 9.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                </div>

                                <a href="{{ url('/detailber/' . $product->product_phone) }}"
                                    class="cursor-pointer flex items-center lg:px-2 xl:px-1  ss:px-2 2xl:px-4 px-4 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2 mx-1 ss:mx-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>


                                <button id="buynow" data-id="{{$product->product_id}}"
                                    class="cursor-pointer flex items-center lg:px-4  xl:px-4 ss:px-6 2xl:px-8 px-6 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2  2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>

                            </div>
                        </div>
                    @endforeach
                </div>
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
                @for ($i = max(1, $data_paginate['current_page'] - 2); $i < $data_paginate['current_page']; $i++)
                    <button class="max-xs:hidden h-[28px] w-[28px] px-2 py-1" data-index="{{ $i }}"
                        id="page-num">{{ $i }}</button>
                @endfor
                <button id=""
                    class="h-[28px] w-[28px] px-2 py-1 bg-gradient-to-r from-[#EC1F25] to-[#960004] text-white rounded-[4px]">{{ $data_paginate['current_page'] }}</button>
                {{-- <button id="" class="h-[28px] px-2 py-1">3</button> --}}
                @for ($i = $data_paginate['current_page'] + 1; $i <= min($data_paginate['total_page'], $data_paginate['current_page'] + 2); $i++)
                    <button class="max-xs:hidden h-[28px] w-[28px] px-2 py-1" data-index="{{ $i }}"
                        id="page-num">{{ $i }}</button>
                @endfor
                <button id="next-page" class="h-[28px] px-2 py-1">Next</button>
                <button id="last-page" class="h-[28px] px-2 py-1">Last</button>
            </div>
        </div>
    </div>


    <!-- end box product -->
    @include('frontend.pages.bermonthly_lucky.footer_bermonthly_lucky')
@endsection

@section('scripts')
    <script>
        let data_page = @json($data_paginate)
    </script>
    @vite('resources/js/bermonthly_lucky/allproduct.js')
@endsection

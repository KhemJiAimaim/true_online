@extends('frontend.layouts.main')

@section('content')
    <div class=" text-left ">

        <div
            class="h-[158px] max-xs:h-[100px]  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex justify-center items-center">
            <div class="flex gap-8  max-xs:gap-4">
                <a href="/bermonthly?"
                    class="bg-white flex justify-center items-center gap-2 py-2 px-8 max-xs:px-4 rounded-[5px] hover:scale-105 transition-all duration-500 ease-in-out text-[#CE090E] text-[17px]  max-xs:text-[14px] hover:bg-black hover:text-white ">
                    <p class=" ">เบอร์ทั้งหมด</p>
                </a>
                <a href="/bermonthly?sim=paysim"
                    class="bg-white flex justify-center items-center gap-2 py-2 px-8 max-xs:px-4 rounded-[5px] hover:scale-105 transition-all duration-500 ease-in-out text-[#CE090E] text-[17px]  max-xs:text-[14px]  hover:bg-black hover:text-white ">

                    <p class="">เบอร์เติมเงิน</p>
                </a>
                <a href="/bermonthly?sim=month"
                    class="bg-white flex justify-center items-center gap-2 py-2 px-6 max-xs:px-3 rounded-[5px] hover:scale-105 transition-all duration-500 ease-in-out text-[#CE090E] text-[17px]  max-xs:text-[14px]  hover:bg-black hover:text-white ">
                    <p class="">เบอร์รายเดือน</p>
                </a>
            </div>
        </div>

        {{-- @if (isset($_GET['sim']) && $_GET['sim'] == 'paysim')
                    <div class="w-7 h-7">
                        <img id="system-sim" data-sim="paysim" class="w-full h-full" src="/icons/check.png"
                            alt="">
                    </div>
                @else
                    <div class="w-7 h-7">
                        <img id="system-sim" data-sim="paysim" class="w-full h-full" src="/images/check-one.png"
                            alt="">
                    </div>
                @endif --}}


        <div class="max-2xl:overflow-x-scroll max-uu::overflow-hidden  mb-2 px-3">
            <div class="flex justify-center max-md:justify-start  gap-x-10 max-xs:gap-x-2  py-2  items-center mx-auto ">
                @foreach ($berpredict_numbcate as $numcate)
                    @if ($numcate->recommended == true)
                        <a href="?improve={{ $numcate->numbcate_id }}"
                            class="flex flex-col max-uu:w-[9rem] max-xs:w-[7rem] items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-110 transition-all duration-500 ease-in-out">
                            <div class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5">
                                <img class="w-full h-full mb-2" src="{{ $numcate->thumbnail }}" alt="">
                            </div>
                            <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">{{ $numcate->numbcate_title }}</p>
                        </a>
                    @endif
                @endforeach

                @foreach ($berproduct_cates as $cate)
                    @if ($cate->recommended == true)
                        <a
                            href="?auspicious={{ $cate->bercate_id }}"class="flex flex-col max-uu:w-[9rem] max-xs:w-[7rem] items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-110 transition-all duration-500 ease-in-out">
                            <div class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5">
                                <img class="w-full h-full mb-3" src="/{{ $cate->thumbnail }}" alt="">
                            </div>
                            <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">{{ $cate->bercate_title }}</p>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>

        {{-- <div class=" max-2xl:overflow-x-scroll max-uu::overflow-hidden  mb-2 px-3">
            <div class="flex justify-center max-md:justify-start  gap-x-10 max-xs:gap-x-2  py-2  items-center mx-auto ">
                @foreach ($cate_home as $cate)
                    <a href="#{{ $cate->cate_url }} "
                        class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-110 transition-all duration-500 ease-in-out">
                        <div class="flex-initial max-uu:w-[9rem] max-xs:w-[7rem] flex flex-col justify-center items-center">
                            <img class="w-[45px] h-[45px] max-sm:w-[45px] mb-4 max-sm:mt-5"
                                src="/{{ $cate->cate_thumbnail }}" alt="">
                            <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">{{ $cate->cate_title }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div> --}}

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container px-3 ">
            <div class="mx-auto w-[90%] max-2xl:w-4/5 max-lg:w-full">
                <div class="title-plate-line"></div>
            </div>
            <div class="plate-group">
                <div class="plate-box-s">
                    <div class="plate-circleS"></div>
                    <div class="title-plate-textboxS"></div>
                </div>
                <div class="title-plate-textboxC">
                    <p class="plate-text  2xl:text-[1.5rem] md:text-[20px]  text-[18px]">{{ $seo->cate_h1 }}</p>
                </div>
                <div class="plate-box-e">
                    <div class="title-plate-textboxE"></div>
                    <div class="plate-circleE"></div>
                </div>
            </div>
        </div>
        {{-- มหัศจรรย์ --}}


        <!-- search box -->
        <div class="w-[90%] max-ex:w-full mx-auto rounded-[20px] mt-8">
            <div class=" bg-[#f8f7f7] p-4 max-ex:p-2 text-[17px] mx-3 items-center" style="border-radius: 12px;">
                <div class="flex justify-between  max-lg:flex-col gap-4 w-full mx-auto">
                    {{-- box left --}}
                    <div class="w-1/2 max-lg:w-full">

                        {{-- วิเคราะห์เบอร์ --}}
                        <div
                            class="w-full p-2 flex flex-col bg-gradient-to-r from-[#EC1F25] to-[#960004] rounded-[10px] mb-4 ">
                            <label class="text-white " for="input-fortune">กรอกเบอร์โทรศัพท์</label>
                            <div class="w-full flex gap-4">
                                <input
                                    class="w-full h-7 text-center rounded-[3px] bg-white max-es:text-[14px] max-es:text-left p-2"
                                    type="text" id="input-fortune" maxlength="10" placeholder="กรอกเบอร์โทรศัพท์">
                                <button
                                    class="w-full max-w-[25%] max-xs:max-w-[29%] rounded-[15px] text-[17px] max-es:text-[14px] font-medium bg-white hover:bg-gradient-to-r from-[#c5a04f] to-[#a1621e] hover:text-white text-black"
                                    id="fortune-ber">วิเคราะห์เบอร์</button>
                            </div>
                        </div>

                        {{-- ค้นหาเบอร์ --}}
                        <div class="mb-4 flex gap-4 max-yy:flex-col yy:items-center w-full">
                            <div class="2xl:w-[20%]">
                                <label class="text-left text-black" for="">ค้นหาเบอร์</label>
                            </div>
                            <div class="flex justify-between gap-x-5 max-2xl:gap-x-2 max-xs:gap-x-3 max-es:gap-x-1">
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7 bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="text" data-position="0" value="0" disabled>
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="1" maxlength="1"
                                    value="{{ isset($_GET['pos1']) ? $_GET['pos1'] : '' }}" placeholder="-">
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="2" maxlength="1"
                                    value="{{ isset($_GET['pos2']) ? $_GET['pos2'] : '' }}" placeholder="-">
                                <span class="text-center items-center max-xs:hidden"> _ </span>
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="3" maxlength="1"
                                    value="{{ isset($_GET['pos3']) ? $_GET['pos3'] : '' }}" placeholder="-">
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="4" maxlength="1"
                                    value="{{ isset($_GET['pos4']) ? $_GET['pos4'] : '' }}" placeholder="-">
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7    bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="5" maxlength="1"
                                    value="{{ isset($_GET['pos5']) ? $_GET['pos5'] : '' }}" placeholder="-">
                                <span class="text-center items-center max-xs:hidden"> _ </span>
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="6" maxlength="1"
                                    value="{{ isset($_GET['pos6']) ? $_GET['pos6'] : '' }}" placeholder="-">
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="7" maxlength="1"
                                    value="{{ isset($_GET['pos7']) ? $_GET['pos7'] : '' }}" placeholder="-">
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="8" maxlength="1"
                                    value="{{ isset($_GET['pos8']) ? $_GET['pos8'] : '' }}" placeholder="-">
                                <input
                                    class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7  bg-white border border-[#838383] text-center rounded-[3px]"
                                    type="tel" id="search-num" data-position="9" maxlength="1"
                                    value="{{ isset($_GET['pos9']) ? $_GET['pos9'] : '' }}" placeholder="-">
                            </div>
                        </div>

                        {{-- ตัวเลขที่ชอบ ตัวเลขที่ไม่ชอบ --}}
                        <div class="flex flex-col gap-y-2 mb-4">
                            @php
                                $explodeLike = [];
                                if (isset($_GET['like'])) {
                                    $like = $_GET['like'];
                                    $explodeLike = explode(',', $like);
                                }
                            @endphp
                            <div class="flex gap-x-4 gap-y-2  mb-4 yy:items-center w-full max-yy:flex-col">
                                <div class="2xl:w-[25%]">
                                    <label for="" class="text-black">ตัวเลขที่ชอบ</label>
                                </div>
                                <div
                                    class="flex gap-x-5 max-2xl:gap-x-2 max-xs:gap-x-3 max-es:gap-x-1 text-white justify-between w-full">
                                    @for ($i = 0; $i <= 9; $i++)
                                        <button id="like" data-fav="{{ $i }}"
                                            class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7 bg-[#a0a0a0] border border-[#838383] text-center rounded-[3px] {{ in_array(strval($i), $explodeLike) ? 'bg-gradient-to-r from-[#5741CD] to-[#00ACEE]  text-white selected' : '' }} hover:bg-gradient-to-r from-[#5741CD] to-[#00ACEE]">
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
                            <div class="flex gap-x-4 gap-y-2  mb-4 yy:items-center w-full max-yy:flex-col ">
                                <div class="2xl:w-[25%]">
                                    <label for="" class="text-black">ตัวเลขที่ไม่ชอบ</label>
                                </div>
                                <div
                                    class="flex gap-x-5 max-2xl:gap-x-2 max-xs:gap-x-3 max-es:gap-x-1 text-white justify-between w-full">
                                    @for ($i = 0; $i <= 9; $i++)
                                        <button id="dislike" data-fav="{{ $i }}"
                                            class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-ex:w-8 max-ex:h-10 max-xs:w-7 max-xs:h-7 bg-[#a0a0a0] border border-[#838383] text-center rounded-[3px] {{ in_array(strval($i), $explodedisLike) ? 'bg-gradient-to-r from-yellow-500 to-[#fa6007] text-white selected' : '' }} hover:bg-gradient-to-r from-[#EC1F25] to-[#960004]">{{ $i }}</button>
                                    @endfor
                                </div>
                            </div>
                        </div>

                        {{-- หมวดหมู่เบอร์ --}}
                        <div class="flex flex-col mb-4 gap-y-2">
                            <label for="slc-category" class="text-black">หมวดหมู่เบอร์</label>
                            <select class="w-full h-8 border border-[#838383] rounded-[3px]" name="slc-category"
                                id="slc-category">
                                <option value="">หมวดหมู่เบอร์</option>
                                @foreach ($berproduct_cates as $bercate)
                                    <option value="{{ $bercate->bercate_id }}"
                                        {{ isset($_GET['cate']) && $bercate->bercate_id == $_GET['cate'] ? 'selected' : '' }}>
                                        {{ $bercate->bercate_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        {{-- ราคาเริ่มต้น ราคาสูงสุด --}}
                        <div class="flex justify-between w-full gap-y-2  mb-6 gap-4 ">
                            <div class="flex flex-col w-1/2 gap-y-2">
                                <label for="txt_favorite" class="text-black">ราคาเริ่มต้น</label>

                                <input class=" w-full  h-8 border border-[#838383] rounded-[3px] price-input p-2"
                                    type="text" name="price-min" id="price-min" placeholder="999"
                                    value="{{ isset($_GET['min']) ? number_format($_GET['min']) : '' }}">
                            </div>
                            <div class="flex flex-col w-1/2 gap-y-2">
                                <label for="txt_favorite" class="text-black">ราคาสูงสุด</label>
                                <input class="w-full  h-8 border border-[#838383] rounded-[3px] price-input p-2"
                                    type="text" name="price-max" id="price-max" placeholder="999,999"
                                    value="{{ isset($_GET['max']) ? number_format($_GET['max']) : '' }}">
                            </div>
                        </div>

                        {{-- แพ็กเกจ เรียงลำดับราคา --}}
                        <div class="mb-4 flex justify-between w-full gap-4">
                            <div class="flex flex-col w-1/2  gap-y-2 ">
                                <label for="slc-package" class="text-black">แพ็กเกจ</label>
                                <select class="w-full h-8 border border-[#838383] rounded-[3px]" name="slc-package"
                                    id="slc-package">
                                    <option value="">เลือกแพ็กเกจ</option>
                                    @foreach ($packages as $pack)
                                        <option value="{{ $pack->id }}" class="text-[14px] w-[150px]"
                                            {{ isset($_GET['package']) && $_GET['package'] == $pack->id ? 'selected' : '' }}>
                                            {{ $pack->details }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col w-1/2  gap-y-2 ">
                                <label for="slc-sort" class="text-black">เรียงลำดับราคา</label>
                                <select class="w-full h-8 border border-[#838383] rounded-[3px]" name="slc-sort"
                                    id="slc-sort">
                                    <option value="">เรียงลำดับราคา</option>
                                    <option value="desc"
                                        {{ isset($_GET['sort']) && $_GET['sort'] == 'desc' ? 'selected' : '' }}>
                                        ราคามากไปน้อย
                                    </option>
                                    <option value="asc"
                                        {{ isset($_GET['sort']) && $_GET['sort'] == 'asc' ? 'selected' : '' }}>
                                        ราคาน้อยไปมาก
                                    </option>
                                    <option value="rand"
                                        {{ isset($_GET['sort']) && $_GET['sort'] == 'rand' ? 'selected' : '' }}>
                                        สุ่มราคาสินค้า
                                    </option>
                                </select>
                            </div>

                        </div>


                        {{-- ผลรวม ค้นหาเลขชุด --}}
                        <div class="mb-4 flex justify-between w-full gap-4 ">
                            <div class="flex flex-col w-1/2  gap-y-2">
                                <label for="slc-sum" class="text-black">ผลรวม</label>
                                <select class="w-full h-8 border border-[#838383] rounded-[3px]" name="slc-sum"
                                    id="slc-sum">
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
                                        <option value="{{ $sum->predict_sum }}" {{ $selected }}>
                                            {{ $sum->predict_sum }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="flex flex-col w-1/2  gap-y-2">
                                <label for="slc-network" class="text-black">เครือข่าย</label>
                                <select class="w-full h-8 border border-[#838383] rounded-[3px]" name="slc-network"
                                    id="slc-network">
                                    <option value="">เครือข่าย</option>
                                    @foreach ($networks as $net)
                                        @php
                                            $selected = null;
                                            if (isset($_GET['network'])) {
                                                if ($net->network_name == $_GET['network']) {
                                                    $selected = 'selected';
                                                }
                                            }
                                        @endphp
                                        <option value="{{ $net->network_name }}" {{ $selected }}>
                                            {{ $net->network_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- ค้นหาเบอร์มงคลที่ชอบ --}}
                        <div class="flex flex-col w-full  gap-y-2">
                            <label for="txt_favorite" class="text-black">ค้นหาเบอร์มงคลที่ชอบ</label>
                            <input class="w-full h-8 border border-[#838383] rounded-[3px] p-2" type="text"
                                name="txt_favorite" id="txt_favorite" maxlength="10"
                                placeholder="คู่เบอร์มงคลที่ชอบ 42,25 หรือ 55*56"
                                value="{{ isset($_GET['fav']) ? $_GET['fav'] : '' }}">
                        </div>

                    </div>

                    {{-- border center --}}
                    <div class="border border-1 border-gray-300 rounded-full">
                    </div>

                    {{-- box right --}}
                    <div class="w-1/2 max-lg:w-full flex flex-col justify-between">
                        <div class="flex flex-col mb-4 w-full">
                            <p class="mb-2 text-black">เสริมดวงด้าน</p>
                            <div
                                class="grid grid-cols-8 max-yy:grid-cols-7 max-[1400px]:grid-cols-6 max-xl:grid-cols-6 max-[1025px]:grid-cols-5 max-lg:grid-cols-8 max-ex:grid-cols-5  gap-y-2 gap-3">
                                @php
                                    $exImprove = [];
                                    if (isset($_GET['improve'])) {
                                        $improve = $_GET['improve'];
                                        $exImprove = explode(',', $improve);
                                    }
                                @endphp
                                @foreach ($berpredict_numbcate as $numbcate)
                                    @php
                                        $imp_selected = in_array($numbcate->numbcate_id, $exImprove) ? 'bg-gradient-to-r from-[#EC1F25] to-[#960004] text-white selected' : '';
                                        $image_selected = in_array($numbcate->numbcate_id, $exImprove) ? 'filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);' : '';
                                    @endphp
                                    <div class="flex flex-col justify-center items-center gap-y-1">
                                        <button id="improve-ber" data-id="{{ $numbcate->numbcate_id }}"
                                            class="relative p-[0.5rem]  w-full bg-white rounded-[5px] group border-2 border-white {{ $imp_selected }} hover:text-white hover:bg-gradient-to-r from-[#EC1F25] to-[#960004]">
                                            <img src="{{ $numbcate->thumbnail }}" alt=""
                                                style="{{ $image_selected }}"
                                                class="group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                            <div class="w-[6.5rem] h-10 absolute -top-6 left-3 hidden group-hover:block">
                                                <img class="scale-150 w-full h-full" src="/icons/category/union.png"
                                                    alt="">
                                                <p class="w-full text-xs absolute top-1 text-black left-0 text-center">
                                                    {{ $numbcate->numbcate_title }}</p>
                                            </div>

                                        </button>
                                        <p class="w-full text-[12px] text-center">
                                            {{ $numbcate->numbcate_title }}</p>
                                    </div>
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
                        <div class="flex flex-col w-full">
                            <p class="mb-2 text-black">หมวดหมู่เบอร์</p>
                            <div
                                class="grid grid-cols-8 max-yy:grid-cols-7 max-[1400px]:grid-cols-6 max-xl:grid-cols-6 max-[1025px]:grid-cols-5 max-lg:grid-cols-8 max-ex:grid-cols-5  gap-y-2 gap-3 ">
                                @foreach ($berproduct_cates as $bercate)
                                    @if ($bercate->bercate_pin == true)
                                        @php
                                            $aus_selected = in_array($bercate->bercate_id, $exAuspicious) ? 'bg-gradient-to-r from-[#EC1F25] to-[#960004] text-white selected' : '';
                                            $img_selected = in_array($bercate->bercate_id, $exAuspicious) ? 'filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);' : '';
                                        @endphp
                                        <div class="flex flex-col justify-center items-center gap-y-1">
                                            <button id="cate-ber" data-id="{{ $bercate->bercate_id }}"
                                                class="relative p-[0.5rem] w-full bg-white rounded-[5px] border-2 border-white group hover:text-white {{ $aus_selected }} hover:bg-gradient-to-r from-[#EC1F25] to-[#960004]">
                                                <img src="{{ $bercate->thumbnail }}" alt=""
                                                    style="{{ $img_selected }}"
                                                    class="group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                                <div
                                                    class="w-[6.5rem] h-10 absolute -top-6 left-3 hidden group-hover:block">
                                                    <img class="scale-150 w-full h-full" src="/icons/category/union.png"
                                                        alt="">
                                                    <p class="w-full text-xs absolute top-1 left-0 text-black">
                                                        {{ $bercate->bercate_title }}
                                                    </p>
                                                </div>

                                            </button>
                                            <p class="w-full text-[12px] text-center ">
                                                {{ $bercate->bercate_title }}
                                            </p>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="flex flex-col justify-center items-center gap-y-1">
                                    <button id="btn-vip" data-id="vip"
                                        class="relative p-2 w-full bg-white border-2 border-white rounded-[5px] group hover:text-white {{ isset($_GET['pin']) ? 'bg-gradient-to-r from-[#c5a04f] to-[#a1621e] selected' : '' }} hover:bg-gradient-to-r  from-[#EC1F25] to-[#960004] ">
                                        <img src="/images/icon/VIP.png" alt=""
                                            style="{{ isset($_GET['pin']) ? 'filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);' : '' }}"
                                            class="group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                        <div class="w-[6.5rem] h-10 absolute -top-6 left-3 hidden group-hover:block">
                                            <img class="scale-150 w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100"
                                                src="/icons/category/union.png" alt="">
                                            <p class="w-full text-xs absolute top-1 left-0 text-black">เบอร์ VIP</p>
                                        </div>

                                    </button>
                                    <p class="w-full text-[12px] text-center ">เบอร์ VIP</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full mt-8 flex justify-center gap-10 ">
                    <button id="reset-search"
                        class="px-8 py-1 bg-[#fff]  text-black rounded-[15px] border-2 border-red-700 hover:bg-red-700 hover:text-white">คืนค่า</button>
                    <button id="search-product"
                        class="px-8 py-1 bg-[#fff] text-black rounded-[15px] border-2 border-red-700 hover:bg-red-700  hover:text-white">ค้นหา</button>
                </div>

            </div>
        </div>
        <!-- end search box -->


        {{-- result search --}}
        <div class="text-center py-6">
            <h1 class="2xl:text-[2rem] xl:text-[22px] text-[20px] font-medium ">แหล่งรวมเบอร์มงคล</h1>
            <p class="text-[#838383] 2xl:text-[20px] xl:text-[18px] text-[16px]">เบอร์มงคล พร้อมแพ็กเกจ ที่คุณอาจสนใจ</p>
            <p class="text-[#EC1F25] 2xl:text-[20px] xl:text-[18px] text-[16px]">เบอร์ที่ค้นพบ {{ count($totalCount) }}
                เบอร์</p>
        </div>

        <!-- box all product -->
        @if (count($berproducts) > 0)
            <div class=" px-3">
                <div
                    class="w-4/5mx-auto flex flex-wrap justify-center items-center ss:p-1 p-4 gap-10 max-yy:gap-[2.5rem] max-2xl:gap-6">
                    @foreach ($berproducts as $product)
                        <div class="drop-shadow-md w-[350px] max-2xl:w-[335px] max-es:w-[325px]">
                            <div
                                class="relative overflow-hidden bg-gradient-to-r from-[#CE090E] via-[#CE090E] to-[#00ADEF] rounded-tl-[10px] rounded-tr-[10px] px-3 z-0">
                                <div class="flex justify-start items-center gap-1 ">
                                    <p class="text-white text-[18px]">เกรด</p>
                                    <p class="text-white font-medium text-[1.5rem]">{{ $product->product_grade }}</p>
                                </div>
                                <div
                                    class="absolute top-0 right-0  bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] h-full w-4/6  transform -skew-x-12 px-2 flex justify-end items-center">
                                    <p class="text-white mr-1 text-[18px]">ผลรวม</p>
                                    <p class="text-white font-bold text-[1.5rem]">{{ $product->product_sumber }}</p>
                                </div>
                                <img class=" absolute right-0 top-0" src="/images/circle/Intersect.png" alt="">
                            </div>
                            {{-- @dd($product) --}}
                            {{-- berproduct --}}
                            <div class="bg-white flex items-center justify-center px-2 gap-[1rem]">
                                <div class="max-w-[70px] max-h-[40px]">
                                    <img src="{{ isset($product->thumbnail) ? $product->thumbnail : '/images/651e616b04c02CnURE.png' }}"
                                        alt="" class="w-full h-full">
                                </div>
                                <div class="flex justify-center py-10 ">
                                    <p class="text-[35px] text-center font-bold">
                                        {{ $product->product_phone }}</p>
                                </div>
                            </div>
                            {{-- berproduct --}}
                            {{-- berproduct --}}

                            <div class="bg-[#F8F9FA] flex flex-col  px-4 py-2 max-dm:h-[100px] h-[120px]">
                                {{-- <img src="/images/Ellipse 6.png" alt="" class="px-4 py-1"> --}}
                                @if ($product->monthly_status)
                                    <p class="text-left 2xl:text-[16px] text-[14px] px-2 col-span-4 font-light">
                                        {{ $title_package = $packages->firstWhere('id', $product->product_package)->details }}
                                    </p>
                                @endif
                                <p class="text-left 2xl:text-[16px] text-[14px] px-2 col-span-4 font-light">
                                    {{ $product->product_comment }}</p>
                            </div>

                            <div
                                class=" relative bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-2 px-2 items-center">
                                <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="grid grid-cols-3 items-center">
                                    <p class="text-white text-left text-[18px] pt-1 ">
                                        ราคา
                                    </p>
                                    <p class="flex items-center flex-col">
                                        @if ($product->product_discount > 0)
                                            <span
                                                class="text-gray-100 line-through leading-[2px] text-[35px]">{{ number_format($product->product_price) }}</span>
                                        @endif
                                        <span
                                            class="text-white font-medium text-center text-[35px]">{{ number_format($product->product_price - ($product->product_price * $product->product_discount) / 100) }}</span>
                                    </p>
                                    <p class="text-white text-right text-[18px] pt-1 ">บาท
                                    </p>

                                </div>
                            </div>


                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-between py-4 px-2 items-center gap-1">
                                <div id="addBerToCart" data-id="{{ $product->product_id }}" data-type="3"
                                    class="group rounded-full border border-red-500  w-[50px] h-[50px]  max-yy:w-[45px] max-yy:h-[45px]  flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-30">
                                </div>

                                <a href="https://line.me/ti/p/~@berhoro" class="flex justify-center items-center">
                                    <div
                                        class="  group rounded-full border border-green-500 w-[50px] h-[50px]  max-yy:w-[45px] max-yy:h-[45px] p-2 hover:bg-green-600">
                                        <img src="/images/icons8-line-app (1) 6.png" alt=""
                                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                    </div>
                                </a>

                                <a href="{{ url('/detailber/' . $product->product_phone) }}" target="_blank"
                                    class="cursor-pointer flex justify-center items-center py-2.5  w-28 max-xs:w-24 max-uu:text-[18px]  max-yy:text-[16px] max-xs:text-[14px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>
                                <button id="buyProductNow" data-id="{{ $product->product_id }}" data-type="3"
                                    class="cursor-pointer flex justify-center items-center py-2.5  w-28 max-xs:w-24  max-uu:text-[18px]  max-yy:text-[16px] max-xs:text-[14px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ซื้อเลย</button>
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

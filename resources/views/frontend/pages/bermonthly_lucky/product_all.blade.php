@extends('frontend.layouts.main')

@section('content')
    <div class=" text-left ">

        <div class="h-[158px] bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] flex justify-center items-center">
            <div class="flex max-xs:flex-col gap-8">
                <a href="/bermonthly?sim=month"
                    class="bg-white flex justify-center items-center gap-2 py-2 px-2 rounded-[5px] hover:scale-105 transition-all duration-500 ease-in-out">

                    @if (isset($_GET['sim']) && $_GET['sim'] == 'month')
                        <div class="w-7 h-7">
                            <img id="system-sim" data-sim="month" class="w-full h-full" src="/icons/check.png" alt="">
                        </div>
                    @else
                        <div class="w-7 h-7">
                            <img id="system-sim" data-sim="month" class="w-full h-full " src="/images/check-one.png"
                                alt="">
                        </div>
                    @endif
                    <p class="text-[#CE090E] text-[17px] ">เบอร์มงคลระบบรายเดือน</p>
                </a>
                <a href="/bermonthly?sim=paysim"
                    class="bg-black flex justify-center items-center gap-2 py-2 px-2 rounded-[5px] hover:scale-105 transition-all duration-500 ease-in-out">
                    @if (isset($_GET['sim']) && $_GET['sim'] == 'paysim')
                        <div class="w-7 h-7">
                            <img id="system-sim" data-sim="paysim" class="w-full h-full" src="/icons/check.png"
                                alt="">
                        </div>
                    @else
                        <div class="w-7 h-7">
                            <img id="system-sim" data-sim="paysim" class="w-full h-full" src="/images/check-one.png"
                                alt="">
                        </div>
                    @endif
                    <p class="text-white text-[17px]">เบอร์มงคลระบบเติมเงิน</p>
                </a>
            </div>
        </div>



        <div class="overflow-x-scroll 2xl:overflow-hidden lg:overflow-hidden mb-4 px-3 2xl:mt-6">
            <div class="grid grid-cols-5 py-6 se:w-[750px] md:w-[1200px] 2xl:w-[1200px] dm:w-[800px] items-center mx-auto">
                @foreach ($berpredict_numbcate as $numcate)
                    @if ($numcate->recommended == true)
                        <a href="?improve={{ $numcate->numbcate_id }}"
                            class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-110 transition-all duration-500 ease-in-out">
                            <div class="w-10 h-10 max-sm:w-[40px]">
                                <img class="w-full h-full mb-2" src="{{ $numcate->thumbnail }}" alt="">
                            </div>
                            <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">{{ $numcate->numbcate_title }}</p>
                        </a>
                    @endif
                @endforeach

                @foreach ($berproduct_cates as $cate)
                    @if ($cate->recommended == true)
                        <a
                            href="?auspicious={{ $cate->bercate_id }}"class="flex flex-col items-center cursor-pointer hover:text-[#EC1F25] hover:font-bold hover:scale-110 transition-all duration-500 ease-in-out">
                            <div class="w-10 h-10 max-sm:w-[30px]">
                                <img class="w-full h-full mb-3" src="/{{ $cate->thumbnail }}" alt="">
                            </div>
                            <p class="2xl:text-[18px] md:text-[16px] se:text-[14px]">{{ $cate->bercate_title }}</p>
                        </a>
                    @endif
                @endforeach
            </div>
        </div>

        {{-- มหัศจรรย์ --}}
        <div class="title-plate-container px-3 ">
            <div class="mx-auto 2xl:w-[1536px] xl:w-[1200px]  ">
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
        <div class="max-xs:mx-2">
            <div class="">
                <div
                    class="xl:w-[1200px] 2xl:w-[1536px] max-xs:max-w-[100%] w-[90%] p-4 max-xs:p-2 max-xs:w-[100%] bg-gradient-to-r from-[#EC1F25] to-[#960004] mx-auto rounded-[20px] mt-8   2xl:p-6  text-[17px] ">
                    <div class="flex max-lg:flex-col gap-4 ">
                        {{-- box left --}}
                        <div class=" w-full max-2xl:w-[48%] max-lg:w-full">
                            <div class="w-full p-2 flex flex-col bg-white rounded-[10px] mb-4">
                                <label class="text-black " for="input-fortune">กรอกเบอร์โทร</label>
                                <div class="w-full flex gap-4">
                                    <input class="w-full h-7 text-center rounded-[3px] bg-slate-200 " type="text"
                                        id="input-fortune" maxlength="10">
                                    <button
                                        class="w-full max-w-[25%] max-xs:max-w-[29%] rounded-[15px] text-[17px] se:text-[14px] font-medium bg-gradient-to-r from-[#EC1F25] to-[#960004] text-white"
                                        id="fortune-ber">วิเคราะห์เบอร์</button>
                                </div>
                            </div>

                            <div class="mb-4 flex gap-4 max-2xl:flex-col 2xl:items-center w-full">
                                <div class="2xl:w-[20%]">
                                    <label class="text-left text-white" for="">ค้นหาเบอร์</label>
                                </div>
                                <div class="flex justify-between gap-5 max-2xl:gap-4 max-xl:gap-2">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" data-position="0" value="0" disabled>
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="1" maxlength="1"
                                        value="{{ isset($_GET['pos1']) ? $_GET['pos1'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 mr-2 max-xs:mr-1  bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="2" maxlength="1"
                                        value="{{ isset($_GET['pos2']) ? $_GET['pos2'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="3" maxlength="1"
                                        value="{{ isset($_GET['pos3']) ? $_GET['pos3'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="4" maxlength="1"
                                        value="{{ isset($_GET['pos4']) ? $_GET['pos4'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6  mr-2 max-xs:mr-1 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="5" maxlength="1"
                                        value="{{ isset($_GET['pos5']) ? $_GET['pos5'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="6" maxlength="1"
                                        value="{{ isset($_GET['pos6']) ? $_GET['pos6'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="7" maxlength="1"
                                        value="{{ isset($_GET['pos7']) ? $_GET['pos7'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="8" maxlength="1"
                                        value="{{ isset($_GET['pos8']) ? $_GET['pos8'] : '' }}" placeholder="-">
                                    <input
                                        class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 max-es:w-6 max-es:h-6 bg-white border border-[#838383] text-center rounded-[3px]"
                                        type="text" id="search-num" data-position="9" maxlength="1"
                                        value="{{ isset($_GET['pos9']) ? $_GET['pos9'] : '' }}" placeholder="-">
                                </div>
                            </div>

                            <div class="flex flex-col mb-4 gap-y-2">
                                <label for="slc-category" class="text-white">หมวดหมู่เบอร์</label>
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

                            <div class="mb-4 flex justify-between w-full gap-4 ">
                                <div class="flex flex-col w-1/2  gap-y-2">
                                    <label for="slc-sum" class="text-white">ผลรวม</label>
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

                                <div class="flex flex-col w-1/2 gap-y-2">
                                    <label for="txt_favorite" class="text-white">ค้นหาเลขชุดที่ชอบ</label>
                                    <input class="w-full h-8 border border-[#838383] rounded-[3px] p-2" type="text"
                                        name="txt_favorite" id="txt_favorite" maxlength="10"
                                        placeholder="ชุดเลขที่ชอบ 42,25 หรือ 55*56"
                                        value="{{ isset($_GET['fav']) ? $_GET['fav'] : '' }}">
                                </div>
                            </div>

                            <div class="mb-4 flex justify-between w-full gap-4">
                                <div class="flex flex-col w-1/2  gap-y-2 ">
                                    <label for="slc-package" class="text-white">แพ็กเกจ</label>
                                    <select class="w-full h-8 border border-[#838383] rounded-[3px]" name="slc-package"
                                        id="slc-package">
                                        <option value="">เลือกแพ็กเกจ</option>
                                        @foreach ($packages as $pack)
                                            <option value="{{ $pack->id }}" class="text-[14px] w-[150px]"
                                                {{ isset($_GET['package']) && $_GET['package'] == $pack->id ? 'selected' : '' }}>
                                                {{ $pack->title }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="flex flex-col w-1/2  gap-y-2 ">
                                    <label for="slc-sort" class="text-white">เรียงลำดับราคา</label>
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

                            <div class="flex flex-col w-full gap-y-2  mb-6 ">
                                <label for="txt_favorite" class="text-white">ช่วงราคา</label>
                                <div class="flex  w-full items-center justify-between gap-4">
                                    <input class=" w-1/2  h-8 border border-[#838383] rounded-[3px] price-input p-2"
                                        type="text" name="price-min" id="price-min" placeholder="999"
                                        value="{{ isset($_GET['min']) ? number_format($_GET['min']) : '' }}">

                                    <input class="w-1/2  h-8 border border-[#838383] rounded-[3px] price-input p-2"
                                        type="text" name="price-max" id="price-max" placeholder="999,999"
                                        value="{{ isset($_GET['max']) ? number_format($_GET['max']) : '' }}">
                                </div>
                            </div>

                            <div class="flex flex-col gap-y-2 mb-4">
                                @php
                                    $explodeLike = [];
                                    if (isset($_GET['like'])) {
                                        $like = $_GET['like'];
                                        $explodeLike = explode(',', $like);
                                    }
                                @endphp
                                <div class="flex gap-x-4 gap-y-2 mb-4 2xl:items-center w-full max-2xl:flex-col">
                                    <div class="2xl:w-[25%]">
                                        <label for="" class="text-white">ตัวเลขที่ชอบ</label>
                                    </div>
                                    <div class="flex gap-x-5 max-2xl:gap-x-4 max-xs:gap-x-3  text-white justify-between">
                                        @for ($i = 0; $i <= 9; $i++)
                                            <button id="like" data-fav="{{ $i }}"
                                                class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 bg-[#a0a0a0] rounded-[3px] border-2 border-white {{ in_array(strval($i), $explodeLike) ? 'bg-gradient-to-r from-[#5741CD] to-[#00ACEE]  text-white selected' : '' }}">
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
                                <div class="flex gap-x-4 gap-y-2  mb-4 2xl:items-center w-full max-2xl:flex-col ">
                                    <div class="2xl:w-[25%]">
                                        <label for="" class="text-white">ตัวเลขที่ไม่ชอบ</label>
                                    </div>
                                    <div
                                        class="flex gap-x-5 max-2xl:gap-x-2 max-xs:gap-x-3 text-white justify-between w-full">
                                        @for ($i = 0; $i <= 9; $i++)
                                            <button id="dislike" data-fav="{{ $i }}"
                                                class="w-10 h-10 max-xl:w-8 max-xl:h-8 max-lg:w-10 max-lg:h-10 max-xs:w-7 max-xs:h-7 bg-[#a0a0a0]  rounded-[3px] border-2 border-white {{ in_array(strval($i), $explodedisLike) ? 'bg-gradient-to-r from-yellow-500 to-[#fa6007] text-white selected' : '' }}">{{ $i }}</button>
                                        @endfor
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- border center --}}
                        <div class="border  border-1 border-white">
                        </div>

                        {{-- box right --}}
                        <div class="w-full flex flex-col justify-between">
                            <div class="flex flex-col mb-4">
                                <p class="mb-2 text-white">เสริมดวงด้าน</p>
                                <div class="flex flex-wrap gap-[1rem] max-es:gap-[0.8rem] max-xs:gap-[1rem]">
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
                                            class="relative p-[0.5rem] w-[75px] max-xl:w-[55px] bg-white rounded-[5px] group border-2 border-white {{ $imp_selected }} hover:bg-gradient-to-r from-[#c5a04f] to-[#a1621e]">
                                            <img src="{{ $numbcate->thumbnail }}" alt=""
                                                style="{{ $image_selected }}"
                                                class="group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                            <div class="w-[6.5rem] h-10 absolute -top-6 left-3 hidden group-hover:block">
                                                <img class="scale-150 w-full h-full" src="/icons/category/union.png"
                                                    alt="">
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
                                <p class="mb-2 text-white">หมวดหมู่เบอร์</p>
                                <div class="flex flex-wrap gap-[1rem] max-es:gap-[0.8rem] max-xs:gap-[1rem]">
                                    @foreach ($berproduct_cates as $bercate)
                                        @if ($bercate->bercate_pin == true)
                                            @php
                                                $aus_selected = in_array($bercate->bercate_id, $exAuspicious) ? 'bg-gradient-to-r from-[#EC1F25] to-[#960004] selected' : '';
                                                $img_selected = in_array($bercate->bercate_id, $exAuspicious) ? 'filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);' : '';
                                            @endphp
                                            <button id="cate-ber" data-id="{{ $bercate->bercate_id }}"
                                                class="relative p-[0.5rem] w-[75px] max-xl:w-[55px]  bg-white rounded-[5px] border-2 border-white group {{ $aus_selected }} hover:bg-gradient-to-r from-[#c5a04f] to-[#a1621e]">
                                                <img src="{{ $bercate->thumbnail }}" alt=""
                                                    style="{{ $img_selected }}"
                                                    class="group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                                <div
                                                    class="w-[6.5rem] h-10 absolute -top-6 left-3 hidden group-hover:block">
                                                    <img class="scale-150 w-full h-full" src="/icons/category/union.png"
                                                        alt="">
                                                    <p class="w-full text-xs absolute top-1 left-0">
                                                        {{ $bercate->bercate_title }}
                                                    </p>
                                                </div>
                                            </button>
                                        @endif
                                    @endforeach
                                    <button id="btn-vip" data-id="vip"
                                        class="relative p-2 w-[75px] max-xl:w-[55px] bg-white border-2 border-white rounded-[5px] group  {{ isset($_GET['pin']) ? 'bg-gradient-to-r from-[#c5a04f] to-[#a1621e] selected' : '' }} hover:bg-gradient-to-r from-[#c5a04f] to-[#a1621e] ">
                                        <img src="/images/icon/VIP.png" alt=""
                                            style="{{ isset($_GET['pin']) ? 'filter: invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%);' : '' }}"
                                            class="group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                        <div class="w-[6.5rem] h-10 absolute -top-6 left-3 hidden group-hover:block">
                                            <img class="scale-150 w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100"
                                                src="/icons/category/union.png" alt="">
                                            <p class="w-full text-xs absolute top-1 left-0">เบอร์ VIP</p>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="w-full mt-8 flex justify-center gap-10 ">
                        <button id="reset-search"
                            class="px-8 py-1 bg-[#fff]  text-black rounded-[15px] border-2 border-[#fff] hover:bg-gradient-to-r from-[#c5a04f] to-[#a1621e] hover:text-white">คืนค่า</button>
                        <button id="search-product"
                            class="px-8 py-1 bg-[#fff] text-black rounded-[15px] border-2 border-[#fff] hover:bg-gradient-to-r from-[#c5a04f] to-[#a1621e] hover:text-white">ค้นหา</button>
                    </div>

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

                            <div class="bg-[#F8F9FA] grid grid-cols-5 py-2 max-dm:h-[80px] h-[110px]">
                                <img src="/images/Ellipse 6.png" alt="" class="px-4 py-1">
                                <p class="text-left 2xl:text-[16px] text-[14px] px-2 col-span-4">
                                    {{ $product->product_comment }}</p>
                            </div>

                            <div
                                class=" relative bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] py-2 px-2 items-center">
                                <img class=" absolute left-0 bottom-0" src="/images/circle/Intersect (2).png"
                                    alt="">
                                <div class="grid grid-cols-3">
                                    <p class="text-white text-left 2xl:text-[18px] text-[1rem] md:text-[18px] pt-1 ">ราคา
                                    </p>
                                    <p class="flex items-center flex-col">
                                        @if ($product->product_discount > 0)
                                            <span
                                                class="text-gray-100 line-through leading-[2px]">{{ number_format($product->product_price) }}</span>
                                        @endif
                                        <span
                                            class="text-white font-medium text-center 2xl:text-3xl md:text-[2rem] text-2xl">{{ number_format($product->product_price - ($product->product_price * $product->product_discount) / 100) }}</span>
                                    </p>
                                    <p class="text-white text-right 2xl:text-[18px] text-[1rem] md:text-[18px] pt-1 ">บาท
                                    </p>

                                </div>
                            </div>

                            <div
                                class="bg-white rounded-bl-[10px] rounded-br-[10px] 2xl:flex 2xL:justify-center flex justify-center px-2 md:px-0 lg:px-0 items-center ">
                                <div id="addBerToCart" data-id="{{ $product->product_id }}" data-type="3"
                                    class="group rounded-full border border-red-500 mb-4 mt-2 mx-1 w-[45px] h-[45px] flex justify-center items-center p-2 hover:bg-red-600">
                                    <img src="/images/mdi_cart-arrow-down.png" alt=""
                                        class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                </div>

                                <a href="https://line.me/ti/p/~@berhoro">
                                    <div
                                        class="group rounded-full border border-green-500 mb-4 mt-2 mx-1 w-[45px] h-[45px] flex justify-center items-center p-2 hover:bg-green-600">
                                        <img src="/images/icons8-line-app (1) 6.png" alt=""
                                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                                    </div>
                                </a>

                                <a href="{{ url('/detailber/' . $product->product_phone) }}"
                                    class="cursor-pointer flex items-center lg:px-2 xl:px-1  ss:px-2 2xl:px-4 px-4 2xl:py-3 py-2 lg:mb-2 mb-4 lg:mt-0 mt-2 mx-1 ss:mx-2 2xl:text-[16px] md:text-[16px] text-[1rem] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">รายละเอียด</a>


                                <button id="buyProductNow" data-id="{{ $product->product_id }}" data-type="3"
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

@extends('frontend.layouts.main')
@section('content')
    <div class="text-left 2xl:mt-32 xl:mt-32 mt-16">
        <div class="w-full max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[95%] py-10 mx-auto">
            <div class="text-center">
                <h1 class="2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium ">ตระกร้าสินค้า</h1>
                <h1 class=" text-[#838383] 2xl:text-[20px]  xl:text-[18px] text-[16px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม ที่คุณอาจสนใจ</h1>
                <div class="w-[201px] h-1 bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF]  mx-auto mt-6 "></div>
            </div>
        </div>

        <div class="2xl:w-[1536px] xl:w-[1200px] w-full pb-10 mx-auto px-3">

            <div class="bg-[#F8F9FA] flex flex-col justify-center">
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] text-white p-4  rounded-t-[10px] flex justify-between ">
                    <p class="2xl:text-[18px] text-[16px] es:text-[16px]">สินค้า</p>
                    <div class="flex justify-between md:gap-[4rem] lg:gap-[4.8rem] es:gap-[1.2rem] lg:pr-[6rem] md:pr-[5rem] items-center es:text-[16px] max-ex:pr-[2rem] max-ex:gap-[1rem]">
                        <p class="text-center 2xl:text-[18px] text-[16px]">ราคา</p>
                        <p class="text-center 2xl:text-[18px] text-[16px]">จำนวน</p>
                        <p class="text-center 2xl:text-[18px] text-[16px] 2xl:pr-4">ราคารวม</p>
                    </div>
                </div>

                @for($i = 1; $i <= 5 ;$i++)
                {{-- cart items list --}}
                <div class="">
                    <div class="max-ex:p-2 p-4 flex justify-between items-center">
                        <div class="md:flex md:justify-between grid grid-cols-1 md:gap-8 items-center">
                            <figure>
                                <img class="max-ex:w-[60px] max-ex:h-[60px] w-[100px] h-[100px] max" src="/icons/category/imgcart.png" alt="">
                            </figure>
                            <div class="">
                                <p class="font-semibold">เบอร์มงคล</p>
                                <p>หมายเลขเบอร์ <br> 096-554-6995</p>
                               <div class="max-ex:hidden"> <p>เกรด A+</p>
                                <p>เน็ต Unlimited + โทร 1700 Mins</p></div>
                            </div>
                        </div>

                        <div class="flex justify-between 2xl:gap-[5.8rem] xl:gap-[5rem] lg:gap-[4.8rem] md:gap-[4rem] es:gap-[1rem] pr-6 es:pr-0  items-center max-ex:pr-0 max-ex:gap-[1.6rem] ">
                            <p class="flex justify-center items-center text-[16px] font-semibold">333,850</p>
                            <p class="flex justify-center items-center text-[16px] font-semibold">1</p>
                            <p class="flex justify-center items-center text-[16px] font-semibold">333,850</p>
                            <figure class="flex justify-center items-center cursor-pointer">
                                <img src="/icons/cart_trash.png" alt="" class="max-ex:w-[20px] max-ex:h-[20px]">
                            </figure>
                        </div>

                    </div>

                </div>
                <hr>
                @endfor

                {{-- total price --}}
                <div class="max-ex:p-2 p-4 max-ex:my-4 my-8 bg-white border border-[1px]-[#D9D9D9] rounded-[10px]">
                    <div class="flex justify-between">
                        <p class="text-[16px] max-ex:text-[14px] font-semibold ">ยอดรวม สินค้า</p>
                        <div class="flex gap-4 ">
                            <div class="text-[16px] font-semibold">334,799</div>
                            <p class="text-[#838383] max-ex:text-[14px]">บาท</p>
                        </div>
                    </div>
                    <div class="flex justify-between ">
                        <div class="flex justify-center items-center gap-2 max-ex:grid max-ex:grid-row-2">
                            <p class="text-[16px] max-ex:text-[14px] font-semibold">ค่าจัดส่ง</p>
                            <p class="text-[12px] max-ex:text-[10px] text-[#838383] text-center">***จัดส่งฟรีเมื่อยอดสั่งซื้อขั้นต่ำมากว่า 1,000,000 บาท
                            </p>
                        </div>
                        <div class="flex gap-4">
                            <div class="text-[16px] font-semibold ">334,799</div>
                            <p class="text-[#838383]">บาท</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <h1 class="text-lg text-[#EC1F25] max-ex:text-[14px]">ยอดรวมทั้งหมด</h1>
                        <div class="flex items-end gap-4">
                            <p class="text-[16px] font-semibold text-[#EC1F25]">334,799</p>
                            <p class="text-[#838383] max-ex:text-[14px]">บาท</p>
                        </div>
                    </div>
                </div>

                {{-- customer contact --}}
                <div class="max-ex:p-2 p-4 bg-white border border-[1px]-[#D9D9D9] rounded-[10px]">
                    <h1 class="text-lg font-semibold">กรอกที่อยู่ในการจัดส่ง</h1>
                    <div class="grid grid-cols-2 max-lg:grid-cols-1 gap-10 max-lg:gap-2 pt-2">
                        <div class="flex flex-col gap-2">
                            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
                                <label class="text-end" for="name">ชื่อ*</label>
                                <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text"
                                    name="name" id="name">
                            </div>
                            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
                                <label class="text-end" for="last-name">นามสกุล*</label>
                                <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text"
                                    name="last-name" id="last-name">
                            </div>
                            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
                                <label class="text-end" for="customer-tel">เบอร์โทร*</label>
                                <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text"
                                    name="customer-tel" id="customer-tel" maxlength="10">
                            </div>
                            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[80px,1fr] gap-4">
                                <label class="text-end" for="customer-email">อีเมล*</label>
                                <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" type="text"
                                    name="customer-email" id="customer-email">
                            </div>
                        </div>
                        <div class="flex flex-col gap-2">
                            <div class="grid grid-cols-[80px,1fr] gap-4">
                                <label class="text-end" for="customer-address">ที่อยู่*</label>
                                <textarea class="px-2 h-14 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]" name="customer-address"
                                    id="customer-address" cols="30" rows="3"></textarea>
                            </div>
                            <div class="grid grid-cols-2 max-xs:grid-cols-1 gap-4">
                                <div class="grid grid-cols-[80px,1fr] gap-4">
                                    <label class="text-end" for="sub-district">ตำบล/แขวง*</label>
                                    <select class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]"
                                        name="sub-district" id="sub-district">
                                        <option value="ศิลา">ศิลา</option>
                                    </select>
                                </div>
                                <div class="grid grid-cols-[80px,1fr] gap-4">
                                    <label class="text-end" for="district">อำเภอ/เขต*</label>
                                    <select class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]"
                                        name="district" id="district">
                                        <option value="ในเมือง">ในเมือง</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 max-xs:grid-cols-1 gap-4">
                                <div class="grid grid-cols-[80px,1fr] gap-4">
                                    <label class="text-end" for="province">จังหวัด*</label>
                                    <select class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]"
                                        name="province" id="province">
                                        <option value="ขอนแก่น">ขอนแก่น</option>
                                    </select>
                                </div>
                                <div class="grid grid-cols-[80px,1fr] gap-4">
                                    <label class="text-end" for="post-code">รหัสไปรษณี*</label>
                                    <input class="w-full px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]"
                                        type="text" name="post-code" id="post-code" maxlength="5">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- btn submit --}}
            <div class="mt-5 flex justify-center gap-4">
                <a class="px-6 py-1 bg-white border border-[1px]-[#EC1F25] text-[#EC1F25] rounded-[15px]">กลับหน้าหลัก</a>
                <button class="px-3 py-1 bg-[#EC1F25] text-white rounded-[15px]"
                    id="submit-buy">ยืนยันการสั่งซื้อ</button>
            </div>

        </div>
    </div>


    <!-- end box product -->
    @include('frontend.pages.bermonthly_lucky.footer_bermonthly_lucky')
@endsection

@section('scripts')
    @vite('resources/js/bermonthly_lucky/cartproduct.js')
@endsection

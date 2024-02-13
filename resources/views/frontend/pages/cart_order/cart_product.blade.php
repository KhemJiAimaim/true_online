@extends('frontend.layouts.main')

@section('style')
    <style>
        .main {
            height: auto;
            min-height: 100% !important;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            /* overflow-y: auto; */
        }


        #loader {
            position: fixed;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background-color: #c9c8c898;

            transform: translate(-50%, -50%);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            display: none;
        }

        .wrapper {

            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .ball {
            --size: 16px;
            width: var(--size);
            height: var(--size);
            border-radius: 11px;
            margin: 0 10px;

            animation: 2s bounce ease infinite;
        }

        .blue {
            background-color: #4285f5;
        }

        .red {
            background-color: #ea4436;
            animation-delay: 0.25s;
        }

        .yellow {
            background-color: #fbbd06;
            animation-delay: 0.5s;
        }

        .green {
            background-color: #34a952;
            animation-delay: 0.75s;
        }

        @keyframes bounce {
            50% {
                transform: translateY(25px);
            }
        }

        .error-border {
            border-color: red !important;
        }
    </style>
@endsection
@section('content')
    @php
        $sum_price = 0;
        $total_price = 0;
        $total_month = 0;
        $total_prepaid = 0;
        $total_travel = 0;
        $price_option = null;
    @endphp

    <div id="loader" style="display: none;">
        <div class="wrapper">
            <div class="blue ball"></div>
            <div class="red ball"></div>
            <div class="yellow ball"></div>
            <div class="green ball"></div>
        </div>

    </div>

    <div class="text-left 2xl:mt-32 xl:mt-32 mt-16 ">
        <div class="w-full max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[95%] py-10 mx-auto">
            <div class="text-center">
                <h1 class="2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium ">ตระกร้าสินค้า</h1>
                <h1 class=" text-[#838383] 2xl:text-[20px]  xl:text-[18px] text-[16px]">ซิมเติมเงิน พร้อมแพ็กเกจเสริม
                    ที่คุณอาจสนใจ</h1>
                <div class="w-[201px] h-1 bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF]  mx-auto mt-6 "></div>
            </div>
        </div>

        <div class="2xl:w-[1536px] xl:w-[1200px] w-full pb-10 mx-auto px-3">

            <div class="bg-[#F8F9FA] flex flex-col justify-center">
                <div
                    class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] text-white p-4  rounded-t-[10px] flex justify-between ">
                    <div class="w-[70%]  max-xs:w-[40%]">
                        <p class="2xl:text-[18px] text-[16px] es:text-[16px]">สินค้า</p>
                    </div>
                    <div class="w-[30%]  max-xs:w-[60%]">
                        <div
                            class="flex justify-between pr-[8rem] max-2xl:pr-[5.5rem] max-md:pr-[2.2rem] max-xl:pr-[4.2rem] max-ss:pr-8">
                            <p class="text-center 2xl:text-[18px] text-[16px]">ราคา</p>
                            <p class="text-center 2xl:text-[18px] text-[16px]">จำนวน</p>
                            <p class="text-center 2xl:text-[18px] text-[16px] ">ราคารวม</p>
                        </div>
                    </div>
                </div>

                @if (count($berMonthlys) > 0)
                    @foreach ($berMonthlys as $month)
                        <div class="flex justify-center items-center">
                            <div class="w-[70%]  max-xs:w-[40%] ">
                                <div class="max-ex:p-2 p-4 flex justify-between items-center">
                                    <div class="md:flex md:justify-between grid grid-cols-1 md:gap-8 items-center">
                                        <figure>
                                            <img class="max-ex:w-[60px] max-ex:h-[60px] w-[100px] h-[100px] max"
                                                src="/images/cart/117058925460.png" alt="">
                                        </figure>
                                        <div class="">
                                            <p class="font-semibold">เบอร์มงคล</p>
                                            <p>หมายเลขเบอร์ <br>{{ $month->product_phone }}</p>
                                            <div class="max-ex:hidden">
                                                <p>เกรด {{ $month->product_grade }}</p>
                                                @if ($month->monthly_status == 'yes')
                                                    <p>{{ $month->details_pack }}</p>
                                                @else
                                                    <p>{{ $month->product_comment }}</p>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[30%]  max-xs:w-[60%]">
                                <div class="flex justify-between">
                                    <p class="flex flex-col justify-center items-center">
                                        @if ($month->product_discount)
                                            <span
                                                class="text-[14px] text-gray-400 line-through">{{ number_format($month->product_price) }}</span>
                                        @endif
                                        <span
                                            class="text-[16px] font-semibold">{{ number_format($month->product_price - ($month->product_price * $month->product_discount) / 100) }}</span>
                                    </p>
                                    <p class="flex justify-center items-center text-[16px] font-semibold">1</p>
                                    <p class="flex flex-col justify-center items-center">
                                        @if ($month->product_discount)
                                            <span
                                                class="text-[14px] text-gray-400 line-through">{{ number_format($sum_month = $month->product_price) }}</span>
                                        @endif
                                        @php
                                            $sum_month = ceil($month->product_price - ($month->product_price * $month->product_discount) / 100);
                                        @endphp
                                        <span class="text-[16px] font-semibold">{{ number_format($sum_month) }}</span>
                                    </p>
                                    <figure
                                        class="flex justify-center items-center cursor-pointer w-[27px] h-[27px] mr-4 hover:scale-110"
                                        title="ลบรายการสินค้า" id="remove-item" data-type="3"
                                        data-id="{{ $month->product_id }}">
                                        <img src="/icons/cart_trash.png" alt=""
                                            class="max-ex:w-[20px] max-ex:h-[20px]">
                                    </figure>
                                </div>
                            </div>

                        </div>
                        <hr>
                        @php $total_month += $sum_month @endphp
                    @endforeach
                @endif

                @if (count($prepaidSims) > 0)
                    @foreach ($prepaidSims as $prepaid)
                        <div class="flex justify-center items-center">
                            <div class="w-[70%]  max-xs:w-[40%] ">
                                <div class="max-ex:p-2 p-4 flex justify-between items-center ">

                                    <div class="md:flex md:justify-between grid grid-cols-1 md:gap-8 items-center">
                                        <figure>
                                            <img class="max-ex:w-[60px] max-ex:h-[60px] w-[100px] h-[100px] max"
                                                src="{{ url($prepaid->thumbnail_link) }}" alt="">
                                        </figure>
                                        <div class="">
                                            <p class="font-semibold">ซิมเติมเงิน</p>
                                            <p>{{ $prepaid->title }}</p>
                                            <div class="max-ex:hidden">
                                                <p>{{ $prepaid->prepaid_cate_id->details }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[30%]  max-xs:w-[60%]">
                                <div class="flex justify-between  ">
                                    <p class="flex justify-center items-center text-[16px] font-semibold">
                                        {{ number_format($prepaid->price) }}</p>
                                    <p class="flex justify-center items-center text-[16px] font-semibold">
                                        {{ $prepaid->quantity }}</p>
                                    <p class="flex justify-center items-center text-[16px] font-semibold">
                                        {{ number_format($sum_prepaid = $prepaid->price * $prepaid->quantity) }}
                                    </p>
                                    <figure
                                        class="flex justify-center items-center cursor-pointer w-[27px] h-[27px] mr-4 hover:scale-110"
                                        title="ลบรายการสินค้า" id="remove-item" data-type="4"
                                        data-id="{{ $prepaid->id }}">
                                        <img src="/icons/cart_trash.png" alt=""
                                            class="max-ex:w-[20px] max-ex:h-[20px]">
                                    </figure>
                                </div>
                            </div>
                        </div>

                        <hr>
                        @php $total_prepaid += $sum_prepaid @endphp
                    @endforeach
                @endif

                @if (count($travelSims) > 0)
                    @foreach ($travelSims as $travel)
                        <div class="flex justify-center items-center">
                            <div class="w-[70%]  max-xs:w-[40%]">
                                <div class="max-ex:p-2 p-4 flex justify-between items-center">
                                    <div class="md:flex md:justify-between grid grid-cols-1 md:gap-8 items-center">
                                        <figure>
                                            <img class="max-ex:w-[60px] max-ex:h-[60px] w-[100px] h-[100px] max"
                                                src="{{ url($travel->thumbnail_link) }}" alt="">
                                        </figure>
                                        <div class="">
                                            <p class="font-semibold">ซิมท่องเที่ยว</p>
                                            <p>{{ $travel->title }}</p>
                                            @if ($travel->option)
                                                <p class="max-ex:hidden">ตัวเลือก <span
                                                        class="font-semibold">{{ $price_option = $travel->option }}</span>
                                                </p>
                                            @else
                                                <p class="max-ex:hidden">ตัวเลือก <span class="font-semibold">ซิมปกติ
                                                        (Physical SIM)
                                                    </span></p>
                                            @endif
                                            <div class="max-ex:hidden">
                                                <p>{{ $travel->internet_details }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="w-[30%]  max-xs:w-[60%]">
                                <div class="flex justify-between">
                                    <p class="flex justify-center items-center text-[16px] font-semibold">
                                        {{ number_format($price_travel = $travel->option ? $travel->option : $travel->price) }}
                                    </p>
                                    <p class="flex justify-center items-center text-[16px] font-semibold">
                                        {{ $travel->quantity }}</p>
                                    <p class="flex justify-center items-center text-[16px] font-semibold">
                                        {{ number_format($sum_travel = $price_travel * $travel->quantity) }}</p>
                                    <figure
                                        class="flex justify-center items-center cursor-pointer w-[27px] h-[27px] mr-4  hover:scale-110"
                                        title="ลบรายการสินค้า" id="remove-item" data-type="6"
                                        data-id="{{ $travel->id }}">
                                        <img src="/icons/cart_trash.png" alt=""
                                            class="max-ex:w-[20px] max-ex:h-[20px]">
                                    </figure>
                                </div>
                            </div>

                        </div>

                        <hr>
                        @php $total_travel += $sum_travel @endphp
                    @endforeach
                @endif

                {{-- total price --}}
                <div class="max-ex:p-2 p-4 mx-3 max-ex:my-4 my-6 bg-white border border-[1px]-[#D9D9D9] rounded-[10px]">
                    <div class="flex justify-between">
                        <p class="text-[16px] max-ex:text-[14px] font-semibold ">ยอดรวม สินค้า</p>
                        <div class="flex gap-4 ">
                            @php
                                $sum_price = $total_month + $total_prepaid + $total_travel;
                            @endphp
                            <div class="text-[16px] font-semibold">{{ number_format($sum_price) }}</div>
                            <p class="text-[#838383] max-ex:text-[14px]">บาท</p>
                        </div>
                    </div>
                    <div class="flex justify-between ">
                        <div class="flex justify-center items-center gap-2 max-ex:grid max-ex:grid-row-2">
                            <p class="text-[16px] max-ex:text-[14px] font-semibold">ค่าจัดส่ง</p>
                            <p class="text-[12px] max-ex:text-[10px] text-[#838383] text-center">
                                ***จัดส่งฟรีเมื่อยอดสั่งซื้อขั้นต่ำมากว่า 1,500 บาท
                            </p>
                        </div>
                        <div class="flex gap-4">
                            <div class="text-[16px] font-semibold ">{{ $shipping_cost = $sum_price <= 1500 ? 50 : 0 }}
                            </div>
                            <p class="text-[#838383]">บาท</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <h1 class="text-lg text-[#EC1F25] max-ex:text-[14px]">ยอดรวมทั้งหมด</h1>
                        <div class="flex items-end gap-4">
                            <p class="text-[16px] font-semibold text-[#EC1F25]">
                                {{ number_format($total_price = $sum_price + $shipping_cost) }}</p>
                            <p class="text-[#838383] max-ex:text-[14px]">บาท</p>
                        </div>
                    </div>
                </div>

                {{-- customer contact --}}
                <div class="max-ex:p-2 p-4 m-3 bg-white border border-[1px]-[#D9D9D9] rounded-[10px]">
                    <h1 class="text-lg font-semibold">กรอกที่อยู่ในการจัดส่ง</h1>
                    <div class="grid grid-cols-2 max-lg:grid-cols-1 gap-4 max-lg:gap-2 pt-2">
                        <div class="flex flex-col gap-2">
                            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[86px,1fr] gap-4">
                                <label class="text-end" for="name">ชื่อ*</label>
                                <input
                                    class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] w-full focus:border-red-500 required-field"
                                    type="text" name="name" id="name">
                            </div>
                            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[86px,1fr] gap-4">
                                <label class="text-end" for="last-name">นามสกุล*</label>
                                <input
                                    class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] w-full focus:border-red-500 required-field"
                                    type="text" name="last-name" id="last-name">
                            </div>
                            <div class="grid grid-cols-[62px,1fr] max-lg:grid-cols-[86px,1fr] gap-4">
                                <label class="text-end" for="customer-tel">เบอร์โทร*</label>
                                <input
                                    class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] w-full focus:border-red-500 required-field"
                                    type="text" name="customer-tel" id="customer-tel" maxlength="10">
                            </div>
                            <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[86px,1fr] gap-4">
                                <label class="text-end" for="customer-email">อีเมล*</label>
                                <input
                                    class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] w-full focus:border-red-500 required-field"
                                    type="text" name="customer-email" id="customer-email">
                            </div>
                        </div>

                        <div class="flex flex-col gap-2">
                            <div class="grid grid-cols-[86px,1fr] xl:grid-cols-[100px,1fr] gap-4">
                                <label class="text-end" for="customer-address">ที่อยู่*</label>
                                <textarea class="px-2 h-14 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] focus:border-red-500 required-field"
                                    name="customer-address" id="customer-address" cols="30" rows="3"></textarea>
                            </div>
                            <div class="grid grid-cols-2 max-xs:grid-cols-1 gap-4">
                                <div class="grid grid-cols-[86px,1fr] xl:grid-cols-[100px,1fr] gap-4">
                                    <label class="text-end" for="province">จังหวัด*</label>
                                    <select
                                        class=" bg-white border border-[1px]-[#D9D9D9] rounded-[3px] focus:border-red-500 required-field"
                                        name="province" id="province">
                                        <option value="">เลือกจังหวัด</option>
                                        @foreach ($provinces as $province)
                                            <option data-id="{{ $province->code }}" value="{{ $province->name_th }}">
                                                {{ $province->name_th }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="grid grid-cols-[86px,1fr] xl:grid-cols-[100px,1fr] gap-4 ">
                                    <label class="text-end" for="district">อำเภอ/เขต*</label>
                                    <select
                                        class="px-1   bg-white border border-[1px]-[#D9D9D9] rounded-[3px] focus:border-red-500 required-field"
                                        name="district" id="district">
                                        <option value="">เลือกอำเภอ</option>
                                    </select>
                                </div>
                            </div>
                            <div class="grid grid-cols-2 max-xs:grid-cols-1 gap-4">
                                <div class="grid grid-cols-[86px,1fr] xl:grid-cols-[100px,1fr] gap-4">
                                    <label class="text-end" for="sub-district">ตำบล/แขวง*</label>
                                    <select
                                        class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] focus:border-red-500 required-field"
                                        name="sub-district" id="sub-district">
                                        <option value="">เลือกตำบล</option>
                                    </select>
                                </div>

                                <div class="grid grid-cols-[86px,1fr] xl:grid-cols-[100px,1fr] gap-4">
                                    <label class="text-end" for="zip-code">รหัสไปรษณี*</label>
                                    <input
                                        class="w-full px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] focus:border-red-500 required-field"
                                        type="text" name="zip-code" id="zip-code" maxlength="5">
                                </div>
                            </div>
                        </div>

                        <div class="grid grid-cols-[60px,1fr] max-lg:grid-cols-[86px,1fr] gap-4">
                            <div class="max-xs:hidden"></div>
                            <div class="g-recaptcha w-full" data-sitekey="6Lf8IkQpAAAAAEmJz3cct0ng28I3wxN3CCUQh6iy"></div>
                            {{-- <button class="g-recaptcha" 
                        data-sitekey="6LcDGUQpAAAAAANdgkDVR605YR2oIfTnBQkKc3ob" 
                        data-callback='onSubmit' 
                        data-action='submit'>Submit</button> --}}
                        </div>
                    </div>
                </div>
            </div>


            {{-- btn submit --}}
            <div class="mt-5 flex justify-center gap-4 mb-4">
                <a href="{{ url('/') }}"
                    class="px-6 py-2 bg-white border border-[1px]-[#EC1F25] text-[#EC1F25] hover:bg-gray-500 text-[16px] hover:text-white rounded-[15px] shadow-sm">กลับหน้าหลัก</a>
                <button class="px-3 py-2 bg-[#EC1F25] text-white rounded-[15px] hover:bg-red-700 text-[16px] shadow-sm"
                    id="submit-buy">ยืนยันการสั่งซื้อ</button>
            </div>


            <div class="bg-[#F8F9FA] flex flex-col justify-center my-10 rounded-t-[10px] gap-y-6 ">
                <div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] text-white p-4  rounded-t-[10px] ">
                    <p class="max-uu:text-[20px] max-xs:text-[16px] ">ช่องทางการชำระเงิน</p>
                </div>
                <div class="w-[90%] mx-auto">
                    <div class="flex justify-center items-center max-xl:justify-start max-xs:flex-col max-xs:justify-center gap-6 py-4 ">
                        <div class="w-[160px] h-[120px] border border-red-700 ">
                            <img src="/images/icon/paysolution.jpg" alt="" class="w-full h-full">
                        </div>
                        <div class="flex flex-col gap-y-2 text-[16px]">
                            <p>ชำระผ่าน Pay Solution Asia</p>
                            <p>ชื่อบัญชี : บริษัท พาณิชย์อมรกิจ จำกัด</p>
                            <p>ชำระผ่านบัตรเครดิตระบบออนไลน์ Pay SolutionAsia ได้ทุกธนาคาร</p>
                            <p class="max-xs:text-[14px]">(ยอดชำระผ่านบัตรเครดิตต่ำกว่า 5,500 ชาร์จ 5%)</p>
                        </div>
                    </div>

                    <div
                        class="flex justify-between items-center py-6 max-xl:flex-col max-xl:justify-start max-xs:justify-center">
                        <div class="w-full">
                            <p class="text-[18px] max-xs:text-[16px] font-semibold">ชำระผ่านการโอน</p>
                            @foreach($bank_if as $bank)
                            <div class="flex justify-start items-center max-xl:justify-start max-xs:flex-col gap-6 py-4">
                                <div class="w-[130px] h-[100px] border border-red-700 ">
                                    <img src="{{ url($bank->bank_image) }}" alt=""
                                        class="w-full h-full">
                                </div>
                                <div class="flex flex-col gap-y-2 text-[16px]">
                                    <p>ธนาคาร : {{$bank->bank_account}}</p>
                                    <p>เลขบัญชี : {{$bank->bank_number}}</p>
                                    <p>ชื่อบัญชี : {{$bank->bank_name}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="w-full">
                            <p class="text-[18px] max-xs:text-[16px] font-semibold">ชำระผ่านบัตรเครดิต</p>
                            <div
                                class="flex justify-center items-center max-xl:justify-start max-xs:flex-wrap  max-xs:justify-center  gap-2  py-4">
                                <div class="w-[130px] h-[100px] border border-red-700 ">
                                    <img src="/images/icon/JCB-01.jpg" alt="" class="w-full h-full">
                                </div>
                                <div class="w-[130px] h-[100px] border border-red-700 ">
                                    <img src="/images/icon/visa.jpg" alt="" class="w-full h-full">
                                </div>
                                <div class="w-[130px] h-[100px] border border-red-700 ">
                                    <img src="/images/icon/union-pay.jpg" alt="" class="w-full h-full">
                                </div>
                                <div class="w-[130px] h-[100px] border border-red-700 ">
                                    <img src="/images/icon/american-express.jpg" alt="" class="w-full h-full">
                                </div>
                                <div class="w-[130px] h-[100px] border border-red-700 ">
                                    <img src="/images/icon/Master-card.jpg" alt="" class="w-full h-full">
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

        </div>


        <!-- end box product -->
        <footer class="lg:mt-[170px]">
            @include('frontend.pages.bermonthly_lucky.footer_bermonthly_lucky')
        </footer>

    @endsection

    @section('scripts')
        <script>
            function onSubmit(token) {
                document.getElementById("demo-form").submit();
            }
        </script>

        <script>
            let bermonthly_data = @json($berMonthlys);
            let prepaidCate_data = @json($prepaidSims);
            let travelSims_data = @json($travelSims);
            let shipping_cost = @json($shipping_cost);
            let total_price = @json($total_price);

            let district_data = @json($districts);
            let subdistricts_data = @json($subdistricts);
        </script>
        @vite('resources/js/cart_order/cartproduct.js')
    @endsection

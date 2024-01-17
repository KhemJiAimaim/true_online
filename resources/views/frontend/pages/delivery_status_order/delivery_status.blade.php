@extends('frontend.layouts.main')



@section('style')
@endsection

@section('content')
    <div class="text-left mt-8">
        <div class="w-full max-w-[1536px] max-2xl:max-w-[90%] max-xs:max-w-[95%] pb-6 mx-auto">
            <div class="text-center flex flex-col justify-center">
                <h1 class="2xl:text-[2rem]  xl:text-[22px] text-[20px] font-medium ">ตรวจสอบสถานะการจัดส่งสินค้า</h1>
                <!-- Search input -->
                <div class="flex justify-center py-4 ">
                    <label for="search-dropdown" class="mb-2 text-sm font-medium text-gray-900 sr-only ">ค้นหาด้วยชื่อ หรือ
                        เบอร์โทร</label>
                    <div class="relative w-[20rem] shadow-md rounded-lg ">
                        <input type="search" id="search-data"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-100 rounded-lg outline-none text-[20px]"
                            placeholder="ค้นหาด้วยชื่อ หรือ เบอร์โทร" required>
                        <button type="submit" id="submit_search"
                            class="absolute top-0 end-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg  hover:bg-blue-800 focus:ring-4 focus:outline-none">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>

                <div class="w-[201px] h-1 bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] rounded-lg mx-auto mt-6 "></div>
            </div>

        </div>
        <!-- Search input -->


        <div class="2xl:w-[1536px] xl:w-[1200px] w-full pb-10 mx-auto px-3">
            <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8 ">
                        <div class="overflow-hidden rounded-lg shadow-md   ">
                            <table class="min-w-full text-center text-sm font-light ">
                                <thead
                                    class="bg-[#EC1F25] font-medium text-white text-[18px] max-xx:text-[16px] outline-none">
                                    <tr>
                                        <th scope="col" class=" px-4 py-4 max-xx:py-2">ชื่อ</th>
                                        <th scope="col" class=" px-4 py-4 max-xx:py-2 ">รูปแบบ</th>
                                        <th scope="col" class=" px-4 py-4 max-xx:py-2">เลขที่จัดส่ง</th>
                                        <th scope="col" class=" px-4 py-4 max-xx:py-2">หมายเลขสินค้า</th>
                                    </tr>
                                </thead>
                                <tbody class="text-[16px] shadow-md  ">
                                    @foreach ($orders as $order)
                                        @php
                                            $carrier = '';
                                            if ($order->order_carrier == 'EMS') {
                                                $carrier = '/images/tracking/ems.jpg';
                                            } elseif ($order->order_carrier == 'Kerry') {
                                                $carrier = '/images/tracking/k.png';
                                            } else {
                                                $carrier = '/images/tracking/logotrue.png';
                                            }
                                        @endphp
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap  px-6 py-4 font-medium">{{ $order->firstname }}
                                                {{ $order->lastname }}</td>
                                            <td class="whitespace-nowrap  w-28">
                                                <img src="{{ $carrier }}" alt=""
                                                    class="w-full {{ !$order->order_carrier ? 'bg-red-600 p-1' : '' }}">
                                            </td>
                                            <td class="whitespace-nowrap  px-6 py-4">
                                                @if ($order->tracking_number)
                                                    <a href="https://th.kerryexpress.com/en/track/?track=PEX074400008907"
                                                        target="_blank"
                                                        class="text-center 2xl:text-[18px] text-[16px]">{{ $order->tracking_number }}</a>
                                                @else
                                                    <p class="2xl:text-[18px] text-[16px]">กำลังจัดส่ง</p>
                                                @endif
                                            </td>
                                            <td class="whitespace-nowrap  px-6 py-4 text-[16px] flex flex-col">
                                                @foreach ($order->orderItems as $item)
                                                    @if ($item['type_id'] === 3)
                                                        <div>{{ $item->product_detail['product_phone'] }}</div>
                                                    @elseif ($item['type_id'] === 4)
                                                        <div>ซิมเติมเงิน</div>
                                                    @elseif ($item['type_id'] === 6)
                                                        <div>ซิมท่องเที่ยว</div>
                                                    @endif
                                                @endforeach

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
                <div class="mt-4 flex justify-end items-center gap-4">
                    <a href="{{ $orders->previousPageUrl() }}"
                        class="px-2 py-1 border rounded hover:bg-gray-200">Previous</a>
                    <span class="mr-2">Page {{ $orders->currentPage() }} of {{ $orders->lastPage() }}</span>
                    <a href="{{ $orders->nextPageUrl() }}" class="px-2 py-1 border rounded hover:bg-gray-200">Next</a>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection

@section('scripts')
    <script>
        submit_search.onclick = () => {
            const search_data = document.querySelector('#search-data').value;
            if (search_data) {
                location.href = `/delivery/${search_data}`
            }
        }
    </script>
@endsection

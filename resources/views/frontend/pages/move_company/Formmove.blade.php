@extends('frontend.layouts.main')



@section('style')
    <style>
        .main {
            height: auto;
            min-height: 100% !important;
            display: flex;
            flex-direction: column;
            /* overflow-y: auto; */
        }
    </style>
@endsection
@section('content')
    <div class="mt-[10%] max-xl:mt-[12%] mx-3">
        <p class="text-[20px] font-blod">กรุณากรอกข้อมูล</p>
        <p class="text-[18px] font-blod mb-10">เพื่อให้เจ้าหน้าที่ติดต่อกลับ</p>

        <div class="plate-line max-w-[200px]"></div>

        <div class="max-w-[1000px] bg-[#F8F9FA] rounded-lg mx-auto p-2 2xl:mt-10 mt-10 py-4 px-4">
            <div
                class="grid 2xl:grid-cols-2 xl:grid-cols-2  lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4 gap-10 items-center">
                <div class="flex justify-between items-center">
                    <label for="first-name"
                        class="w-36 text-right max-ex:text-left  pr-4 font-medium text-gray-700 text-[16px]">ชื่อ</label>
                    <div class="flex-1">
                        <input required type="text" id="first-name"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>

                <div class="flex justify-between items-center ">
                    <label for="last-name"
                        class="w-36 text-right max-ex:text-left pr-4 font-medium text-gray-700 text-[16px]">นามสกุล</label>
                    <div class="flex-1">
                        <input required type="text" id="last-name"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div
                class="grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4  gap-10 items-center mt-4">
                <div class="flex justify-between items-center">
                    <label for="phone"
                        class="w-36  text-right max-ex:text-left pr-2 font-medium text-gray-700 text-[16px]">เบอร์โทรติดต่อ</label>
                    <div class="flex-1">
                        <input required type="text" id="phone"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent"
                            maxlength="10">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label for="phone-to-move"
                        class="w-36  text-right max-ex:text-left pr-4 font-medium text-gray-700 text-[16px]">เบอร์ที่ต้องการย้าย</label>
                    <div class="flex-1">
                        <input required type="text" id="phone-to-move" maxlength="10"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div
                class="grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4 gap-10 items-center mt-4">
                <div class="flex justify-between items-center">
                    <label for="email"
                        class="w-36  text-right max-ex:text-left pr-2 font-medium text-gray-700 text-[16px]">อีเมล</label>
                    <div class="flex-1">
                        <input required type="text" id="email"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>

                <div class="flex justify-between items-center">
                    <label for="line-id"
                        class="w-36  text-right max-ex:text-left pr-2 font-medium text-gray-700 text-[16px]">ไลน์ไอดี</label>
                    <div class="flex-1">
                        <input required type="text" id="line-id"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div
                class="grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4 gap-10 items-center mt-4">
                <div class="flex justify-between items-center">
                    <div class="w-36"></div>
                    <div class="g-recaptcha w-full" data-sitekey="6Lf8IkQpAAAAAEmJz3cct0ng28I3wxN3CCUQh6iy"></div>
                </div>

            </div>

            <p class="text-[1rem] text-[#838383] 2xl:mt-6 mt-10">ท่านจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30 นาที</p>
        </div>

    </div>

    <div
        class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center max-ex:flex-col gap-6 gap-y-2 mt-4 2xl:gap-4 mb-10 px-3">
        <a href="{{ url('/move') }}"
            class="py-2.5 px-12  mb-2 mt-2  text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">กลับหน้าหลัก</a>
        <button id="save-form-data"
            class="py-2.5 px-5  mb-2 mt-2 text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ฝากข้อมูลให้ติดต่อกลับ</button>

    </div>

    @include('frontend.pages.move_company.move_footer')
@endsection

@section('scripts')
    @vite('resources/js/move/movenow_form.js')
    <script>
        const data = @json($pass_data);
        // console.log(data);
    </script>
@endsection

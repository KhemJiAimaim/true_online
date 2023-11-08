@extends('frontend.layouts.main')
@section('content')
    <div class="my-36">
        <p class="text-[22px] font-blod">กรุณากรอกข้อมูล</p>
        <p class="text-[22px] font-blod mb-4">เพื่อให้เจ้าหน้าที่ติดต่อกลับ</p>
        <div class="plate-line max-w-[200px]"></div>

        <div class="max-w-[1000px] bg-[#F8F9FA] rounded-lg m-auto p-6 mt-10">
            <div class="flex justify-between items-center">
                <label for="name" class="w-32 text-right pr-4 font-medium text-gray-700">ชื่อ</label>
                <div class="flex-1">
                    <input required type="text" id="name"
                        class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                <label for="name" class="w-32 text-right pr-4 font-medium text-gray-700">นามสกุล</label>
                <div class="flex-1">
                    <input required type="text" id="name"
                        class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                </div>
            </div>


            <div class="grid grid-cols-2 items-center mt-6">
                <div class="flex justify-between items-center">
                    <label for="name" class="w-32 text-right pr-2 font-medium text-gray-700">เบอร์โทรศัพท์</label>
                    <div class="flex-1">
                        <input required type="text" id="name"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label for="name" class="w-32 text-right pr-4 font-medium text-gray-700">ไลน์ไอดี</label>
                    <div class="flex-1">
                        <input required type="text" id="name"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                <label for="about" class="self-start w-32 text-right mt-2 pr-4 font-medium text-gray-700">ที่อยู่</label>
                <textarea id="about" name="about" rows="3"
                    class="disabled:bg-gray-100 w-full flex-1 placeholder:text-slate-400 appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-600"></textarea>
            </div>

            <div class="grid grid-cols-1 xl:grid-cols-2 items-center mt-6">
                <div
                    class="flex justify-start items-center focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <label for="country" class="w-32 text-right pr-4 font-medium text-gray-700">ตำบล/แขวง</label>
                    <select id="country" name="country" autocomplete="country-name"
                        class="w-[22rem] focus:outline-none focus:ring-2 focus:ring-sky-600  text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md">
                        <option>ศิลา</option>
                        <option>Panama</option>
                        <option>Chile</option>
                    </select>
                </div>

                <div
                    class="flex justify-start items-center focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <label for="country" class="w-32 text-right pr-4 font-medium text-gray-700">อำเภอ/เขต</label>
                    <select id="country" name="country" autocomplete="country-name"
                        class="w-[22rem] focus:outline-none focus:ring-2 focus:ring-sky-600  text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md">
                        <option>เมืองขอนแก่น</option>
                        <option>Panama</option>
                        <option>Chile</option>
                    </select>
                </div>
            </div>


            <div class="grid grid-cols-1 xl:grid-cols-2 items-center mt-6">
                <div
                    class="flex justify-start items-center focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <label for="country" class="w-32 text-right pr-4 font-medium text-gray-700">จังหวัด</label>
                    <select id="country" name="country" autocomplete="country-name"
                        class="w-[22rem] focus:outline-none focus:ring-2 focus:ring-sky-600  text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md">
                        <option>ศิลา</option>
                        <option>Panama</option>
                        <option>Chile</option>
                    </select>
                </div>

                <div class="flex justify-between items-center">
                    <label for="name" class="w-32 text-right pr-4 font-medium text-gray-700">รหัสไปรษณี</label>
                    <div class="flex-1">
                        <input required type="number" id="number"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center mt-6">
                <label for="name" class="w-32 text-right pr-4 font-medium text-gray-700">ปักหมุดที่อยู่</label>
                <div class="flex-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3825.766488826179!2d102.83253007514489!3d16.487357484254442!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228ae99b598b43%3A0x56b4538d2ace7037!2sWYNNSOFT%20SOLUTION%20CO%2CLTD.!5e0!3m2!1sth!2sth!4v1698401473715!5m2!1sth!2sth" class="w-full rounded-lg" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        

            <p class="text-[1rem] text-[#838383] mt-6">ท่านจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30 นาที</p>
        </div>

    </div>

    <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center mt-4 gap-4 mb-10">
        <a href="/fiber/true_dtac"
            class="py-2.5 px-12 mr-2 mb-2 mt-2 text-md font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">กลับหน้าหลัก</a>
        <a href="/thankyou"
            class="py-2.5 px-5 mr-2 mb-2 mt-2 text-md font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ฝากข้อมูลให้ติดต่อกลับ</a>

    </div>
    <div class="bg-gradient-to-r from-[#5642CD] to-[#00BCFF] ">
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

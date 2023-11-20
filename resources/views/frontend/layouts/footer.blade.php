<div class=" bg-[#211830] sticky top-[100vh]">
    <div class=" max-w-[1536px] xl:w-[1200px] mx-auto">

        <div class="flex justify-between py-4 px-4 gap-y-3">
            <div class="2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem]">
                <p class="text-white sm:text-lg text-md 2xl:text-[20px]">สมัครบริการใหม่</p>
                <p class="text-white sm:text-2xl text-md ">000-000-0000</p>
            </div>

            @if (Request::is('/') || Request::is('prepaid_sim'))
                <div class="  md:flex lg:flex 2xl:flex md:justify-between lg:justify-between 2xl:justify-between gap-6 items-left grid grid-rows-3 gap-y-2">
                    <p class="text-white sm:text-lg text-md 2xl:text-[20px] text-center">ความปลอดภัย</p>
                    <p class="text-white sm:text-lg text-md 2xl:text-[20px] text-center">ความเป็นส่วนตัว</p>
                    <p class="text-white sm:text-lg text-md 2xl:text-[20px] text-center">ปัญหาร้องเรียน</p>
                </div>
            @endif

            @if (Request::is('/') || Request::is('prepaid_sim') )
                <div class="s2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem] ">
                    <p class="text-white sm:text-lg text-md text-right 2xl:text-[20px]">แก้ไขปัญหา โทร</p>
                    <p class="text-white sm:text-2xl text-md text-right">1242</p>
                </div>
            @elseif (Request::path() != '/' && Request::path() != 'prepaid_sim')
                <div class="2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem]">
                    <p class="text-white sm:text-lg text-md text-right 2xl:text-[20px]">ไอดี ไลน์</p>
                    <p class="text-white sm:text-2xl text-md text-right">@True Online</p>
                </div>
            @endif

        </div>


        <div class="flex justify-center border-l border border-gray-500 text-center mx-3 rounded-full px-auto"></div>
        <div class="flex sm:justify-between items-center max-md:flex-col gap-y-2 px-2">
            <p class="text-white opacity-50 py-2 2xl:text-[16px] md:text-[16px] text-[0.8rem] text-center">©True Corporation Public Company Limited. All
                rights reserved.
            </p>

            <div class="flex items-center gap-x-4 py-2">
                <a href="#" class="" title="facebook">
                    <img src="/images/facebook icon.png" alt="">
                </a>
                <a href="#" class="" title="twitter">
                    <img src="/images/x.png" alt=""></a>
                <a href="#" class="" title="youtube">
                    <img src="/images/youtube.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

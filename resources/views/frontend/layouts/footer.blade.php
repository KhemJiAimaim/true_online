<div class=" bg-[#211830] sticky top-[100vh]">
    <div class=" max-w-[1536px] mx-auto">

        <div class="flex sm:justify-between flex-wrap py-4 items-center gap-y-3">
            <div class="sm:grid sm:grid-row-2 sm:gap-[0] sm:mx-0 flex justify-between gap-[7.3rem] mx-auto">
                <p class="text-white sm:text-lg text-md ">สมัครบริการใหม่</p>
                <p class="text-white sm:text-2xl text-md ">000-000-0000</p>
            </div>
            @if (Request::is('/') || Request::is('prepaid_sim'))
                <div class="flex sm:justify-between gap-6 mx-auto items-center">
                    <p class="text-white sm:text-lg text-md text-center">ความปลอดภัย</p>
                    <p class="text-white sm:text-lg text-md text-center">ความเป็นส่วนตัว</p>
                    <p class="text-white sm:text-lg text-md text-center">ปัญหาร้องเรียน</p>
                </div>
            @endif
            @if (Request::is('/') || Request::is('prepaid_sim') )
                <div class="sm:grid sm:grid-row-2 sm:gap-[0] sm:mx-0 flex justify-between gap-[12rem] mx-auto">
                    <p class="text-white sm:text-lg text-md sm:text-right">แก้ไขปัญหา โทร</p>
                    <p class="text-white sm:text-2xl text-md sm:text-right">1242</p>
                </div>
            @endif
            @if (Request::path() != '/' && Request::path() != 'prepaid_sim')
                <div class="sm:grid sm:grid-row-2 sm:gap-[0] sm:mx-0 flex justify-between gap-[12rem] mx-auto">
                    <p class="text-white sm:text-lg text-md sm:text-right">ไอดี ไลน์</p>
                    <p class="text-white sm:text-2xl text-md sm:text-right">@True Online</p>
                </div>
            @endif

        </div>


        <div class="flex justify-center border-l border border-gray-500 text-center mx-3 rounded-full px-auto"></div>
        <div class="flex sm:justify-between justify-center flex-wrap gap-y-2 ">
            <p class="text-white sm:text-md opacity-50 py-2 text-xs">©True Corporation Public Company Limited. All
                rights reserved.
            </p>
            <div class="flex items-center gap-x-4 py-2">
                <a href="#" class="" title="facebook">
                    <img src="images/facebook icon.png" alt="">
                </a>
                <a href="#" class="" title="twitter">
                    <img src="images/x.png" alt=""></a>
                <a href="#" class="" title="youtube">
                    <img src="images/youtube.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

<div class=" bg-[#211830] sticky top-[100vh]">
    <div class=" 2xl:w-[1536px] xl:w-[1200px] mx-auto">

        <div class="flex justify-between py-4 px-4 gap-y-3">
            <div class="2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem]">
                <p class="text-white sm:text-lg 2xl:text-[20px] text-[16px]">สมัครบริการใหม่</p>
                <p class="text-white sm:text-2xl text-md text-[16px]">000-000-0000</p>
            </div>

            @if (Request::is('/') || Request::is('prepaid_sim'))
                <div class="  md:flex lg:flex 2xl:flex md:justify-between lg:justify-between 2xl:justify-between gap-6 items-left grid grid-rows-3 gap-y-2">
                    @foreach($menu_footer as $footer)
                    <a href="/{{$footer->cate_redirect}}"><p class="text-white sm:text-lg text-md 2xl:text-[20px] text-[16px] text-center">{{$footer->cate_title}}</p></a>
                    @endforeach
                </div>
            @endif

            @if (Request::is('/') || Request::is('prepaid_sim') )
                <div class="s2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem] ">
                    <p class="text-white sm:text-lg text-right 2xl:text-[20px] text-[16px]">แก้ไขปัญหา โทร</p>
                    <p class="text-white sm:text-2xl text-[16px] text-right">1242</p>
                </div>
            @elseif (Request::path() != '/' && Request::path() != 'prepaid_sim')
                <div class="2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem]">
                    <p class="text-white sm:text-lg text-md text-right 2xl:text-[20px] text-[16px]">ไอดี ไลน์</p>
                    <p class="text-white sm:text-2xl text-md text-right text-[16px]">@True Online</p>
                </div>
            @endif
        </div>
        <div class="flex justify-center border-l border border-gray-500 text-center mx-3 rounded-full px-3"></div>
        <div class="flex sm:justify-between items-center max-md:flex-col gap-y-2 px-3">
            <p class="text-white opacity-50 py-2 2xl:text-[16px] md:text-[16px] text-[14px] text-center">©True Corporation Public Company Limited. All
                rights reserved.
            </p>

            <div class="flex items-center gap-x-4 py-2 px-2">
                <a href="{{ $webInfos->firstWhere('info_param', 'link_facebook')->info_link }}" target="_bank" class="" title="facebook">
                    <img src="/images/facebook icon.png" alt="" class="max-w-[20px]">
                </a>
                <a href="{{ $webInfos->firstWhere('info_param', 'link_twitter')->info_link }}" target="_bank" class="" title="twitter">
                    <img src="/images/x.png" alt="" class="max-w-[20px]">
                </a>
                <a href="{{ $webInfos->firstWhere('info_param', 'link_youtube')->info_link }}" target="_bank" class="" title="youtube">
                    <img src="/images/youtube.png" alt="" class="max-w-[20px]">
                </a>
            </div>
        </div>
    </div>
</div>

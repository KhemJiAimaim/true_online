<div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] sticky top-[100vh] ">
    {{-- z-pc --}}
    <div
        class=" xl:max-w-[1536px] w-full lg:max-w-[700px] max-[1100px]:max-w-[700px] max-[900px]:max-w-[600px] max-sm:max-w-[400px] max-sm:hidden      mx-auto flex items-center justify-between py-10 gap-4  ">
        {{-- ที่อยู่  : 2xl:w-[1536px] xl:w-[1200px] min-[800px]:w-[780px] --}}
        {{-- <div class="w-[30%] flex flex-col items-center gap-3 justify-start ">
            <h2 class="w-full  text-center text-[1.5rem] max-[900px]:text-[1rem] max-sm:text-[14px] text-white">ที่อยู่
            </h2>
            <p class="w-full text-[1rem] h-[100px] max-[900px]:text-[14px] max-sm:text-[12px]  text-start text-white ">
                บริษัท
                พาณิชย์อมรกิจ จำกัด 19/39
                ซอย 01 ถนนกาญจนาภิเษก 5
                แขวงสามตะวันตก
                เขตคลองสามวา กรุงเทพมหานคร 10510
            </p>
        </div>
        <div class="w-[30%] flex flex-col items-center gap-3 justify-start">
            <h2 class="w-full  text-center text-[1.5rem]  max-[900px]:text-[1rem] max-sm:text-[14px] text-white">
                ช่องทางติดต่อ</h2>
            <div class="w-full pl-[2rem] max-[900]:pl-[0.2rem] h-[100px]   flex items-start flex-col gap-2">
                <div>
                    <img src="" alt="">
                    <p class="text-white text-[1rem] max-[900px]:text-[14px] max-sm:text-[12px]  ">LINE ID : @fibertrue
                    </p>
                </div>
                <div>
                    <img src="" alt="">
                    <p class="text-white text-[1rem] max-[900px]:text-[14px] max-sm:text-[12px] ">สมัครบริการใหม่ :
                        0832289789 </p>
                </div>
                <div>
                    <img src="" alt="">
                    <p class="text-white text-[1rem] max-[900px]:text-[14px] max-sm:text-[12px] ">แจ้งปัญหาติดต่อ: 1242
                    </p>
                </div>
            </div>

        </div>
        <div class="w-[30%] flex flex-col items-center gap-3 justify-start">
            <h2 class=" w-full text-center text-[1.5rem] text-white max-[900px]:text-[1rem] max-sm:text-[14px] ">
                บริการของเรา</h2>
            <ul
                class="w-full pl-[2rem] max-[900]:pl-[1rem] text-white max-[900px]:text-[14px] max-sm:text-[12px] max-sm:h-[100px] ">
                <li class="text-[1rem]">อินเตอร์เน็ตบ้าน</li>
                <li class="text-[1rem]">เบอร์มงคล</li>
                <li class="text-[1rem]">เติมเงิน</li>
                <li class="text-[1rem]">ย้ายค่ายมาทรู</li>
                <li class="text-[1rem]">ซิมท่องเที่ยว</li>
            </ul>
        </div> --}}



        
        <div class="flex justify-between py-4 px-4 gap-y-3">
            <div class="2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem]">
                @if ($webInfo->contact->phone->display == true)
                <p class="text-white sm:text-lg 2xl:text-[20px] text-[16px]">สมัครบริการใหม่</p>
                @php 
                $phoneNumber = $webInfo->contact->phone->value;
                $formatPhone = substr($phoneNumber, 0, 3) . '-' . substr($phoneNumber, 3, 3) . '-' . substr($phoneNumber, 6);
                @endphp
                <a href="tel:{{$webInfo->contact->phone->value}}"><p class="text-white sm:text-2xl text-md text-[16px]">{{$formatPhone}}</p></a>
                @endif
            </div>

            @if (Request::is('/') || Request::is('prepaid_sim'))
                <div class="  md:flex lg:flex 2xl:flex md:justify-between lg:justify-between 2xl:justify-between gap-6 items-left grid grid-rows-3 gap-y-2">
                    @foreach ($menu_footer as $footer)
                    <a href="/{{$footer->cate_url}}">
                        <p class="text-white sm:text-lg text-md 2xl:text-[20px] text-[16px] text-center">{{$footer->cate_title}}</p>
                    </a>
                    @endforeach
                </div>
            @endif

            @if (Request::is('/') || Request::is('prepaid_sim'))
                <div class="s2xl:grid 2xl:grid-rows-2 2xl:gap-[0] 2xl:mx-0 gap-[7.3rem] ">
                    @if ($webInfo->contact->phone_true->display == true)
                    <p class="text-white sm:text-lg text-right 2xl:text-[20px] text-[16px]">แก้ไขปัญหา โทร</p>
                    <a href="tel:{{$webInfo->contact->phone_true->value}}">
                        <p class="text-white sm:text-2xl text-[16px] text-right">{{$webInfo->contact->phone_true->value}}</p>
                    </a>
                    @endif
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
            <p class="text-white opacity-50 py-2 2xl:text-[16px] md:text-[16px] text-[14px] text-center">{{$webInfo->footer->copy_right->value}}</p>
            @php
                $info_contact = $webInfo->contact;
            @endphp
            <div class="flex items-center gap-x-4 py-2 px-2">
                @if ($info_contact->link_facebook->display == true)
                <a href="{{ $info_contact->link_facebook->link }}" target="_bank" class="" title="facebook">
                    <img src="/images/facebook icon.png" alt="" class="max-w-[20px]">
                </a>
                @endif
                @if ($info_contact->link_twitter->display == true)
                <a href="{{ $info_contact->link_twitter->link }}" target="_bank" class="" title="twitter">
                    <img src="/images/x.png" alt="" class="max-w-[20px]">
                </a>
                @endif
                @if ($info_contact->link_youtube->display == true)
                <a href="{{ $info_contact->link_twitter->link }}" target="_bank" class="" title="youtube">
                    <img src="/images/youtube.png" alt="" class="max-w-[20px]">
                </a>
                @endif
            </div>
        </div>
    </div>
    {{-- z-mobile --}}
    {{-- <div class=" max-w-[400px] w-full p-[1rem]">
        <div>
            <h2>ที่อยู่</h2>
            <ul>
                <li>
                    <img src="" alt="">
                    <p class="text-white max-[900px]:text-[14px] max-sm:text-[12px]  ">LINE ID : @fibertrue </p>
                </li>
                <li>
                    <img src="" alt="">
                    <p class="text-white max-[900px]:text-[14px] max-sm:text-[12px] ">สมัครบริการใหม่ : 0832289789 </p>
                </li>
                <li>
                    <img src="" alt="">
                    <p class="text-white max-[900px]:text-[14px] max-sm:text-[12px] ">แจ้งปัญหาติดต่อ: 1242 </p>
                </li>
            </ul>
        </div>
    </div>
    <div>
        <h2>ช่องทางติดต่อ</h2>
        <ul>
            <li>
                <p>
                    บริษัท
                    พาณิชย์อมรกิจ จำกัด 19/39
                    ซอย 01 ถนนกาญจนาภิเษก 5
                    แขวงสามตะวันตก
                    เขตคลองสามวา กรุงเทพมหานคร 10510
                </p>
            </li>
        </ul>
    </div> --}}
</div>
</div>

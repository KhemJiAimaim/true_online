<div class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] sticky top-[100vh] ">
    {{-- z-pc --}}
    <div
        class=" 2xl:max-w-[1536px] xl:max-w-[1024px] w-full lg:max-w-[980px] max-[1100px]:max-w-[700px] max-[900px]:max-w-[600px] max-sm:max-w-[400px] max-sm:hidden  mx-auto flex items-center flex-col justify-between py-10 gap-2  ">
        <div class="w-full flex justify-between">
            <h2 class=" w-[30%] text-left  uu:text-[1.2rem]  max-[900px]:text-[1rem]  text-white">ที่อยู่</h2>
            <h2 class=" w-[30%] text-left  uu:text-[1.2rem]  max-[900px]:text-[1rem] pl-[10rem]  text-white">ช่องทางติดต่อ</h2>
            <h2 class=" w-[30%] text-left  uu:text-[1.2rem]  max-[900px]:text-[1rem] pl-[10rem] text-white">บริการของเรา</h2>
        </div>
        <div class=" w-full flex  justify-between ">
            <div class="w-[30%] flex flex-col items-center gap-3 justify-start ">
                {{-- <h2 class="w-full uu:text-[1.2rem]  text-center  max-[900px]:text-[1rem]  text-white">
                    ที่อยู่
                </h2> --}}
                <p
                    class="uu:w-[100%] 2xl:w-[100%] lg:w-[90%]   uu:text-[1rem] font-light max-[900px]:text-[14px]   text-start text-white ">
                    บริษัท
                    พาณิชย์อมรกิจ จำกัด 19/39
                    ซอย 01 ถนนกาญจนาภิเษก 5
                    แขวงสามตะวันตก
                    เขตคลองสามวา กรุงเทพมหานคร 10510
                </p>
            </div>
            <div class="w-[30%] flex flex-col items-center gap-3 justify-start">
                {{-- <h2 class="w-full uu:text-[1.2rem] text-center    text-white">
                    ช่องทางติดต่อ</h2> --}}
                <div class="w-full pl-[10rem] flex items-start flex-col gap-2">

                    <a href="https://line.me/ti/p/~@berhoro" class="flex items-center gap-2 hover:underline decoration-solid text-white">
                        <figure class=" max-w-[30px]">
                            <img class="w-full" src="/icons/icons8-line-app (1) 6.png" alt="">
                        </figure>

                        <p class="text-white uu:text-[0.8rem] font-light
                          ">LINE
                            ID : @fibertrue
                        </p>
                    </a>

                    <a href="tel:0832289789"class="flex items-center gap-2 hover:underline decoration-solid text-white">
                        <figure class=" max-w-[30px]">
                            <img class="w-full" src="/icons/solar_outgoing-call-rounded-linear1.png" alt="">
                        </figure>
                        <p class="text-white uu:text-[0.8rem] font-light
                         ">
                            สมัครบริการใหม่ :
                            0832289789 </p>
                    </a>

                    <a href="tel:1242" class="flex items-center gap-2 hover:underline decoration-solid text-white">
                        <figure class=" max-w-[25px]">
                            <img class="w-full" src="/icons/tools_1077198.png" alt="">
                        </figure>
                        <p class="text-white uu:text-[0.8rem] font-light
                        ">
                            แจ้งปัญหาติดต่อ: 1242
                        </p>
                    </a>

                </div>

            </div>
            <div class="w-[30%] flex flex-col items-center gap-6 justify-start">
                {{-- <h2 class=" w-full text-center uu:text-[1.2rem]  text-white  ">
                    บริการของเรา</h2> --}}
                <ul class="w-full pl-[10rem] max-[900]:pl-[1rem]  uu:text-[0.8rem] text-white   ">
                    <li>อินเตอร์เน็ตบ้าน</li>
                    <li>เบอร์มงคล</li>
                    <li>เติมเงิน</li>
                    <li>ย้ายค่ายมาทรู</li>
                    <li>ซิมท่องเที่ยว</li>
                </ul>
            </div>
        </div>
        {{-- ที่อยู่  : 2xl:w-[1536px] xl:w-[1200px] min-[800px]:w-[780px] --}}




        {{-- 
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
        </div> --}}
    </div>
    {{-- z-mobile --}}
    <div
        class="md:hidden ex:max-w-[480px] xs:max-w-[460px]  max-w-[300px]  w-full my-0 mx-auto  pt-[2rem] flex flex-col gap-4 ">
        <div class="w-full   ">
            <div id="cshow1" class="w-full flex items-center justify-between">
                <h2 class="text-white w-full text-[1rem]">ที่อยู่</h2>
                <img id="rolin1" class=" w-[20px] mr-5 delay-[0.2]" src="/images/icon/down-arrow.png"
                    style="filter: brightness(0) invert(1);" alt="">
            </div>

            <ul id="content1" class="w-full hidden text-[0.9rem]  pt-2 text-white list-none">
                <li class="w-full ">
                    <p>
                        บริษัท
                        พาณิชย์อมรกิจ จำกัด 19/39
                        ซอย 01 ถนนกาญจนาภิเษก 5
                        แขวงสามตะวันตก
                        เขตคลองสามวา กรุงเทพมหานคร 10510
                    </p>
                </li>
            </ul>
        </div>
        <div class=" w-full  ">
            <div id="cshow2" class="w-full flex items-center justify-between">
                <h2 class="text-white w-full text-[1rem]">ช่องทางติดต่อ</h2>
                <img id="rolin2" class=" w-[20px] mr-5 delay-[0.2]" src="/images/icon/down-arrow.png"
                    style="filter: brightness(0) invert(1);" alt="">
            </div>

            <ul id="content2" class="w-full hidden list-none pt-1 text-[14px] pl-[1rem]">

                <li class="mt-2 flex items-center gap-1">
                    <figure class=" max-w-[20px]">
                        <img class="w-full" src="/icons/line_3536785.png" alt="">
                    </figure>
                    <p class="text-white   ">LINE ID : @fibertrue </p>
                </li>
                <li class="mt-2 flex items-center gap-1">
                    <figure class=" max-w-[20px]">
                        <img class="w-full" src="/icons/phone_12225709.png" alt="">
                    </figure>
                    <p class="text-white  ">สมัครบริการใหม่ : 0832289789 </p>
                </li>
                <li class="mt-2 flex items-center gap-1">
                    <figure class=" max-w-[20px]">
                        <img class="w-full" src="/icons/tools_1077198.png" alt="">
                    </figure>
                    <p class="text-white ">แจ้งปัญหาติดต่อ: 1242 </p>
                </li>
            </ul>
        </div>
        <div class=" w-full ">
            <div id="cshow3" class="w-full flex items-center justify-between">
                <h2 class="text-white w-full text-[1rem]">บริการของเรา</h2>
                <img id="rolin3" class=" w-[20px] mr-5 delay-[0.2]" src="/images/icon/down-arrow.png"
                    style="filter: brightness(0) invert(1);" alt="">
            </div>

            <ul id="content3" class="w-full hidden pl-[2rem] pt-2 text-[14px] text-white">
                <li>อินเตอร์เน็ตบ้าน</li>
                <li>เบอร์มงคล</li>
                <li>เติมเงิน</li>
                <li>ย้ายค่ายมาทรู</li>
                <li>ซิมท่องเที่ยว</li>
            </ul>
        </div>
    </div>

</div>
</div>
{{-- @vite('resources/js/footer.js') --}}

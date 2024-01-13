@section('style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    @vite('resources/css/fiber_detail.css')
@endsection

@extends('frontend.layouts.main')
@section('title')
    {{ $fiber_products->title }}
@endsection
@section('title')
@endsection
@section('content')
    <div class="2xl:my-16">
        <section class="py-2 px-3">
            <div class="py-6 mb-6">
                <p class="text-[#000] mt-2 mb-2 2xl:text-[1.5rem] text-[18px] font-medium">
                    {{ $fiber_products->cate_keyword }}</p>
                <p class="text-[#838383] mt-2 mb-2 2xl:text-[18px] text-[16px]">
                    {{ $fiber_products->cate_description }}
                </p>
            </div>

            {{-- มหัศจรรย์ --}}
            <div class="plate-line max-w-[200px]"></div>
            {{-- มหัศจรรย์ --}}

            <div class="max-w-[1536px] gap-4 m-auto p-4 mt-10 ">

                <div class="flex flex-wrap justify-center gap-4 mx-auto">
                    <div class="w-[456px] drop-shadow-sm bg-[#F5F5F7] rounded-lg items-center py-4 px-1">
                        <p
                            class="text-transparent bg-clip-text font-medium bg-gradient-to-r from-[#5741CD] to-[#00ACEE] text-[18px]">
                            {{ $fiber_products->title }}
                        </p>
                        <div class="grid grid-cols-3 px-10 ss:px-[1.5rem] mt-6">
                            <p class="text-black font-medium text-[16px] pt-[26px] ">ราคา</p>
                            <p
                                class="text-transparent bg-clip-text font-bold bg-gradient-to-r from-[#5741CD] to-[#00ACEE] text-center text-4xl pt-3">
                                {{ number_format($fiber_products->price_per_month) }}
                            </p>
                            <p class="text-black font-medium text-[16px]">บาท<br>/เดือน</p>
                        </div>
                        <p class="text-md mt-4">ระยะสัญญา {{ $fiber_products->duration }} เดือน</p>
                    </div>

                    @if ($fiber_products->special_price > 0)
                        <div class="w-[456px] drop-shadow-sm bg-[#F5F5F7] rounded-lg items-center px-1">
                            <div class="orange-plate-container">
                                <div class="orange-plate-group">
                                    <div class="orange-plate-box-s">
                                        <div class="orange-plate-circleS"></div>
                                        <div class="orange-plate-textboxS"></div>
                                    </div>
                                    <div class="orange-plate-textboxC">
                                        <p class="orange-plate-text text-white text-xl items-center">พิเศษ</p>
                                    </div>
                                    <div class="orange-plate-box-e">
                                        <div class="orange-plate-textboxE"></div>
                                        <div class="orange-plate-circleE"></div>
                                    </div>
                                </div>
                            </div>

                            <p class="mt-4 font-medium text-[18px]">{{$fiber_products->special_details}}</p>
                            <div class="grid grid-cols-3 px-10 mt-4 items-center">
                                <p class="text-black font-medium text-[16px] pt-[26px] ">ราคา</p>
                                <p class="font-bold text-center text-4xl pt-3">
                                    {{ number_format($fiber_products->special_price) }}</p>
                                <p class="text-black font-medium text-[16px] ">บาท<br>/เดือน</p>
                            </div>
                        </div>
                    @endif

                    @php
                        $download = $fiber_products->download_speed >= 1000 ? $fiber_products->download_speed / 1000 : $fiber_products->download_speed;
                        $unit_download = $fiber_products->download_speed >= 1000 ? 'Gbps' : 'Mbps';

                        $upload = $fiber_products->upload_speed >= 1000 ? $fiber_products->upload_speed / 1000 : $fiber_products->upload_speed;
                        $unit_upload = $fiber_products->upload_speed >= 1000 ? 'Gbps' : 'Mbps';
                    @endphp
                    <div class="w-[456px] drop-shadow-sm bg-[#F5F5F7] rounded-lg items-center px-1">
                        <div class="grid grid-cols-2 mt-6">
                            <div class="flex justify-center">
                                <img src="/images/Rectangle 1233.png" alt="" class="w-[7rem] h-[7rem]">
                            </div>
                            <div class="">
                                <p
                                    class="text-transparent bg-clip-text font-medium bg-gradient-to-r from-[#ED4312] to-[#F6911D] text-2xl text-left">
                                    ความเร็ว</p>
                                <p class="text-left">( ดาวน์โหลด / อัปโหลด )</p>
                                <div class="flex justify-start py-6 ">
                                    <p
                                        class="text-transparent bg-clip-text font-medium bg-gradient-to-r from-[#ED4312] to-[#F6911D] text-left text-[3rem] max-ex:text-[2.5rem] max-ex:font-bold">
                                        {{ $download }}
                                    </p>
                                    <div class="border-l border border-gray-500 text-center mx-6 rounded-full max-ex:mx-3">
                                    </div>
                                    <p class="text-[16px] text-md text-left font-medium">
                                        {{ $unit_download }}<br>/{{ $upload }}{{ $unit_upload }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        {{-- --- --}}

        <section class="py-16 px-3 max-2xl:mx-6">
            <p class="2xl:text-[1.5rem] xl:text-[1.5rem] text-[18px] font-medium mb-6">รับเพิ่มในแพ็กเกจนี้</p>
            <div class="max-w-[1536px] mx-auto items-center">
                <!-- Swiper -->
                <div class="swiper items-center ">
                    @php
                        $justify = 'justify-center max-xs:justify-start';
                        if (count($posts) > 5) {
                            $justify = 'justify-start';
                        }
                    @endphp
                    <div class="swiper-wrapper items-center w-full mx-auto flex {{ $justify }}">
                        @foreach ($posts as $pos)
                            <div class="swiper-slide flex flex-col text-center text-[18px] bg-[#fff] justify-center items-center gap-4">
                                <div class="flex justify-center items-center w-[230px] h-[150px]">
                                    <img src="/{{ $pos->thumbnail_link }}" alt="" class="w-full h-full object-contain">
                                </div>
                                <p class="se:text-[16px]">{{ $pos->title }}</p>
                            </div>
                        @endforeach  
                        
                       
                    </div> 

                    <div class="mx-3 items-center">
                        <div class="swiper-button-next "></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                  
                </div>


            </div>

    </div>
    </section>

    <section class="py-16 ">
        <div class="2xl:text-[1.5rem] xl:text-[1.5rem] text-[18px] font-medium mb-6">สิทธิพิเศษ</div>
        <div class="flex justify-center mt-2 ">
            <div class="flex flex-col justify-center w-[550px] gap-4 px-3 text-left ">
                @foreach ($privilege as $previl)
                    <div class="flex items-start">
                        <img src="/images/quill_star.png" alt="" class="mr-2 h-[35px] w-[35px]">
                        <p class="">{!! $previl->content !!}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <div class="bg-white rounded-bl-[10px] my-4 rounded-br-[10px] flex justify-center">
        <a href="{{ url('/fiber/form_true_dtac/' . $fiber_products->id) }}"
            class="py-2.5 px-5 mr-2 mb-2 text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-500 hover:text-white">ให้เจ้าหน้าที่ติดต่อกลับ</a>
    </div>
    <button id="modal-term-service" class="text-[#838383] text-[16px] underline">ข้อกำหนดและเงื่อนไข</button>

    {{-- box manual --}}
    @php
        $terms_demo = '<p><strong>ข้อกำหนดและเงื่อนไขรายการส่งเสริมการขาย Fixxy No Limit สำหรับย้ายค่ายแบบรายเดือน</strong></p>
                        <p>1.รายการส่งเสริมการขายนี้ สำหรับผู้สมัครใช้บริการย้ายค่ายเบอร์เดิมมาใช้ ทรูมูฟ เอช (&ldquo;ผู้ใช้บริการ&rdquo;) ของบริษัท ทรู มูฟ เอช ยูนิเวอร์แซล คอมมิวนิเคชั่น จำกัด (&ldquo;บริษัท&rdquo;) แบบระบบรายเดือน ในนามบุคคลธรรมดา ตั้งแต่วันที่ 22 กันยายน 2566 &nbsp;ถึง 30 พฤศจิกายน 2566 หรือจนกว่าจะมีการเปลี่ยนแปลง</p>
                        <p>2.รายละเอียดรายการส่งเสริมการขาย: อัตราค่าบริการยังไม่รวมภาษีมูลค่าเพิ่ม</p>
                        <p>2.1 รายการส่งเสริมการขาย Fixxy No Limit 399<br />
                        สิทธิตามแพ็กเกจปกติ:<br />
                        คิดอัตราค่าใช้บริการเหมาจ่ายขั้นต่ำรายเดือน 399 บาท ต่อเดือน ผู้ใช้บริการจะได้รับสิทธิใช้บริการ ดังนี้<br />
                        (1)
โทรทุกเครือข่ายเดือนละ 150 นาทีต่อรอบค่าบริการ&nbsp;<br />
                        (2)บริการ 5G ที่ความเร็วสูงสุด 20 เมกะบิตต่อวินาที (Mbps) เป็นจำนวน 70 กิกะไบต์ (GB)หลังจากนั้น จะใช้ได้ไม่จำกัดปริมาณที่ความเร็วสูงสุด 1 เมกะบิตต่อวินาที (Mbps)<br />
                        (3)บริการ Wi-Fi ที่ความเร็วสูงสุด 1 กิกกะบิตต่อวินาที (Gbps) ไม่จำกัดปริมาณการใช้งาน<br />
                        (4)บริการ Voice Mail และ Miss Call Alert</p>
                        <p><br />
                        เงื่อนไขการใช้รายการส่งเสริมการขาย<br />
                        (1)บริษัทมีสิทธิในการจำกัดการใช้งานเน็ตไม่จำกัดปริมาณการใช้งานตามแพ็กเกจที่ผู้ใช้บริการได้สมัครใช้บริการควบคู่ไปกับเลขหมายโทรศัพท์เคลื่อนที่ และโทรศัพท์เคลื่อนที่ประเภท Smart phone และ Tablet หากบริษัทตรวจพบ หรือมีการแจ้งมายังบริษัท ว่าผู้ใช้บริการ มีการใช้งานในลักษณะของการกระจายสัญญาณโมบายอินเตอร์เน็ตให้กับโทรศัพท์เคลื่อนที่ และ/หรืออุปกรณ์อื่นเพื่อร่วมใช้งานด้วย และ/หรือการกระทำอื่นๆ ในลักษณะเดียวกัน หรือคล้ายคลึงกันทุกกรณี<br />
                        <br />
                        (2)บริษัทมีสิทธิในการจัดการบริหารเครือข่ายตามความเหมาะสมเพื่อรักษามาตรฐานคุณภาพของบริการ และเพื่อช่วยให้ผู้ใช้บริการโดยรวมสามารถใช้งานได้อย่างมีประสิทธิภาพ โดยการจำกัดปริมาณการใช้งานของผู้ใช้บริการและความเร็วของโมบายอินเตอร์เน็ตตามความเหมาะสมในรอบบิลถัดไป ในกรณีที่บริษัทพบหรือสันนิษฐานได้ว่าผู้ใช้บริการมีการดาวน์โหลด และ/หรือ อัพโหลดไฟล์ขนาดใหญ่ หรือ การใช้งานใดๆ ที่มีการรับส่งข้อมูลในปริมาณสูงมากอย่างต่อเนื่อง ในลักษณะไม่เป็นปกติดังเช่นบุคคลทั่วไปพึงใช้งาน หรือผู้ใช้บริการมีพฤฒิกรรมการใช้งานที่มีผลต่อการใช้บริการหรือเกิดความไม่เป็นธรรม ก่อหรืออาจก่อให้เกิดความเสียหาย หรือกระทบ หรืออาจจะกระทบต่อการใช้บริการผู้ใช้บริการรายอื่น และ/หรือต่อเครือข่าย หรือการให้บริการโดยรวมของบริษัท ทั้งนี้การลดความเร็วอาจลดต่ำกว่าที่ระบุในแพ็กเกจได้<br />
                        <br />
                        (3)บริษัทมีสิทธิ์จำกัดการใช้งานในลักษณะ BitTorrent, การแชร์เน็ตผ่าน Hotspot, การรับส่งไฟล์ระหว่างเครื่องลูกข่ายกับเครื่องลูกข่าย (Peer 2 Peer) เช่น แอปพลิเคชั่นกล้องวงจรปิด, เกมแบบหลายผู้เล่นบางเกม หรือการรับส่งข้อมูลในปริมาณสูงผิดปกติเกินบุคคลทั่วไปพึงใช้งาน หรือมีการใช้งานที่อาจส่งผลกระทบต่อการใช้งานโดยรวม<br />
                        <br />
                        เงื่อนไขการใช้บริการ TrueID: สามารถใช้บริการTrueID เฉพาะบริการภายในแอปพลิเคชั่น TrueID บนโทรศัพท์เคลื่อนที่หรือแท๊บเล็ต ในกรณีที่ผู้ใช้บริการใช้ website อื่นหรือลิงค์หรือการแชร์ที่ปรากฏบนหน้าแอปพลิเคชั่นTrueID ผู้ใช้บริการจะต้องชำระค่าใช้บริการเพิ่มเติม (ถ้ามี)ตามอัตราที่ระบุในแพ็กเกจที่ผู้ใช้บริการเลือกใช้งานอยู่ ณ ขณะนั้น หรือหากในแพ็กเกจที่เลือกใช้ ไม่ได้ระบุไว้ ให้คิดค่าบริการตามเงื่อนไขที่บริษัทกำหนด<br />
                        <br />
                        บริการที่รวมอยู่ในแพ็กเกจ TrueID ผู้ใช้สามารถใช้งาน login และ logout สามารถใช้บริการดูทีวีสตรีมมิ่ง, หนัง, เพลง, บทความ ผ่านเมนู Exclusive, Movie, TV, Soccer, Music, Sport, Travel, Food, Game, Men, Women และ Entertainment ไม่นับรวมในการใช้งานในเมนู Privileges, Cloud และ Payment<br />
                        <br />
                        3. ค่าบริการส่วนเกินเหมาจ่าย คิดเพิ่มเติมจากค่าใช้บริการเหมาจ่ายรายเดือน ในอัตราดังนี้<br />
                        3.1 โทรทุกเครือข่าย นาทีละ 1.50 บาท คิดค่าบริการเป็นรายนาที เศษของนาทีนับเป็นหนึ่งนาที<br />
                        3.2 บริการส่งข้อความสั้น (SMS) ระหว่างโทรศัพท์เคลื่อนที่ที่ใช้และจดทะเบียนภายในประเทศ ข้อความละ 2.50 บาท<br />
                        3.3 บริการส่งข้อความมัลติมีเดีย (MMS) ระหว่างโทรศัพท์เคลื่อนทีที่ใช้และจดทะเบียนภายในประเทศ ครั้งละ 4.50 บาท</p>';
    @endphp
    <div class="hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-80 flex justify-center items-center z-10"
        id="modal-container">
        <div
            class="w-[700px] max-lg:w-[444px] max-xs:w-[355px] h-[616px] max-es:h-[500px] max-lg:p-2 p-4 bg-white rounded-[10px]">
            <div class="w-full flex justify-end">
                <img class="cursor-pointer" src="/icons/cancel-btn.png" alt="" id="close_modal">
            </div>
            <div class="text-center flex flex-col items-center gap-3">
                <h1 class="text-xl font-bold mb-4">ข้อกำหนดและเงื่อนไข</h1>
            </div>
            <div id="modal-content" class="text-left h-[calc(100%-68px)] overflow-auto">
                {!! $terms_demo !!}
            </div>
        </div>
    </div>
    {{-- box manual --}}
    </div>

    @include('frontend.pages.internet_fiber.footer_fiber')
@endsection

@section('scripts')
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @vite('resources/js/internet_fiber/swiper_detail.js')
    <script>
        const modal_term_service = document.querySelector('#modal-term-service');
        const modal_container = document.querySelector('#modal-container');
        modal_term_service.addEventListener('click', () => {
            modal_container.classList.remove('hidden');
        })

        close_modal.onclick = () => {
            modal_container.classList.add('hidden');
        }
    </script>
@endsection

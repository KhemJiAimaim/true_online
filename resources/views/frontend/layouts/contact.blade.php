<div class="fixed  bottom-2 md:bottom-10 right-0  z-50  flex flex-col mx-2" id="contact">
    <div class="flex flex-col-reverse relative">

        <div id="contact_button" class="cursor-pointer flex justify-center max-es:justify-end flex-col  items-center mt-2 w-[160px] ">
            <div class="md:relative">
                <div class="w-[80px] h-[80px] max-md:hidden  ">
                    <img src="/images/Ellipse 33.png" alt="" class="bg-white rounded-full w-full h-full">
                </div>
                <p
                    class="bg-red-500 bg-gradient-to-r from-[#EC1F25] to-[#CD1A70] rounded-md text-white py-1 px-8 text-lg w-[80px] flex justify-center max-sm:text-sm text-center md:absolute md:top-[90%]">
                    ติดต่อ
                </p>
            </div>
        </div>

        <div id="social"
            class="hidden rounded-lg w-[160px] py-2 px-1 flex justify-start flex-col gap-2  mx-auto bg-[#fff] shadow-lg ">
            <a href="https://line.me/ti/p/~@berhoro" target="_blank">
                <div class="flex items-center gap-2">
                    <div
                        class="group bg-white rounded-full border-2 border-green-500 hover:border-white mx-1 w-[45px] h-[45px] max-md:w-[40px] max-md:h-[40px]   flex justify-center items-center hover:scale-110 p-1 hover:bg-green-600">
                        <img src="/images/icons8-line-app (1) 6.png" alt=""
                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                    </div>
                    <p class="text-[14px] font-medium">LINE</p>

                </div>

            </a>

            <a href="tel:0645695656" class="">
                <div class="flex items-center gap-2">
                    <div
                        class="group bg-white rounded-full mx-1 p-1 w-[45px] h-[45px] max-md:w-[40px] max-md:h-[40px] flex justify-center items-center border-2 border-red-500 hover:bg-red-500 hover:border-white hover:scale-110">
                        <img src="/images/solar_outgoing-call-rounded-linear.png" alt=""
                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                    </div>
                    <p class="text-[14px] font-medium">เบอร์โทรติดต่อ</p>

                </div>
            </a>

            <div id="contact-staff" class="">
                <div class="flex items-center gap-2">
                    <div
                        class="group bg-white rounded-full mx-1 p-2 w-[45px] h-[45px] max-md:w-[40px] max-md:h-[40px] flex justify-center items-center border-2 border-[#00ADEF] hover:bg-[#00ADEF] hover:border-white hover:scale-110">
                        <img src="/images/Group.png" alt=""
                            class="cursor-pointer w-full h-full group-hover:filter group-hover:invert group-hover:saturate-12 group-hover:hue-rotate-237 group-hover:brightness-0 group-hover:contrast-100">
                    </div>
                    <p class="text-[14px] font-medium">ติดต่อเจ้าหน้าที่</p>

                </div>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="contact-Modal"
    class="modal hidden fixed top-0 left-0 w-full h-full bg-black bg-opacity-70 flex items-center justify-center z-50">
    <div class="modal-content bg-white max-uu:w-4/12 max-xl:w-[60%] max-xx:w-[95%] p-8 rounded-lg">
        <div class="flex justify-end items-center mb-1">
            <img src="/images/cross-round-svgrepo-com.png" alt="" id="closeModal"
                class="close w-8 cursor-pointer hover:scale-110 ">
        </div>


        <h1 class="text-lg font-semibold text-center items-center ">กรุณากรอกข้อมูล
            <br>เพื่อให้เจ้าหน้าที่ติดต่อกลับ
        </h1>


        <div class="flex flex-col gap-2 my-6">
            <div class="flex gap-4 text-[16px]">
                <label class="text-end w-32" for="first-name">ชื่อ*</label>
                <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]  w-full outline-none"
                    type="text" name="first-name" id="first-name">
            </div>
            <div class="flex gap-4 text-[16px]">
                <label class="text-end w-32" for="phone">เบอร์โทรศัพท์*</label>
                <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px]  w-full outline-none"
                    type="text" name="phone" id="phone" maxlength="10">
            </div>
            <div class="flex gap-4 text-[16px]">
                <label class="text-end w-32" for="email">E-mail*</label>
                <input class="px-2 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] w-full outline-none"
                    type="text" name="email" id="email">
            </div>
            <div class="flex gap-4 text-[16px]">
                <label class="text-end w-32" for="messages">ข้อความ*</label>
                <textarea class="px-2 h-14 bg-white border border-[1px]-[#D9D9D9] rounded-[3px] w-full outline-none" type="text"
                    name="messages" id="messages" cols="30" rows="3"></textarea>
            </div>
        </div>

        <div class="flex justify-center">
            <button id="save-btn"
                class="bg-red-500 rounded-full border border-red-500 hover:bg-red-700 text-white py-2 text-center text-[16px] px-6">ส่งข้อมูลให้ติดต่อกลับ</button>
        </div>
    </div>
</div>


@vite('resources/js/contact/contact_form.js')
@vite('resources/js/contact/contact_button.js')

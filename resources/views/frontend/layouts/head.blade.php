<style>
    /* Define the style for the active class */
    .active {
        color: #EC1F25 !important;
    }
</style>
<!-- nav goes here -->

<nav class="bg-gradient-to-r from-[#EC1F25] via-[#C2198D] to-[#00ADEF] fixed w-full top-0 z-50 ">
    <div class="w-3/4 2xl:w-[1536px] xl:w-[1200px] mx-auto">
        <div class="flex justify-between">
            <div class="flex space-x-4">

                <!-- logo -->
                <div class="hidden xl:flex">
                    <a href="/" class="flex items-center py-2 text-gray-700 hover:text-gray-900">
                        <div class="w-20">
                            <img src="/images/logo/S__41378004.jpg" alt="" class="w-full">{{-- {{ $webInfo->detail->image_1->link }} --}}
                        </div>
                    </a>
                </div>

                <!-- primary nav -->
                <div class="hidden md:flex items-center space-x-1">
                    {{-- <a href="#" class="py-5 px-3 text-gray-700 hover:text-gray-900">Text1</a> --}}
                </div>
            </div>

            <!-- secondary nav -->
            <div class="hidden xl:flex items-center space-x-1 ">
                <div class="flex justify-center w-[33px] h-[33px]">
                    <span id="num-cart"
                        class="bg-[#EC1F25] text-white rounded-full px-2 py-1 w-full text-center text-[16px] items-center">{{ isset($amount) ? $amount : 0 }}</span>
                </div>
                <a href="{{ url('/cartproduct') }}" class="flex items-center py-5 text-gray-700 hover:text-gray-900">
                    <img src="/images/ph_shopping-cart.png" class="w-6 mr-1 hover:scale-125" />
                </a>
            </div>


        </div>
    </div>

    <div class="w-full px-4 mx-auto ">
        <!-- mobile button goes here -->
        <div class="xl:hidden flex justify-between items-center">
            <div class="">
                <a href="{{ url('/') }}" class="flex items-center py-1 text-gray-700 hover:text-gray-900">
                    <div class="w-16">
                        <img src="/images/logo/S__41378004.jpg" alt="" class="w-full"> {{-- {{ asset('/images/Rectangle 11.png') }} --}}
                    </div>
                </a>
            </div>

            <div class="flex items-center gap-2 ">
                <div class="flex justify-center w-[33px] h-[33px]">
                    <span id="mobile-num-cart"
                        class="bg-[#EC1F25] text-white rounded-full px-1 py-1 w-full text-center text-[16px] items-center">{{ isset($amount) ? $amount : 0 }}</span>
                </div>
                <a href="{{ url('/cartproduct') }}"
                    class="flex items-center py-5 text-gray-700 hover:text-gray-900 w-[30px]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6  mr-1 text-white w-full" width="20"
                        height="20" viewBox="0 0 20 20" fill="none">
                        <path
                            d="M17.3547 4.59922C17.296 4.52901 17.2226 4.47254 17.1398 4.4338C17.0569 4.39506 16.9665 4.37498 16.875 4.375H4.27187L3.88984 2.27656C3.83752 1.98854 3.68577 1.72802 3.46105 1.54042C3.23632 1.35282 2.95289 1.25004 2.66016 1.25H1.25C1.08424 1.25 0.925268 1.31585 0.808058 1.43306C0.690848 1.55027 0.625 1.70924 0.625 1.875C0.625 2.04076 0.690848 2.19973 0.808058 2.31694C0.925268 2.43415 1.08424 2.5 1.25 2.5H2.65625L4.65312 13.4602C4.71195 13.7852 4.85559 14.0889 5.06953 14.3406C4.77425 14.6164 4.56113 14.9686 4.45379 15.3581C4.34646 15.7477 4.3491 16.1593 4.46143 16.5474C4.57376 16.9355 4.79138 17.2849 5.09018 17.5569C5.38897 17.8289 5.75725 18.0128 6.15418 18.0883C6.55112 18.1637 6.9612 18.1278 7.33894 17.9844C7.71669 17.841 8.04735 17.5958 8.29425 17.276C8.54115 16.9562 8.69465 16.5742 8.73773 16.1725C8.7808 15.7707 8.71177 15.3649 8.53828 15H12.0867C11.9469 15.2927 11.8745 15.6131 11.875 15.9375C11.875 16.3701 12.0033 16.7931 12.2437 17.1528C12.484 17.5125 12.8257 17.7929 13.2254 17.9585C13.6251 18.1241 14.0649 18.1674 14.4893 18.083C14.9136 17.9986 15.3034 17.7902 15.6093 17.4843C15.9152 17.1784 16.1236 16.7886 16.208 16.3643C16.2924 15.9399 16.2491 15.5001 16.0835 15.1004C15.9179 14.7007 15.6375 14.359 15.2778 14.1187C14.9181 13.8783 14.4951 13.75 14.0625 13.75H6.49766C6.35129 13.75 6.20957 13.6986 6.09721 13.6048C5.98485 13.511 5.90898 13.3807 5.88281 13.2367L5.63516 11.875H14.6977C15.1368 11.8749 15.5619 11.7208 15.899 11.4394C16.2361 11.158 16.4637 10.7672 16.5422 10.3352L17.4922 5.11172C17.5083 5.02144 17.5043 4.92872 17.4805 4.84015C17.4568 4.75158 17.4138 4.66933 17.3547 4.59922ZM7.5 15.9375C7.5 16.1229 7.44502 16.3042 7.342 16.4583C7.23899 16.6125 7.09257 16.7327 6.92127 16.8036C6.74996 16.8746 6.56146 16.8932 6.3796 16.857C6.19774 16.8208 6.0307 16.7315 5.89959 16.6004C5.76848 16.4693 5.67919 16.3023 5.64301 16.1204C5.60684 15.9385 5.62541 15.75 5.69636 15.5787C5.76732 15.4074 5.88748 15.261 6.04165 15.158C6.19582 15.055 6.37708 15 6.5625 15C6.81114 15 7.0496 15.0988 7.22541 15.2746C7.40123 15.4504 7.5 15.6889 7.5 15.9375ZM15 15.9375C15 16.1229 14.945 16.3042 14.842 16.4583C14.739 16.6125 14.5926 16.7327 14.4213 16.8036C14.25 16.8746 14.0615 16.8932 13.8796 16.857C13.6977 16.8208 13.5307 16.7315 13.3996 16.6004C13.2685 16.4693 13.1792 16.3023 13.143 16.1204C13.1068 15.9385 13.1254 15.75 13.1964 15.5787C13.2673 15.4074 13.3875 15.261 13.5417 15.158C13.6958 15.055 13.8771 15 14.0625 15C14.3111 15 14.5496 15.0988 14.7254 15.2746C14.9012 15.4504 15 15.6889 15 15.9375ZM15.3125 10.1117C15.2863 10.2561 15.21 10.3867 15.0972 10.4805C14.9844 10.5744 14.8421 10.6255 14.6953 10.625H5.40781L4.49922 5.625H16.1258L15.3125 10.1117Z"
                            fill="white" />
                    </svg>
                </a>


                <div class="mobile-menu-button">
                    <div class="ham-line1"></div>
                    <div class="ham-line2"></div>
                    <div class="ham-line3"></div>
                </div>
            </div>
        </div>
    </div>


    <!-- mobile menu -->
    <ul
        class="Mitr mobile-menu hidden xl:hidden  bg-white absolute z-99 bg-opacity-[90%] w-full h-[100vh] transition divide-y-2 overflow-y-auto list-none">
        @foreach ($main_cate as $m_cate)
            @php
                $main_list = '';
                $matching_cate = false;
                foreach ($sub_cate as $s_cate) {
                    if ($s_cate->cate_parent_id == $m_cate->id) {
                        $matching_cate = true;
                        $main_list =
                            '<li>
                                <a href="/' .
                            $m_cate->cate_url .
                            '" class="block py-2 ml-5 2xl:text-[1.2rem] text-[16px] hover:text-[#EC1F25] font-medium">หน้าหลัก</a>
                            </li>';
                        break;
                    }
                }
            @endphp
            <li class=" bg-gray-100 w-full">
                <a id="menufiber" {{ $href = !$matching_cate ? "href=/$m_cate->cate_url" : '' }}
                    class="dropbtn w-[95%] flex items-center justify-between py-2 text-[1.2rem] max-sm:text-[16px] hover:text-red-500 ml-5 font-medium">{{ $m_cate->cate_title }}
                    <img id="flip" class="flip w-[20px] mr-5" {!! $flip = $matching_cate ? 'src="/images/icon/down-arrow.png"' : '' !!} alt="">
                </a>
                {{-- @if ($matching_cate) --}}
                <ul id="myDropdown" class="dropdow-conten bg-white list-none">
                    {!! $main_list !!}
                    @foreach ($sub_cate as $s_cate)
                        @if ($s_cate->cate_parent_id == $m_cate->id)
                            <li>
                                <a href="/{{ $s_cate->cate_url }}"
                                    class="block py-2 ml-5 2xl:text-[1.2rem] text-[16px] hover:text-[#EC1F25]">{{ $s_cate->cate_title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
                {{-- @endif --}}
            </li>
        @endforeach

    </ul>
</nav>


<div class="bg-white drop-shadow-md w-full fixed top-20  z-40">
    <div class="2xl:w-[1610px] xl:w-[1200px] mx-auto xl:mt-4 py-2 z-50 max-xl:hidden">
      <ul class="hidden lg:flex 2xl:flex relative list-none text-center" id="menu">
        @foreach ($main_cate as $m_cate)
          <li class="group z-[99] w-full ">
            <a href="{{ url($m_cate->cate_url) }}" class="py-2 2xl:text-[1.2rem] text-[1rem] hover:text-[#EC1F25] ">{{ $m_cate->cate_title }}</a>
            @foreach ($sub_cate as $s_cate)
              @if ($s_cate->cate_parent_id == $m_cate->id)
                <ul class="submenu hidden w-full left-0 space-y-2 bg-white group-hover:block z-50 mt-4 list-none">
                  <li>
                    <a href="{{ url('/' . $s_cate->cate_url) }}" class="block py-2 text-[1rem] max-2xl:text-[14px] ml-18 hover:text-[#EC1F25] text-left">{{ $s_cate->cate_title }}</a>
                  </li>
                </ul>
              @endif
            @endforeach
        </ul>
    </div>
</div>



<script>
    const btns = document.querySelectorAll('.mobile-menu-button');
    const menu = document.querySelector('.mobile-menu');

    btns.forEach(btn => {
        btn.addEventListener('click', (e) => {
            e.currentTarget.classList.toggle('change')
            menu.classList.toggle('hidden');

        });
    });



    const menuItems = document.querySelectorAll('.group');

    menuItems.forEach(item => {
        item.addEventListener('mouseenter', () => {
            item.querySelector('.group-hover\\:block')?.classList.remove('hidden');
        });
        item.addEventListener('mouseleave', () => {
            item.querySelector('.group-hover\\:block')?.classList.add('hidden');
        });
    });

    const menufiber = document.querySelectorAll('.dropbtn');
    const myDropdown = document.querySelectorAll('.dropdow-conten');
    const flip = document.querySelectorAll('.flip');

    menufiber.forEach((element, index) => {
        let show = false;

        element.addEventListener('click', () => {
            if (!show) {
                myDropdown[index].classList.add('show');
                flip[index].classList.add('flipdow');
            } else {
                myDropdown[index].classList.remove('show');
                flip[index].classList.remove('flipdow');
            }

            // สลับสถานะ show
            show = !show;
        });
    });

    // if (flip.classList.contains('flipdow')) {
    //     flip.classList.remove('flip');
    //     drop.classList.toggle("show");
    // } else {
    //     flip.classList.add('flip');
    //     drop.classList.remove("show");
    // }
</script>

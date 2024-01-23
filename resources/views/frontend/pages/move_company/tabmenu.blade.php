<div
    class="w-[700px] max-md:w-[90%] grid max-md:grid-cols-3 grid-cols-3 max-md:my-6 my-16 2x mx-auto gap-y-6 items-center gap-x-6 max-xs:gap-x-2">
    <div class=" flex justify-center">
        <a class="w-full h-[40px] bg-gray-400 {{ empty($data_category['cate_id']) ? "bg-gradient-to-r from-[#F6911D] to-[#ED4312]" : "" }} hover:bg-gradient-to-r from-[#F6911D] to-[#ED4312] flex items-center justify-center rounded-[5px] "
            href="/move">
            <p class="text-white 2xl:text-[20px] xl:text-[18px] max-ex:text-[14px] max-es:text-[12px] text-[16px]">แนะนำ</p>
        </a>
    </div>
    @foreach($data_category['move_cate'] as $cate)
    <div class=" flex justify-center">
        <a class="w-full h-[40px] bg-gray-400 {{$selected = ($data_category['cate_id'] == $cate->id)?"bg-gradient-to-r from-[#F6911D] to-[#ED4312]": ""}} hover:bg-gradient-to-r from-[#F6911D] to-[#ED4312] flex items-center justify-center rounded-[5px]"
            href="{{url('/move/'.$cate->id)}}">
            <p class="text-white 2xl:text-[20px] xl:text-[18px] max-ex:text-[14px] max-es:text-[12px] text-[16px]">{{$cate->title}}</p>
        </a>
    </div>
    @endforeach
    {{-- <div class=" flex justify-center">
        <a class="w-[150px] h-[40px] bg-gray-400 hover:bg-gradient-to-r from-[#F6911D] to-[#ED4312] flex items-center justify-center rounded-[5px]"
            href="/move/5GTogether+">
            <p class="text-white 2xl:text-[20px] xl:text-[18px] text-[16px]">5G Together+</p>
        </a>
    </div>
    <div class=" flex  justify-center">
        <a class="w-[150px] h-[40px] bg-gray-400 hover:bg-gradient-to-r from-[#F6911D] to-[#ED4312] flex items-center justify-center rounded-[5px]"
            href="/move/5GSuperSmart">
            <p class="text-white 2xl:text-[20px] xl:text-[18px] text-[16px]">5G Super Smart</p>
        </a>
    </div> --}}
</div>

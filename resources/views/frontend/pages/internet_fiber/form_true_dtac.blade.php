@extends('frontend.layouts.main')
@section('style')
    <style>
        .main {
            height: auto;
            min-height: 100% !important;
            display: flex;
            flex-direction: column;
            /* overflow-y: auto; */
        }
    </style>
    {{-- &callback=initMap --}}
    <script async src="http://maps.googleapis.com/maps/api/js?key={{ $key_map }}&callback=initMap"></script>
    <script>
      var map;
      var geocoder;
      var currentMarker; // ประกาศตัวแปร currentMarker เพื่อเก็บ reference ของ Marker ปัจจุบัน
      var keyMap = @json($key_map);
    
      function initMap() {
        var mapProp = {
          center: new google.maps.LatLng(16.487383, 102.835130),
          zoom: 18,
          mapTypeId: google.maps.MapTypeId.MAP
        };
    
        map = new google.maps.Map(document.querySelector('#gMap'), mapProp);
        
    
        google.maps.event.addListener(map, 'click', function (event) {
          // ตรวจสอบว่ามี Marker เก่าอยู่หรือไม่
          if (currentMarker) {
            // ถ้ามี Marker เก่าอยู่, ให้ลบออกจากแผนที่
            currentMarker.setMap(null);
          }
    
          // สร้าง Marker ใหม่
          currentMarker = new google.maps.Marker({
            position: event.latLng,
            map: map,
          });
    
          var info = new google.maps.InfoWindow({
            content: "<button onclick='selectLo()' class='bg-blue-500 p-1 rounded-[5px] text-white'>Choose this location</button>"
          });
    
          info.open(map, currentMarker);
        });
    
        geocoder = new google.maps.Geocoder();
      }
    
      function searchLocation() {
        var address = document.getElementById('search').value;
    
        geocoder.geocode({ 'address': address }, function (results, status) {
          if (status === 'OK') {
            var location = results[0].geometry.location;
            map.setCenter(location);
    
            // var marker = new google.maps.Marker({
            //   map: map,
            //   position: location
            // });
          } else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }
    
      function selectLo() {
        if (currentMarker) {
            let customer_location = currentMarker.getPosition().lat().toString() + ',' + currentMarker.getPosition().lng().toString();
            // console.log(customer_location)

            const input_pin = document.querySelector('#input-pin');
            input_pin.value = customer_location; 

            const show_map = document.querySelector('#show-map'); 
            show_map.classList.remove('hidden');
            show_map.src = `https://www.google.com/maps/embed/v1/place?key=${keyMap}&q=${customer_location}&zoom=18`;
            document.querySelector('#modal').classList.add('hidden')
        } else {
          console.log("No marker available.");
        }
      }
    
      window.onload = initMap;
    </script>
@endsection
@section('content')
    <div class="mt-[120px] max-xl:mt-[74px] mx-3">
        <p class="text-[20px] font-blod">กรุณากรอกข้อมูล</p>
        <p class="text-[18px] font-blod mb-6">เพื่อให้เจ้าหน้าที่ติดต่อกลับ</p>

        <div class="plate-line max-w-[200px]"></div>

        <div class="max-w-[1000px] bg-[#F8F9FA] rounded-lg mx-auto p-2 2xl:mt-10 mt-6 px-3">
            <div class="grid 2xl:grid-cols-2 xl:grid-cols-2  lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4 items-center">
                <div class="flex justify-between items-center">
                    <label for="first-name"
                        class="w-32 text-right max-ex:text-left  pr-4 font-medium text-gray-700">ชื่อ</label>
                    <div class="flex-1">
                        <input required type="text" id="first-name"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>

                <div class="flex justify-between items-center ">
                    <label for="last-name"
                        class="w-32 text-right max-ex:text-left pr-4 font-medium text-gray-700">นามสกุล</label>
                    <div class="flex-1">
                        <input required type="text" id="last-name"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div class="grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4 items-center mt-4">
                <div class="flex justify-between items-center">
                    <label for="phone"
                        class="w-32  text-right max-ex:text-left pr-2 font-medium text-gray-700">เบอร์โทรศัพท์</label>
                    <div class="flex-1">
                        <input required type="text" id="phone"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent" maxlength="10">
                    </div>
                </div>
                <div class="flex justify-between items-center">
                    <label for="line-id"
                        class="w-32  text-right max-ex:text-left pr-4 font-medium text-gray-700">ไลน์ไอดี</label>
                    <div class="flex-1">
                        <input required type="text" id="line-id"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
                    </div>
                </div>
            </div>

            <div class="flex justify-between items-center mt-4">
                <label for="address"
                    class="self-start w-32  text-right max-ex:text-left mt-2 pr-4 font-medium text-gray-700">ที่อยู่</label>
                <textarea id="address" name="address" rows="3"
                    class="disabled:bg-gray-100 w-full flex-1 placeholder:text-slate-400 appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 rounded-md focus:outline-none focus:ring-2 focus:ring-sky-600"></textarea>
            </div>

            <div class="grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4 items-center mt-4">
                <div
                    class="flex justify-start items-center focus:outline-none focus:ring-primary-500 focus:border-primary-500 ">
                    <label for="province"
                        class="w-32 text-right max-ex:text-left pr-4 font-medium text-gray-700">จังหวัด</label>
                    <select id="province" name="province" class="max-2xl:w-[22rem] max-xs:w-[16rem] ex:w-[24rem] dm:w-[20rem] lg:w-[23rem] md:w-[17rem] es:w-[16rem] ss:w-[13rem] se:w-[14rem] focus:outline-none focus:ring-2 focus:ring-sky-600  text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md">
                        <option value="">เลือกจังหวัด</option>
                        @foreach($provinces as $province)
                        <option data-id="{{$province->code}}" value="{{$province->name_th}}">{{$province->name_th}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="flex justify-start items-center focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <label for="district"
                        class="w-32 text-right max-ex:text-left pr-4 font-medium text-gray-700">อำเภอ/เขต</label>
                    <select id="district" name="district" class="max-2xl:w-[22rem] max-xs:w-[16rem] ex:w-[24rem] dm:w-[20rem] lg:w-[23rem] md:w-[17rem] es:w-[16rem] ss:w-[13rem] se:w-[14rem] focus:outline-none focus:ring-2 focus:ring-sky-600  text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md">
                        <option value="">เลือกอำเภอ</option>
                    </select>
                </div>
            </div>


            <div class="grid 2xl:grid-cols-2 xl:grid-cols-2 lg:grid-cols-2 dm:grid-cols-2 md:grid-cols-2 gap-y-4 items-center mt-4">
                <div class="flex justify-start items-center focus:outline-none focus:ring-primary-500 focus:border-primary-500">
                    <label for="sub-district"
                        class="w-32 text-right max-ex:text-left pr-4 font-medium text-gray-700">ตำบล/แขวง</label>
                    <select id="sub-district" name="sub-district"
                        class="max-2xl:w-[22rem] max-xs:w-[16rem] ex:w-[24rem] dm:w-[20rem] lg:w-[23rem] md:w-[17rem] es:w-[16rem] ss:w-[13rem] se:w-[14rem]  focus:outline-none focus:ring-2 focus:ring-sky-600  text-gray-700 py-2 px-3 border border-gray-300 bg-white rounded-md">
                        <option value="">เลือกตำบล</option>
                    </select>
                </div>

                <div class="flex justify-between items-center">
                    <label for="zip-code"
                        class="w-32 text-right max-ex:text-left pr-2 font-medium text-gray-700">รหัสไปรษณี</label>
                    <div class="flex-1">
                        <input required type="text" id="zip-code"
                            class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent" maxlength="5">
                    </div>
                </div>
            </div>

            <div class="flex 2xl:justify-between max-ex:flex-col 2xl:items-start gap-y-2 mt-4">
                <label for="name"
                    class="w-32 text-right max-ex:text-left pr-4 font-medium text-gray-700">ปักหมุดที่อยู่</label>
                <div class="flex flex-col gap-4 flex-1">
                    <div class="relative">
                        <input required type="text" id="input-pin" class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent" placeholder="16.408917,102.773789">
                        <button id="pin_address" class="bg-gray-300 p-1 rounded-full absolute right-0 top-[50%] translate-x-[-50%] translate-y-[-50%]"><img src="/icons/addressicon.png" alt=""></button>
                    </div>
                    <iframe id="show-map" class="w-full rounded-lg hidden" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" src="" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="flex 2xl:justify-center 2xl:items-start gap-y-2 mt-4">
                <div class="g-recaptcha mx-auto" data-sitekey="6Lf8IkQpAAAAAEmJz3cct0ng28I3wxN3CCUQh6iy"></div>
            </div>

            <p class="text-[1rem] text-[#838383] 2xl:mt-6 mt-10">ท่านจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30 นาที</p>
        </div>
    </div>

    {{-- modal google map --}}
    <div id="modal" class="fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-10 hidden">
        <div class="flex items-center justify-center h-full">
          <div class="bg-white p-2 rounded-[10px] shadow-lg w-[1100px] h-[600px] max-ex:h-[80%] max-ex:w-[95%] relative">
            <div id="close-modal" class="cursor-pointer text-gray-600 text-[60px] absolute top-[-5%] right-2">&times;</div>
            <div class="w-96 mx-auto flex gap-4 my-4">
              <input type="text" id="search" class="w-full rounded-md appearance-none border border-gray-300 py-2 px-2 bg-white text-gray-700 placeholder-gray-400 shadow-sm focus:outline-none focus:ring-2 focus:ring-sky-600 focus:border-transparent">
              <button onclick="searchLocation()" class="bg-blue-500 text-white py-2 px-4 rounded">Search</button>
            </div>
            <div id="gMap" style="width: 100%;height:500px"></div>
          </div>
        </div>
    </div>

    <div class="bg-white rounded-bl-[10px] rounded-br-[10px] flex justify-center max-ex:flex-col gap-6 gap-y-2 mt-4 2xl:gap-4 mb-10 px-3">
        <a href="{{ url('/fiber') }}" class="py-2.5 px-12  mb-2 mt-2  text-[16px] font-medium text-red-500 focus:outline-none bg-white rounded-full border border-red-500 hover:bg-red-700 hover:text-white">กลับหน้าหลัก</a>
        <button id="save-form-data" class="py-2.5 px-5  mb-2 mt-2 text-[16px] font-medium text-white focus:outline-none bg-red-500 rounded-full border border-red-500 hover:bg-red-700 hover:text-white">ฝากข้อมูลให้ติดต่อกลับ</button>
    </div>
    @include('frontend.pages.internet_fiber.footer_fiber')
@endsection

@section('scripts')
<script>
    let fiber_product = @json($product);
    let district_data = @json($districts);
    let subdistricts_data = @json($subdistricts);
</script>
@vite('resources/js/internet_fiber/form_true_dtac.js')
@endsection

console.log('use form_true_dtac.js')
import { forEach } from 'lodash';
import '../global_js/hide_banner.js';

const phone = document.querySelector('#phone');
const zip_code = document.querySelector('#zip-code');
phone.addEventListener('input', () => {
    phone.value = numberInput(phone)
})
zip_code.addEventListener('input', () => {
    zip_code.value = numberInput(zip_code)
})

function numberInput(element) {
    return element.value.replace(/[^0-9]/g,'')
}

const province = document.querySelector('#province');
const districtSelect  = document.querySelector('#district');
const sub_districtSelect = document.querySelector('#sub-district');
province.addEventListener('change', () => {
    const selectedOption = province.options[province.selectedIndex];
    const provinceId = selectedOption.getAttribute('data-id');
    getDistrictData(provinceId)
})

districtSelect.addEventListener('change', () => {
    const selectedOption = districtSelect.options[districtSelect.selectedIndex];
    const districtId = selectedOption.getAttribute('data-id');
    // console.log(districtId)
    getSubDistrictData(districtId)
})

sub_districtSelect.addEventListener('change', () => {
    const selectedOption = sub_districtSelect.options[sub_districtSelect.selectedIndex];
    const data_zip = selectedOption.getAttribute('data-zip');
    // console.log(data_zip)
    zip_code.value = data_zip;
})

function getDistrictData(provinceId) {
    const filteredDistricts = district_data.filter(dis => dis.province_code == provinceId);
    let option = '<option value="">เลือกอำเภอ</option>';
    filteredDistricts.forEach(data => {
        option += `<option data-id="${data.code}" value="${data.name_th}">${data.name_th}</option>`
    });
    districtSelect.innerHTML = option
}

function getSubDistrictData(districtId){
    console.log(districtId)
    const filteredSubDistricts = subdistricts_data.filter(subDis => subDis.district_code == districtId);
    console.log(filteredSubDistricts)
    let option = '<option value="">เลือกตำบล</option>';
    filteredSubDistricts.forEach(data => {
        option += `<option data-id="${data.code}" data-zip="${data.zip_code}" value="${data.name_th}">${data.name_th}</option>`
    });
    sub_districtSelect.innerHTML = option
}

let save_form = document.querySelector('#save-form-data');
save_form.addEventListener('click',  () => {
    const fisrtname = document.querySelector('#first-name').value;
    const lastname = document.querySelector('#last-name').value;
    const line_id = document.querySelector('#line-id').value;
    const address = document.querySelector('#address').value;
    const sub_district = document.querySelector('#sub-district').value;
    const district = document.querySelector('#district').value;
    const province = document.querySelector('#province').value;
    const input_pin = document.querySelector('#input-pin').value;
    


  let params = {
    'fiber_id' : fiber_product.id,
    'type_id' : 1,
    'fisrtname' : fisrtname,
    'lastname' : lastname,
    'phone_number' : phone.value,
    'line_id' : line_id,
    'address' : address,
    'province' : province,
    'district' : district,
    'subdistrict' : sub_district,
    'zip_code' : zip_code.value,
    'lat_lng' : input_pin,
    }
    
    for (const key in params) {
        if (params.hasOwnProperty(key) && params[key] === '') {
            console.log("error: " + key + " is empty");
            return false;
        }
    }
    console.log(params)

})

const pin_address = document.querySelector('#pin_address')
const modal = document.querySelector('#modal')
const close_modal = document.querySelector('#close-modal')
pin_address.addEventListener('click', () => {
    // initMap()
    modal.classList.remove('hidden')
})
close_modal.addEventListener('click', () => {
    modal.classList.add('hidden')
})
// import '../bermonthly_lucky/fortune_ber.js';

console.log("use cartproduct.js")

const btn_removeItem = document.querySelectorAll('#remove-item');
btn_removeItem.forEach(element => {
  element.addEventListener('click', () => {
    const data_type = element.getAttribute('data-type');
    const data_id = element.getAttribute('data-id');

    const param = {
      "data_type" : data_type,
      "data_id" : data_id
    }
    
    axios.post(`/remove-item`,param).then((response) => {
      if(response.data.status == 'success') {
        location.reload();
      }
    })
  })
});
const zip_code = document.querySelector('#zip-code');
const province = document.querySelector('#province');
const districtSelect  = document.querySelector('#district');
const sub_districtSelect = document.querySelector('#sub-district');
province.addEventListener('change', () => {
    const selectedOption = province.options[province.selectedIndex];
    const provinceId = selectedOption.getAttribute('data-id');
    console.log(provinceId)
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


const submitBuy = document.querySelector('#submit-buy');

submitBuy.addEventListener('click', () => {
  let name = document.querySelector('#name').value;
  let last_name = document.querySelector('#last-name').value;
  let customer_tel = document.querySelector('#customer-tel').value;
  let customer_email = document.querySelector('#customer-email').value;
  let customer_address = document.querySelector('#customer-address').value;
  let sub_district = document.querySelector('#sub-district').value;
  let district = document.querySelector('#district').value;
  let province = document.querySelector('#province').value;
  let post_code = document.querySelector('#post-code');
  
  let param = {
    name : name, 
    last_name : last_name,
    customer_tel : customer_tel,
    customer_email : customer_email,
    customer_address : customer_address,
    sub_district : sub_district,
    district : district,
    province : province,
    zip_code : zip_code.value
  }; 
  console.log(param)
})

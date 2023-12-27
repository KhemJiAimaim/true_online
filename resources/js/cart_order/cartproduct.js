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

const customer_tel = document.querySelector('#customer-tel');
const zip_code = document.querySelector('#zip-code');

customer_tel.addEventListener('input', () => {
  customer_tel.value = filterNum(customer_tel)
})

zip_code.addEventListener('input', () => {
  zip_code.value = filterNum(zip_code)
})

function filterNum(element) {
  return element.value.replace(/[^0-9]/g,'')
}


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
  const name = document.querySelector('#name').value;
  const last_name = document.querySelector('#last-name').value;
  const customer_tel = document.querySelector('#customer-tel').value;
  const customer_email = document.querySelector('#customer-email').value;
  const customer_address = document.querySelector('#customer-address').value;
  const sub_district = document.querySelector('#sub-district').value;
  const district = document.querySelector('#district').value;
  const province = document.querySelector('#province').value;

  // console.log(travelSims_data)
  // console.log(prepaidCate_data)
  // console.log(bermonthly_data)
  
  let params = {
    name : name, 
    last_name : last_name,
    customer_tel : customer_tel,
    customer_email : customer_email,
    customer_address : customer_address,
    sub_district : sub_district,
    district : district,
    province : province,
    zip_code : zip_code.value,
    total_price : total_price,
    shipping_cost : shipping_cost
  }; 

  // validate data
  for (const key in params) {
    if (params.hasOwnProperty(key) && params[key] === '') {
      console.log("error: " + key + " is empty");
      return false;
    }
  }

  if(bermonthly_data.length > 0) {
    params.bermonthly = bermonthly_data
  }
  if(prepaidCate_data.length > 0) {
    params.prepaid_cate = prepaidCate_data
  }
  if(travelSims_data.length > 0) {
    params.travel_sim = travelSims_data
  }
  console.log(params)

})

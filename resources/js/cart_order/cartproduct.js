// import '../bermonthly_lucky/fortune_ber.js';

console.log("use cartproduct.js")

const btn_removeItem = document.querySelectorAll('#remove-item');

btn_removeItem.forEach(element => {
    element.addEventListener('click', () => {
        const data_type = element.getAttribute('data-type');
        const data_id = element.getAttribute('data-id');

        // Use SweetAlert to confirm deletion
        Swal.fire({
            title: 'คุณต้องการลบรายการสินค้า?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'ยืนยัน',
            cancelButtonText: 'ยกเลิก'
        }).then((result) => {
            // If the user clicks on "Yes, delete it!"
            if (result.isConfirmed) {
                // Proceed with the deletion
                const param = {
                    "data_type": data_type,
                    "data_id": data_id
                };

                axios.post(`/remove-item`, param)
                    .then((response) => {
                        if (response.data.status === 'success') {
                            // If deletion is successful, reload the page
                            Swal.fire({
                              icon: "success",
                              title: "ลบรายการสินค้าสำเร็จ",
                              showConfirmButton: false,
                              timer: 1500,
                          }
                            ).then(() => {
                                location.reload();
                            });
                        }
                    })
                    .catch((error) => {
                        console.error('Error deleting item:', error);
                        Swal.fire(
                            'Error!',
                            'An error occurred while deleting the item.',
                            'error'
                        );
                    });
            }
        });
    });
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
  const firstname = document.querySelector('#name').value;
  const lastname = document.querySelector('#last-name').value;
  const customer_tel = document.querySelector('#customer-tel').value;
  const customer_email = document.querySelector('#customer-email').value;
  const customer_address = document.querySelector('#customer-address').value;
  const sub_district = document.querySelector('#sub-district').value;
  const district = document.querySelector('#district').value;
  const province = document.querySelector('#province').value;
  const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

  // console.log(travelSims_data)
  // console.log(prepaidCate_data)
  // console.log(bermonthly_data)
  // return false;

 // Check if any required field is empty
  const requiredFields = [firstname, lastname, customer_tel, customer_email, customer_address, sub_district, district, province];
  if (requiredFields.some(field => !field.trim())) {
    Swal.fire({
      icon: 'error',
      title: 'กรุณากรอกข้อมูลให้ครบทุกช่อง',
      showConfirmButton: false,
      timer: 2000,
    });
    return;
  }

  if (!emailRegex.test(customer_email.value)) {
    Swal.fire({
        icon: "error",
        title: "กรุณากรอก E-mail ให้ถูกต้อง",
        showConfirmButton: false,
        timer: 2500,
    }).then();
    console.log("Invalid Email");
    return false;
}
  
  let params = {
    firstname : firstname, 
    lastname : lastname,
    phone_number : customer_tel,
    email : customer_email,
    district : district,
    subdistrict : sub_district,
    province : province,
    zip_code : zip_code.value,
    address : customer_address,
    total_price : total_price,
    shipping_cost : shipping_cost,
    bermonthly: (bermonthly_data.length > 0) ? bermonthly_data : [],
    prepaid_sim: (prepaidCate_data.length > 0) ? prepaidCate_data : [],
    travel_sim:  (travelSims_data.length > 0) ? travelSims_data : []
  }; 

  // validate data
  for (const key in params) {
    if (params.hasOwnProperty(key) && params[key] === '') {
      console.log("error: " + key + " is empty");
      return false;
    }
  }

 
  // console.log(params)
  // return false;

  axios.post(`/confirmorder`,params).then((response) => {
    if (response.status === 201) {
      Swal.fire({
        icon: "success",
        title: "สั่งซื้อสำเร็จ",
        // text: "ท่านจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30 นาที",
        showConfirmButton: false,
        timer: 1500,
      }).then(() => window.location.reload());
  } else {
      Swal.fire({
        icon: "error",
        title: "มีบางอย่างผิดพลาด",
        showConfirmButton: false,
        timer: 1500,
      });
  }
  })

})

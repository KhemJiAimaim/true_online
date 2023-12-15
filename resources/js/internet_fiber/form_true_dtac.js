console.log('use form_true_dtac.js')
import '../global_js/hide_banner.js';

let save_form = document.querySelector('#save-form-data');
const phone = document.querySelector('#phone');
phone.addEventListener('input', () => {
  // input.value.replace(/[^0-9]/g, '');
})

save_form.addEventListener('click',  save_form_data)

function save_form_data() {
  // console.log(data)
  const fisrtname = document.querySelector('#first-name').value;
  const lastname = document.querySelector('#last-name').value;
  const phone = document.querySelector('#phone').value;
  const line_id = document.querySelector('#line-id').value;
  const address = document.querySelector('#address').value;
  const sub_district = document.querySelector('#sub-district').value;
  const district = document.querySelector('#district').value;
  const province = document.querySelector('#province').value;

  let param = {
    'fisrtname' : fisrtname,
    'lastname' : lastname,
    'phone' : phone,
    'line_id' : line_id,
    'address' : address,
    'sub_district' : sub_district,
    'district' : district,
    'province' : province
  }

  console.log(param);

}
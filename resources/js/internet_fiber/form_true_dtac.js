console.log('use form_true_dtac.js')
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
// src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDYXs0euMCEZ7Um37NqJfu8r9RkT5qlYk8&q=13.682045912865524,102.5611082039719"
// const input_pin = document.querySelector('#input-pin'); 
// const show_map = document.querySelector('#show-map'); 
// input_pin.addEventListener('change', () => {
// const latlng = input_pin.value;
// console.log("gogoo" + latlng)
// show_map.src = `https://www.google.com/maps/embed/v1/place?key=AIzaSyDYXs0euMCEZ7Um37NqJfu8r9RkT5qlYk8&amp;q=${latlng}`;
// })

let save_form = document.querySelector('#save-form-data');
save_form.addEventListener('click',  () => {
    const fisrtname = document.querySelector('#first-name').value;
    const lastname = document.querySelector('#last-name').value;
    const line_id = document.querySelector('#line-id').value;
    const address = document.querySelector('#address').value;
    const sub_district = document.querySelector('#sub-district').value;
    const district = document.querySelector('#district').value;
    const province = document.querySelector('#province').value;
    

  let params = {
    'fisrtname' : fisrtname,
    'lastname' : lastname,
    'phone' : phone.value,
    'line_id' : line_id,
    'address' : address,
    'sub_district' : sub_district,
    'district' : district,
    'province' : province,
    'zip_code' : zip_code.value,
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
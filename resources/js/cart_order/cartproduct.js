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
    post_code : post_code.value
  }; 
  console.log(param)
})

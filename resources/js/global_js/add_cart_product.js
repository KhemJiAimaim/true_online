console.log("use addproduct_cart.js")

const btn_addProductToCart = document.querySelectorAll('#addBerToCart');
const numCart = document.querySelector('#num-cart');
const mobile_num_cart = document.querySelector('#mobile-num-cart');

btn_addProductToCart.forEach(element => {
  element.addEventListener('click', function() {
    const data_id = element.getAttribute('data-id');
    const type_product = element.getAttribute('data-type');
    const prepaid_id = element.getAttribute('prepaid_id');

    let param = {
      "type_product" : type_product
    }
    if (prepaid_id) {
      param.prepaid_id = prepaid_id;
    }

    addSessionProduct(data_id, param).then(response => {
      numCart.innerText = response.data.data.amount;
      mobile_num_cart.innerText = response.data.data.amount;
      
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "เพิ่มสินค้าลงตะกร้าสำเร็จ",
          showConfirmButton: false,
          timer: 1500
        });
      }
    })
    .catch(error => {
      console.error(error);
    });
  })
});


const btn_buyNow = document.querySelectorAll('#buyProductNow');
btn_buyNow.forEach(element => {
  element.addEventListener('click', () => {
    const data_id = element.getAttribute('data-id');
    const type_product = element.getAttribute('data-type');
    const prepaid_id = element.getAttribute('prepaid_id');

    let param = {
      "type_product" : type_product
    }
    if (prepaid_id) {
      param.prepaid_id = prepaid_id;
    }

    addSessionProduct(data_id, param).then(response => {
      numCart.innerText = response.data.data.amount;
      mobile_num_cart.innerText = response.data.data.amount;
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "กำลังนำท่านไปยังตะกร้าสินค้า",
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          location.href = "/cartproduct"
        })
      }
    })
    .catch(error => {
      console.error(error);
    });
  })
});


function addSessionProduct(data_id, param) {
  return axios.post(`/addproduct/${data_id}`, param);
}



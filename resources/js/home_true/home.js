import axios from "axios";
import { forEach } from "lodash";

console.log("home.js")

const btn_addProductToCart = document.querySelectorAll('#addBerToCart');

btn_addProductToCart.forEach(element => {
  element.addEventListener('click', function() {
    const ber_id = element.getAttribute('data-id');
    const type_product = element.getAttribute('data-type');
    console.log("get Cart" + ber_id)
    let param = {
      "type_product" : type_product
    }

    addSessionProduct(ber_id, param).then(response => {
      const numCart = document.querySelector('#num-cart');
      numCart.innerText = response.data.data.amount;
      
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1000
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
    const ber_id = element.getAttribute('data-id');
    const type_product = element.getAttribute('data-type');

    let param = {
      "type_product" : type_product
    }

    addSessionProduct(ber_id, param).then(response => {
      
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1000
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


function addSessionProduct(ber_id, param) {
  return axios.post(`/addproduct/${ber_id}`, param);
}




const numCart = document.querySelector('#num-cart');
numCart.addEventListener('click', () => {
  axios.get(`/clearcart`).then((response) => {
    console.log(response);
  })
})
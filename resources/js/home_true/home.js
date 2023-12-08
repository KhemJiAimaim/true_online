import axios from "axios";
import { forEach } from "lodash";

console.log("home.js")

const btn_addBerToCart = document.querySelectorAll('#addBerToCart');

btn_addBerToCart.forEach(element => {
  element.addEventListener('click', function() {
    const ber_id = element.getAttribute('data-id');
    const type_product = element.getAttribute('data-type');
    console.log("get Cart" + ber_id)
    let param = {
      "type_product" : type_product
    }
    axios.post(`/addproduct/${ber_id}`,param).then((response) => {
      console.log(response)
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 2000
        });
      }
    })
  })
})

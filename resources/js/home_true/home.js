import axios from "axios";
import { forEach } from "lodash";
import '../global_js/add_cart_product.js'

console.log("home.js")


const numCart = document.querySelector('#num-cart');
numCart.addEventListener('click', () => {
  axios.get(`/clearcart`).then((response) => {
    console.log(response);
  })
})
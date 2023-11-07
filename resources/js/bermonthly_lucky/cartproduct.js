import '../bermonthly_lucky/fortune_ber.js';

console.log("use cartproduct.js")

let submitBuy = document.querySelector('#submit-buy');
let name = document.querySelector('#name').value;
let last_name = document.querySelector('#last-name');

submitBuy.addEventListener('click', buyProduct)

function buyProduct() {
  
  console.log(name)
  let param = {
    name : name
  }; 
  
}
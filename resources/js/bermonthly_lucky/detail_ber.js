console.log("use detail_ber.js")

let btn_package = document.querySelector('#btn-package');
let btn_condition = document.querySelector('#btn-condition');
let box_package = document.querySelector('#box-package');
let box_condition = document.querySelector('#box-condition');

btn_package.addEventListener('click', () => {
  console.log("button box package")
  box_package.classList.remove('hidden')
  box_condition.classList.add('hidden')
})

btn_condition.addEventListener('click', () => {
  console.log("button box condition")
  box_package.classList.add('hidden')
  box_condition.classList.remove('hidden')
})
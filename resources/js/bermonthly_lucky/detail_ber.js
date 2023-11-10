import '../bermonthly_lucky/fortune_ber.js'
console.log("use detail_ber.js")

let btn_package = document.querySelector('#btn-package');  // ปุ่มรายละเอียด
let btn_condition = document.querySelector('#btn-condition');  // ปุ่มเงื่อนไข
let box_package = document.querySelector('#box-package');
let box_condition = document.querySelector('#box-condition');
let show_more = document.querySelector('#show-more');

// ฟังก์ชัน package and condition content
btn_package.addEventListener('click', () => {
  console.log("button box package")
  box_package.classList.remove('hidden')
  box_condition.classList.add('hidden')

  btn_package.classList.add('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.remove('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.add('bg-[#838383]')
})

btn_condition.addEventListener('click', () => {
  console.log("button box condition")
  box_package.classList.add('hidden')
  box_condition.classList.remove('hidden')

  btn_package.classList.add('bg-[#838383]')
  btn_package.classList.remove('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.add('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.remove('bg-[#838383]')
})

show_more.addEventListener('click', () => {
  showMore_boxPackage()
})

function showMore_boxPackage() {
  if (box_package.classList.contains('h-[200px]')) {
    box_package.classList.remove('h-[200px]');
    box_package.classList.add('h-auto');
  } else {
    box_package.classList.add('h-[200px]');
    box_package.classList.remove('h-auto');
  }
}


// buy action
 let buynow = document.querySelector('#buynow')
 let addtocart = document.querySelector('#addtocart')

 buynow.addEventListener('click', () => {
  buyProductber()
 })

 addtocart.addEventListener('click', () => {
  addBerToCart()
 })

 function buyProductber() {
  const ber_id = buynow.getAttribute('data-id')
  console.log("buyProductber : " + ber_id)
  location.href = `/cartproduct/${ber_id}`;
 }

 function addBerToCart() {
  const ber_id = addtocart.getAttribute('data-id')
  console.log("addBerToCart : " + ber_id)
 }
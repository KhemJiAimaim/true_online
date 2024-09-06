import '../global_js/hide_banner.js'

// console.log("promotion.js")

const moreDetail = document.querySelectorAll('#moreDetail');
const promotionCk = document.querySelectorAll('#promotionCk');

console.log(moreDetail)
console.log(promotionCk)
moreDetail.forEach((element, index) => {
  element.addEventListener('click', () => {
    console.log(index); // แสดง index ของ element ที่คลิก
    console.log(promotionCk[index])
    promotionCk[index].classList.toggle('h-0')
  });
});
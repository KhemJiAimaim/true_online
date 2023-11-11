console.log("use fortune_ber")
swipHidden()

function swipHidden() {
  let swiper = document.querySelector('.mySwiper')
  swiper.classList.add('hidden')
}

let manual_fortune = document.querySelector('#manual-fortune');
let modal_container = document.querySelector('#modal-container');
let close_manual = document.querySelector('#close-manual')

manual_fortune.addEventListener('click', () => {
  if(modal_container.classList.contains('hidden')) {
    modal_container.classList.remove('hidden')
  } 
})

close_manual.addEventListener('click', () => {
  if(!modal_container.classList.contains('hidden')) {
    modal_container.classList.add('hidden')
  } 
})
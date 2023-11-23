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

console.log(data)
const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'doughnut',
  data: {
    datasets: [{
      data: [data.happy, data.sad, data.empty],
      backgroundColor: ["#2AB200", "#CE090E", "#838383"],
      borderColor: "#ffffff00",
    }],
    labels: ['ความดี / สุข', 'ความร้าย / ทุกข์', 'ความว่างเปล่า'],
  },
  options: {
    plugins: {
      legend: {
        display: false
      }
    },
    cutoutPercentage: 70
  }
});
console.log("use js all product")

let fortune_ber = document.querySelector('#fortune-ber'); 

fortune_ber.addEventListener('click', () => {
  fortuneber()
})

function fortuneber() {
  console.log("go fortune page")
  location.href = "/fortune";
}
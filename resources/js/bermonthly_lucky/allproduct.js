console.log("use js all product")

let input_fortune = document.querySelector('#input-fortune'); 
let fortune_ber = document.querySelector('#fortune-ber'); 

fortune_ber.addEventListener('click', () => {
  fortuneber()
})

function fortuneber() {
  let input_ber = input_fortune.value
  console.log(input_ber)
  location.href = `/fortune/${input_ber}`;
}

// ใส่ลูกน้ำจำนวนเงิน
let price_low = document.querySelectorAll('#price-low')
let price_hight = document.querySelectorAll('#price-hight')
let priceInputs = document.querySelectorAll('.price-input');

priceInputs.forEach(function(input) {
  input.addEventListener('keyup', function(event) {
    let value = this.value.replace(/[^0-9]/g, ''); // ลบทุกอักขระที่ไม่ใช่ 0-9
    if (value !== '') {
      const intValue = parseInt(value);
      this.value = intValue.toLocaleString('en-US', {
          style: 'decimal',
          maximumFractionDigits: 0,
          minimumFractionDigits: 0
      });
    } else {
      // ถ้าค่าไม่ถูกต้อง ให้กลับไปเป็นค่าเดิม
      this.value = this.dataset.previousValue || '';
    }
  });

  // เพิ่ม event listener สำหรับการเก็บค่าเดิมเมื่อ focus
  input.addEventListener('focus', function() {
    this.dataset.previousValue = this.value;
  });
});
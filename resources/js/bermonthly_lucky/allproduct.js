
console.log("use js all product")

let input_fortune = document.querySelector('#input-fortune'); 
let fortune_ber = document.querySelector('#fortune-ber'); 
let search_product = document.querySelector('#search-product');
let addtocart = document.querySelectorAll('#addtocart');
let buynow = document.querySelectorAll('#buynow');

let search_num = document.querySelectorAll('#search-num')
search_num.forEach(inputElement => {
  inputElement.addEventListener('input', function() {
    inputNumber(this);
  });
});

search_num.forEach(inputElement => {
  inputElement.addEventListener('input', function() {
    // ตรวจสอบความยาวของค่าใน input
    if (this.value.length === this.maxLength) {
      // หา input ถัดไปโดยใช้ data-position
      const nextPosition = parseInt(this.dataset.position) + 1;
      const nextInput = document.querySelector(`input[data-position="${nextPosition}"]`);

      // ถ้ามี input ถัดไป ให้โฟกัสและเลื่อนมาที่นั้น
      if (nextInput) {
        nextInput.focus();
      }
    } else if (this.value === '') {
      // หา input ก่อนหน้าโดยใช้ data-position
      const previousPosition = parseInt(this.dataset.position) - 1;
      const previousInput = document.querySelector(`input[data-position="${previousPosition}"]`);

      // ถ้ามี input ก่อนหน้า ให้โฟกัสและเลื่อนมาที่นั้น
      if (previousInput) {
        previousInput.focus();
      }
    }
  });
});

let txt_favorite = document.querySelector('#txt_favorite')


input_fortune.addEventListener('input', function() {
  inputNumber(this);
});

txt_favorite.addEventListener('input', function() {
  inputNumber(this);
});

fortune_ber.addEventListener('click', () => {
  fortuneber()
})

addtocart.forEach(element => {
  element.addEventListener('click', () => {
    let ber_id = element.getAttribute('data-id')
    addProductTocart(ber_id)
  })
});

buynow.forEach(element => {
  element.addEventListener('click', () => {
    let ber_id = element.getAttribute('data-id')
    buyProductNow(ber_id)
  })
});

search_product.addEventListener('click', () => {
  product_search()
})

// ทำนายเบอร์
function fortuneber() {
  let input_ber = input_fortune.value
  if(input_ber.length == 10) {
    location.href = `/fortune/${input_ber}`;
  } else {
    console.log(input_ber.length)
  }
}

// เพิ่มสินค้าลงตะกร้า
function addProductTocart(ber_id) {
  console.log('addtocart' + ber_id)
}

// สั่งซื้อสินค้าเลย
function buyProductNow(ber_id) {
  console.log('buyproduct now' + ber_id)
  // เก็บเบอร์ใน session แล้ว return ber ส่งไปหน้า cart
  location.href = `/cartproduct/0933501625`
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
      // this.value = this.dataset.previousValue || '';
      this.value = '';
    }
  });

  // เพิ่ม event listener สำหรับการเก็บค่าเดิมเมื่อ focus
  input.addEventListener('focus', function() {
    this.dataset.previousValue = this.value;
    // console.log(this.value)
  });
});

function inputNumber(input) {
  input.value = input.value.replace(/[^0-9]/g, '');
}

let predict_ber = document.querySelectorAll('#predict-ber');

predict_ber.forEach(element => {
  element.addEventListener('click', () => {
    if (element.classList.contains('bg-gradient-to-r')) {
      // ถ้ามี class ที่เราต้องการเอาออก
      element.classList.remove('bg-gradient-to-r', 'from-[#EC1F25]', 'to-[#960004]' , 'selected');
      const img = element.querySelector('img');
      img.style.filter = '';
    } else {
      // ถ้ายังไม่มี class, เพิ่ม class และ style เข้าไป
      element.classList.add('bg-gradient-to-r', 'from-[#EC1F25]', 'to-[#960004]', 'selected');
      const img = element.querySelector('img');
      img.style.filter = 'invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%)';
    }
  });
});

let cate_ber = document.querySelectorAll('#cate-ber');

cate_ber.forEach(element => {
  element.addEventListener('click', () => {
    if (element.classList.contains('bg-gradient-to-r')) {
      // ถ้ามี class ที่เราต้องการเอาออก
      element.classList.remove('bg-gradient-to-r', 'from-[#EC1F25]', 'to-[#960004]' , 'selected');
      const img = element.querySelector('img');
      img.style.filter = '';
    } else {
      // ถ้ายังไม่มี class, เพิ่ม class และ style เข้าไป
      element.classList.add('bg-gradient-to-r', 'from-[#EC1F25]', 'to-[#960004]', 'selected');
      const img = element.querySelector('img');
      img.style.filter = 'invert(96%) sepia(100%) saturate(12%) hue-rotate(237deg) brightness(200%) contrast(103%)';
    }
  });
});

let like = document.querySelectorAll('#like');
let dislike = document.querySelectorAll('#dislike');

like.forEach(likeElement => {
  likeElement.addEventListener('click', () => {
    const likeFav = likeElement.getAttribute('data-fav');
    const matchingDislike = document.querySelector(`#dislike[data-fav="${likeFav}"]`);

    if (likeElement.classList.contains('selected')) {
      likeElement.classList.remove('bg-gradient-to-r', 'from-[#5741CD]', 'to-[#00ACEE]', 'selected');
    } else {
      likeElement.classList.add('bg-gradient-to-r', 'from-[#5741CD]', 'to-[#00ACEE]', 'selected');
      if (matchingDislike.classList.contains('selected')) {
        matchingDislike.classList.remove('bg-gradient-to-r', 'from-[#EC1F25]', 'to-[#960004]', 'selected');
      }
    }
  });
});

dislike.forEach(dislikeElement => {
  dislikeElement.addEventListener('click', () => {
    const dislikeFav = dislikeElement.getAttribute('data-fav');
    const matchingLike = document.querySelector(`#like[data-fav="${dislikeFav}"]`);

    if (dislikeElement.classList.contains('selected')) {
      dislikeElement.classList.remove('bg-gradient-to-r', 'from-[#EC1F25]', 'to-[#960004]', 'selected');
    } else {
      dislikeElement.classList.add('bg-gradient-to-r', 'from-[#EC1F25]', 'to-[#960004]', 'selected');
      if (matchingLike.classList.contains('selected')) {
        matchingLike.classList.remove('bg-gradient-to-r', 'from-[#5741CD]', 'to-[#00ACEE]', 'selected');
      }
    }
  });
});
console.log(dislike)

function product_search() {

  let data_price_low = price_low.value
  let param = {
    price_low : data_price_low
  }
  console.log(param)
}
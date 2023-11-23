import axios from "axios";
import { forEach } from "lodash";

console.log("use js all product")

let input_fortune = document.querySelector('#input-fortune'); 
let fortune_ber = document.querySelector('#fortune-ber'); 
let search_product = document.querySelector('#search-product');
let reset_search = document.querySelector('#reset-search');
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

// let txt_favorite = document.querySelector('#txt_favorite')
// txt_favorite.addEventListener('input', function() {
//   inputNumber(this);
// });


input_fortune.addEventListener('input', function() {
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

reset_search.onclick = () => {
  location.href = "/bermonthly?"
}

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

let improve_ber = document.querySelectorAll('#improve-ber');

improve_ber.forEach(element => {
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

function product_search() {

  // เตรียมข้อมูล filter ber
  const system_sim = document.querySelectorAll('#system-sim')
  const search_num = document.querySelectorAll('#search-num')
  const slc_sum = document.querySelector('#slc-sum').value;
  const favorite_num = document.querySelector('#txt_favorite').value;
  const category = document.querySelector('#slc-category').value;
  const slc_package = document.querySelector('#slc-package').value;
  const sort = document.querySelector('#slc-sort').value;
  const min = document.querySelector('#price-min').value;
  const max = document.querySelector('#price-max').value;
  const btn_like = document.querySelectorAll('#like'); 
  const btn_dislike = document.querySelectorAll('#dislike'); 
  const improve_ber = document.querySelectorAll('#improve-ber'); 
  const cate_ber = document.querySelectorAll('#cate-ber'); 

  let source = "?";
  let positions = {};

  system_sim.forEach(element => {
    if (element.classList.contains('selected')) {
      const data_sim = element.getAttribute('data-sim')
      source += "&sim="+data_sim
    }
  })

  search_num.forEach(input => {
    const position = input.getAttribute('data-position');
    const value = input.value.trim();

    if (value !== '') {
      positions[`pos${position}`] = value;
    }
  })

  Object.keys(positions).forEach(key => {
    source += `&${key}=${positions[key]}`;
  });
  
  if(slc_sum !== "") {
    source += "&sum="+slc_sum
  }

  if(favorite_num !== "") {
    source += "&fav="+favorite_num
  }

  if(slc_package !== "") {
    source += "&package="+slc_package
  }

  if(category !== "") {
    source += "&cate="+category
  }

  if(sort !== "") {
    source += "&sort="+sort
  }

  if(min !== "") {
    source += "&min="+min.replace(/,/g, "")
  }

  if(max !== "") {
    source += "&max="+max.replace(/,/g, "")
  }

  let like = [];
  btn_like.forEach(element => {
    if (element.classList.contains("selected")) {
      const data_fav = element.getAttribute('data-fav');
      like.push(data_fav);
    }
  });
  if(like.length > 0) {
    source += "&like="+like
  }
  
  let dislike = [];
  btn_dislike.forEach(element => {
    if (element.classList.contains("selected")) {
      const data_fav = element.getAttribute('data-fav');
      dislike.push(data_fav);
    }
  });
  if(dislike.length > 0) {
    source += "&dislike="+dislike
  }
  
  let improve = [];
  improve_ber.forEach( element => {
    if (element.classList.contains("selected")) {
      const data_id = element.getAttribute('data-id');
      improve.push(data_id);
    }
  })
  if(improve.length > 0) {
    source += "&improve="+improve
  }
  
  let auspicious = [];
  cate_ber.forEach( element => {
    if (element.classList.contains("selected")) {
      const data_id = element.getAttribute('data-id');
      auspicious.push(data_id);
    }
  })
  if(auspicious.length > 0) {
    source += "&auspicious="+auspicious
  }
  
  source = source.replace("&&", "&");  
  source = source.replace("?&", "?"); 
  console.log(source);
  // return false;
  location.href = `/bermonthly${source}`;
  
}

// function paginate
  let prev_page = document.querySelector('#prev-page')
  let next_page = document.querySelector('#next-page')
  let fist_page = document.querySelector('#fist-page') 
  let last_page = document.querySelector('#last-page') 
  let page_num = document.querySelectorAll('#page-num')

  const currentURL = window.location.href;
  const url = new URL(currentURL);
  const currentPage = parseInt(data_page.current_page);
  console.log(data_page)

  const hasPrevPage = currentPage > 1;
  const hasNextPage = currentPage < data_page.total_page;

  function changePage(pageNumber) {
    const searchParams = new URLSearchParams(url.search);
    searchParams.delete('page');
  
    const decodedSearch = decodeURIComponent(searchParams.toString());
  
    // เพิ่มพารามิเตอร์ 'page' ใหม่
    const newSearch = `${decodedSearch ? decodedSearch + '&' : ''}page=${pageNumber}`;
  
    location.href = `${url.origin}${url.pathname}?${newSearch}`;
  }
   
  next_page.addEventListener('click', () => {
    if (hasNextPage) {
      changePage(currentPage + 1);
    }
  })
  prev_page.addEventListener('click', () => {
    if (hasPrevPage) {
      changePage(currentPage - 1);
    }
  })

  fist_page.addEventListener('click', () => {
    if (hasPrevPage) {
      changePage(1);
    }
  })
  last_page.addEventListener('click', () => {
    if (hasNextPage) {
      changePage(data_page.total_page)
    }
  })

  page_num.forEach(element => {
    element.addEventListener('click', () => {
      const numpage = element.getAttribute('data-index');
      changePage(parseInt(numpage))
    })
  });

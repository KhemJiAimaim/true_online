import '../global_js/hide_banner.js';

const result_price = document.querySelector('#result-price');
const box = document.querySelectorAll('#box');
box.forEach(element => {
  element.addEventListener('click', () => {
    console.log(element)
    handleBoxClick(element);
  })
});

let lastClickedBox = null;
let productQuantity = null;
let imgElement = null;
let priceProductSl = null;

function handleBoxClick(box) {
  productQuantity = box.getAttribute('data-quantity');
  imgElement = box.querySelector('img');
  document.getElementById('featured').src = imgElement.src;

  // console.log(imgElement)
  // แก้ไขรูปภาพ checkbox เป็นรูปภาพปกติ
  if (lastClickedBox) {
    lastClickedBox.classList.remove('border-gray-500', 'activate');
    lastClickedBox.classList.add('border-gray-10');
    const checkbox = lastClickedBox.querySelector('.check-box');
    checkbox.src = '/images/check-one.png';
  }

  if (box !== lastClickedBox) {
    const quantity_product = document.querySelector('#quantity-product').value = 1;
    // console.log(quantity_product);
    priceProductSl = box.getAttribute('data-price')
    result_price.innerText = priceProductSl;
    box.classList.remove('border-gray-10');
    box.classList.add('border-gray-500', 'activate');
    // แก้ไขรูปภาพ checkbox เป็นรูปภาพ active
    const checkbox = box.querySelector('.check-box');
    checkbox.src = '/images/check-one-active.png';
    lastClickedBox = box;
  } else {
    lastClickedBox = null;
  }
}



// ปุ่มบวก_ลบจำนวนสินค้า
function decrement(e) {
  console.log("ราคาสินค้าที่เลือก " + priceProductSl)
  const btn = e.target.closest('#decrement');
  if (btn) {
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    if (value > 1) {
      value--;
      target.value = value;
    }
    result_price.innerText = priceProductSl* value;
    console.log("จำนวน "+ priceProductSl* value)
  }
}

function increment(e) {
  const btn = e.target.closest('#increment');
  if (btn) {
    const target = btn.previousElementSibling;
    let value = Number(target.value);
    if(value < productQuantity) {
      value++;
      target.value = value;
    }
    result_price.innerText = priceProductSl* value
    console.log("จำนวน "+ value)
  }
}

const decrementButtons = document.querySelector('#decrement');
const incrementButtons = document.querySelector('#increment');

decrementButtons.addEventListener("click", decrement);
incrementButtons.addEventListener("click", increment);





// รูป slider

let thumbnails = document.getElementsByClassName('thumnail');
let activeImages = document.getElementsByClassName('active');
let slideImage = document.querySelectorAll('.thumnail');

for (var i = 0; i < thumbnails.length; i++) {
  thumbnails[i].addEventListener('mouseover', function () {
    if (activeImages.length > 0) {
      activeImages[0].classList.remove('active');
    }

    this.classList.add('active');
    document.getElementById('featured').src = this.src;
  });

  thumbnails[i].addEventListener('mouseout', function () {
    // เมื่อเอาเมาส์ออก
    if (imgElement) {
      document.getElementById('featured').src = imgElement.src;
    }

    this.classList.remove('active');

    
    // console.log(slideImage)
    slideImage.forEach(prepaidThumbnail => {
      if (prepaidThumbnail.getAttribute('data-prepaid') === imgElement.getAttribute('data-id')) {
        prepaidThumbnail.classList.add('active');
      }
    });
  });
}

slideImage.forEach(element => {
  element.addEventListener('click', () => {
    const dataPrepaidImg = element.getAttribute('data-prepaid');
    const box = document.querySelector(`#box[data-prepaid="${dataPrepaidImg}"]`);
    handleBoxClick(box);
  })
});



let buttonRight = document.getElementById('slideRight');
let buttonLeft = document.getElementById('slideLeft');

buttonLeft.addEventListener('click', function () {
    document.getElementById('slider').scrollLeft -= 180;
});

buttonRight.addEventListener('click', function () {
    document.getElementById('slider').scrollLeft += 180;
});


//รายละเอียด
console.log("use detail_ber.js")

let btn_package = document.querySelector('#btn-package');  // ปุ่มรายละเอียด
let btn_condition = document.querySelector('#btn-condition');  // ปุ่มเงื่อนไข
let box_package = document.querySelector('#box-package');
let box_condition = document.querySelector('#box-condition');
let show_more = document.querySelector('#show-more');

// ฟังก์ชัน package and condition content
btn_package.addEventListener('click', () => {
  // console.log("button box package")
  box_package.classList.remove('hidden')
  box_condition.classList.add('hidden')

  btn_package.classList.add('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.remove('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.add('bg-[#838383]')
})

btn_condition.addEventListener('click', () => {
  // console.log("button box condition")
  box_package.classList.add('hidden')
  box_condition.classList.remove('hidden')

  btn_package.classList.add('bg-[#838383]')
  btn_package.classList.remove('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.add('bg-gradient-to-r', 'from-[#F6911D]', 'to-[#ED4312]')
  btn_condition.classList.remove('bg-[#838383]')
})

show_more.addEventListener('click', () => {
  if (box_package.classList.contains('h-[300px]')) {
    box_package.classList.remove('h-[300px]');
    box_package.classList.add('h-auto');
  } else {
    box_package.classList.add('h-[300px]');
    box_package.classList.remove('h-auto');
  }
})

const quantity_product = document.querySelector('#quantity-product');
quantity_product.addEventListener('input', () => {
  const regex = /^[0-9]*$/;
  if (!regex.test(quantity_product.value)) {
    quantity_product.value = quantity_product.value.replace(/[^0-9]/g, '');
  }

  let inputQuantity = parseInt(quantity_product.value);

  // ตรวจสอบว่า inputQuantity เป็น NaN หรือน้อยกว่า 1 ให้กำหนดให้มีค่าเป็น 1
  if (isNaN(inputQuantity) || inputQuantity < 1) {
    inputQuantity = 1;
  }

  if (!isNaN(inputQuantity) && inputQuantity > productQuantity) {
    // ถ้า inputQuantity มากกว่า productQuantity ให้ใส่ productQuantity ลงใน input
    inputQuantity = productQuantity;
  }

  quantity_product.value = inputQuantity;
  result_price.innerText = quantity_product.value * priceProductSl
  console.log("จำนวนกรอก " + quantity_product.value * priceProductSl);

});

const btn_buynow = document.querySelector('#buyProductNow');
btn_buynow.addEventListener('click', async () => {
  let response = await addProductSession(btn_buynow);
  if(response.data.status == "success") {
    Swal.fire({
      position: "center",
      icon: "success",
      title: "กำลังนำท่านไปยังตะกร้าสินค้า",
      showConfirmButton: false,
      timer: 1000
    }).then(() => {
      location.href = "/cartproduct"
    })
  }
})

const addtocart = document.querySelector('#addtocart')
addtocart.addEventListener('click', async () => {
  let response = await addProductSession(btn_buynow);
  console.log(response);
  if(response.data.status == "success") {
    Swal.fire({
      position: "center",
      icon: "success",
      title: "เพิ่มสินค้าลงตกร้าสำเร็จ",
      showConfirmButton: false,
      timer: 1000
    });
  }
})

async function addProductSession(element) {
  const data_type = element.getAttribute('data-type');
  const quantity = quantity_product.value;
  let data_id =  null;
  
  let param = {
    "type_product" : data_type,
    "quantity" : quantity
  };

  box.forEach(element => {
    if(element.classList.contains('activate')) {
      param.data_prepaid = element.getAttribute('data-prepaid');
      data_id = element.getAttribute('data-prepaid');
    }
  });

  if(param.data_prepaid == null) {
      Swal.fire({
        position: "center",
        icon: "error",
        title: "กรุณาเลือกสินค้า",
        showConfirmButton: true,
      });
      return false;
  }

  try {
    const response = await axios.post(`/addproduct/${data_id}`, param);
    const num_cart = document.querySelector('#num-cart');
    const mobile_num_cart = document.querySelector('#mobile-num-cart');
    
    num_cart.innerText = response.data.data.amount
    mobile_num_cart.innerText = response.data.data.amount;
    return response;
  } catch (error) {
    console.error(error);
  }
}
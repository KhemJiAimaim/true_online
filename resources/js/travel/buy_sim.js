import '../global_js/hide_banner.js';

let lastClickedBox = null;
const box = document.querySelectorAll('#box');
box.forEach(element => {
  if(element.classList.contains('boxdefault')){
    lastClickedBox = element;
  }
  element.addEventListener('click', () => {
    handleBoxClick(element);
  })
});


function handleBoxClick(box) {
  // console.log(lastClickedBox)
  if (lastClickedBox) {
    // แก้ไขรูปภาพ checkbox เป็นรูปภาพปกติ
    lastClickedBox.classList.remove('border-gray-500', 'activate');
    lastClickedBox.classList.add('border-gray-10');
    const checkbox = lastClickedBox.querySelector('.check-box');
    checkbox.src = '/images/check-one.png';
  }

  if (box !== lastClickedBox) {
    // แก้ไขรูปภาพ checkbox เป็นรูปภาพ active
    box.classList.remove('border-gray-10');
    box.classList.add('border-gray-500', 'activate');
    const checkbox = box.querySelector('.check-box');
    checkbox.src = '/images/check-one-active.png';
    lastClickedBox = box;
  } else {
    lastClickedBox = null;
  }
  inserPrice(box)
}

function inserPrice(box) {
  const price = box.getAttribute('data-price')
  let data_price = document.querySelector('#total-price').innerText = price
  console.log(data_price)
}

// รูป slider

let thumbnails = document.getElementsByClassName('thumnail');
let activeImages = document.getElementsByClassName('active');

for (var i = 0; i < thumbnails.length; i++) {
  thumbnails[i].addEventListener('mouseover', function () {
    if (activeImages.length > 0) {
      activeImages[0].classList.remove('active');
    }

    this.classList.add('active');
    document.getElementById('featured').src = this.src;
  });
}

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
let show_more = document.querySelector('#show');

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
  if (box_package.classList.contains('h-[300px]')) {
    box_package.classList.remove('h-[300px]');
    box_package.classList.add('h-auto');
  } else {
    box_package.classList.add('h-[300px]');
    box_package.classList.remove('h-auto');
  }
})

const btn_buynow = document.querySelector('#buyProductNow');
btn_buynow.addEventListener('click', async () => {
  let response = await addProductSession(btn_buynow);
  if(response.data.status == "success") {
    Swal.fire({
      position: "center",
      icon: "success",
      title: "Your work has been saved",
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
      title: "Your work has been saved",
      showConfirmButton: false,
      timer: 1000
    })
  }
})


async function addProductSession(element) {
  const data_type = element.getAttribute('data-type');
  const data_id =  element.getAttribute('data-id');
  
  let param = {
    "type_product" : data_type,
  };

  box.forEach(element => {
    if(element.classList.contains('activate')) {
      param.option = element.getAttribute('data-option');
    }
  });

  if (!Array.from(box).some(element => element.classList.contains('activate'))) {
    Swal.fire({
      position: "center",
      icon: "error",
      title: "please select option!",
      showConfirmButton: true,
    });
    return false;
  }

  try {
    const response = await axios.post(`/addproduct/${data_id}`, param);
    return response;
  } catch (error) {
    console.error(error);
  }
}
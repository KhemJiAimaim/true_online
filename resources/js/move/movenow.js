import '../global_js/hide_banner.js';

// active สินค้า
// สร้าง event listener สำหรับแต่ละกล่อง
const box = document.querySelectorAll('#box');

box.forEach(element => {
  element.addEventListener('click', function() {
    handleBoxClick(this);
  });
});

let lastClickedBox = null;

function handleBoxClick(box) {
  // ถ้ากล่องถูกคลิกมีสถานะ active อยู่แล้ว
  if (box.classList.contains('active')) {
    box.classList.remove('border-gray-500', 'active');
    box.classList.add('border-gray-10');
    // แก้ไขรูปภาพ checkbox เป็นรูปภาพปกติ
    const checkbox = box.querySelector('.check-box');
    checkbox.src = '/images/check-one.png';
  } else {
    // ถ้ากล่องถูกคลิกไม่มีสถานะ active
    if (lastClickedBox) {
      lastClickedBox.classList.remove('border-gray-500', 'active');
      lastClickedBox.classList.add('border-gray-10');
      // แก้ไขรูปภาพ checkbox เป็นรูปภาพปกติ
      const checkbox = lastClickedBox.querySelector('.check-box');
      checkbox.src = '/images/check-one.png';
    }

    // กำหนดสถานะ active และแก้ไขรูปภาพ checkbox เป็นรูปภาพ active
    box.classList.remove('border-gray-10');
    box.classList.add('border-gray-500', 'active');
    const checkbox = box.querySelector('.check-box');
    checkbox.src = '/images/check-one-active.png';
    
    lastClickedBox = box;
  }
}


const btn_moveform = document.querySelector('#btn-move-form');

btn_moveform.addEventListener('click', () => {
  const data_id = btn_moveform.getAttribute('data-id');
  getMoveForm(data_id)
});

function getMoveForm(data_id) {
  let option = null;
  box.forEach(element => {
    if (element.classList.contains('active')) {
      option = element.getAttribute('data-option');
    }
  });
  let source = "";
  if(option && option !== null) {
    source += `/?opt=${option}`;
  }
  location.href = `/movenow/form/${data_id}${source}`;
}


// ปุ่มบวก_ลบจำนวนสินค้า
function decrement(e) {
  const btn = e.target.parentNode.querySelector('button[data-action="decrement"]');
  const target = btn.nextElementSibling;
  let value = Number(target.value);
  if (value > 0) {
    value--;
    target.value = value;
  }
}

function increment(e) {
  const btn = e.target.parentNode.querySelector('button[data-action="increment"]');
  const target = btn.previousElementSibling;
  let value = Number(target.value);
  value++;
  target.value = value;
}

const decrementButtons = document.querySelectorAll(`button[data-action="decrement"]`);
const incrementButtons = document.querySelectorAll(`button[data-action="increment"]`);

decrementButtons.forEach(btn => {
  btn.addEventListener("click", decrement);
});

incrementButtons.forEach(btn => {
  btn.addEventListener("click", increment);
});





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
let show = document.querySelector('#show');



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

show.addEventListener('click', () => {
  showMore_boxPackage()
})

function showMore_boxPackage() {
  console.log("gg");
  if (box_package.classList.contains('h-[300px]')) {
    box_package.classList.remove('h-[300px]');
    box_package.classList.add('h-auto'); 
  } else {
    box_package.classList.add('h-[300px]');
    box_package.classList.remove('h-auto');
  }
}


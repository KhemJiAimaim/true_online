


// active สินค้า
// สร้าง event listener สำหรับแต่ละกล่อง
for (let i = 1; i <= 8; i++) {
    const box = document.getElementById('box' + i);
    box.addEventListener('click', function() {
        handleBoxClick(this);
    });
}

let lastClickedBox = null;

function handleBoxClick(box) {
    if (lastClickedBox) {
        lastClickedBox.classList.remove('border-gray-500');
        lastClickedBox.classList.add('border-gray-10');
        // แก้ไขรูปภาพ checkbox เป็นรูปภาพปกติ
        const checkbox = lastClickedBox.querySelector('.check-box');
        checkbox.src = '/images/check-one.png';
    }

    if (box !== lastClickedBox) {
        box.classList.remove('border-gray-10');
        box.classList.add('border-gray-500');
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

let btn_package = document.querySelector('#btn-package');  // ปุ่มรายละเอียด
let btn_condition = document.querySelector('#btn-condition');  // ปุ่มเงื่อนไข
let box_package = document.querySelector('#box-package');
let box_condition = document.querySelector('#box-condition');

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


function decrement(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value--;
    target.value = value;
  }

  function increment(e) {
    const btn = e.target.parentNode.parentElement.querySelector(
      'button[data-action="decrement"]'
    );
    const target = btn.nextElementSibling;
    let value = Number(target.value);
    value++;
    target.value = value;
  }

  const decrementButtons = document.querySelectorAll(
    `button[data-action="decrement"]`
  );

  const incrementButtons = document.querySelectorAll(
    `button[data-action="increment"]`
  );

  decrementButtons.forEach(btn => {
    btn.addEventListener("click", decrement);
  });

  incrementButtons.forEach(btn => {
    btn.addEventListener("click", increment);
  });
// JavaScript
const links = document.querySelectorAll('.active-menu');

function changeColor(event) {
    // ลบคลาส 'active' จากทุกลิงค์
    links.forEach(link => link.classList.remove('active'));

    // เพิ่มคลาส 'active' ในลิงค์ที่ถูกคลิก
    event.target.classList.add('active');
}

links.forEach(link => {
    link.addEventListener('click', changeColor);
});
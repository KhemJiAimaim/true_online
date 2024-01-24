const btns = document.querySelectorAll('.mobile-menu-button');
const menu = document.querySelector('.mobile-menu');

btns.forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.currentTarget.classList.toggle('change')
        menu.classList.toggle('hidden');

    });
});



const menuItems = document.querySelectorAll('.group');

menuItems.forEach(item => {
    item.addEventListener('mouseenter', () => {
        item.querySelector('.group-hover\\:block')?.classList.remove('hidden');
    });
    item.addEventListener('mouseleave', () => {
        item.querySelector('.group-hover\\:block')?.classList.add('hidden');
    });
});

const menufiber = document.querySelectorAll('.dropbtn');
const myDropdown = document.querySelectorAll('.dropdow-conten');
const flip = document.querySelectorAll('.flip');

menufiber.forEach((element, index) => {
    let show = false;

    element.addEventListener('click', () => {
        if (!show) {
            myDropdown[index].classList.add('show');
            flip[index].classList.add('flipdow');
        } else {
            myDropdown[index].classList.remove('show');
            flip[index].classList.remove('flipdow');
        }

        // สลับสถานะ show
        show = !show;
    });
});





document.addEventListener('DOMContentLoaded', function () {
    var menuItems = document.querySelectorAll('#menu > li');

    menuItems.forEach(function (menuItem) {
        menuItem.addEventListener('mouseenter', function () {
            var submenu = this.querySelector('.submenu');
            if (submenu) {
                var submenuWidth = submenu.offsetWidth;
                submenu.style.width = submenuWidth + 'px';
            }
        });

        menuItem.addEventListener('mouseleave', function () {
            var submenu = this.querySelector('.submenu');
            if (submenu) {
                submenu.style.width = ''; // รีเซ็ตความกว้างเมื่อเมาส์ออก
            }
        });
    });
});
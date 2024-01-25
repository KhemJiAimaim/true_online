document.addEventListener('DOMContentLoaded', function () {
    // เลือกปุ่ม contact_button
    const contactButton = document.getElementById('contact_button');
    // เลือกเนื้อหา social
    const socialContent = document.getElementById('social');

     // เพิ่ม event listener เมื่อมีการวางเมาส์ที่ปุ่ม contact_button
     contactButton.addEventListener('mouseenter', function () {
        // แสดงเนื้อหา social
        socialContent.classList.remove('hidden');
    });

    // กำหนดตัวแปรเพื่อตรวจสอบว่า social กำลังแสดงหรือไม่
    let socialVisible = false;

// เพิ่ม event listener เมื่อมีการเลื่อนเมาส์ที่ socialContent
socialContent.addEventListener('mouseenter', function () {
    // แสดงเนื้อหา social
    socialContent.classList.remove('hidden');
});

// เพิ่ม event listener เมื่อมีการเลื่อนเมาส์ออกจาก socialContent
socialContent.addEventListener('mouseleave', function () {
    // ซ่อน social
    socialContent.classList.add('hidden');
    socialVisible = false;
});

// อัปเดต event listener ของปุ่ม contact_button
contactButton.addEventListener('mouseenter', function () {
    // แสดงเนื้อหา social
    socialContent.classList.remove('hidden');
    // ตั้งค่า socialVisible เป็น true เพื่อบอกว่า social กำลังแสดง
    socialVisible = true;
});

contactButton.addEventListener('mouseleave', function () {
    // ถ้าไม่มีการคลิกที่ปุ่ม contact_button
    if (!socialVisible) {
        // ซ่อน social
        socialContent.classList.add('hidden');
    }
});

// เพิ่ม event listener เมื่อมีการคลิกที่พื้นที่ว่างหรือปุ่มเดิม
document.addEventListener('click', function (event) {
    const isClickInsideSocial = socialContent.contains(event.target);
    const isClickInsideContactButton = contactButton.contains(event.target);

    // ถ้าคลิกภายใน social หรือ contact_button ไม่ต้องทำการปิด social
    if (isClickInsideSocial || isClickInsideContactButton) {
        return;
    }

    // ถ้าคลิกภายนอก social ให้ซ่อน social
    socialContent.classList.add('hidden');
    socialVisible = false;
});


});



document.addEventListener("DOMContentLoaded", function () {
    // เลือกปุ่ม contact_button
    const contactButton = document.getElementById("contact_button");
    // เลือกเนื้อหา social
    const socialContent = document.getElementById("social");

    // เพิ่ม event listener เมื่อมีการวางเมาส์ที่ปุ่ม contact_button
    contactButton.addEventListener("mouseenter", function () {
        // แสดงเนื้อหา social
        socialContent.classList.remove("hidden");
    });

    // กำหนดตัวแปรเพื่อตรวจสอบว่า social กำลังแสดงหรือไม่
    let socialVisible = false;

    // เพิ่ม event listener เมื่อมีการเลื่อนเมาส์ออกจาก socialContent
    socialContent.addEventListener("mouseleave", function () {
        // ซ่อน social
        socialContent.classList.add("hidden");
        socialVisible = false;
    });
});

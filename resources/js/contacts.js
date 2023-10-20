
document.getElementById("contact_button").addEventListener("click", function() {
    document.getElementById("close").style.display = "flex";
    document.getElementById("social").style.display = "flex";
});

document.getElementById("close").addEventListener("click", function() {
    document.getElementById("close").style.display = "none";
    document.getElementById("social").style.display = "none";
});

window.addEventListener("scroll", function() {
    if (window.scrollY >= 400) {
        document.getElementById("contact").style.display = "block";
        document.getElementById("contact").style.opacity = 0;
    } else {
        document.getElementById("contact").style.opacity = 0; // ให้ข้อมูลหายไป
        setTimeout(function() {
            document.getElementById("contact").style.display = "none";
        }, 400);
    }
    document.getElementById("contact").style.transition = "opacity 0.3s";
});
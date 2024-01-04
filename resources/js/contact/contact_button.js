document.getElementById("contact_button").addEventListener("click", function() {
    document.getElementById("close").style.display = "flex";
    document.getElementById("social").style.display = "flex";
});

document.getElementById("close").addEventListener("click", function() {
    document.getElementById("close").style.display = "none";
    document.getElementById("social").style.display = "none";
});
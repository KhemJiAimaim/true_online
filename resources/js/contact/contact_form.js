import axios from "axios";

console.log("use contact_form.js");
 
// console.log(data);

// Get the modal element
var modal = document.querySelector("#contact-Modal");

// Get the button that opens the modal
var chargeBtn = document.querySelector("#contact-staff");

// Get the <span> element that closes the modal
var closeModal = document.querySelector("#closeModal");

// When the user clicks the button, open the modal
chargeBtn.onclick = function() {
    modal.classList.remove("hidden");
};

// When the user clicks on <span> (x), close the modal
closeModal.onclick = function() {
    modal.classList.add("hidden");
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.classList.add("hidden");
    }
};

const el_phone = document.querySelector("#phone");

el_phone.addEventListener("input", () => {
    el_phone.value = fillerTel(el_phone);
});

function fillerTel(element) {
    return element.value.replace(/[^0-9+]/g, "");
}


 var btnSavedata = document.querySelector("#save-form-data");
 btnSavedata.addEventListener("click", () => {
    const firstname = document.querySelector("#first-name").value;
    const email = document.querySelector("#email");
    const contact_message = document.querySelector("#messages").value;
    const phone = el_phone.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!emailRegex.test(email.value)) {
        console.log("Invalid Email");
        return false;
    }

    if (!firstname || !email || !phone || !contact_message) {
        console.log("error");
        return false;
    }

    let formData = {
        firstname: firstname,
        phone_number: phone,
        email: email.value,
        messages:contact_message,
    };

    axios.post("/sendformcontact", formData).then(
        (res) => {
            if (res.status === 201) {
                Swal.fire({
                    icon: "success",
                    title: "ส่งข้อความสำเร็จ",
                    text: "ท่านจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30 นาที",
                    showConfirmButton: false,
                    timer: 2500,
                }).then(() => window.location.reload());
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Something went wrong.",
                    showConfirmButton: false,
                    timer: 1500,
                });
            }
        },
        (err) => {
            console.error(err);
            Swal.fire({
                icon: "error",
                title: "Something went wrong.",
                showConfirmButton: false,
                timer: 1500,
            });
        }
    );
});

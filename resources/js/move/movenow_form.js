import axios from "axios";
import "../global_js/hide_banner.js";

console.log("use movenow_form.js");

console.log(data);
const el_phone = document.querySelector("#phone");
const el_phone_to_move = document.querySelector("#phone-to-move");
el_phone.addEventListener("input", () => {
    el_phone.value = fillerTel(el_phone);
});
el_phone_to_move.addEventListener("input", () => {
    el_phone_to_move.value = fillerTel(el_phone_to_move);
});

function fillerTel(element) {
    return element.value.replace(/[^0-9+]/g, "");
}

const btnSavedata = document.querySelector("#save-form-data");
btnSavedata.addEventListener("click", () => {
    const firstname = document.querySelector("#first-name").value;
    const lastname = document.querySelector("#last-name").value;
    const line_id = document.querySelector("#line-id").value;
    const email = document.querySelector("#email");
    const phone = el_phone.value;
    const phone_to_move = el_phone_to_move.value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; 

    if (!firstname || !lastname || !phone || !phone_to_move) {
        Swal.fire({
            icon: "error",
            title: "กรุณากรอกข้อมูลให้ครบทุกช่อง",
            showConfirmButton: false,
            timer: 2500,
        }).then();
        console.log("error");
        return false;
    }
    
    if (!emailRegex.test(email.value)) {
        Swal.fire({
            icon: "error",
            title: "กรุณากรอก E-mail ให้ถูกต้อง",
            showConfirmButton: false,
            timer: 2500,
        }).then();
        console.log("Invalid Email");
        return false;
    }

    let formData = {
        move_id: data.id,
        move_option: data.option > 0 ? data.option : "",
        phone_move: phone_to_move,
        firstname: firstname,
        lastname: lastname,
        phone_number: phone,
        line_id: line_id,
        email: email.value,
    };

    axios.post("/sendformmove", formData).then(
        (res) => {
            if (res.status === 201) {
                Swal.fire({
                    icon: "success",
                    title: "เราได้รับข้อมูลของคุณเรียบร้อยแล้ว",
                    text: "คุณจะได้รับการติดต่อกลับจากเจ้าหน้าที่ ภายใน 30 นาท",
                    showConfirmButton: false,
                    timer: 2500,
                }).then(() => {
                    window.location.href = "/move";
                });
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

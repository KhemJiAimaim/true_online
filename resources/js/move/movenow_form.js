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
    const first_name = document.querySelector("#first-name").value;
    const last_name = document.querySelector("#last-name").value;
    const line_id = document.querySelector("#line-id").value;
    const phone = el_phone.value;
    const phone_to_move = el_phone_to_move.value;

    if (!first_name || !last_name || !phone || !phone_to_move) {
        console.log("error");
        return false;
    }

    let formData = {
        move_id: data.id,
        move_option: data.option > 0 ? data.option : "",
        phone_move: phone_to_move,
        first_name: first_name,
        last_name: last_name,
        phone_number: phone,
        line_id: line_id,
    };

    axios.post("/sendformmove", formData).then(
        (res) => {
            console.log(res);
        },
        (err) => {
            console.error(err);
        }
    );
});

console.log("use cartproduct.js");

const btn_removeItem = document.querySelectorAll("#remove-item");

btn_removeItem.forEach((element) => {
    element.addEventListener("click", () => {
        const data_type = element.getAttribute("data-type");
        const data_id = element.getAttribute("data-id");

        // Use SweetAlert to confirm deletion
        Swal.fire({
            title: "คุณต้องการลบรายการสินค้า?",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "ยืนยัน",
            cancelButtonText: "ยกเลิก",
        }).then((result) => {
            // If the user clicks on "Yes, delete it!"
            if (result.isConfirmed) {
                // Proceed with the deletion
                const param = {
                    data_type: data_type,
                    data_id: data_id,
                };

                axios
                    .post(`/remove-item`, param)
                    .then((response) => {
                        if (response.data.status === "success") {
                            // If deletion is successful, reload the page
                            Swal.fire({
                                icon: "success",
                                title: "ลบรายการสินค้าสำเร็จ",
                                showConfirmButton: false,
                                timer: 1500,
                            }).then(() => {
                                location.reload();
                            });
                        }
                    })
                    .catch((error) => {
                        console.error("Error deleting item:", error);
                        Swal.fire(
                            "Error!",
                            "An error occurred while deleting the item.",
                            "error"
                        );
                    });
            }
        });
    });
});

const customer_tel = document.querySelector("#customer-tel");
const zip_code = document.querySelector("#zip-code");

customer_tel.addEventListener("input", () => {
    customer_tel.value = filterNum(customer_tel);
});

zip_code.addEventListener("input", () => {
    zip_code.value = filterNum(zip_code);
});

function filterNum(element) {
    return element.value.replace(/[^0-9]/g, "");
}

const province = document.querySelector("#province");
const districtSelect = document.querySelector("#district");
const sub_districtSelect = document.querySelector("#sub-district");
province.addEventListener("change", () => {
    const selectedOption = province.options[province.selectedIndex];
    const provinceId = selectedOption.getAttribute("data-id");
    console.log(provinceId);
    getDistrictData(provinceId);
});

districtSelect.addEventListener("change", () => {
    const selectedOption = districtSelect.options[districtSelect.selectedIndex];
    const districtId = selectedOption.getAttribute("data-id");
    // console.log(districtId)
    getSubDistrictData(districtId);
});

sub_districtSelect.addEventListener("change", () => {
    const selectedOption =
        sub_districtSelect.options[sub_districtSelect.selectedIndex];
    const data_zip = selectedOption.getAttribute("data-zip");
    // console.log(data_zip)
    zip_code.value = data_zip;
});

function getDistrictData(provinceId) {
    const filteredDistricts = district_data.filter(
        (dis) => dis.province_code == provinceId
    );
    let option = '<option value="">เลือกอำเภอ</option>';
    filteredDistricts.forEach((data) => {
        option += `<option data-id="${data.code}" value="${data.name_th}">${data.name_th}</option>`;
    });
    districtSelect.innerHTML = option;
}

function getSubDistrictData(districtId) {
    console.log(districtId);
    const filteredSubDistricts = subdistricts_data.filter(
        (subDis) => subDis.district_code == districtId
    );
    // console.log(filteredSubDistricts)
    let option = '<option value="">เลือกตำบล</option>';
    filteredSubDistricts.forEach((data) => {
        option += `<option data-id="${data.code}" data-zip="${data.zip_code}" value="${data.name_th}">${data.name_th}</option>`;
    });
    sub_districtSelect.innerHTML = option;
}

const submitBuy = document.querySelector("#submit-buy");
submitBuy.addEventListener("click", () => {
    const firstname = document.querySelector("#name").value;
    const lastname = document.querySelector("#last-name").value;
    const customer_tel = document.querySelector("#customer-tel").value;
    const customer_email = document.querySelector("#customer-email").value;
    const customer_address = document.querySelector("#customer-address").value;
    const sub_district = document.querySelector("#sub-district").value;
    const district = document.querySelector("#district").value;
    const province = document.querySelector("#province").value;
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    // console.log(travelSims_data)
    // console.log(prepaidCate_data)
    // console.log(bermonthly_data)
    // return false;

    //  Check if any required field is empty

    const requiredFields = [
        firstname,
        lastname,
        customer_tel,
        customer_email,
        customer_address,
        sub_district,
        district,
        province,
    ];
    if (requiredFields.some((field) => !field.trim())) {
        Swal.fire({
            icon: "error",
            title: "กรุณากรอกข้อมูลให้ครบทุกช่อง",
            showConfirmButton: false,
            timer: 2000,
        });

       // Add a class to highlight the empty input fields
    document.querySelectorAll('input, textarea, select').forEach((element) => {
        if (!element.value.trim()) {
            element.classList.add('error-border');
        }
    });

    return;

       
    }

    if (!emailRegex.test(customer_email)) {
        Swal.fire({
            icon: "error",
            title: "กรุณากรอก E-mail ที่ถูกต้อง",
            showConfirmButton: false,
            timer: 2000,
        });
        return;
    }

    let params = {
        firstname: firstname,
        lastname: lastname,
        phone_number: customer_tel,
        email: customer_email,
        district: district,
        subdistrict: sub_district,
        province: province,
        zip_code: zip_code.value,
        address: customer_address,
        total_price: total_price,
        shipping_cost: shipping_cost,
        bermonthly: bermonthly_data.length > 0 ? bermonthly_data : [],
        prepaid_sim: prepaidCate_data.length > 0 ? prepaidCate_data : [],
        travel_sim: travelSims_data.length > 0 ? travelSims_data : [],
    };

    // validate data
    for (const key in params) {
        if (params.hasOwnProperty(key) && params[key] === "") {
            console.log("error: " + key + " is empty");
            return false;
        }
    }

    Swal.fire({
        // title: "SCAN",
        html: `<p>*** หลังจากชำระเงินแล้ว กรุณาติดต่อกลับที่ <br> line Id: <a href="https://line.me/R/ti/p/@488jedjg?oat_content=url" class="text-red-500 hover:underline decoration-solid">@fibertrue</a> <br>หรือโทร 083-228-9789 <br>เพื่อส่งเอกสารในการเปิดใช้ซิม</p>`,
        icon: "info",
        imageUrl: "../../../icons/S__14614577.jpg",
        imageWidth: 200,
        imageHeight: 200,
        imageAlt: "Custom image",
        showCancelButton: true,
        cancelButtonColor: "#d33",
        confirmButtonColor: "#3085d6",
        confirmButtonText: "ยืนยันการสั่งซื้อ",
        cancelButtonText: "ยกเลิกการสั่งซื้อ",
        reverseButtons: true,
    }).then((result) => {
        if (result.isConfirmed) {
            document.getElementById("loader").style.display = "block";

            axios.post(`/confirmorder`, params).then((response) => {
                if (response.status === 201) {
                    document.getElementById("loader").style.display = "none";
                    Swal.fire({
                        icon: "success",
                        title: "สั่งซื้อสำเร็จ",
                        text: "กำลังจะนำท่านสู่หน้าชำระสินค้า",
                        showConfirmButton: false,
                        timer: 1500,
                    }).then(() => {
                        let formData = new FormData();
                        formData.append("refno", response.data.ref_order);
                        formData.append("merchantid", "13745519");
                        formData.append("customeremail", customer_email);
                        formData.append("cc", "00");
                        formData.append("productdetail", "สินค้าเบอร์ true");
                        formData.append("total", total_price);
                        formData.append("lang", "TH");

                        let form = document.createElement("form");
                        form.method = "POST";
                        form.action =
                            "https://payment.paysolutions.asia/epaylink/payment.aspx";

                        formData.forEach(function (value, key) {
                            let input = document.createElement("input");
                            input.type = "hidden";
                            input.name = key;
                            input.value = value;
                            form.appendChild(input);
                        });

                        document.body.appendChild(form);
                        form.submit();

                        for (var pair of formData.entries()) {
                            console.log(pair[0] + ": " + pair[1]);
                        }
                        return false;
                        // window.location.reload('/')
                    });
                } else {
                    Swal.fire({
                        icon: "error",
                        title: "มีบางอย่างผิดพลาด",
                        showConfirmButton: false,
                        timer: 1500,
                    });
                }
            });
        }
    });

    // Show the loader
    //  document.getElementById("loader").style.display = "block";

    // axios.post(`/confirmorder`, params).then((response) => {
    //     if (response.status === 201) {
    //         document.getElementById("loader").style.display = "none";
    //         Swal.fire({
    //             icon: "success",
    //             title: "สั่งซื้อสำเร็จ",
    //             text: "กำลังจะนำท่านสู่หน้าชำระสินค้า",
    //             showConfirmButton: false,
    //             timer: 1500,
    //         }).then(() => {
    //             let formData = new FormData();
    //             formData.append("refno", response.data.ref_order);
    //             formData.append("merchantid", "13745519");
    //             formData.append("customeremail", customer_email);
    //             formData.append("cc", "00");
    //             formData.append("productdetail", "สินค้าเบอร์ true");
    //             formData.append("total", total_price);
    //             formData.append("lang", "TH");

    //             let form = document.createElement("form");
    //             form.method = "POST";
    //             form.action =
    //                 "https://payment.paysolutions.asia/epaylink/payment.aspx";

    //             formData.forEach(function (value, key) {
    //                 let input = document.createElement("input");
    //                 input.type = "hidden";
    //                 input.name = key;
    //                 input.value = value;
    //                 form.appendChild(input);
    //             });

    //             document.body.appendChild(form);
    //             form.submit();

    //             for (var pair of formData.entries()) {
    //                 console.log(pair[0] + ": " + pair[1]);
    //             }
    //             return false;
    //             // window.location.reload('/')
    //         });
    //     } else {
    //         Swal.fire({
    //             icon: "error",
    //             title: "มีบางอย่างผิดพลาด",
    //             showConfirmButton: false,
    //             timer: 1500,
    //         });
    //     };
    // });
});

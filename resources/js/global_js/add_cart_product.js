console.log("use addproduct_cart.js")

const btn_addProductToCart = document.querySelectorAll('#addBerToCart');

btn_addProductToCart.forEach(element => {
  element.addEventListener('click', function() {
    const data_id = element.getAttribute('data-id');
    const type_product = element.getAttribute('data-type');
    const data_prepaid = element.getAttribute('data-prepaid');

    let param = {
      "type_product" : type_product
    }

    if (data_prepaid) {
      param.data_prepaid = data_prepaid;
    }

    addSessionProduct(data_id, param).then(response => {
      const numCart = document.querySelector('#num-cart');
      numCart.innerText = response.data.data.amount;
      
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1000
        });
      }
    })
    .catch(error => {
      console.error(error);
    });
  })
});


const btn_buyNow = document.querySelectorAll('#buyProductNow');
btn_buyNow.forEach(element => {
  element.addEventListener('click', () => {
    const data_id = element.getAttribute('data-id');
    const type_product = element.getAttribute('data-type');
    const data_prepaid = element.getAttribute('data-prepaid');

    let param = {
      "type_product" : type_product
    }
    if (data_prepaid) {
      param.data_prepaid = data_prepaid;
    }

    addSessionProduct(data_id, param).then(response => {
      if(response.data.status == "success") {
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Your work has been saved",
          showConfirmButton: false,
          timer: 1000
        }).then(() => {
          location.href = "/cartproduct"
        })
      }
    })
    .catch(error => {
      console.error(error);
    });
  })
});


function addSessionProduct(data_id, param) {
  return axios.post(`/addproduct/${data_id}`, param);
}



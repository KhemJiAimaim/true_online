console.log("use packge.js")

const btnPackage = document.querySelectorAll('#btn-package');

console.log(btnPackage)
btnPackage.forEach(element => {
  element.addEventListener('click', () => {
    const dataType = element.classList.contains('active') ? "" : element.getAttribute('data-type');
    redirectPage(dataType);
  })
});

function redirectPage(dataType) {
  location.href = `/prepaid_sim/package/${dataType}`
}
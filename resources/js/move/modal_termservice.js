const modalContrainer = document.querySelector('#modal-container');
const modal_content = document.querySelector('#modal-content');
const closeModal = document.querySelector('#close-modal');
const btn_termOfService = document.querySelectorAll('#btn-termOfService');

btn_termOfService.forEach(element => {
  element.addEventListener('click', () => {
    const dataId = element.getAttribute('data-id');
    console.log(dataId);
    modalContrainer.classList.remove('hidden')
    axios.get(`/termcontent/${dataId}`).then((response) => {
      const data_term = response.data.data;
      console.log(data_term);
      modal_content.innerHTML = data_term.terms_content;
    })
  })
});

closeModal.addEventListener('click', () => {
  modalContrainer.classList.add('hidden')
});
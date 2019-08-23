
const address = "/public/gallery_img/big/";

document.querySelector('.gallery').addEventListener('click', () => {
  const idImg = event.target.id;
  const modalWindow = document.querySelector('.modalWindow');
  modalWindow.classList.add('visibility');
  modalWindow.insertAdjacentHTML('beforeend', `<img src="${address}${idImg}" id="big.${idImg}">`);

  window.addEventListener('keydown', () => {
    if (event.code === "Escape")
    modalWindow.classList.remove('visibility');
    document.getElementById(`big.${idImg}`).remove();
  });
});



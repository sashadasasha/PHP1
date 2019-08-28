const address = "/img/";

document.querySelector('.catalog').addEventListener('click', async (e) => {
  e.preventDefault();
    e.preventDefault();
    let idImg = e.target.id;

    console.log(idImg);
  
    let data = {
    idImg
  }
  
    let response = await fetch('../catalogItem.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  });
  let result = await response.json();
  console.log(result);
  const modalWindow = document.querySelector('.modalWindow');
  modalWindow.classList.add('visibility');
  modalWindow.insertAdjacentHTML('beforeend', `<div id="${idImg}mod"><img src="${address}${result['imgAddr']}">
  <p>${result['desc']}</p><p>Цена - ${result['price']}</p></div>`);
  window.addEventListener('keydown', () => {
    if (event.code === "Escape")
    modalWindow.classList.remove('visibility');
    document.getElementById(`${idImg}mod`).remove();
  });

});
  

  

document.addEventListener('click', async (e) => {
 if (e.target.classList[0] === "buy") {
  e.preventDefault();
  let id = e.target.id;
  let data = {
    id
  }; 
  let response = await fetch('/api/buy/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  });
  let result = await response.json();
    console.log(result);
    document.getElementById('counter').innerHTML = result;
 }

if (e.target.classList[0] === "delete") {
  e.preventDefault();
  let id = e.target.id;
  let data = {
    id
  }; 
  let response = await fetch('/api/deleteFromBasket/', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(data)
  });
  let result = await response.json();
    console.log(result);
    document.getElementById('counter').innerHTML = result['count'];
    document.getElementById('summ').innerHTML = result['summ'];
    document.getElementById(`item_${result['id']}`).remove();
 }

 if (e.target.classList[0] === "imgItem" || e.target.classList[0] === "nameItem" ) {
  e.preventDefault();
    let idImg = e.target.id;  
    let data = {
    idImg
  }
  
    let response = await fetch('/api/catalogItem/', {
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
  modalWindow.insertAdjacentHTML('beforeend', `<div id="${idImg}mod"><img src="/img/${result['imgAddr']}"><div class="info">
  <p>${result['desc']}</p><p>Цена - ${result['price']}</p></div>
  <button class="buy" id="${idImg}">Купить</button><hr>
  </div>`);

  window.addEventListener('keydown', () => {
    if (event.code === "Escape")
    modalWindow.classList.remove('visibility');
    document.getElementById(`${idImg}mod`).remove();
  });
}
});
  
  

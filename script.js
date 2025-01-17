/*Back to Top Button Functions*/
let mybutton = document.getElementById("topButton");
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}

/*Form Validation Functions*/
function validateForm() {
  const firstName = document.getElementById('firstName').value.trim();
  const lastName = document.getElementById('lastName').value.trim();
  const phoneNumber = document.getElementById('phoneNumber').value.trim();
  const address = document.getElementById('address').value.trim();
  const email = document.getElementById('email').value.trim();
  const password = document.getElementById('password').value;

  if (firstName === '' || lastName === '' || phoneNumber === '' || address === '' || email === '' || password === '') {
      alert('All fields are required!');
      return false;
  }

  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
      alert('Invalid email address!');
      return false;
  }

  if (password.length < 8) {
      alert('Password must be at least 8 characters long!');
      return false;
  }

  return true;
}

/*Add to cart functions*/
function getCartFromStorage() {
  let storedCart = localStorage.getItem('cart');
  return storedCart ? JSON.parse(storedCart) : [];
}

function saveCartToStorage(cart) {
  localStorage.setItem('cart', JSON.stringify(cart));
}

let cart = getCartFromStorage();

function addToCart(name, price, image) {
  let product = {
      name: name,
      price: price,
      image: image
  };

  window.location.href = 'added.php';

  cart.push(product);

  saveCartToStorage(cart);

  updateCartUI();
}

function updateCartUI() {
  let mainContent = document.querySelector('.main-content .cart');
  mainContent.innerHTML = '';

  let sidebar = document.querySelector('.sidebar .total');
  sidebar.innerHTML = '';

  if (cart.length === 0) {
    let emptyCartMessage = document.createElement('h3');
    emptyCartMessage.textContent = 'Your cart is currently empty!';
    mainContent.appendChild(emptyCartMessage);

    let totalPrice = document.createElement('h3');
    totalPrice.textContent = `Total: $${calculateTotalPrice()}`;
    sidebar.appendChild(totalPrice);
    totalPrice.style.textAlign = 'right';
  } else {
    cart.forEach(item => {
        let itemElement = document.createElement('div');
        itemElement.textContent = `${item.name} - $${item.price}.00`;
        sidebar.appendChild(itemElement);
    });

    let totalPrice = document.createElement('h3');
    totalPrice.textContent = `Total: $${calculateTotalPrice()}`;
    sidebar.appendChild(totalPrice);
    totalPrice.style.textAlign = 'right';

    let clearButton = document.createElement('button');
    clearButton.textContent = 'Clear Cart';
    clearButton.addEventListener('click', clearCart);
    sidebar.appendChild(clearButton);
  }

  cart.forEach(item => {
      let productDiv = document.createElement('div');
      productDiv.classList.add('product');
      productDiv.innerHTML = `
          <img src="${item.image}" alt="${item.name}">
          <h4>${item.name}</h4>
          <p>$${item.price}.00</p>
      `;
      mainContent.appendChild(productDiv);
  });
}

function clearCart() {
  cart = [];
  saveCartToStorage(cart); 
  updateCartUI(); 
}

function calculateTotalPrice() {
  let totalPrice = 0;
  cart.forEach(item => {
      totalPrice += item.price;
  });
  return totalPrice.toFixed(2);
}

document.querySelectorAll('.add-to-cart').forEach(button => {
  button.addEventListener('click', () => {
      let productDiv = button.closest('.product');
      let name = productDiv.dataset.name;
      let price = parseFloat(productDiv.dataset.price);
      let image = productDiv.querySelector('img').src;
      addToCart(name, price, image);
  });
});

updateCartUI();

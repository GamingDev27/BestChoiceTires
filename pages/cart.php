<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Your Cart</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
   <?php include __DIR__ . '../../components/navbar.php'; ?>      
  <section class="cart-page">
    <div class="container">
      <h1>Your Cart</h1>

      <div class="cart-wrapper">
        
        <!-- Cart Items -->
        <div class="cart-items" id="cart-items">
          <!-- Items will be injected here -->
        </div>

        <!-- Cart Summary -->
        <div class="cart-summary">
          <h3>Summary</h3>
          <p>Total: <strong id="cart-total">₱0</strong></p>
          <button class="btn checkout-btn">Checkout</button>
        </div>

      </div>
    </div>
  </section>

  <script>
    let cart = JSON.parse(localStorage.getItem('cart')) || [];

    function renderCart() {
      const cartItems = document.getElementById('cart-items');
      const cartTotal = document.getElementById('cart-total');

      cartItems.innerHTML = '';
      let total = 0;

      cart.forEach((item, index) => {
        total += item.price * item.qty;

        cartItems.innerHTML += `
          <div class="cart-item">
            <img src="${item.image}" alt="">
            <div class="cart-info">
              <h4>${item.name}</h4>
              <p>₱${item.price}</p>

              <input type="number" value="${item.qty}" min="1"
                onchange="updateQty(${index}, this.value)">
              
              <button onclick="removeItem(${index})">Remove</button>
            </div>
          </div>
        `;
      });

      cartTotal.innerText = '₱' + total.toLocaleString();
    }

    function updateQty(index, qty) {
      cart[index].qty = parseInt(qty);
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    }

    function removeItem(index) {
      cart.splice(index, 1);
      localStorage.setItem('cart', JSON.stringify(cart));
      renderCart();
    }

    document.querySelector('.checkout-btn').onclick = () => {
      alert('Proceeding to checkout...');
    };

    renderCart();
  </script>

</body>
</html>
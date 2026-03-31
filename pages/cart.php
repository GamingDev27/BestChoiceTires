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
    
    <section class="cart">
        <div class="container">
            <header class="cart__header">
            <h1 class="cart__title">Your Cart</h1>
            </header>

            <div class="cart__layout">
            
                <div class="cart__items" id="cart-items">

                <!-- Cart Item Card -->
                <article class="cart-item">
                    <img 
                    src="https://via.placeholder.com/120" 
                    alt="Product name" 
                    class="cart-item__image"
                    >

                    <div class="cart-item__details">
                    <h2 class="cart-item__title">Sample Product 1</h2>
                    <p class="cart-item__price">₱499</p>

                    <div class="cart-item__actions">
                        <label>
                        Qty:
                        <input type="number" value="1" min="1" class="cart-item__qty">
                        </label>

                        <button class="cart-item__remove">
                        Remove
                        </button>
                    </div>
                    </div>
                </article>

                <!-- Cart Item Card -->
                <article class="cart-item">
                    <img 
                    src="https://via.placeholder.com/120" 
                    alt="Product name" 
                    class="cart-item__image"
                    >

                    <div class="cart-item__details">
                    <h2 class="cart-item__title">Sample Product 2</h2>
                    <p class="cart-item__price">₱899</p>

                    <div class="cart-item__actions">
                        <label>
                        Qty:
                        <input type="number" value="2" min="1" class="cart-item__qty">
                        </label>

                        <button class="cart-item__remove">
                        Remove
                        </button>
                    </div>
                    </div>
                </article>

                <!-- Cart Item Card -->
                <article class="cart-item">
                    <img 
                    src="https://via.placeholder.com/120" 
                    alt="Product name" 
                    class="cart-item__image"
                    >

                    <div class="cart-item__details">
                    <h2 class="cart-item__title">Sample Product 3</h2>
                    <p class="cart-item__price">₱899</p>

                    <div class="cart-item__actions">
                        <label>
                        Qty:
                        <input type="number" value="2" min="1" class="cart-item__qty">
                        </label>

                        <button class="cart-item__remove">
                        Remove
                        </button>
                    </div>
                    </div>
                </article>

                <!-- Cart Item Card -->
                <article class="cart-item">
                    <img 
                    src="https://via.placeholder.com/120" 
                    alt="Product name" 
                    class="cart-item__image"
                    >

                    <div class="cart-item__details">
                    <h2 class="cart-item__title">Sample Product 4</h2>
                    <p class="cart-item__price">₱899</p>

                    <div class="cart-item__actions">
                        <label>
                        Qty:
                        <input type="number" value="2" min="1" class="cart-item__qty">
                        </label>

                        <button class="cart-item__remove">
                        Remove
                        </button>
                    </div>
                    </div>
                </article>
                </div>
            </div>    

            <!-- Cart Summary -->
            <aside class="cart__summary">
                <h3 class="cart__summary-title">Summary</h3>

                <div class="cart__summary-row">
                <span>Subtotal</span>
                <strong id="cart-total">₱2,297</strong>
                </div>

                <button class="btn cart__checkout">
                Checkout
                </button>
            </aside>

            </div>
        </div>
    </section>
    
    <?php include __DIR__ . '../../components/footer.php'; ?>
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Product</title>
  <link rel="stylesheet" href="../assets/style.css">
</head>
<body>
    <?php include __DIR__ . '../../components/navbar.php'; ?>
  <section class="product-page">
    <div class="container">
      <div class="product-wrapper">

        <!-- Product Image -->
        <div class="product-image">
          <img src="assets/sample-tire.jpg" alt="Product Image">
        </div>
        <!-- Product Details -->
        <div class="product-details">
          <h1 class="product-title">All-Season Tire X100</h1>
          <p class="product-price">₱4,500</p>
          <p class="product-description">
            High-performance all-season tire designed for durability, comfort, and excellent road grip in all weather conditions.
          </p>

          <!-- Quantity -->
          <div class="product-qty">
            <label for="qty">Quantity:</label>
            <input type="number" id="qty" value="1" min="1">
          </div>

          <!-- Buttons -->
          <div class="product-actions">
            <button class="btn add-to-cart">Add to Cart</button>
            <button class="btn buy-now">Buy Now</button>
          </div>
        </div>

      </div>
    </div>
  </section>
  
  <section class="product-suggestions">
        <div class="container">
            <h2 class="section-title">You may also like</h2>

            <div class="suggestions-grid">

            <!-- Product Card -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Tire 1">
                <h3 class="product-card__title">All-Season Tire X200</h3>
                <p class="product-card__price">₱4,800</p>
                <a href="#" class="btn product-card__btn">View Product</a>
            </div>

            <!-- Product Card -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Tire 2">
                <h3 class="product-card__title">Performance Tire Pro</h3>
                <p class="product-card__price">₱5,200</p>
                <a href="#" class="btn product-card__btn">View Product</a>
            </div>

            <!-- Product Card -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Tire 3">
                <h3 class="product-card__title">EcoDrive Tire</h3>
                <p class="product-card__price">₱3,900</p>
                <a href="#" class="btn product-card__btn">View Product</a>
            </div>

            <!-- Product Card -->
            <div class="product-card">
                <img src="https://via.placeholder.com/200" alt="Tire 4">
                <h3 class="product-card__title">Off-Road Tire XT</h3>
                <p class="product-card__price">₱6,100</p>
                <a href="#" class="btn product-card__btn">View Product</a>
            </div>

            </div>
        </div>
    </section>
</body>
</html>
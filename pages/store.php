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
    <section class="shop-section">

        <!-- FILTERS -->
        <div class="filters">
            <select id="brandFilter">
            <option value="">All Brands</option>
            <option value="nike">Nike</option>
            <option value="adidas">Adidas</option>
            </select>

            <select id="sizeFilter">
            <option value="">All Sizes</option>
            <option value="s">Small</option>
            <option value="m">Medium</option>
            <option value="l">Large</option>
            </select>

            <select id="priceFilter">
            <option value="">All Prices</option>
            <option value="low">Below $50</option>
            <option value="mid">$50 - $100</option>
            <option value="high">Above $100</option>
            </select>
        </div>

        <!-- PRODUCTS -->
        <div class="product-grid" id="productGrid">

            <div class="product" data-brand="nike" data-size="m" data-price="low">
            <img src="https://via.placeholder.com/150">
            <h4>Nike Shirt</h4>
            <p>$30</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="adidas" data-size="l" data-price="mid">
            <img src="https://via.placeholder.com/150">
            <h4>Adidas Hoodie</h4>
            <p>$70</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="nike" data-size="s" data-price="high">
            <img src="https://via.placeholder.com/150">
            <h4>Nike Jacket</h4>
            <p>$120</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="adidas" data-size="m" data-price="low">
            <img src="https://via.placeholder.com/150">
            <h4>Adidas Tee</h4>
            <p>$40</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="nike" data-size="l" data-price="mid">
            <img src="https://via.placeholder.com/150">
            <h4>Nike Shorts</h4>
            <p>$60</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="nike" data-size="m" data-price="low">
            <img src="https://via.placeholder.com/150">
            <h4>Nike Shirt</h4>
            <p>$30</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="adidas" data-size="l" data-price="mid">
            <img src="https://via.placeholder.com/150">
            <h4>Adidas Hoodie</h4>
            <p>$70</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="nike" data-size="s" data-price="high">
            <img src="https://via.placeholder.com/150">
            <h4>Nike Jacket</h4>
            <p>$120</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="adidas" data-size="m" data-price="low">
            <img src="https://via.placeholder.com/150">
            <h4>Adidas Tee</h4>
            <p>$40</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

            <div class="product" data-brand="nike" data-size="l" data-price="mid">
            <img src="https://via.placeholder.com/150">
            <h4>Nike Shorts</h4>
            <p>$60</p>
            <button class="add-to-cart" onclick="addToCart('Adidas Hoodie', 70)">Add to Cart</button>
            </div>

        </div>

    </section>
    <?php include __DIR__ . '../../components/footer.php'; ?>
<script>
const brandFilter = document.getElementById('brandFilter');
const sizeFilter = document.getElementById('sizeFilter');
const priceFilter = document.getElementById('priceFilter');
const products = document.querySelectorAll('.product');

function filterProducts() {
  const brand = brandFilter.value;
  const size = sizeFilter.value;
  const price = priceFilter.value;

  products.forEach(product => {
    const matchBrand = !brand || product.dataset.brand === brand;
    const matchSize = !size || product.dataset.size === size;
    const matchPrice = !price || product.dataset.price === price;

    if (matchBrand && matchSize && matchPrice) {
      product.style.display = 'block';
    } else {
      product.style.display = 'none';
    }
  });
}

brandFilter.addEventListener('change', filterProducts);
sizeFilter.addEventListener('change', filterProducts);
priceFilter.addEventListener('change', filterProducts);
</script>

</body>
</html>
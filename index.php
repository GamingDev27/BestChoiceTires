<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BestChoiceTires - Premium Tires for Every Vehicle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
            color: white;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            font-size: 1.5rem;
            font-weight: bold;
        }
        nav ul {
            list-style: none;
            display: flex;
            gap: 1rem;
        }
        nav a {
            color: white;
            text-decoration: none;
        }
        .hero {
            background-image: url('https://via.placeholder.com/1200x400?text=Tires+Banner');
            background-size: cover;
            background-position: center;
            height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-align: center;
        }
        .hero h1 {
            font-size: 3rem;
            margin: 0;
        }
        .hero p {
            font-size: 1.2rem;
        }
        .categories {
            padding: 2rem;
            text-align: center;
        }
        .categories h2 {
            margin-bottom: 1rem;
        }
        .category-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        .category {
            background: white;
            padding: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .featured-products {
            padding: 2rem;
            background: white;
        }
        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1rem;
        }
        .product {
            border: 1px solid #ddd;
            padding: 1rem;
            text-align: center;
        }
        .product img {
            max-width: 100%;
            height: 150px;
            object-fit: cover;
        }
        footer {
            background: #333;
            color: white;
            text-align: center;
            padding: 1rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">BestChoiceTires</div>
        <nav>
            <ul class="main-nav">
                <li><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#">Tires</a>
                    <ul class="submenu">
                        <li><a href="#">Brands</a></li>
                        <li><a href="#">Sizes</a></li>
                        <li><a href="#">Condition</a></li>
                    </ul>
                </li>
                <li><a href="#">Rims</a></li>
                <li><a href="#">Accesories</a></li>
                <li><a href="#">Services</a></li>
            </ul>
        </nav>
        <style>
            .main-nav { list-style:none; display:flex; gap:1rem; margin:0; padding:0; }
            .main-nav li { position:relative; }
            .submenu { display:none; position:absolute; top:100%; left:0; background:#333; border-radius:4px; padding:0.5rem 0; min-width:150px; list-style:none; margin:0; }
            .submenu li { padding:0; }
            .submenu li a { color:#fff; display:block; padding:0.4rem 0.8rem; text-decoration:none; }
            .dropdown:hover .submenu { display:block; }
        </style>
        <div>
            <input type="text" placeholder="Search tires...">
            <button>Search</button>
            <a href="#" style="color: white; margin-left: 1rem;">Cart (0)</a>
        </div>
    </header>

    <section class="hero">
        <div>
            <h1>Welcome to BestChoiceTires</h1>
            <p>Find the perfect tires for your vehicle at unbeatable prices</p>
            <a href="#" style="background: #ff6600; color: white; padding: 0.5rem 1rem; text-decoration: none; border-radius: 4px;">Shop Now</a>
        </div>
    </section>

    <?php include __DIR__ . '/category.php'; ?>

    <?php include __DIR__ . '/twoImageLink.php'; ?>

    <?php include __DIR__ . '/topPick.php'; ?>

    <?php include __DIR__ . '/productShowcase.php'; ?>

    <?php include __DIR__ . '/limitedTimeBundle.php'; ?>

    <section class="featured-products">
        <h2 style="text-align: center;">Featured Products</h2>
        <div class="products-grid">
            <div class="product">
                <img src="https://via.placeholder.com/200x150?text=Tire+1" alt="Tire 1">
                <h3>All-Season Tire</h3>
                <p>$89.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/200x150?text=Tire+2" alt="Tire 2">
                <h3>Performance Tire</h3>
                <p>$119.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/200x150?text=Tire+3" alt="Tire 3">
                <h3>Off-Road Tire</h3>
                <p>$149.99</p>
                <button>Add to Cart</button>
            </div>
            <div class="product">
                <img src="https://via.placeholder.com/200x150?text=Tire+4" alt="Tire 4">
                <h3>Winter Tire</h3>
                <p>$99.99</p>
                <button>Add to Cart</button>
            </div>
        </div>
    </section>

    <section class="highlight-section" style="padding:2rem; background:#fff;">
        <div style="display:grid; grid-template-columns:1fr 1fr; gap:1rem; align-items:center; max-width:1100px; margin:0 auto;">
            <div>
                <img src="https://via.placeholder.com/500x350?text=Top+Tire+Picks" alt="Tire products" style="width:100%; border-radius:10px; object-fit:cover;">
            </div>
            <div>
                <h2>Discover Premium Tire Products</h2>
                <p>At BestChoiceTires, we offer top brands, advanced tire technology, and tailored solutions for every vehicle. Whether you need performance, all-season, off-road, or winter tires, our selection is designed to maximize safety, comfort, and longevity.</p>
                <p>Shop with confidence and get expert recommendations based on your vehicle, driving style, and climate. Our team helps you find the perfect fit so you can drive smoother and safer every day.</p>
                <a href="#" style="background:#ff6600; color:#fff; text-decoration:none; padding:0.6rem 1rem; border-radius:4px; display:inline-block;">Explore Tire Products</a>
            </div>
        </div>
    </section>
    
    <?php include __DIR__ . '/testimony.php'; ?>
    <footer style="background-color: #222; color: white; padding: 20px 10px;">
    
        <div style="display: flex; flex-wrap: wrap; justify-content: space-around; text-align: left; gap: 20px;">

            <!-- Column 1: Brand -->
            <div>
                <img src="logo.png" alt="BestChoiceTires Logo" style="width: 120px; margin-bottom: 10px;">
                <h4>BestChoiceTires</h4>
                <p style="max-width: 180px;">
                    Quality tires for all vehicles. Drive safe with the best choices.
                </p>
            </div>

            <!-- Column 2: Navigation -->
            <div>
                <h4>Navigation</h4>
                <a href="#" style="color: white; display: block;">Home</a>
                <a href="#" style="color: white; display: block;">Products</a>
                <a href="#" style="color: white; display: block;">About</a>
                <a href="#" style="color: white; display: block;">Contact</a>
            </div>

            <!-- Column 3: By Brand -->
            <div>
                <h4>By Brand</h4>
                <a href="#" style="color: white; display: block;">Michelin</a>
                <a href="#" style="color: white; display: block;">Bridgestone</a>
                <a href="#" style="color: white; display: block;">Goodyear</a>
                <a href="#" style="color: white; display: block;">Pirelli</a>
            </div>

            <!-- Column 4: By Size -->
            <div>
                <h4>By Size</h4>
                <a href="#" style="color: white; display: block;">15 inch</a>
                <a href="#" style="color: white; display: block;">16 inch</a>
                <a href="#" style="color: white; display: block;">17 inch</a>
                <a href="#" style="color: white; display: block;">18 inch</a>
            </div>

            <!-- Column 5: By Type -->
            <div>
                <h4>By Type</h4>
                <a href="#" style="color: white; display: block;">All-Season</a>
                <a href="#" style="color: white; display: block;">Winter</a>
                <a href="#" style="color: white; display: block;">Performance</a>
                <a href="#" style="color: white; display: block;">Off-Road</a>
            </div>

        </div>

        <!-- Bottom -->
        <div style="text-align: center; margin-top: 20px;">
            <p>&copy; 2023 BestChoiceTires. All rights reserved.</p>
            <p>
                <a href="#" style="color: white;">Privacy Policy</a> |
                <a href="#" style="color: white;">Terms of Service</a>
            </p>
        </div>

    </footer>
</body>
</html>

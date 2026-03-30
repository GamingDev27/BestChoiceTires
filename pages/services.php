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
    <section class="services">
        <div class="container">
            <h1 class="services__title">Our Services</h1>

            <!-- Service 1 -->
            <div class="service">
            <div class="service__image">
                <img src="https://picsum.photos/seed/picsum/200/300" alt="Tire Installation">
            </div>
            <div class="service__content">
                <h2>Tire Installation</h2>
                <p>
                Get professional tire installation with precision and care. Our technicians ensure proper fitting, balancing, and alignment to maximize tire lifespan and driving comfort.
                </p>
            </div>
            </div>

            <!-- Service 2 (reverse) -->
            <div class="service service--reverse">
            <div class="service__image">
                <img src="https://picsum.photos/id/123/200/300" alt="Wheel Alignment">
            </div>
            <div class="service__content">
                <h2>Wheel Alignment</h2>
                <p>
                Improve your vehicle’s handling and extend tire life with accurate wheel alignment. We use modern equipment to ensure your wheels are perfectly aligned for safety and efficiency.
                </p>
            </div>
            </div>

            <!-- Service 3 -->
            <div class="service">
            <div class="service__image">
                <img src="https://picsum.photos/seed/364/200/300" alt="Tire Rotation">
            </div>
            <div class="service__content">
                <h2>Tire Rotation</h2>
                <p>
                Regular tire rotation helps distribute wear evenly across all tires, improving performance and longevity. Keep your ride smooth and cost-efficient with scheduled rotations.
                </p>
            </div>
            </div>

        </div>
    </section>
</body>
</html>    
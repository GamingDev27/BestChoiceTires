<?php
// Simple tire shop page
$tires = [
    ['name' => 'All-Season Radial', 'price' => 120, 'size' => '205/55R16'],
    ['name' => 'Performance Sport', 'price' => 180, 'size' => '225/45R17'],
    ['name' => 'Truck All-Terrain', 'price' => 220, 'size' => '265/70R17'],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BestChoiceTires - Tire Shop</title>
</head>
<body>
    <!-- Simple tire shop listing -->
    <h1>BestChoiceTires Shop</h1>
    <p>Browse our best tires:</p>
    <ul>
        <?php foreach ($tires as $tire): ?>
            <li><strong><?php echo htmlspecialchars($tire['name']); ?></strong> - <?php echo htmlspecialchars($tire['size']); ?> - $<?php echo number_format($tire['price'], 2); ?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
<?php
// Top picks include for index.php
// Shows 5 placeholder products in a single row with spacing.
?>

<section class="top-picks" style="padding:2rem; background:#fff;">
    <div style="max-width:1100px; margin:0 auto;">
        <h2 style="text-align:center; margin-bottom:1rem;">Top Picks</h2>
        <div style="display:flex; gap:1rem; flex-wrap:wrap; justify-content:space-between;">
            <?php for ($i = 1; $i <= 5; $i++): ?>
                <div style="flex:1 1 calc(20% - 1rem); min-width:170px; border:1px solid #ddd; border-radius:8px; padding:1rem; text-align:center; background:#fdfdfd;">
                    <img src="https://via.placeholder.com/200x150?text=Product+<?= $i ?>" alt="Product <?= $i ?>" style="width:100%; height:120px; object-fit:cover; border-radius:6px;">
                    <h3 style="margin:0.75rem 0 0.25rem; font-size:1rem;">Product Title</h3>
                    <p style="margin:0; color:#555; font-weight:600;">$19.99</p>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</section>

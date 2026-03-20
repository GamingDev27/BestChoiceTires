<?php
// Product showcase section include for index.php
// Displays a featured product with image on the left and details on the right.
?>

<section class="product-showcase" style="padding:2rem; background:#f9f9f9;">
    <div style="max-width:1100px; margin:0 auto; display:grid; grid-template-columns:1fr 1fr; gap:2rem; align-items:center;">
        <div style="border-radius:10px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">
            <img src="https://via.placeholder.com/550x400?text=Featured+Product" alt="Featured product" style="width:100%; height:100%; object-fit:cover; display:block;">
        </div>

        <div>
            <!-- Product details -->
            <h2 style="margin-top:0;">Product Title</h2>
            <p style="margin:0.5rem 0 1.5rem; font-size:1.1rem; color:#555;">$19.99</p>
            <p style="margin:0 0 1.5rem; color:#333; line-height:1.5;">This is a featured product highlight section. Add flavor text here describing the key benefits, fitment, and why it’s a great choice for your vehicle.</p>
            <button style="background:#ff6600; color:#fff; border:none; padding:0.75rem 1.25rem; border-radius:6px; font-size:1rem; cursor:pointer;">Add to Cart</button>
        </div>
    </div>
</section>

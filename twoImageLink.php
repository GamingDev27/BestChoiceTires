<?php
// Two-image link section for the homepage.
// Left image links to About Us; right image links to Gallery.
?>

<section class="two-image-link" style="padding: 2rem; background: #fff;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1rem; max-width: 1100px; margin: 0 auto;">
        <a href="about.php" style="position: relative; overflow: hidden; border-radius: 10px; text-decoration: none; color: inherit;">
            <img src="https://via.placeholder.com/600x400?text=About+Us" alt="About Us" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.4); color: white; padding: 1rem; text-align: center;">
                <h2 style="margin: 0 0 0.5rem;">About BestChoiceTires</h2>
                <p style="margin: 0;">Learn what makes our tires the best choice for your vehicle.</p>
            </div>
        </a>

        <a href="gallery.php" style="position: relative; overflow: hidden; border-radius: 10px; text-decoration: none; color: inherit;">
            <img src="https://via.placeholder.com/600x400?text=Gallery" alt="Gallery" style="width: 100%; height: 100%; object-fit: cover; display: block;">
            <div style="position: absolute; inset: 0; display: flex; flex-direction: column; justify-content: center; align-items: center; background: rgba(0, 0, 0, 0.4); color: white; padding: 1rem; text-align: center;">
                <h2 style="margin: 0 0 0.5rem;">Browse Our Gallery</h2>
                <p style="margin: 0;">See our products in action and get inspiration for your next upgrade.</p>
            </div>
        </a>
    </div>
</section>

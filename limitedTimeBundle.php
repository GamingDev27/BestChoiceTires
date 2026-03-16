<?php
// Limited time bundle section include for index.php
// Displays a 15% off countdown timer.
?>

<section class="limited-time-bundle" style="padding:2rem; background:#f9f9f9;">
    <div style="max-width:1100px; margin:0 auto; text-align:center;">
        <h2 style="margin-bottom:0.5rem;">Limited Time Bundle</h2>
        <p style="margin:0 0 1rem; font-weight:600;">Grab 15% off our select tire bundles before time runs out!</p>

        <div style="display:inline-flex; gap:1rem; padding:1rem 1.5rem; background:#222; color:#fff; border-radius:10px; box-shadow:0 8px 20px rgba(0,0,0,0.1);">
            <div style="text-align:center;">
                <div style="font-size:2rem; font-weight:700;" id="ltb-days">00</div>
                <div style="font-size:0.75rem; letter-spacing:0.05em;">DAYS</div>
            </div>
            <div style="text-align:center;">
                <div style="font-size:2rem; font-weight:700;" id="ltb-hours">00</div>
                <div style="font-size:0.75rem; letter-spacing:0.05em;">HRS</div>
            </div>
            <div style="text-align:center;">
                <div style="font-size:2rem; font-weight:700;" id="ltb-minutes">00</div>
                <div style="font-size:0.75rem; letter-spacing:0.05em;">MINS</div>
            </div>
            <div style="text-align:center;">
                <div style="font-size:2rem; font-weight:700;" id="ltb-seconds">00</div>
                <div style="font-size:0.75rem; letter-spacing:0.05em;">SECS</div>
            </div>
        </div>

        <p id="ltb-message" style="margin-top:1rem; font-weight:600; color:#d62828;">Hurry! Offer ends soon.</p>
    </div>

    <script>
        (function() {
            var target = new Date();
            target.setHours(target.getHours() + 72); // default 72 hours from now

            function pad(num) {
                return num.toString().padStart(2, '0');
            }

            function updateCountdown() {
                var now = new Date();
                var diff = target - now;

                if (diff <= 0) {
                    document.getElementById('ltb-days').textContent = '00';
                    document.getElementById('ltb-hours').textContent = '00';
                    document.getElementById('ltb-minutes').textContent = '00';
                    document.getElementById('ltb-seconds').textContent = '00';
                    document.getElementById('ltb-message').textContent = 'Offer expired. Check back soon!';
                    clearInterval(timer);
                    return;
                }

                var seconds = Math.floor(diff / 1000);
                var days = Math.floor(seconds / 86400);
                seconds %= 86400;
                var hours = Math.floor(seconds / 3600);
                seconds %= 3600;
                var minutes = Math.floor(seconds / 60);
                seconds %= 60;

                document.getElementById('ltb-days').textContent = pad(days);
                document.getElementById('ltb-hours').textContent = pad(hours);
                document.getElementById('ltb-minutes').textContent = pad(minutes);
                document.getElementById('ltb-seconds').textContent = pad(seconds);
            }

            var timer = setInterval(updateCountdown, 1000);
            updateCountdown();
        })();
    </script>
</section>

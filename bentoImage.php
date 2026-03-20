<div class="marquee">
  <div class="marquee-content">
    ✦ YOUR LOGO NAME ✦ YOUR LOGO NAME ✦ YOUR LOGO NAME ✦
  </div>
  <!-- Add more marquee-content divs if you want multiple lines of scrolling text -->
</div>

<style>
.marquee {
  overflow: hidden;
  background: #111;
  padding: 10px 0;
}

.marquee-content {
  display: inline-block;
  white-space: nowrap;
  color: #00ffcc;
  font-size: 24px;
  font-weight: bold;
  font-family: Arial, sans-serif;
  animation: scroll 10s linear infinite;
}

@keyframes scroll {
  from { transform: translateX(100%); }
  to { transform: translateX(-100%); }
}
</style>
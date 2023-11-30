<div class="row mb footer">
  <div class="footer_content">
    <div>
    <h1 >Địa chỉ cửa hàng</h1>
      <p>420/6 Lê Văn Sỹ, Phường 14, Quận 3, TP. Hồ Chí Minh</p>
      <p>1379-1381 Đường 3/2, Phường 16, Quận 11, TP. Hồ Chí Minh</p>
      <p>45-47 CMT8, Phường Bến Thành, Quận 1, TP. Hồ Chí Minh</p>
      <p>366A18 Phan Văn Trị, Phường 05, Quận Gò Vấp, TP. Hồ Chí Minh</p>
    </div>
    <div>
      <h2>Nơi mùi hương là bạn đồng hành</h2>
    </div>
    </div>
  </div>
</div>

<!-- js cho slideshow -->
<script>
    let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  slides[slideIndex-1].style.display = "block";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>
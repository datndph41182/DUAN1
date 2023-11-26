// banner
let currentSlide = 0;
const slides = document.querySelectorAll('.banner-slide');
function showSlide(index) {
    slides.forEach((slide, i) => {
        if (i === index) {
            slide.style.display = 'block';
        } else {
            slide.style.display = 'none';
        }
    });
}
function nextSlide() {
    currentSlide = (currentSlide + 1) % slides.length;
    showSlide(currentSlide);
}
function prevSlide() {
    currentSlide = (currentSlide - 1 + slides.length) % slides.length;
    showSlide(currentSlide);
}
showSlide(currentSlide); // Hiển thị slide đầu tiên khi trang được tải
setInterval(nextSlide, 2000);

// Tăng số lượng đơn hàng
function decreaseQuantity(button) {
    var input = button.nextElementSibling;
    var value = parseInt(input.value, 10);
    if (value > 1) {
        input.value = value - 1;
    }
}
function increaseQuantity(button) {
    var input = button.previousElementSibling;
    input.value = parseInt(input.value, 10) + 1;
}
function addToCart(button) {
    var productName = button.parentNode.firstChild.textContent;
    var quantity = button.previousElementSibling.querySelector('input').value;

    var cartItems = document.getElementById('cart-items');
    var listItem = document.createElement('li');
    listItem.textContent = quantity + ' ' + productName;
    cartItems.appendChild(listItem);
}

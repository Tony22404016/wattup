function filterProducts() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase();
    const cards = document.querySelectorAll('.product-card');

    cards.forEach(card => {
        const productName = card.querySelector('.product-name').textContent.toLowerCase();

        if (productName.includes(searchInput)) {
            card.style.display = "";   // tampilkan
        } else {
            card.style.display = "none"; // sembunyikan
        }
    });
}
// Toggle sidebar on mobile
        document.getElementById('menuToggle').addEventListener('click', function() {
            document.getElementById('sidebar').classList.toggle('show');
        });

        // Menu item active state
        document.querySelectorAll('.menu-item').forEach(item => {
            item.addEventListener('click', function() {
                document.querySelectorAll('.menu-item').forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                
                // Close sidebar on mobile after selection
                if (window.innerWidth <= 576) {
                    document.getElementById('sidebar').classList.remove('show');
                }
            });
        });
        
        // Card hover effect
        const cards = document.querySelectorAll('.stat-card');
        cards.forEach(card => {
            card.addEventListener('mouseenter', () => {
                card.style.transform = 'translateY(-5px)';
                card.style.boxShadow = '0 8px 16px rgba(0, 0, 0, 0.1)';
            });
            card.addEventListener('mouseleave', () => {
                card.style.transform = 'translateY(0)';
                card.style.boxShadow = 'var(--shadow)';
            });
        });

        // Search functionality
        function dataFilter() {
            const searchInput = document.getElementById('searchInput').value.toLowerCase();
            const rows = document.querySelectorAll('#productTable tbody tr');

            rows.forEach(row => {
                const cells = row.getElementsByTagName("td");
                const customerName = cells[1]?.textContent.toLowerCase();
                const productName  = cells[2]?.textContent.toLowerCase();

                if (customerName.includes(searchInput) || productName.includes(searchInput)) {
                    row.style.display = "";   // tampilkan
                } else {
                    row.style.display = "none"; // sembunyikan
                }
            });
        }
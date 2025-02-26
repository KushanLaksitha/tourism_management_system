
        // Back to top button
        const backToTopButton = document.querySelector('.back-to-top');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('active');
            } else {
                backToTopButton.classList.remove('active');
            }
        });
        
        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Navbar scroll effect
        const navbar = document.querySelector('.navbar');
        
        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 50) {
                navbar.style.padding = '0.5rem 2rem';
                navbar.style.backgroundColor = 'rgba(1, 22, 39, 0.95) !important';
            } else {
                navbar.style.padding = '1rem 2rem';
                navbar.style.backgroundColor = 'rgba(1, 22, 39, 0.9) !important';
            }
        });
        
        // Animate on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const elements = document.querySelectorAll('.destination-card, .region-card');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('slide-up');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.1
            });
            
            elements.forEach(element => {
                observer.observe(element);
            });
        });
        
        // Filter functionality
        document.querySelector('.filter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get filter values
            const region = document.getElementById('regionFilter').value;
            const category = document.getElementById('categoryFilter').value;
            const search = document.getElementById('searchFilter').value;
            
            // Here you would typically make an AJAX request to filter destinations
            console.log('Filtering with:', { region, category, search });
            
            // For demo purposes, just show an alert
            alert(`Filtering destinations with: Region: ${region || 'All'}, Category: ${category || 'All'}, Search: ${search || 'None'}`);
        });
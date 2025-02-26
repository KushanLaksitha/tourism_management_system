
        // Back to top button functionality
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
        
        // Navbar color change on scroll
        const navbar = document.querySelector('.navbar');
        
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                navbar.style.padding = '0.5rem 2rem';
                navbar.style.backgroundColor = 'rgba(1, 22, 39, 0.95) !important';
            } else {
                navbar.style.padding = '1rem 2rem';
                navbar.style.backgroundColor = 'rgba(1, 22, 39, 0.9) !important';
            }
        });
        
        // Animation triggers
        document.addEventListener("DOMContentLoaded", function() {
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top >= 0 &&
                    rect.left >= 0 &&
                    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
                    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
                );
            }
            
            // Elements to animate
            const elements = document.querySelectorAll('.slide-up');
            
            // Add scroll event listener
            window.addEventListener('scroll', function() {
                elements.forEach(element => {
                    if (isInViewport(element)) {
                        element.style.opacity = 1;
                        element.style.transform = 'translateY(0)';
                    }
                });
            });
            
            // Trigger once on load
            elements.forEach(element => {
                if (isInViewport(element)) {
                    element.style.opacity = 1;
                    element.style.transform = 'translateY(0)';
                }
            });
        });
        
        // Filter functionality
        const filterForm = document.querySelector('.filter-section form');
        
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // In a real application, you would handle the filter logic here
            // For demo purposes, we'll just show an alert
            alert('Filter applied! In a real application, this would filter the results.');
        });
        
        
        
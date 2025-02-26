
        // Sticky Navbar
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.style.padding = '0.5rem 2rem';
                navbar.style.backgroundColor = 'rgba(1, 22, 39, 0.95) !important';
            } else {
                navbar.style.padding = '1rem 2rem';
                navbar.style.backgroundColor = 'rgba(1, 22, 39, 0.9) !important';
            }
        });

        // Back to Top Button
        window.addEventListener('scroll', function() {
            const backToTop = document.querySelector('.back-to-top');
            if (window.scrollY > 300) {
                backToTop.classList.add('active');
            } else {
                backToTop.classList.remove('active');
            }
        });

        document.querySelector('.back-to-top').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Animation on scroll
        document.addEventListener('DOMContentLoaded', function() {
            const fadeElements = document.querySelectorAll('.fade-in');
            const slideElements = document.querySelectorAll('.slide-up');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.animation = entry.target.classList.contains('fade-in') 
                            ? 'fadeIn 1s ease-in-out forwards' 
                            : 'slideUp 1s ease-in-out forwards';
                    }
                });
            }, { threshold: 0.1 });
            
            fadeElements.forEach(el => observer.observe(el));
            slideElements.forEach(el => observer.observe(el));
        });
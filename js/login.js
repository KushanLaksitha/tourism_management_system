
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

        


    
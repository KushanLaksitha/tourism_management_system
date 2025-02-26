
document.addEventListener("DOMContentLoaded", function() {
    // Back to top button functionality
    const backToTopButton = document.querySelector('.back-to-top');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopButton.classList.add('active');
        } else {
            backToTopButton.classList.remove('active');
        }
    });
    
    backToTopButton.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
    
    // Navbar color change on scroll
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 50) {
            navbar.style.padding = '0.5rem 2rem';
        } else {
            navbar.style.padding = '1rem 2rem';
        }
    });
    
    // Toast notification functionality
    function showToast(message, duration = 3000) {
        const toastContainer = document.querySelector('.toast-container');
        const toast = document.createElement('div');
        toast.className = 'toast';
        toast.textContent = message;
        
        toastContainer.appendChild(toast);
        
        // Display the toast
        setTimeout(() => {
            toast.classList.add('show');
        }, 10);
        
        // Remove the toast after duration
        setTimeout(() => {
            toast.classList.remove('show');
            setTimeout(() => {
                toastContainer.removeChild(toast);
            }, 300);
        }, duration);
    }
    
    // Filter form functionality
    const filterForm = document.querySelector('.filter-section form');
    
    if (filterForm) {
        filterForm.addEventListener('submit', function(e) {
            e.preventDefault();
            showToast('Filtering results...', 2000);
            
            // Simulate filter operation
            setTimeout(() => {
                showToast('Results updated!', 2000);
            }, 1500);
        });
    }
});

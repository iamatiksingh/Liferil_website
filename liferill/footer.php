</div> <!-- End of content-area -->
</div> <!-- End of main-container -->

<!-- Bootstrap JS Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom JavaScript -->
<script>
    // Video play button functionality
    document.addEventListener('DOMContentLoaded', function() {
        const playButtons = document.querySelectorAll('.play-button');
        
        playButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Here you would typically trigger a video player
                alert('Video player would start here');
            });
        });
        
        // Mobile menu toggle functionality
        const mobileMenuToggle = document.querySelector('.mobile-menu-toggle');
        const sidebar = document.querySelector('.sidebar');
        
        if (mobileMenuToggle) {
            mobileMenuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('collapsed');
            });
        }
        
        // Collapse sidebar by default on mobile
        function checkScreenSize() {
            if (window.innerWidth <= 768) {
                sidebar.classList.add('collapsed');
            } else {
                sidebar.classList.remove('collapsed');
            }
        }
        
        // Check on load and resize
        checkScreenSize();
        window.addEventListener('resize', checkScreenSize);
    });
</script>
</body>
</html>
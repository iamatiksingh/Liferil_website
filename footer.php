<!-- App Download Section -->
<section class="app-download-section bg-white py-5">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-lg-6 text-center">
                                <img src="assets/app.png" class="img-fluid" style="width: 35%;"/>
                            </div>
                            <div class="col-lg-6 app-info">
                                <h2 class="display-4 fw-bold mb-3">DOWNLOAD<br>OUR <span class="highlight">App</span></h2>
                                <p class="tagline fs-4 mb-4 fst-italic">"DISCOVER THOSE<br>FAVOURITE MOMENTS"</p>
                                <div class="store-buttons d-flex flex-wrap gap-3">
                                    <a href="#" class="store-badge">
                                        <img src="assets/appstore.png" alt="App Store" height="60">
                                    </a>
                                    <a href="#" class="store-badge">
                                        <img src="assets/playstore.png" alt="Google Play" height="60">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Get Started Section as Footer -->
                <section class="get-started-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 mx-auto text-center">
                                <h2>Get Started</h2>
                                <p>Join <span class="brand-highlight">Liferil</span> and become a part of our community</p>
                                <div class="mt-4">
                                    <button class="btn btn-primary join-now-btn">Join Now</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                
                <!-- Footer -->
                <footer class="footer">
                    <div class="container">
                        <div class="google-play text-white">
                            <span>Design & Maintained By <a href="https://originventures.org" style="color: #0dcaf0;"> Origin Ventures</a></span>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Tab functionality for What We Offer section -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const offerCards = document.querySelectorAll('.offer-card');
            const tabContents = document.querySelectorAll('.tab-content');
            
            offerCards.forEach(card => {
                card.addEventListener('click', function() {
                    // Remove active class from all cards and tabs
                    offerCards.forEach(c => c.classList.remove('active'));
                    tabContents.forEach(tab => tab.classList.remove('active'));
                    
                    // Add active class to clicked card
                    this.classList.add('active');
                    
                    // Show corresponding tab content
                    const tabId = this.getAttribute('data-tab');
                    document.getElementById(tabId).classList.add('active');
                });
            });
            
            // Scroll animation functionality
            const animateSections = document.querySelectorAll('.animate-section');
            const animateItems = document.querySelectorAll('.animate-item');
            
            // Function to check if element is in viewport
            function isInViewport(element) {
                const rect = element.getBoundingClientRect();
                return (
                    rect.top <= (window.innerHeight || document.documentElement.clientHeight) * 0.8 &&
                    rect.bottom >= 0
                );
            }
            
            // Function to handle scroll animations
            function handleScrollAnimations() {
                animateSections.forEach(section => {
                    if (isInViewport(section) && !section.classList.contains('animated')) {
                        section.classList.add('animated');
                        section.style.opacity = 1;
                        
                        // Add specific animation class based on section
                        if (section.classList.contains('offer-section')) {
                            section.classList.add('fade-in');
                        } else if (section.classList.contains('feature-section')) {
                            section.classList.add('slide-up');
                        } else if (section.classList.contains('app-download-section')) {
                            section.classList.add('scale-in');
                        } else {
                            section.classList.add('fade-in');
                        }
                    }
                });
                
                animateItems.forEach(item => {
                    if (isInViewport(item) && !item.classList.contains('animated')) {
                        item.classList.add('animated');
                        item.style.opacity = 1;
                        
                        // Determine animation based on position
                        const rect = item.getBoundingClientRect();
                        const windowWidth = window.innerWidth || document.documentElement.clientWidth;
                        
                        if (rect.left < windowWidth / 2) {
                            item.classList.add('slide-in-left');
                        } else {
                            item.classList.add('slide-in-right');
                        }
                    }
                });
            }
            
            // Run once on page load
            setTimeout(handleScrollAnimations, 400);
            
            // Add scroll event listener
            window.addEventListener('scroll', handleScrollAnimations);
        });
    </script>
</body>
</html>
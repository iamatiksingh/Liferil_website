<?php
// Include header
include 'liferill/header.php';

// Include navigation
include 'liferill/navigation.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1>Reach Health-Conscious Audiences</h1>
                <p>Connect with our engaged community of health-focused individuals and healthcare professionals. Promote your health products and services to a targeted audience that values wellness and healthy living.</p>
                <a href="#" class="btn btn-primary">Advertise With Us</a>
            </div>
            <div class="col-md-6">
                <img src="assets/app.png" alt="Liferil for Advertisers" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="offer-section">
    <div class="container text-center">
        <h2>What We Offer for Advertisers</h2>
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center" id="offerTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="targeted-tab" data-bs-toggle="tab" data-bs-target="#targeted" type="button" role="tab" aria-controls="targeted" aria-selected="true">Targeted Advertising</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="analytics-tab" data-bs-toggle="tab" data-bs-target="#analytics" type="button" role="tab" aria-controls="analytics" aria-selected="false">Advanced Analytics</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="sponsored-tab" data-bs-toggle="tab" data-bs-target="#sponsored" type="button" role="tab" aria-controls="sponsored" aria-selected="false">Sponsored Content</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="partnership-tab" data-bs-toggle="tab" data-bs-target="#partnership" type="button" role="tab" aria-controls="partnership" aria-selected="false">Brand Partnerships</button>
            </li>
        </ul>
        
        <!-- Tabs Content -->
        <div class="tab-content" id="offerTabsContent">
            <div class="tab-pane fade show active" id="targeted" role="tabpanel" aria-labelledby="targeted-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Targeted Advertising" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Targeted Advertising</h3>
                        <p>Reach specific health-focused demographics with our precision targeting options. Connect with users based on health interests, conditions, and engagement patterns.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="analytics" role="tabpanel" aria-labelledby="analytics-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Advanced Analytics</h3>
                        <p>Get detailed insights into your campaign performance with our comprehensive analytics dashboard. Track engagement, conversions, and ROI in real-time.</p>
                    </div>
                    <div class="col-md-6">
                        <div class="video-container">
                            <div class="play-button">
                                <i class="bi bi-play-circle-fill"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="sponsored" role="tabpanel" aria-labelledby="sponsored-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Sponsored Content" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Sponsored Content</h3>
                        <p>Create valuable sponsored content that resonates with our health-conscious community. Partner with health influencers and experts to amplify your message.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="partnership" role="tabpanel" aria-labelledby="partnership-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Brand Partnerships</h3>
                        <p>Establish long-term partnerships with our platform for sustained brand visibility. Collaborate on health initiatives and campaigns that align with your brand values.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Brand Partnerships" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Video Demo Section -->
<section class="video-demo-section bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2>Advertising Platform Demo</h2>
                <p>Our intuitive advertising platform makes it easy to create, manage, and optimize your campaigns. Watch the video to learn more about our advertising features and benefits.</p>
            </div>
            <div class="col-md-6">
                <div class="video-container">
                    <div class="play-button">
                        <i class="bi bi-play-circle-fill"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Download Section -->
<section class="download-section">
    <div class="container text-center">
        <h2>Download Our Media Kit</h2>
        <p>Get detailed information about our advertising options and audience demographics</p>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="#" class="download-link">
                    <img src="assets/playstore.png" alt="Download Media Kit" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="download-link">
                    <img src="assets/appstore.png" alt="Contact Sales Team" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Get Started Section -->
<section class="get-started-section bg-dark text-white text-center">
    <div class="container">
        <h2>Get Started</h2>
        <p>Start advertising on Liferil and connect with our health-focused community</p>
        <a href="#" class="btn btn-primary">Contact Our Ad Team</a>
    </div>
</section>

<?php
// Include footer
include 'liferill/footer.php';
?>
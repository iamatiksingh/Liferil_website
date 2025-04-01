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
                <h1>A complete suite for a healthy & fun filled social life</h1>
                <p>Your innovative social media profile with creative features to engage with all health cautious, health focused people in the world including doctors & health experts.</p>
                <a href="#" class="btn btn-primary">Join Now</a>
            </div>
            <div class="col-md-6">
                <img src="assets/app.png" alt="Liferil App" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="offer-section">
    <div class="container text-center">
        <h2>What We Offer</h2>
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center" id="offerTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="social-tab" data-bs-toggle="tab" data-bs-target="#social" type="button" role="tab" aria-controls="social" aria-selected="true">Social Engagement For Health</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="healthlog-tab" data-bs-toggle="tab" data-bs-target="#healthlog" type="button" role="tab" aria-controls="healthlog" aria-selected="false">Healthlog</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="communities-tab" data-bs-toggle="tab" data-bs-target="#communities" type="button" role="tab" aria-controls="communities" aria-selected="false">Health Communities</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="passport-tab" data-bs-toggle="tab" data-bs-target="#passport" type="button" role="tab" aria-controls="passport" aria-selected="false">Health Passport</button>
            </li>
        </ul>
        
        <!-- Tabs Content -->
        <div class="tab-content" id="offerTabsContent">
            <div class="tab-pane fade show active" id="social" role="tabpanel" aria-labelledby="social-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Social Engagement" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Social Engagement For Health</h3>
                        <p>Connect with health-focused individuals and professionals. Share your health journey and learn from others.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="healthlog" role="tabpanel" aria-labelledby="healthlog-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Healthlog</h3>
                        <p>Maintain a health log to stay on top of your health concerns. Makes your consultations easier. Watch the video to learn more about the feature.</p>
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
            <div class="tab-pane fade" id="communities" role="tabpanel" aria-labelledby="communities-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Health Communities" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Health Communities</h3>
                        <p>Join communities of people with similar health interests or conditions. Share experiences and support each other.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="passport" role="tabpanel" aria-labelledby="passport-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Health Passport</h3>
                        <p>Keep all your health records in one place. Share with healthcare providers when needed for better care.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Health Passport" class="img-fluid">
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
                <h2>Healthlog</h2>
                <p>Maintain a health log to stay on top of your health concerns. Makes your consultations easier. Watch the video to learn more about the feature.</p>
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
        <h2>Download Our App</h2>
        <p>Get the Liferil app on your mobile device</p>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <a href="#" class="download-link">
                    <img src="assets/playstore.png" alt="Google Play Store" class="img-fluid">
                </a>
            </div>
            <div class="col-md-3">
                <a href="#" class="download-link">
                    <img src="assets/appstore.png" alt="Apple App Store" class="img-fluid">
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Get Started Section -->
<section class="get-started-section bg-dark text-white text-center">
    <div class="container">
        <h2>Get Started</h2>
        <p>Join DocoWin and become a part of our community</p>
        <a href="#" class="btn btn-primary">Join Now</a>
    </div>
</section>

<?php
// Include footer
include 'liferill/footer.php';
?>
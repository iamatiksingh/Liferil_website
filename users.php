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
                <h1>Your Personal Health Journey Starts Here</h1>
                <p>Join our health-focused social platform designed to help you connect with like-minded individuals, track your health progress, and access valuable resources for a healthier lifestyle.</p>
                <a href="#" class="btn btn-primary">Join Now</a>
            </div>
            <div class="col-md-6">
                <img src="assets/app.png" alt="Liferil for Users" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="offer-section">
    <div class="container text-center">
        <h2>What We Offer for Users</h2>
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center" id="offerTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="connect-tab" data-bs-toggle="tab" data-bs-target="#connect" type="button" role="tab" aria-controls="connect" aria-selected="true">Connect & Share</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="track-tab" data-bs-toggle="tab" data-bs-target="#track" type="button" role="tab" aria-controls="track" aria-selected="false">Track Your Health</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="learn-tab" data-bs-toggle="tab" data-bs-target="#learn" type="button" role="tab" aria-controls="learn" aria-selected="false">Learn & Grow</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="consult-tab" data-bs-toggle="tab" data-bs-target="#consult" type="button" role="tab" aria-controls="consult" aria-selected="false">Consult Experts</button>
            </li>
        </ul>
        
        <!-- Tabs Content -->
        <div class="tab-content" id="offerTabsContent">
            <div class="tab-pane fade show active" id="connect" role="tabpanel" aria-labelledby="connect-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Connect & Share" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Connect & Share</h3>
                        <p>Connect with health-conscious individuals who share your interests and goals. Share your health journey and inspire others while getting motivated by their stories.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="track" role="tabpanel" aria-labelledby="track-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Track Your Health</h3>
                        <p>Use our comprehensive health log to track your vital statistics, symptoms, medications, and overall wellbeing. Make informed decisions about your health with data-driven insights.</p>
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
            <div class="tab-pane fade" id="learn" role="tabpanel" aria-labelledby="learn-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Learn & Grow" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Learn & Grow</h3>
                        <p>Access a wealth of health information, tips, and resources from verified healthcare professionals. Stay updated with the latest health trends and research.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="consult" role="tabpanel" aria-labelledby="consult-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Consult Experts</h3>
                        <p>Connect with healthcare professionals for advice and consultations. Share your health logs with them for more personalized care and recommendations.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Consult Experts" class="img-fluid">
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
                <h2>Health Tracking Features</h2>
                <p>Our intuitive health tracking tools help you monitor your progress, set goals, and stay motivated. Watch the video to learn more about these features.</p>
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
        <p>Get the Liferil app on your mobile device for on-the-go health tracking</p>
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
        <p>Join Liferil today and take control of your health journey</p>
        <a href="#" class="btn btn-primary">Join Now</a>
    </div>
</section>

<?php
// Include footer
include 'liferill/footer.php';
?>
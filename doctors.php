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
                <h1>Empowering Healthcare Professionals</h1>
                <p>Join our specialized platform designed for doctors and healthcare providers to connect with patients, share expertise, and grow your practice in a health-focused community.</p>
                <a href="#" class="btn btn-primary">Join as a Doctor</a>
            </div>
            <div class="col-md-6">
                <img src="assets/app.png" alt="Liferil for Doctors" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="offer-section">
    <div class="container text-center">
        <h2>What We Offer for Doctors</h2>
        
        <!-- Tabs Navigation -->
        <ul class="nav nav-tabs justify-content-center" id="offerTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="true">Professional Profile</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="patients-tab" data-bs-toggle="tab" data-bs-target="#patients" type="button" role="tab" aria-controls="patients" aria-selected="false">Patient Management</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="expertise-tab" data-bs-toggle="tab" data-bs-target="#expertise" type="button" role="tab" aria-controls="expertise" aria-selected="false">Share Expertise</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="network-tab" data-bs-toggle="tab" data-bs-target="#network" type="button" role="tab" aria-controls="network" aria-selected="false">Professional Network</button>
            </li>
        </ul>
        
        <!-- Tabs Content -->
        <div class="tab-content" id="offerTabsContent">
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Professional Profile" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Professional Profile</h3>
                        <p>Create a comprehensive professional profile showcasing your expertise, qualifications, and services to attract patients seeking specialized care.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="patients" role="tabpanel" aria-labelledby="patients-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Patient Management</h3>
                        <p>Access patient health logs and records with permission, making consultations more efficient and personalized for better healthcare outcomes.</p>
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
            <div class="tab-pane fade" id="expertise" role="tabpanel" aria-labelledby="expertise-tab">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Share Expertise" class="img-fluid">
                    </div>
                    <div class="col-md-6 text-start">
                        <h3>Share Expertise</h3>
                        <p>Share your medical knowledge through articles, Q&A sessions, and health tips to establish yourself as a thought leader in your specialty.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="network" role="tabpanel" aria-labelledby="network-tab">
                <div class="row align-items-center">
                    <div class="col-md-6 text-start">
                        <h3>Professional Network</h3>
                        <p>Connect with other healthcare professionals for referrals, collaborations, and knowledge sharing to enhance your practice.</p>
                    </div>
                    <div class="col-md-6">
                        <img src="assets/app.jpeg" alt="Professional Network" class="img-fluid">
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
                <h2>Patient Management System</h2>
                <p>Our intuitive patient management system helps you keep track of patient health logs, appointments, and medical history. Watch the video to learn more about this feature.</p>
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
        <p>Get the Liferil app on your mobile device for on-the-go patient management</p>
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
        <p>Join Liferil as a healthcare professional and enhance your practice</p>
        <a href="#" class="btn btn-primary">Join Now</a>
    </div>
</section>

<?php
// Include footer
include 'liferill/footer.php';
?>
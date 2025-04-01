<?php
include 'header.php';
include 'navigation.php';
?>

            
            <!-- Main Content -->
            <div class="col-md-10 main-content">
                <!-- Hero Section -->
                <section class="hero-section animate-section">
                    <div class="row g-0">
                        <div class="col-md-6 hero-text animate-item">
                            <h1>Your Personal Health Journey Starts Here</h1>
                            <p>Connect with health experts, track your wellness goals, and join a community of health-conscious individuals all in one innovative social platform.</p>
                            <button class="btn btn-primary join-now-btn">Join Now</button>
                        </div>
                        <div class="col-md-6 hero-image animate-item">
                            <img src="https://img.freepik.com/free-photo/doctor-nurses-special-equipment_23-2148980721.jpg" alt="Healthcare Professional" class="img-fluid">
                        </div>
                    </div>
                </section>
                
                <!-- What We Offer Section -->
                <section class="offer-section animate-section">
                    <h2 class="section-title text-center animate-item">Features for Your Health Journey</h2>
                    
                    <div class="row offer-cards">
                        <div class="col-md-3">
                            <div class="card offer-card active animate-item" data-tab="social-engagement">
                                <img src="https://img.freepik.com/free-photo/group-diverse-people-having-business-meeting_53876-25060.jpg" class="card-img-top" alt="Social Engagement">
                                <div class="card-body">
                                    <h5 class="card-title">Social Engagement For Health</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card offer-card" data-tab="healthlog">
                                <img src="https://img.freepik.com/free-photo/medical-banner-with-doctor-holding-tablet_23-2149611240.jpg" class="card-img-top" alt="Healthlog">
                                <div class="card-body">
                                    <h5 class="card-title">Healthlog</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card offer-card" data-tab="health-communities">
                                <img src="https://img.freepik.com/free-photo/medium-shot-people-working-together_23-2149300663.jpg" class="card-img-top" alt="Health Communities">
                                <div class="card-body">
                                    <h5 class="card-title">Health Communities</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card offer-card" data-tab="health-passport">
                                <img src="https://img.freepik.com/free-photo/medical-report-with-stethoscope-desk_23-2148504759.jpg" class="card-img-top" alt="Health Passport - Medical Records">
                                <div class="card-body">
                                    <h5 class="card-title">Health Passport</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Tab Content -->
                    <div class="tab-contents">
                        <div id="social-engagement" class="tab-content active">
                            <h3>Social Engagement For Health</h3>
                            <p>Connect with health-focused individuals and professionals. Share your health journey, get advice, and motivate others in their health goals.</p>
                            <p>Our social engagement features allow you to:</p>
                            <ul>
                                <li>Create health-focused posts and updates</li>
                                <li>Connect with verified doctors and health experts</li>
                                <li>Join health challenges and activities</li>
                                <li>Share your progress with your support network</li>
                            </ul>
                        </div>
                        
                        <div id="healthlog" class="tab-content">
                            <h3>Healthlog</h3>
                            <p>Maintain a personal health log to stay on top of your wellness journey. Track progress and share relevant information with your healthcare providers.</p>
                            <p>Key features include:</p>
                            <ul>
                                <li>Daily health and fitness tracking</li>
                                <li>Medication and appointment reminders</li>
                                <li>Symptom and mood journal</li>
                                <li>Secure sharing with your healthcare team</li>
                            </ul>
                        </div>
                        
                        <div id="health-communities" class="tab-content">
                            <h3>Health Communities</h3>
                            <p>Join communities of people with similar health interests or conditions. Learn from others' experiences and find support on your health journey.</p>
                            <p>Our communities offer:</p>
                            <ul>
                                <li>Condition-specific support groups</li>
                                <li>Fitness and nutrition communities</li>
                                <li>Mental wellness support networks</li>
                                <li>Expert-led discussions and Q&A sessions</li>
                            </ul>
                        </div>
                        
                        <div id="health-passport" class="tab-content">
                            <h3>Health Passport</h3>
                            <p>Your digital health passport contains all your essential health information in one secure place. Access it anytime, anywhere, and share with providers when needed.</p>
                            <p>Features include:</p>
                            <ul>
                                <li>Personal medical history storage</li>
                                <li>Vaccination and test records</li>
                                <li>Allergy and medication information</li>
                                <li>Emergency contact details and health directives</li>
                            </ul>
                        </div>
                    </div>
                </section>
                
                <!-- Feature Highlight Section -->
                <section class="feature-section">
                    <div class="row g-0">
                        <div class="col-md-6 feature-text">
                            <h2>Virtual Health Consultations</h2>
                            <p>Connect with healthcare professionals from the comfort of your home. Schedule virtual consultations, get expert advice, and manage your health with ease. Watch the video to learn more about this feature.</p>
                        </div>
                        <div class="col-md-6 feature-video">
                            <div class="video-container">
                                <div class="play-button">
                                    <i class="fas fa-play"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

<?php
include 'footer.php';
?>
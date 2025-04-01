<!-- Fixed Sidebar -->
<div class="sidebar">
    <div class="mobile-menu-toggle">
        <i class="bi bi-list"></i>
    </div>
    
    <div class="sidebar-content">
        <div class="logo-container">
            <img src="https://web.liferil.com/images/logo.png" alt="Liferil Logo" class="logo">
        </div>
        
        <div class="sidebar-taglines">
            <p class="tagline-1">Health should be your utmost priority in life...</p>
            <p class="tagline-2">Everything is secondary...!</p>
        </div>
        
        <div class="sidebar-menu">
            <a href="index.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">For All</a>
            <a href="doctors.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'doctors.php' ? 'active' : ''; ?>">For Doctors</a>
            <a href="users.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'users.php' ? 'active' : ''; ?>">For Users</a>
            <a href="advertisers.php" class="menu-item <?php echo basename($_SERVER['PHP_SELF']) == 'advertisers.php' ? 'active' : ''; ?>">For Advertisers</a>
        </div>
        
        <div class="login-container">
            <a href="#" class="btn btn-light btn-login">Login / Sign Up</a>
        </div>
    </div>
</div>

<!-- Main Content Area -->
<div class="content-area">
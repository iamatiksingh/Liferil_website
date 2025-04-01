<?php
 $link = $_SERVER['PHP_SELF'];
    $link_array = explode('/',$link);
    $page = end($link_array);
    
?>
<body>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                <i class="fas fa-bars"></i>
            </button>
            
            <!-- Sidebar Overlay -->
            <div class="sidebar-overlay" id="sidebar-overlay"></div>
            
            <!-- Left Sidebar -->
            <div class="col-md-2 sidebar" id="sidebar">
                <div class="sidebar-content">
                    <div class="logo-container">
                        <img src="https://web.liferil.com/images/logo.png" alt="Liferil Logo" class="logo">
                    </div>
                    
                    <div class="sidebar-quotes">
                        <p class="quote-primary">Health should be your utmost priority in life...</p>
                        <p class="quote-secondary">Everything is secondary...!</p>
                    </div>
                    
                    <div class="sidebar-menu">
                        <div class="menu-item <?php if($page=='index.php' ||$page=='' || $page==NULL || $page=='0') echo 'active'; ?>">
                            <a href="/" class="menu-link"><i class="fas fa-users me-2"></i>For All</a>
                        </div>
                        <div class="menu-item <?php if($page=='doctors.php') echo 'active'; ?>">
                            <a href="doctors.php" class="menu-link"><i class="fas fa-user-md me-2"></i>For Doctors</a>
                        </div>
                        <div class="menu-item <?php if($page=='users.php') echo 'active'; ?>">
                            <a href="users.php" class="menu-link"><i class="fas fa-user me-2"></i>For Users</a>
                        </div>
                        <div class="login-container mt-3">
                            <a href="https://web.liferil.com/login" target="_blank"><button class="btn btn-light login-btn">
                                <i class="fas fa-sign-in-alt me-2"></i>Login / Sign Up 
                            </button></a>
                        </div>
                    </div>
                </div>
            </div>
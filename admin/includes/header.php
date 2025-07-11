<?php
require_once 'auth.php';
$auth->redirectIfNotLoggedIn();

$currentPage = basename($_SERVER['PHP_SELF']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel | Portfolio</title>
    <link rel="stylesheet" href="assets/css/admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="assets/js/admin.js" defer></script>
</head>
<body>
    <div class="dashboard-container">
        <aside class="sidebar">
            <div class="sidebar-header">
                <h2><i class="fas fa-user-shield"></i> <span>Admin Panel</span></h2>
            </div>
            
            <nav class="sidebar-menu">
                <a href="dashboard.php" class="menu-item <?php echo $currentPage === 'dashboard.php' ? 'active' : ''; ?>">
                    <i class="fas fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
                
                <a href="../projects/index.php" class="menu-item <?php echo strpos($currentPage, 'projects/') !== false ? 'active' : ''; ?>">
                    <i class="fas fa-project-diagram"></i>
                    <span>Projects</span>
                </a>
                
                <a href="../profile/education.php" class="menu-item <?php echo strpos($currentPage, 'education.php') !== false ? 'active' : ''; ?>">
                    <i class="fas fa-graduation-cap"></i>
                    <span>Education</span>
                </a>
                
                <a href="../profile/experience.php" class="menu-item <?php echo strpos($currentPage, 'experience.php') !== false ? 'active' : ''; ?>">
                    <i class="fas fa-briefcase"></i>
                    <span>Experience</span>
                </a>
                
                <a href="../profile/skills.php" class="menu-item <?php echo strpos($currentPage, 'skills.php') !== false ? 'active' : ''; ?>">
                    <i class="fas fa-code"></i>
                    <span>Skills</span>
                </a>
                
                <a href="messages.php" class="menu-item <?php echo $currentPage === 'messages.php' ? 'active' : ''; ?>">
                    <i class="fas fa-envelope"></i>
                    <span>Messages</span>
                </a>
                
                <a href="settings.php" class="menu-item <?php echo $currentPage === 'settings.php' ? 'active' : ''; ?>">
                    <i class="fas fa-cog"></i>
                    <span>Settings</span>
                </a>
                
                <a href="logout.php" class="menu-item">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </nav>
        </aside>
        
        <div class="main-content">
            <header class="topbar">
                <button id="sidebarToggle" class="btn btn-secondary">
                    <i class="fas fa-bars"></i>
                </button>
                
                <div class="user-profile">
                    <div class="user-avatar">
                        <?php echo strtoupper(substr($_SESSION['admin_username'], 0, 1)); ?>
                    </div>
                    <span><?php echo $_SESSION['admin_username']; ?></span>
                </div>
            </header>
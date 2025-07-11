<?php
require_once 'includes/auth.php';
require_once 'includes/header.php';

$auth->redirectIfNotLoggedIn();
?>

<div class="dashboard-container">
    <?php include 'includes/header.php'; ?>
    
    <main class="dashboard-content">
        <div class="dashboard-header">
            <h1>Dashboard</h1>
            <p>Welcome back, <?php echo $_SESSION['admin_username']; ?></p>
        </div>
        
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-icon bg-primary">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="stat-info">
                    <h3>New Messages</h3>
                    <p>12</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon bg-success">
                    <i class="fas fa-project-diagram"></i>
                </div>
                <div class="stat-info">
                    <h3>Projects</h3>
                    <p>5</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon bg-warning">
                    <i class="fas fa-graduation-cap"></i>
                </div>
                <div class="stat-info">
                    <h3>Education</h3>
                    <p>3</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon bg-danger">
                    <i class="fas fa-briefcase"></i>
                </div>
                <div class="stat-info">
                    <h3>Experience</h3>
                    <p>4</p>
                </div>
            </div>
        </div>
        
        <div class="recent-activities">
            <h2>Recent Activities</h2>
            <div class="activity-list">
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="activity-details">
                        <p>New message from John Doe</p>
                        <small>2 hours ago</small>
                    </div>
                </div>
                
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-edit"></i>
                    </div>
                    <div class="activity-details">
                        <p>You updated the "Hotel Management System" project</p>
                        <small>1 day ago</small>
                    </div>
                </div>
                
                <div class="activity-item">
                    <div class="activity-icon">
                        <i class="fas fa-plus"></i>
                    </div>
                    <div class="activity-details">
                        <p>You added a new skill "Vue.js"</p>
                        <small>3 days ago</small>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>

<?php include 'includes/footer.php'; ?>
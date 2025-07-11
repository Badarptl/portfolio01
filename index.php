<?php
$pageTitle = "Home | My Portfolio";
require_once 'includes/header.php';
?>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text" data-aos="fade-right">
                    <h1 class="hero-title">Hi, I'm <span>Badar</span></h1>
                    <h2 class="hero-subtitle">Freelance Developer</h2>
                    <p class="hero-description">BCA Graduate building digital solutions that make a difference.</p>
                    <div class="hero-buttons">
                        <a href="projects.php" class="btn btn-primary">View My Work</a>
                        <a href="contact.php" class="btn btn-secondary">Contact Me</a>
                    </div>
                </div>
                <div class="hero-image" data-aos="fade-left">
                    <div class="image-wrapper">
                        <img src="assets/images/profile.jpg" alt="Profile Image" class="profile-img">
                        <div class="shape shape-1"></div>
                        <div class="shape shape-2"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="skills">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">My Skills</h2>
            <div class="skills-grid">
                <div class="skill-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="skill-icon">
                        <i class="fas fa-code"></i>
                    </div>
                    <h3 class="skill-title">Web Development</h3>
                    <p class="skill-description">Building responsive and interactive websites using modern technologies.</p>
                </div>
                
                <div class="skill-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="skill-icon">
                        <i class="fas fa-database"></i>
                    </div>
                    <h3 class="skill-title">Database Design</h3>
                    <p class="skill-description">Creating efficient database structures for optimal performance.</p>
                </div>
                
                <div class="skill-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="skill-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3 class="skill-title">Responsive Design</h3>
                    <p class="skill-description">Ensuring websites look great on all devices and screen sizes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="featured-projects">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Featured Projects</h2>
            <div class="projects-grid">
                <div class="project-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="project-image">
                        <img src="assets/images/projects/kiosk-system.jpg" alt="Kiosk Management System">
                        <div class="project-overlay">
                            <a href="projects.php#kiosk" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Kiosk Management System</h3>
                        <p class="project-description">A comprehensive system for managing kiosk operations and inventory.</p>
                    </div>
                </div>
                
                <div class="project-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="project-image">
                        <img src="assets/images/projects/driver-system.jpg" alt="Driver Management System">
                        <div class="project-overlay">
                            <a href="projects.php#driver" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Driver Management System</h3>
                        <p class="project-description">System for managing driver schedules, assignments, and performance.</p>
                    </div>
                </div>
                
                <div class="project-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="project-image">
                        <img src="assets/images/projects/hotel-system.jpg" alt="Hotel Management System">
                        <div class="project-overlay">
                            <a href="projects.php#hotel" class="btn btn-primary">View Details</a>
                        </div>
                    </div>
                    <div class="project-info">
                        <h3 class="project-title">Hotel Management System</h3>
                        <p class="project-description">Complete solution for hotel operations including reservations and billing.</p>
                    </div>
                </div>
            </div>
            
            <div class="section-footer" data-aos="fade-up">
                <a href="projects.php" class="btn btn-secondary">View All Projects</a>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
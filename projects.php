<?php
$pageTitle = "Projects | My Portfolio";
require_once 'includes/header.php';
?>

<main>
    <!-- Projects Section -->
    <section class="projects">
        <div class="container">
            <h1 class="page-title" data-aos="fade-up">My Projects</h1>
            <p class="page-subtitle" data-aos="fade-up" data-aos-delay="100">Here are some of my completed projects</p>
            
            <!-- Kiosk Management System -->
            <div class="project-detail" id="kiosk" data-aos="fade-up">
                <div class="project-header">
                    <h2 class="project-title">Kiosk Management System</h2>
                    <div class="project-badge">Completed</div>
                </div>
                
                <div class="project-content">
                    <div class="project-image-gallery">
                        <img src="assets/images/projects/kiosk-system.jpg" alt="Kiosk Management System" class="main-image">
                        <div class="thumbnail-container">
                            <img src="assets/images/projects/kiosk-1.jpg" alt="Kiosk System Screenshot 1" class="thumbnail">
                            <img src="assets/images/projects/kiosk-2.jpg" alt="Kiosk System Screenshot 2" class="thumbnail">
                            <img src="assets/images/projects/kiosk-3.jpg" alt="Kiosk System Screenshot 3" class="thumbnail">
                        </div>
                    </div>
                    
                    <div class="project-info">
                        <h3>Project Description</h3>
                        <p>A comprehensive system designed to manage kiosk operations, inventory, and sales. The system provides real-time analytics and reporting features to help business owners make data-driven decisions.</p>
                        
                        <h3>Features</h3>
                        <ul class="feature-list">
                            <li>Inventory management</li>
                            <li>Sales tracking and reporting</li>
                            <li>User management with different access levels</li>
                            <li>Real-time analytics dashboard</li>
                            <li>Barcode scanning integration</li>
                        </ul>
                        
                        <h3>Technology Stack</h3>
                        <div class="tech-stack">
                            <span class="tech-item">PHP</span>
                            <span class="tech-item">MySQL</span>
                            <span class="tech-item">JavaScript</span>
                            <span class="tech-item">Bootstrap</span>
                            <span class="tech-item">jQuery</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Driver Management System -->
            <div class="project-detail" id="driver" data-aos="fade-up">
                <div class="project-header">
                    <h2 class="project-title">Driver Management System</h2>
                    <div class="project-badge">Completed</div>
                </div>
                
                <div class="project-content">
                    <div class="project-image-gallery">
                        <img src="assets/images/projects/driver-system.jpg" alt="Driver Management System" class="main-image">
                        <div class="thumbnail-container">
                            <img src="assets/images/projects/driver-1.jpg" alt="Driver System Screenshot 1" class="thumbnail">
                            <img src="assets/images/projects/driver-2.jpg" alt="Driver System Screenshot 2" class="thumbnail">
                        </div>
                    </div>
                    
                    <div class="project-info">
                        <h3>Project Description</h3>
                        <p>A system designed to manage driver schedules, assignments, and performance metrics. The solution helps transportation companies optimize their operations and improve efficiency.</p>
                        
                        <h3>Features</h3>
                        <ul class="feature-list">
                            <li>Driver scheduling and assignment</li>
                            <li>Route optimization</li>
                            <li>Performance tracking</li>
                            <li>Document management (licenses, certifications)</li>
                            <li>Mobile-friendly interface</li>
                        </ul>
                        
                        <h3>Technology Stack</h3>
                        <div class="tech-stack">
                            <span class="tech-item">PHP</span>
                            <span class="tech-item">MySQL</span>
                            <span class="tech-item">Laravel</span>
                            <span class="tech-item">Vue.js</span>
                            <span class="tech-item">Google Maps API</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hotel Management System -->
            <div class="project-detail" id="hotel" data-aos="fade-up">
                <div class="project-header">
                    <h2 class="project-title">Hotel Management System</h2>
                    <div class="project-badge">Completed</div>
                </div>
                
                <div class="project-content">
                    <div class="project-image-gallery">
                        <img src="assets/images/projects/hotel-system.jpg" alt="Hotel Management System" class="main-image">
                        <div class="thumbnail-container">
                            <img src="assets/images/projects/hotel-1.jpg" alt="Hotel System Screenshot 1" class="thumbnail">
                            <img src="assets/images/projects/hotel-2.jpg" alt="Hotel System Screenshot 2" class="thumbnail">
                            <img src="assets/images/projects/hotel-3.jpg" alt="Hotel System Screenshot 3" class="thumbnail">
                        </div>
                    </div>
                    
                    <div class="project-info">
                        <h3>Project Description</h3>
                        <p>A complete hotel management solution that handles reservations, room assignments, billing, and housekeeping. The system streamlines operations for small to medium-sized hotels and resorts.</p>
                        
                        <h3>Features</h3>
                        <ul class="feature-list">
                            <li>Online reservation system</li>
                            <li>Room management and assignment</li>
                            <li>Billing and invoicing</li>
                            <li>Housekeeping status tracking</li>
                            <li>Reporting and analytics</li>
                        </ul>
                        
                        <h3>Technology Stack</h3>
                        <div class="tech-stack">
                            <span class="tech-item">PHP</span>
                            <span class="tech-item">MySQL</span>
                            <span class="tech-item">CodeIgniter</span>
                            <span class="tech-item">JavaScript</span>
                            <span class="tech-item">Stripe API</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
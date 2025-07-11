<?php
$pageTitle = "About Me | My Portfolio";
require_once 'includes/header.php';
?>

<main>
    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-image" data-aos="fade-right">
                    <img src="assets/images/profile.jpg" alt="Profile Image">
                    <div class="shape shape-1"></div>
                    <div class="shape shape-2"></div>
                </div>
                
                <div class="about-text" data-aos="fade-left">
                    <h1 class="page-title">About Me</h1>
                    <p class="about-description">
                        Hello! I'm Badar, a freelance developer with a Bachelor's degree in Computer Applications (BCA). 
                        I specialize in building custom software solutions that help businesses streamline their operations.
                    </p>
                    
                    <div class="about-tabs">
                        <div class="tab-header">
                            <button class="tab-link active" data-tab="education">Education</button>
                            <button class="tab-link" data-tab="experience">Experience</button>
                            <button class="tab-link" data-tab="skills">Skills</button>
                        </div>
                        
                        <div class="tab-content">
                            <!-- Education Tab -->
                            <div id="education" class="tab-pane active">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <h3 class="timeline-title">Bachelor of Computer Applications (BCA)</h3>
                                        <p class="timeline-date">2018 - 2021</p>
                                        <p class="timeline-description">
                                            Completed my graduation with a focus on software development, database management, 
                                            and web technologies. Developed several projects during my coursework.
                                        </p>
                                    </div>
                                    
                                    <div class="timeline-item">
                                        <h3 class="timeline-title">Higher Secondary Education</h3>
                                        <p class="timeline-date">2016 - 2018</p>
                                        <p class="timeline-description">
                                            Completed 12th grade with Computer Science as my main subject, laying the foundation 
                                            for my technical education.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Experience Tab -->
                            <div id="experience" class="tab-pane">
                                <div class="timeline">
                                    <div class="timeline-item">
                                        <h3 class="timeline-title">Freelance Developer</h3>
                                        <p class="timeline-date">2021 - Present</p>
                                        <p class="timeline-description">
                                            Working with clients to develop custom software solutions including management systems, 
                                            web applications, and database solutions. Notable projects include Kiosk Management System, 
                                            Driver Management System, and Hotel Management System.
                                        </p>
                                    </div>
                                    
                                    <div class="timeline-item">
                                        <h3 class="timeline-title">Internship at Tech Solutions</h3>
                                        <p class="timeline-date">Summer 2020</p>
                                        <p class="timeline-description">
                                            Worked as a web development intern, contributing to client projects and gaining hands-on 
                                            experience with PHP, MySQL, and front-end technologies.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Skills Tab -->
                            <div id="skills" class="tab-pane">
                                <div class="skills-container">
                                    <div class="skill-category">
                                        <h4>Frontend</h4>
                                        <ul>
                                            <li>HTML5 & CSS3</li>
                                            <li>JavaScript (ES6+)</li>
                                            <li>Bootstrap</li>
                                            <li>jQuery</li>
                                            <li>Vue.js</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="skill-category">
                                        <h4>Backend</h4>
                                        <ul>
                                            <li>PHP</li>
                                            <li>MySQL</li>
                                            <li>Laravel</li>
                                            <li>CodeIgniter</li>
                                            <li>RESTful APIs</li>
                                        </ul>
                                    </div>
                                    
                                    <div class="skill-category">
                                        <h4>Tools & Others</h4>
                                        <ul>
                                            <li>Git & GitHub</li>
                                            <li>XAMPP/WAMP</li>
                                            <li>VS Code</li>
                                            <li>Photoshop</li>
                                            <li>Figma</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="about-cta">
                        <a href="projects.php" class="btn btn-primary">View My Work</a>
                        <a href="contact.php" class="btn btn-secondary">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Client Testimonials</h2>
            
            <div class="testimonial-slider" data-aos="fade-up">
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            <p>"Badar developed our Hotel Management System exactly as we needed. His attention to detail and understanding of our requirements was impressive."</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Rajesh Kumar</h4>
                            <p>Hotel Owner</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            <p>"The Driver Management System has transformed our operations. Badar was professional and delivered on time despite our changing requirements."</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Priya Sharma</h4>
                            <p>Transport Manager</p>
                        </div>
                    </div>
                </div>
                
                <div class="testimonial-slide">
                    <div class="testimonial-content">
                        <div class="testimonial-text">
                            <p>"Working with Badar on our Kiosk System was a great experience. He provided regular updates and incorporated all our feedback promptly."</p>
                        </div>
                        <div class="testimonial-author">
                            <h4>Anil Patel</h4>
                            <p>Retail Business Owner</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php require_once 'includes/footer.php'; ?>
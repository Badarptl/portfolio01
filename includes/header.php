<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'My Portfolio'; ?></title>
    
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/animations.css">
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading-screen">
        <div class="loading-spinner">
            <div class="spinner-circle"></div>
            <div class="spinner-text">Loading...</div>
        </div>
    </div>

    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <a href="index.php" class="logo" data-aos="fade-down">Portfolio</a>
            
            <div class="menu-toggle" id="mobile-menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
            
            <ul class="nav-list">
                <li><a href="index.php" class="nav-link" data-aos="fade-down" data-aos-delay="100">Home</a></li>
                <li><a href="projects.php" class="nav-link" data-aos="fade-down" data-aos-delay="200">Projects</a></li>
                <li><a href="about.php" class="nav-link" data-aos="fade-down" data-aos-delay="300">About</a></li>
                <li><a href="contact.php" class="nav-link" data-aos="fade-down" data-aos-delay="400">Contact</a></li>
            </ul>
        </div>
    </nav>

    <!-- Inline Script for Mobile Menu and Loading Screen -->
    <script>
        // Mobile Menu Toggle
        const menuToggle = document.getElementById('mobile-menu');
        const navList = document.querySelector('.nav-list');
        menuToggle.addEventListener('click', () => {
            menuToggle.classList.toggle('active');
            navList.classList.toggle('active');
        });

        // Hide Loading Screen on Load
        window.addEventListener('load', () => {
            const loadingScreen = document.querySelector('.loading-screen');
            loadingScreen.style.opacity = '0';
            setTimeout(() => {
                loadingScreen.style.display = 'none';
            }, 500);
        });
    </script>
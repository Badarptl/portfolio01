document.addEventListener('DOMContentLoaded', function() {
    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);
    
    // Hero section animations
    gsap.from('.hero-title', {
        duration: 1,
        y: 50,
        opacity: 0,
        ease: 'power3.out'
    });
    
    gsap.from('.hero-subtitle', {
        duration: 1,
        y: 50,
        opacity: 0,
        delay: 0.3,
        ease: 'power3.out'
    });
    
    gsap.from('.hero-description', {
        duration: 1,
        y: 50,
        opacity: 0,
        delay: 0.6,
        ease: 'power3.out'
    });
    
    gsap.from('.hero-buttons', {
        duration: 1,
        y: 50,
        opacity: 0,
        delay: 0.9,
        ease: 'power3.out'
    });
    
    gsap.from('.profile-img', {
        duration: 1,
        scale: 0.8,
        opacity: 0,
        delay: 0.6,
        ease: 'back.out(1.7)'
    });
    
    gsap.from('.shape-1', {
        duration: 1,
        scale: 0,
        opacity: 0,
        delay: 0.3,
        ease: 'back.out(1.7)'
    });
    
    gsap.from('.shape-2', {
        duration: 1,
        scale: 0,
        opacity: 0,
        delay: 0.9,
        ease: 'back.out(1.7)'
    });
    
    // Skill cards animation on scroll
    gsap.utils.toArray('.skill-card').forEach(card => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 80%',
                toggleActions: 'play none none none'
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out'
        });
    });
    
    // Project cards animation on scroll
    gsap.utils.toArray('.project-card').forEach(card => {
        gsap.from(card, {
            scrollTrigger: {
                trigger: card,
                start: 'top 80%',
                toggleActions: 'play none none none'
            },
            y: 50,
            opacity: 0,
            duration: 0.8,
            ease: 'power2.out'
        });
    });
    
    // Testimonial slider animation
    gsap.utils.toArray('.testimonial-slide').forEach((slide, index) => {
        gsap.from(slide, {
            scrollTrigger: {
                trigger: '.testimonial-slider',
                start: 'top 70%',
                toggleActions: 'play none none none'
            },
            x: index % 2 === 0 ? -50 : 50,
            opacity: 0,
            duration: 0.8,
            delay: index * 0.2,
            ease: 'power2.out'
        });
    });
    
    // Contact form animation
    gsap.from('.contact-form', {
        scrollTrigger: {
            trigger: '.contact-form',
            start: 'top 70%',
            toggleActions: 'play none none none'
        },
        y: 50,
        opacity: 0,
        duration: 0.8,
        ease: 'power2.out'
    });
});
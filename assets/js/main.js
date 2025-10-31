/* ============================
   AY'SMART INVESTMENT LTD JS
============================ */

// Navbar color change on scroll
window.addEventListener('scroll', () => {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});

// Initialize hero carousel with autoplay
document.addEventListener('DOMContentLoaded', () => {
  const heroCarousel = document.querySelector('#heroCarousel');
  if (heroCarousel) {
    const carousel = new bootstrap.Carousel(heroCarousel, {
      interval: 3000, // 3 seconds
      ride: 'carousel',
      pause: false,
      wrap: true,
      touch: true
    });
  }
});

// Fade-in animations
const fadeElements = document.querySelectorAll('.fade-in');
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.2 });
fadeElements.forEach(el => observer.observe(el));
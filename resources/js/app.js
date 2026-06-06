import './bootstrap';

// Import AOS and its compiled CSS
import AOS from 'aos';
import 'aos/dist/aos.css';

// Initialize AOS
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({
        once: true, // Whether animation should happen only once - while scrolling down
        duration: 800, // Animation duration in milliseconds
        easing: 'ease-in-out',
        offset: 100, // Offset (in px) from the original trigger point
    });
});

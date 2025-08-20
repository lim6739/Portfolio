//for transition animation
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        }
        // else {
        //     entry.target.classList.remove('show');
        // }
    });
});

const animatedElements = document.querySelectorAll('.hidden, .left, .right, .up');
animatedElements.forEach((el) => observer.observe(el));

//for active navbar
document.querySelectorAll('.navbar ul a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.navbar ul a.active').classList.remove('active');
        this.classList.add('active');
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
    });
});

//for darkmode
const toggleButton = document.querySelector('.menu-list button');
const body = document.body;

toggleButton.addEventListener('click', () => {
    body.classList.toggle('darkmode');
    const modeText = body.classList.contains('darkmode') ? 'Light Mode' : 'Dark Mode';
    toggleButton.querySelector('span').textContent = modeText;
});

//for navbar background color change based on section
const navbar = document.querySelector('.navbar');
const heroSection = document.querySelector('#home');
const aboutSection = document.querySelector('#about');

const sectionObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        if (entry.target === aboutSection && entry.isIntersecting) {
            navbar.classList.add('scrolled');
        } else if (entry.target === heroSection && entry.isIntersecting) {
            navbar.classList.remove('scrolled');
        }
    });
}, {
    threshold: 0.2 // Trigger when 10% of the section is visible
});

sectionObserver.observe(heroSection);
sectionObserver.observe(aboutSection);
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

document.querySelectorAll('.navbar ul a').forEach(link => {
    link.addEventListener('click', function(e) {
        e.preventDefault();
        document.querySelector('.navbar ul a.active').classList.remove('active');
        this.classList.add('active');
        const target = document.querySelector(this.getAttribute('href'));
        target.scrollIntoView({ behavior: 'smooth' });
    });
});

const toggleButton = document.querySelector('.menu-list button');
const body = document.body;

toggleButton.addEventListener('click', () => {
    body.classList.toggle('darkmode');
    const modeText = body.classList.contains('darkmode') ? 'Light Mode' : 'Dark Mode';
    toggleButton.querySelector('span').textContent = modeText;
});
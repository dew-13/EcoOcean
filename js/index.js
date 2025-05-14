const navLinks = document.querySelectorAll('nav a');
let activeLink = document.querySelector('nav a.active');

navLinks.forEach(link => {
    link.addEventListener('mouseover', function() {
        if (activeLink !== this) {
            activeLink.classList.remove('active');
        }
    });

    link.addEventListener('mouseout', function() {
        if (activeLink !== this) {
            activeLink.classList.add('active');
        }
    });

    link.addEventListener('click', function() {
        if (activeLink) {
            activeLink.classList.remove('active');
        }
        this.classList.add('active');
        activeLink = this;
    });
});
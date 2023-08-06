const jumpToTopButton = document.getElementById('jump-to-top');

window.addEventListener('scroll', () => {
    if (window.scrollY > 100) {
        jumpToTopButton.style.display = 'block';
    }else {
        jumpToTopButton.style.display = 'none';
    }
});
jumpToTopButton.addEventListener('click', () => {
    window.scrollTo({ top: 0, behavior: 'smooth' });
});

$(document).ready(function() {
    const currentPath = window.location.pathname;

    $('.nav-link').each(function() {
        const linkPath = $(this).attr('href');
        if (currentPath === linkPath) {
            $(this).addClass('active');
        }
    });
});

window.addEventListener('scroll', function() {
    const aboutSection = document.querySelector('.short_content_about');
    const sectionPosition = aboutSection.getBoundingClientRect().top;
    const screenPosition = window.innerHeight / 1.3;

    // Add 'fade-up' when scrolling down
    if (sectionPosition < screenPosition) {
        aboutSection.classList.add('fade-up');
    } 
    // Remove 'fade-up' when scrolling up
    else {
        aboutSection.classList.remove('fade-up');
    }
});

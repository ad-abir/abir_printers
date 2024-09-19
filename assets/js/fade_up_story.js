document.addEventListener('DOMContentLoaded', function() {
    const stories = document.querySelector('.about-container');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                stories.classList.add('fade-in');
                stories.classList.remove('fade-out');
            } else {
                stories.classList.remove('fade-in');
                stories.classList.add('fade-out');
            }
        });
    }, { threshold: 0.1 });

    observer.observe(stories);
});

document.addEventListener('DOMContentLoaded', function() {
    const futurePlanning = document.querySelector('.future-planning');

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                futurePlanning.classList.add('fade-in');
                futurePlanning.classList.remove('fade-out');
            } else {
                futurePlanning.classList.remove('fade-in');
                futurePlanning.classList.add('fade-out');
            }
        });
    }, { threshold: 0.1 });

    observer.observe(futurePlanning);
});

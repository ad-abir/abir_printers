document.addEventListener("DOMContentLoaded", () => {
    const h1 = document.querySelector(".short-video h1");

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    h1.classList.add("visible");
                }
            });
        },
        {
            threshold: 0.5, // Trigger when 50% of the h1 is visible
        }
    );

    observer.observe(h1);
});

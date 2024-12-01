document.addEventListener("scroll", () => {
    const dynamicLine = document.querySelector(".dynamic-line");
    const mindSetSection = document.querySelector(".mind-set");

    const sectionRect = mindSetSection.getBoundingClientRect();
    const windowHeight = window.innerHeight;

    if (sectionRect.top <= windowHeight && sectionRect.bottom >= 0) {
        const scrollProgress =
            ((windowHeight - sectionRect.top) / sectionRect.height) * 100;
        dynamicLine.style.width = `${Math.min(scrollProgress, 100)}%`;
    }
});

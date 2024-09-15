// Select the footer element
const footer = document.querySelector('footer');

// Listen for mouse enter and leave events on the footer
footer.addEventListener('mouseenter', () => {
    document.body.classList.add('footer-hover');
});

footer.addEventListener('mouseleave', () => {
    document.body.classList.remove('footer-hover');
});

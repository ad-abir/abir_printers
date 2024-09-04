document.getElementById('menu-button').addEventListener('click', function() {
    const offScreenMenu = document.getElementById('off-screen-menu');
    offScreenMenu.classList.add('active');
});

document.getElementById('close-button').addEventListener('click', function() {
    const offScreenMenu = document.getElementById('off-screen-menu');
    offScreenMenu.classList.remove('active');
});
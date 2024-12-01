const video = document.querySelector('.short-about-video');
const playButton = document.querySelector('.play-button');

playButton.addEventListener('click', () => {
    if (video.paused) {
        video.play();
        playButton.style.display = 'none'; // Hide play button when playing
    }
});

document.addEventListener("DOMContentLoaded", function() {
    fetch('data/cover-img-vision.json')
        .then(response => response.json())
        .then(data => {
            const visionCover = document.getElementById('vision-cover');

            if (visionCover) {
                // Set background image dynamically from JSON
                visionCover.style.backgroundImage = `url('${data.coverImage.src}')`;
                visionCover.setAttribute('alt', data.coverImage.alt);
            } else {
                console.error('Element with id "vision-cover" not found.');
            }
        })
        .catch(error => console.error('Error fetching vision cover image:', error));
});

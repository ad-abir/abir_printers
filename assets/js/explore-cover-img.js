document.addEventListener("DOMContentLoaded", function() {
    fetch('data/cover-img-explore.json')
        .then(response => response.json())
        .then(data => {
            const exploreCover = document.getElementById('explore-cover');

            if (exploreCover) {
                // Set background image dynamically from JSON
                exploreCover.style.backgroundImage = `url('${data.coverImage.src}')`;
                exploreCover.setAttribute('alt', data.coverImage.alt);
            } else {
                console.error('Element with id "explore-cover" not found.');
            }
        })
        .catch(error => console.error('Error fetching explore cover image:', error));
});

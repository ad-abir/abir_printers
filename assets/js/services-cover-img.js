document.addEventListener("DOMContentLoaded", function() {
    fetch('data/cover-img-services.json')
        .then(response => response.json())
        .then(data => {
            const servicesCover = document.getElementById('services-cover');

            if (servicesCover) {
                // Set background image dynamically from JSON
                servicesCover.style.backgroundImage = `url('${data.coverImage.src}')`;
                servicesCover.setAttribute('alt', data.coverImage.alt);
            } else {
                console.error('Element with id "services-cover" not found.');
            }
        })
        .catch(error => console.error('Error fetching services cover image:', error));
});


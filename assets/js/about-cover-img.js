document.addEventListener("DOMContentLoaded", function() {
    fetch('data/cover-img.json')
        .then(response => response.json())
        .then(data => {
            const aboutCover = document.getElementById('about-cover');
            
            // Set background image dynamically from JSON
            aboutCover.style.backgroundImage = `url('${data.coverImage.src}')`;
            aboutCover.setAttribute('alt', data.coverImage.alt);
        })
        .catch(error => console.error('Error fetching about cover image:', error));
});
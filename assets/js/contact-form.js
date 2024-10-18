const form = document.querySelector('form');
form.addEventListener('submit', function(event) {
    event.preventDefault();
    const formData = new FormData(this);

    fetch('send-email.php', {
        method: 'POST',
        body: formData,
    })
    .then(response => response.text())
    .then(result => {
        // Handle success or error message
        alert(result); // Display result to user
    })
    .catch(error => {
        alert('There was an error sending your message.');
    });
});

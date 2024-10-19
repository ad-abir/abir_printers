  // Fetch the JSON file and update the video source dynamically
  fetch('data/video-cover.json')
    .then(response => response.json())
    .then(data => {
      const videoElement = document.querySelector('.cover-video source');
      videoElement.src = data.coverVideo.src;
      videoElement.type = data.coverVideo.type;

      // Reload the video to apply the new source
      const video = document.querySelector('.cover-video');
      video.load();
    })
    .catch(error => console.error('Error fetching video source:', error));


// Fetch partners from JSON file and dynamically populate the partner logos
  fetch('data/partners-img.json')
    .then(response => response.json())
    .then(data => {
      const partnerList = document.getElementById('partner-list');

      // Loop through the partners and create anchor and image elements for each
      data.partners.forEach(partner => {
        const anchor = document.createElement('a');
        anchor.href = partner.link;
        anchor.target = "_blank"; // Open in new tab
        anchor.setAttribute('data-cursor-text', 'Visit');

        const img = document.createElement('img');
        img.src = partner.image;
        img.alt = partner.alt;

        // Append image to anchor, and anchor to the scroller inner container
        anchor.appendChild(img);
        partnerList.appendChild(anchor);
      });
    })
    .catch(error => console.error('Error fetching partner data:', error));


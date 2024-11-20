// // Fetch partners from JSON file and dynamically populate the partner logos
//   fetch('data/partners-img.json')
//     .then(response => response.json())
//     .then(data => {
//       const partnerList = document.getElementById('partner-list');

//       // Loop through the partners and create anchor and image elements for each
//       data.partners.forEach(partner => {
//         const anchor = document.createElement('a');
//         anchor.href = partner.link;
//         anchor.target = "_blank"; // Open in new tab
//         anchor.setAttribute('data-cursor-text', 'Visit');

//         const img = document.createElement('img');
//         img.src = partner.image;
//         img.alt = partner.alt;

//         // Append image to anchor, and anchor to the scroller inner container
//         anchor.appendChild(img);
//         partnerList.appendChild(anchor);
//       });
//     })
//     .catch(error => console.error('Error fetching partner data:', error));


async function fetchPartners() {
  try {
      // Fetch data from the PHP endpoint
      const response = await fetch('fetch_partners_img.php');
      const data = await response.json();
      renderPartners(data);
  } catch (error) {
      console.error('Error fetching partners:', error);
  }
}

function renderPartners(partners) {
  const container = document.getElementById('partners-container');
  container.innerHTML = ''; // Clear previous content
  if (partners.message) {
      container.innerHTML = `<p>${partners.message}</p>`;
  } else {
      partners.forEach(partner => {
          const partnerCard = `
              <div>
                  <a href="${partner.link}" target="_blank">
                      <img src="${partner.image}" alt="${partner.alt}">
                      <p>${partner.name}</p>
                  </a>
              </div>
          `;
          container.innerHTML += partnerCard;
      });
  }
}

// Fetch and display partners on page load
document.addEventListener('DOMContentLoaded', fetchPartners);



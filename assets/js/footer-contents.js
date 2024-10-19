// Function to fetch and render the footer from the JSON file
fetch('data/footer.json')
  .then(response => response.json())
  .then(data => {
    const footer = document.getElementById('footer');

    // Contact Section
    const contact = `
      <div class="col">
        <h4>${data.contact.heading}</h4>
        <p><strong>Address:</strong> ${data.contact.address}</p>
        <p><strong>Phone:</strong> ${data.contact.phone}</p>
        <p><strong>Hours:</strong> ${data.contact.hours}</p>
        <div class="follow">
          <h4>Follow us</h4>
          <div class="icon">
            ${data.contact.social.map(icon => `<i class="fab fa-${icon}"></i>`).join('')}
          </div>
        </div>
      </div>`;

    // About Section
    const about = `
      <div class="col">
        <h4>${data.about.heading}</h4>
        ${data.about.links.map(link => `<a href="${link.href}">${link.text}</a>`).join('')}
      </div>`;

    // Services Section
    const services = `
      <div class="col">
        <h4>${data.services.heading}</h4>
        ${data.services.links.map(link => `<a href="${link.href}">${link.text}</a>`).join('')}
      </div>`;

    // Why Choose Us Section
    const whyChooseUs = `
      <div class="col">
        <h4>${data.whyChooseUs.heading}</h4>
        ${data.whyChooseUs.reasons.map(reason => `<p>${reason}</p>`).join('')}
      </div>`;

    // Design Your Own Section
    const designYourOwn = `
      <div class="col">
        <h4>${data.designYourOwn.heading}</h4>
        ${data.designYourOwn.links.map(link => `<a href="${link.href}">${link.text}</a>`).join('')}
      </div>`;

    // Copyright Section
    const copyright = `
      <div class="copyright">
        <p>${data.copyright.text}</p>
      </div>`;

    // Append all sections to the footer
    footer.innerHTML = contact + about + services + whyChooseUs + designYourOwn + copyright;
  })
  .catch(error => console.error('Error fetching footer data:', error));

// Combined menu fetching and current page highlight script
document.addEventListener('DOMContentLoaded', () => {
    fetch('data/menu.json')
      .then(response => response.json())
      .then(data => {
        const menuList = document.getElementById('menu-list');
        const currentPage = window.location.pathname;
  
        data.menuItems.forEach(item => {
          const li = document.createElement('li');
          const a = document.createElement('a');
          a.href = item.link;
          a.className = 'nav-link';
          a.textContent = item.name;
  
          // Check if current page matches the link
          if (currentPage.includes(item.link)) {
            a.classList.add('current-page');
          }
  
          li.appendChild(a);
          menuList.appendChild(li);
        });
      })
      .catch(error => console.error('Error fetching menu:', error));
  });
  
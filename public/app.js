// public/app.js

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile menu toggle
    const menuToggle = document.getElementById('menu-toggle');
    const navMenu    = document.querySelector('.nav-menu');
    if (menuToggle && navMenu) {
      menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('open');
      });
    }
  
    // 2. Highlight the active nav link
    document.querySelectorAll('.nav-menu a').forEach(link => {
      if (link.href === window.location.href) {
        link.classList.add('active');
      }
    });
  
    // 3. In-page table search/filter
    const searchBox = document.getElementById('search-box');
    if (searchBox) {
      searchBox.addEventListener('input', () => {
        const filter = searchBox.value.toLowerCase();
        document
          .querySelectorAll('.table-container table tbody tr')
          .forEach(row => {
            const text = row.textContent.toLowerCase();
            row.style.display = text.includes(filter) ? '' : 'none';
          });
      });
    }
  
    // 4. Dark-mode toggle
    const darkToggle = document.getElementById('dark-mode-toggle');
    if (darkToggle) {
      darkToggle.addEventListener('click', () => {
        document.body.classList.toggle('dark-mode');
        darkToggle.textContent = document.body.classList.contains('dark-mode')
          ? '☀️ Light'
          : '🌙 Dark';
      });
    }
  
    // 5. Quick-add shortcut: Ctrl+N opens "Add Project"
    document.addEventListener('keydown', e => {
      if (e.ctrlKey && e.key.toLowerCase() === 'n') {
        window.location.href = '/console/projects/add';
      }
    });
  });
  
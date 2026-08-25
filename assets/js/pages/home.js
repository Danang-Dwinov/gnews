function home_nav() {
  const navButtons = document.querySelectorAll('.home-nav-link');
  const allPages = document.querySelectorAll('.page-category');

  const defaultNav = document.getElementById('nav-latest');
  if (defaultNav) defaultNav.classList.add('active');

  navButtons.forEach((nav) => {
    nav.addEventListener('click', () => {
      const targetId = nav.dataset.target;
      
      allPages.forEach((page) => {
        page.style.display = (page.id === targetId) ? 'block' : 'none';
      });

      navButtons.forEach((btn) => btn.classList.remove('active'));
      nav.classList.add('active');
    });
  });
}

home_nav();
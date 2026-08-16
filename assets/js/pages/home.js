function home_nav(){
  const nav_latest = document.getElementById("nav-latest");
  const nav_headline = document.getElementById("nav-headline");
  const nav_populer = document.getElementById("nav-populer");
  const nav_economy = document.getElementById("nav-economy");
  const nav_tech = document.getElementById("nav-tecnology");
  const nav_market = document.getElementById("nav-market");
  const nav_finance = document.getElementById("nav-finance");
  const nav_politics = document.getElementById("nav-politics");
  const nav_ai = document.getElementById("nav-ai");
  const nav_world = document.getElementById("nav-world");
  const nav_sport = document.getElementById("nav-sport");
  
  /*page navigasi*/
  const page_latest = document.getElementById("page-latest");
  const page_headline = document.getElementById("page-headline");
  const page_populer = document.getElementById("page-populer");
  const page_economy = document.getElementById("page-economy");
  const page_tech = document.getElementById("page-tecnology");
  const page_market = document.getElementById("page-market");
  const page_finance = document.getElementById("page-finance");
  const page_politics = document.getElementById("page-politics");
  const page_ai = document.getElementById("page-ai");
  const page_world = document.getElementById("page-world");
  const page_sport = document.getElementById("page-sport");
  
  
  const navPagePairs = [
  { nav: nav_latest, page: page_latest },
  { nav: nav_headline, page: page_headline },
  { nav: nav_populer, page: page_populer },
  { nav: nav_economy, page: page_economy },
  { nav: nav_tech, page: page_tech },
  { nav: nav_market, page: page_market},
  { nav: nav_finance, page: page_finance},
  { nav: nav_politics, page: page_politics },
  { nav: nav_ai, page: page_ai},
  { nav: nav_world, page: page_world },
  { nav: nav_sport, page: page_sport },
];

  const allPages = navPagePairs.map(pair => pair.page);

  navPagePairs.forEach(({ nav, page }) => {
    nav.addEventListener("click", () => {
      allPages.forEach(p => {
        p.style.display = "none";
      });
      page.style.display = "block";
    });
  });
}

home_nav();
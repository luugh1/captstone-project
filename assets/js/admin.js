document.addEventListener("DOMContentLoaded", () => {
  const sidebarNavItems = document.querySelectorAll("li.sidebar-nav-item");

  document.addEventListener("click", changeNavItemStyle);
  window.addEventListener("hashchange", highlightScrollToSection);

  function changeNavItemStyle(event) {
    if (event.target.matches("li.sidebar-nav-item *")) {
      const li = event.target.closest("li");

      for (let sidebarItem of sidebarNavItems) {
        if (sidebarItem === li) {
          sidebarItem.classList.add("active");
        } else {
          sidebarItem.classList.remove("active");
        }
      }
    }
  }

  // Highlighting function

  function highlightScrollToSection() {
    const fragment = window.location.hash;

    const elementToHighlight = document.querySelector(fragment);
    elementToHighlight.classList.add("highlight");
    setTimeout(() => {
      elementToHighlight.classList.remove("highlight");
    }, 500);
  }

  // Opening Tickets Modal

  
});

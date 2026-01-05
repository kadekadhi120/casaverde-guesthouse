import './bootstrap';
document.addEventListener("DOMContentLoaded", () => {
  const links = document.querySelectorAll(".nav-link");
  const underline = document.getElementById("nav-underline");
  const sections = document.querySelectorAll("section[id]");
  const scrollRoot = document.querySelector("main");

  function moveUnderline(el) {
    const rect = el.getBoundingClientRect();
    const parentRect = el.parentElement.getBoundingClientRect();

    underline.style.width = `${rect.width}px`;
    underline.style.left = `${rect.left - parentRect.left}px`;
  }

  // Click handler
  links.forEach(link => {
    link.addEventListener("click", () => {
      links.forEach(l => l.classList.remove("active"));
      link.classList.add("active");
      moveUnderline(link);
    });
  });

  // Scroll observer
  const observer = new IntersectionObserver(
    entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const id = entry.target.id;
          const activeLink = document.querySelector(
            `.nav-link[data-target="${id}"]`
          );

          if (activeLink) {
            links.forEach(l => l.classList.remove("active"));
            activeLink.classList.add("active");
            moveUnderline(activeLink);
          }
        }
      });
    },
    {
      root: scrollRoot,
      threshold: 0.6
    }
  );

  sections.forEach(section => observer.observe(section));

  // Init underline at HOME
  const first = document.querySelector(".nav-link");
  if (first) {
    first.classList.add("active");
    moveUnderline(first);
  }
});

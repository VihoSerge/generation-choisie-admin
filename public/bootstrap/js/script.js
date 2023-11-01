new DataTable('#example');

const navLinkEls = document.querySelectorAll('.nav-link');
const windowPathName = window.location.pathname;
navLinkEls.forEach((navLinkEl) => {
  const navLinPathName = new URL(navLinkEl.href).pathname;

  if (windowPathName === navLinPathName) {
    navLinkEl.classList.add('active');
  }
});

const tooltipTriggerList = document.querySelectorAll('.tt');
const tooltipList = [...tooltipTriggerList].map(
  (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
);

new DataTable('#example');

const navLinkEls = document.querySelectorAll('.nav-link');
const windowPathName = window.location.pathname;
navLinkEls.forEach((navLinkEl) => {
  const navLinPathName = new URL(navLinkEl.href).pathname;

  if (windowPathName === navLinPathName) {
    navLinkEl.classList.add('active');
  }
});

const updateBtns = document.querySelectorAll('.confirm_update_btn');

updateBtns.forEach((updateBtn) => {
  updateBtn.addEventListener('clicked', () => {
    console.log(`clicked : ${updateBtn.value}`);
  });
});

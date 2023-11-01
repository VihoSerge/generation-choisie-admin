let showPasswordBtn = document.querySelector('.show-password');
let passwordInput = document.querySelector('#password-input');

function togglePasswordHandler() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
    showPasswordBtn.classList.remove('fa-eye');
    showPasswordBtn.classList.add('fa-eye-slash');
    return;
  }
  passwordInput.type = 'password';
  showPasswordBtn.classList.remove('fa-eye-slash');
  showPasswordBtn.classList.add('fa-eye');
}

showPasswordBtn.addEventListener('click', togglePasswordHandler);

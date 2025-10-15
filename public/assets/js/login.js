setTimeout(function () {
  const alert = document.querySelector('.auto-dismiss');
  if (alert) {
    alert.style.transition = 'opacity 0.5s ease-out';
    alert.style.opacity = '0';
    setTimeout(() => alert.remove(), 500);
  }
}, 4000);
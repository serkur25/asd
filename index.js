const loader = document.querySelector('.loader');
const devametbutonu = document.querySelector('#devametbutonu');

devametbutonu.addEventListener('click', () => {
  loader.classList.add('active');
  setTimeout(() => {
    window.location.href = 'anasayfa.html';
  }, 1000);
});

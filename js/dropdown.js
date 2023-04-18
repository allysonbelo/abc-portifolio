const btnDropdown = document.querySelector('.btn_dropdown');
const menuMobile = document.querySelector('.menu-mobile');
const line1 = document.querySelector('.line1');
const line2 = document.querySelector('.line2');
const line3 = document.querySelector('.line3');

btnDropdown.addEventListener('click', () => {
  menuMobile.classList.toggle('active');
  line1.classList.toggle('active');
  line2.classList.toggle('active');
  line3.classList.toggle('active');
});
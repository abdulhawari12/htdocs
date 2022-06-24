const toggle = document.querySelector('.toggle'),
      menuLeft = document.querySelector('.menu-left'),
      menuRight = document.querySelector('.menu-right'),
      menuTop = document.querySelector('.menu-top'),
      items = document.querySelectorAll('.items')
      btnClose = document.querySelector('.buttonClose'),
      popupShow = document.querySelectorAll('.popupShow'),
      popup = document.querySelector('.box'),
      copy = document.querySelectorAll('.copy'),
      buttonCard = document.querySelector('.button-card');
toggle.addEventListener('click',function(){
  toggle.classList.toggle('showToggle');
  menuLeft.classList.toggle('showToggle');
});
toggle.addEventListener('click',function(){
  toggle.classList.toggle('showToggle');
  menuRight.classList.toggle('showToggle');
});
toggle.addEventListener('click',function(){
  toggle.classList.toggle('showToggle');
  menuTop.classList.toggle('showToggle');
});
function activelink(){
  items.forEach((a)=>
  a.classList.remove('active'));
  this.classList.add('active');
}
function showPopup(){
  popup.classList.add('popupshow');
}
function closePopup(){
  popup.classList.remove('popupshow');
}
items.forEach((a)=>
a.addEventListener('click',activelink));
popupShow.forEach((b)=>
b.addEventListener('click',showPopup));
btnClose.addEventListener('click',closePopup);
copy.forEach((z)=>
z.addEventListener('click',clipboard));
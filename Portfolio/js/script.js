const toggle = document.querySelector('.toggle'),
      menu = document.querySelector('.menuitems'),
      items = document.querySelectorAll('.items');

toggle.addEventListener('click',function(){
  toggle.classList.toggle('active');
  menu.classList.toggle('active');
});
items.forEach((a)=>
a.addEventListener('click',showItems));
function showItems(){
  items.forEach((a)=>
  a.classList.remove('actived'));
  this.classList.add('actived');
}
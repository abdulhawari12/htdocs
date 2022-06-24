const toggle = document.querySelectorAll('.toggle'),
      menu = document.querySelectorAll('.menuitems'),
      items = document.querySelectorAll('.items');
toggle.forEach((c)=>
c.addEventListener('click',showToggle));
function showToggle(){
  toggle.forEach((d)=>
  d.classList.toggle('active'));
  menu.forEach((e)=>
  e.classList.toggle('active'))
}
function showItems(){
  items.forEach((b)=>
  b.classList.remove('actived'));
  this.classList.add('actived');
};
items.forEach((a)=>
a.addEventListener('click',showItems));
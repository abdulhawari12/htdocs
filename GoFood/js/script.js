const pass = document.querySelector('#pass'),
      pass1 = document.querySelector('#pass1'),
      icons = document.querySelector('.fa-eye'),
      toggle = document.querySelector('.toggle'),
      menu = document.querySelector('.menu-items'),
      items = document.querySelectorAll('.items');
var state1 = false;
function show1(){
  if (state1) {
    pass.setAttribute('type','password');
    icons.style.color = "rgba(0,0,0,0.5)";
    return state1 = false;
  } else{
    pass.setAttribute('type','text');
    icons.style.color = "#0099ff";
    return state1 = true;
  }
}
var state2 = false;
function show2(){
  if (state2) {
    pass.setAttribute('type','password');
    pass1.setAttribute('type','password');
    icons.style.color = "rgba(0,0,0,0.5)";
    return state2 = false;
  } else{
    pass.setAttribute('type','text');
    pass1.setAttribute('type','text');
    icons.style.color = "#0099ff";
    return state2 = true;
  }
}
toggle.addEventListener('click',function(){
  toggle.classList.toggle('active');
  menu.classList.toggle('active');
});
function showItems(){
  items.forEach((a)=>
  a.classList.remove('actived'))
  this.classList.add('actived');
}
items.forEach((b)=>
b.addEventListener('click',showItems));
/* list items*/

const list = document.querySelectorAll(".list");
								
function activelink(){
  list.forEach((item)=>
	item.classList.remove("actived"));
	this.classList.add("actived");
}
  list.forEach((item)=>
	item.addEventListener("click", activelink));
/* end */
/* items*/

const items = document.querySelectorAll(".items");
								
function activelink2(){
  items.forEach((i)=>
	i.classList.remove("active"));
	this.classList.add("active");
}
  items.forEach((i)=>
	i.addEventListener("click", activelink2));
/* end */

var state = false;
function toggle(){
  if(state){
    document.querySelector('.input-pass').setAttribute("type","password");
    state = false;
  }else{
    document.querySelector('.input-pass').setAttribute("type","text");
    state = true;
  }
};
/* ======================== */
const ButtonNav = document.querySelector(".toggle");
const Nav = document.querySelector(".nav-items");
 
 ButtonNav.addEventListener('click', function(){
   ButtonNav.classList.toggle('active');
   Nav.classList.toggle('actived');
 });
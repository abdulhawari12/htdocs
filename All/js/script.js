// function dark / night
const darkMode = document.querySelector('.mode');
const content = document.getElementsByTagName('body')[0];
darkMode.addEventListener('click', function(){
  darkMode.classList.toggle('active');
  content.classList.toggle('dark');
});
	  // navigation Bar
const toggleBtn = document.querySelector('.toggleBtn');
const nav = document.querySelector('.nav');
		
	toggleBtn.addEventListener('click',function(){
		nav.classList.toggle('aktif');
		toggleBtn.classList.toggle('actived');
		});
		// end
		
// show / hide password
 var state= false;
function hide(){
if (state) {
  document.getElementById('password').setAttribute('type','password');
  document.getElementById('bi-eye').style.background = '#7a797e';
  state = false;
}
else{
  document.getElementById('password').setAttribute('type','text');
  document.getElementById('bi-eye').style.background = '#0099ff';
  state = true;
}
}
/* end */
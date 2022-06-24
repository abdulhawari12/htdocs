const navbtn = document.querySelector('.toggle'),
      navitems = document.querySelector('.navigation-items');
navbtn.addEventListener('click',function(){
  navbtn.classList.toggle('active');
  navitems.classList.toggle('active1');
});

const btnGet = document.querySelector('.btnGet'),
      variasi = document.querySelector('.variasi');
  btnGet.addEventListener('click', function(){
    variasi.classList.toggle('active2')
});

var state = false;
function show(){
  if(state){
    document.getElementById("pass1").setAttribute("type","password");
    document.querySelector(".bi-eye").style.color = "#11101d";
    state = false;
  }else{
    document.getElementById("pass1").setAttribute("type","text");
    document.querySelector(".bi-eye").style.color = "#ef6351";
    state = true;
  }
}

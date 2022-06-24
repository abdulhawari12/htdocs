  const list = document.querySelectorAll(".slider-content-card");
								
function activelink(){
  list.forEach((item)=>
	item.classList.remove("aktif"));
	this.classList.add("aktif");
}
  list.forEach((item)=>
	item.addEventListener("click", activelink));

const Views = document.querySelector('.view'),
      popupS = document.querySelector('.popup-box-sm'),
      btnClose = document.querySelector('.btnClose');

Views.addEventListener('click',function(){
    popupS.classList.add('active');
});
btnClose.addEventListener('click',function(){
  popupS.classList.remove('active');
});

/* edit */
var checkbox = document.querySelectorAll('.checkbox'),i;
const edit = document.querySelector('.edit');
edit.addEventListener('click',function(){
  for( i = 0; i < checkbox.length; ++i){
  checkbox[i].classList.add('show1');
  };
  popupEdit.classList.add('showEdit');
    checkboxes.forEach(function(checkAll){
      checkAll.checked = false;
    });
    label.textContent = "Semua";
});

const batal = document.querySelector('.batal'),
      popupEdit = document.querySelector('.popup-edit-box');

batal.addEventListener('click',function(){
  for( i = 0; i < checkbox.length; ++i){
  checkbox[i].classList.remove('show1');
  }
  popupEdit.classList.remove('showEdit');
});

var checkboxes = document.querySelectorAll('input[type="checkbox"]');
const label = document.querySelector('.label');
const jumlah = document.querySelector('.jumlah');
function checkedAll(Selected){
  if(Selected.checked == true)
  {
    checkboxes.forEach(function(checkAll){
      checkAll.checked = true;
    });
    label.textContent = "Tidak Ada";
    jumlah.textContent = checkboxes.length + " item telah dipilih";
  }
  else
  {
    checkboxes.forEach(function(checkAll){
      checkAll.checked = false;
    });
    label.textContent = "Semua";
    jumlah.textContent = "Pilih item";
  }
}
/* end */

/* Buat memo */
function buatMemo(){
  window.location.href = "buatMemo.php";
}
/* end */
function buttonLeft(){
  window.location.href = 'index.php';
}
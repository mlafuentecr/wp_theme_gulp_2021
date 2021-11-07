/*-----------------------------------------------------------------------------------*/
/*  Variables
/*-----------------------------------------------------------------------------------*/

document.readyState !== 'loading' ? internal() :	document.addEventListener('DOMContentLoaded', ()=>internal());


function internal() {
  
/*-----------------------------------------------------------------------------------*/
/*  accordion
/*-----------------------------------------------------------------------------------*/
if(document.querySelectorAll('.accordion')){
 
  const accordion = document.querySelectorAll('.accordion');
  function toogleBox(item){
    item.target.closest('.accordion').classList.toggle('show');
  }
  accordion.forEach(item => item.addEventListener("click", (item)=>toogleBox(item)));

}
  console.log('intern header');


}




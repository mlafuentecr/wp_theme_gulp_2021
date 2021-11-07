document.addEventListener('DOMContentLoaded', ()=>{

	/*-----------------------------------------------------------------------------------*/
	/*  Sticky nav NO SCROLLING ON FIREXO?
	/*-----------------------------------------------------------------------------------*/
  // Not a ton of code, but hard to
	const nav = document.querySelector('#header-top');
	let topOfNav = nav.offsetHeight;
	function fixNav() {
		if (window.scrollY >= topOfNav) document.body.classList.add('fixed-nav');
		if (window.scrollY === 0) document.body.classList.remove('fixed-nav');
	}
	window.addEventListener('scroll', fixNav);


	/*-----------------------------------------------------------------------------------*/
	/*  Menu MObile
	/*-----------------------------------------------------------------------------------*/
	if(document.querySelector('.mobile-menu')){

			const menuMobile = document.querySelector('.mobile-menu');
			const subMenus = menuMobile.querySelectorAll('.menu-item-has-children');
			
	

			const removeShowClass = ()=> subMenus.forEach(item => item.classList.remove('show'))

			subMenus.forEach(item => {
				
				item.addEventListener('click', (e)=>{
				
					//Si no tiene show es parent entonces quitele el link si es submenu use el link normalmente
					if(!e.target.offsetParent.classList.contains('show'))		e.preventDefault();
					let target = e.target.closest('li').classList;
					//if there is class show in this div remove it
					target.toggle('show');

				//If I clicked any link close draw if is # problably is parent so dont
					if(e.target.attributes.href.value !== '#') {
						document.body.classList.toggle('show-menu');
						console.log('move to link')
						window.open(e.target.attributes.href.value,"_self");
					}else{
						document.body.classList.toggle('show-menu');
					}
			

					//Check if there is more than one show
					const shows = menuMobile.querySelectorAll('.show');
					//if there is more than one remove all and just have the one I click
					if(shows.length > 1){
						removeShowClass();
						target.toggle('show');
					};
					
					},

					)
			});
	}

		/*-----------------------------------------------------------------------------------*/
		/*  Menu MObile Hamburger
		/*-----------------------------------------------------------------------------------*/
		const button = document.getElementById("menu-button");
		const buttonClose = document.querySelector(".closeMenu");

		button.addEventListener('click', ()=>document.body.classList.toggle('show-menu'));
		buttonClose.addEventListener('click', ()=> document.body.classList.toggle('show-menu'));

	/*-----------------------------------------------------------------------------------*/
	/*  Menu Desktop over
	/*-----------------------------------------------------------------------------------*/
	if(document.querySelector('#header-top')){
	
		const subMenusLi = nav.querySelectorAll('.navigation-main>li');

    let removeMenu ='';
		const removeShowClass = ()=> subMenusLi.forEach(item => {
	      removeMenu = setTimeout(item.classList.remove('show'), 3000);
    })
      


		subMenusLi.forEach(item => {
      
			item.addEventListener('mouseenter', (e)=>{
        e.stopPropagation();
        removeShowClass();
        clearTimeout(removeMenu);
				e.target.closest('li').classList.add('show');
			})
		})

    nav.addEventListener('mouseleave', (e)=>removeShowClass())
	}

	

	});




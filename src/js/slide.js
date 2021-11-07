document.readyState !== 'loading' ? slide() : document.addEventListener('DOMContentLoaded', () => slide());

function slide() {

	if (document.querySelector('.sliderContainer')) {
		/*----------------------------------------------------------*/
		/*  Variables
/*---------------------------------------------------------w-*/


		let widthMatch = window.matchMedia('(min-width: 800px)');

		const toggleOffDesktop = () => {
			const allDesktopSlide = document.querySelectorAll('.item-desktop');
			allDesktopSlide.forEach(slide => slide.classList.remove('carousel-item'));
		};
	
		const toggleOffMobile = () => {
			const allMobileSlide = document.querySelectorAll('.item-mobile');
			allMobileSlide.forEach(slide => slide.classList.remove('carousel-item'));
		};

		const toggleOnDesktop = () => {
			//console.log('entre a slider grande')
			const allDesktopSlide = document.querySelectorAll('.item-desktop');
			//console.log('allDesktopSlide', allDesktopSlide);

			allDesktopSlide.forEach(item =>item.classList.add('carousel-item'));
			activateFirstSlider(allDesktopSlide[0]);
		};

		const toggleOnMobile = () => {
			const allMobileSlide = document.querySelectorAll('.item-mobile');
			allMobileSlide.forEach(slide => slide.classList.add('carousel-item'));
		};

function activateFirstSlider(){
	
	let sliders = document.querySelectorAll('.carousel-item');
	const slide1 = sliders[0];
		slide1.classList.add('active');
	 let indicator = document.querySelectorAll('.indicator');
		indicator[0].classList.add('active');
}


		///Check at the start
		if (widthMatch.matches) {
			toggleOffMobile();
			toggleOnDesktop();
		} else {
			toggleOffDesktop();
			toggleOnMobile();
		}

	

		//check when change
		widthMatch.addEventListener('change', function (wSize) {
			if (wSize.matches) {
				//es dsktop
				toggleOffMobile();
				toggleOnDesktop();
			} else {
				toggleOffDesktop();
				toggleOnMobile();
			}
			let sliders = document.querySelectorAll('.carousel-item');
			let indicator = document.querySelectorAll('.indicator');
			sliders[0].classList.add('active');
			indicator[0].classList.add('active');
		});
	}
}

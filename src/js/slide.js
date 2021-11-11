document.readyState !== 'loading' ? slide() : document.addEventListener('DOMContentLoaded', () => slide());

function slide() {
	if (document.querySelector('.sliderContainer')) {
		/*----------------------------------------------------------*/
		/*  Variables
/*---------------------------------------------------------w-*/

		let widthMatch = window.matchMedia('(min-width: 800px)');

		const toggleOffDesktop = () => {
			const allDesktopSlide = document.querySelectorAll('.carousel-slide-desktop');
			console.log(allDesktopSlide, 'toggleOffDesktop');
			allDesktopSlide.forEach(slide => slide.classList.remove('carousel-item'));
			allDesktopSlide.forEach(slide => slide.classList.remove('active'));
		};

		const toggleOffMobile = () => {
			const allMobileSlide = document.querySelectorAll('.carousel-slide-mobile');
			allMobileSlide.forEach(slide => slide.classList.remove('carousel-item'));
			allMobileSlide.forEach(slide => slide.classList.remove('active'));
		};

		const toggleOnDesktop = () => {
			const allDesktopSlide = document.querySelectorAll('.carousel-slide-desktop');
			allDesktopSlide.forEach(item => item.classList.add('carousel-item'));
			activateFirstSlider(allDesktopSlide[0]);
		};

		const toggleOnMobile = () => {
			const allMobileSlide = document.querySelectorAll('.carousel-slide-mobile');
			allMobileSlide.forEach(slide => slide.classList.add('carousel-item'));
			activateFirstSlider(allMobileSlide[0]);
		};

		function activateFirstSlider() {
			let sliders = document.querySelectorAll('.carousel-item');
			const slide1 = sliders[0];
			slide1.classList.add('active');
			let indicator = document.querySelectorAll('.indicator');
			indicator[0].classList.add('active');
		}

		///Check at the start
		function switchScreen(size) {
			//check if there is a hideMobile
			console.log('xxxxxxxxx  size', size);

			if (document.querySelector('.hideMobile')) {
				console.log('xxxxxxxxx findHideMobile true');
				toggleOffMobile();
				toggleOnDesktop();
			} else {
				console.log('xxxxxxxxx findHideMobile false');
				if (size) {
					console.log('xxxxxxxxx size desktop');
					toggleOffMobile();
					toggleOnDesktop();
				} else {
					console.log('xxxxxxxxx size mobile');
					toggleOffDesktop();
					toggleOnMobile();
				}
			}
		}
		switchScreen(widthMatch.matches);

		//check when change
		widthMatch.addEventListener('change', function (wSize) {
			switchScreen(wSize.matches);

			let sliders = document.querySelectorAll('.carousel-item');
			let indicator = document.querySelectorAll('.indicator');
			sliders[0].classList.add('active');
			indicator[0].classList.add('active');
		});
	}
}

/*-----------------------------------------------------------------------------------*/
/*  menu
/*-----------------------------------------------------------------------------------*/

document.readyState !== 'loading' ? menu() : document.addEventListener('DOMContentLoaded', () => menu());

function menu() {
	const button = document.querySelector('.navbar-toggler');
	const menu = document.querySelector('#navbar-collapse');
	button.addEventListener('click', () => toggleMenu());
	const toggleMenu = () => {
		console.log('click');
		menu.classList.toggle('show');
	};
}

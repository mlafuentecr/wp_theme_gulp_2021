/*-----------------------------------------------------------------------------------*/
/*  Variables
/*-----------------------------------------------------------------------------------*/

document.readyState !== 'loading' ? youtubeVideo() : document.addEventListener('DOMContentLoaded', () => youtubeVideo());

function youtubeVideo() {
	const links = document.querySelectorAll('.video-box');

	if (typeof links != 'undefined' && links) {
		//AL inicio

		setTimeout(() => {
			document.getElementById('player').innerHTML = `<iframe title='YouTube video player'  
      type=\'text/html\' width='100%' height='320' src='https://www.youtube.com/embed/${links[0].dataset.url}' frameborder='0' allowFullScreen></iframe>`;
		}, 3500);

		//When CLick
		const insertVideo = function (e) {
			console.log('youyube done ');
			const videoUrl = e.target.closest('a').dataset.url;
			document.getElementById('player').innerHTML = `<iframe title='YouTube video player'  
      type=\'text/html\' width='100%' height='320' src='https://www.youtube.com/embed/${videoUrl}' frameborder='0' allowFullScreen></iframe>`;
		};

		//por cada link que le de un click daquele la data
		links.forEach(link => link.addEventListener('click', e => insertVideo(e)));
	}
}

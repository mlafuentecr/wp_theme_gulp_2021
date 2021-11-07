/*-----------------------------------------------------------------------------------*/
/*  Variables
/*-----------------------------------------------------------------------------------*/
let imgSize;
let pos_carruel = 0;
let newsHomeCaruselNum = 0;

document.readyState !== 'loading' ? iframeLoad() : document.addEventListener('DOMContentLoaded', () => iframeLoad());

function iframeLoad() {
	//IFRAME GENERAL
	const iframeDiv = document.querySelector('.iframe');
	if (typeof iframeDiv != 'undefined' && iframeDiv) {
		//Getting the data from the div
		let data = iframeDiv.dataset.iframe;
		console.log('data1', data);
		data = data.split(',');

		let [url, loadingTime = 2000, div_width = '100%', div_height = '900px'] = data;

		loadingTime = Number(loadingTime) * 1000;
		console.log('url', typeof loadingTime);

		///apuesta?League=7&amp;SubLeague=176
		const iframe = document.createElement('iframe');
		iframe.style.width = div_width;
		iframe.style.border = 'none';
		iframe.style.minHeight = div_height;

		setTimeout(() => {
			//1 put the iframe inside
			iframe.src = url;
			iframeDiv.appendChild(iframe);
		}, loadingTime);
	}
}

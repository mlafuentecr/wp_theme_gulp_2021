/*-----------------------------------------------------------------------------------*/
/*  Variables
/*-----------------------------------------------------------------------------------*/

document.readyState !== 'loading' ? pwa() : document.addEventListener('DOMContentLoaded', () => pwa());

function pwa() {
	const btnAdd = document.querySelector('.pwaBtn');
	const footerDiv = document.querySelector('footer');

	/*-----------------------------------------------------------------------------------*/
	/*  PWA pasar el worker al root
/*-----------------------------------------------------------------------------------*/
	if (navigator.serviceWorker) {
		if (window.location.hostname !== 'localhost') {
			navigator.serviceWorker
				.register('sw.js')
				.then(function (registration) {
					console.log('ServiceWorker registration successful with scope:', registration.scope);
				})
				.catch(function (error) {
					console.log('ServiceWorker registration failed:', error);
				});
		}
	}

	/*----------------------------------------------------------------*/
	/*  Detects DEvices
/*----------------------------------------------------------------*/
	//Detects if is stand alone
	const isInStandaloneMode = () => 'standalone' in window.navigator && window.navigator.standalone;
	if ('standalone' in window.navigator && !window.navigator.standalone) {
		console.log('full screen');
	} else {
		console.log('no full screen');
	}

	// Detects if device is on iOS
	const isIos = () => {
		const userAgent = window.navigator.userAgent.toLowerCase();
		console.log(userAgent);
		return /iphone|ipad|ipod/.test(userAgent);
	};

	// Checks if should display install popup notification:
	if (isIos() && !isInStandaloneMode()) {
		this.setState({ showInstallMessage: true });
	}

	if (document.querySelector('.pwaBtn')) {
		let deferredPrompt;

		window.addEventListener('beforeinstallprompt', function (e) {
			// Prevent Chrome 67 and earlier from automatically showing the prompt
			e.preventDefault();
			// Stash the event so it can be triggered later.
			deferredPrompt = e;
			// Update UI notify the user they can install the PWA
			showInstallPromotion();
			// Optionally, send analytics event that PWA install promo was shown.
			console.log(`'beforeinstallprompt' event was fired.`);
		});

		// Installation must be done by a user gesture! Here, the button click
		btnAdd.addEventListener('click', e => {
			e.preventDefault();
			// hide our user interface that shows our A2HS button
			btnAdd.style.display = 'none';
			// Show the prompt
			deferredPrompt.prompt();
			// Wait for the user to respond to the prompt
			deferredPrompt.userChoice.then(choiceResult => {
				if (choiceResult.outcome === 'accepted') {
					console.log('User accepted the A2HS prompt');
				} else {
					console.log('User dismissed the A2HS prompt');
				}
				deferredPrompt = null;
			});
		});

		//Track web app install by user
		window.addEventListener('appinstalled', event => {
			fireTracking('PWA app installed by user!!! Hurray');
		});
	}
}

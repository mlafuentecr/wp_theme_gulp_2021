/*-----------------------------------------------------------------------------------*/
/*  blocks
/*-----------------------------------------------------------------------------------*/

document.readyState !== 'loading' ? blocks() : document.addEventListener('DOMContentLoaded', () => blocks());

function blocks() {
	/*-------------------------------------------------*/
	/*  reglas
  /*-------------------------------------------------*/
	if (document.querySelectorAll('.collapse-block')) {
		const accordion = document.querySelectorAll('.collapse-block');

		function toggleRule(item) {
			item.target.parentElement.closest('.collapse-block').classList.toggle('show');
			console.log('item', item);
		}

		accordion.forEach(item => item.addEventListener('click', item => toggleRule(item)));
	}

	/*-------------------------------------------------*/
	/*  banking
  /*-------------------------------------------------*/
	if (document.querySelectorAll('#deposit-box')) {
		const deposit = document.querySelector('#deposit-box');
		const tabs = document.querySelectorAll('.tab');

		function toggleDeposits(item) {
			console.log(item.target.dataset.type);
			//add class show- to parent
			deposit.className = '';
			deposit.classList.add('show-' + item.target.dataset.type);

			//item.target.parentElement.closest('.collapse-block').classList.toggle('show');
		}

		tabs.forEach(item => item.addEventListener('click', item => toggleDeposits(item)));
	}

	/*-------------------------------------------------*/
	/*  Horses
  /*-------------------------------------------------*/
	if (document.querySelectorAll('#horse-race')) {
		//find tabs
		const tabs = document.querySelectorAll('.nav-item');
		const contentPanel = document.querySelectorAll('.tab-pane');
		//make clickable
		tabs.forEach(tab => tab.addEventListener('click', e => activateTab(e)));
		//if there and active remove it
		function activateTab(e) {
			tabs.forEach(tab => tab.classList.remove('active'));
			console.log(contentPanel, 'panels');
			contentPanel.forEach(item => item.classList.remove('show'));

			let content = e.target.hash.replace('#', '');
			const contentTab = document.querySelector(`#${content}`);

			//wait and activate
			setTimeout(() => {
				e.target.classList.add('active');
				contentTab.classList.add('show');
			}, 100);
		}
		//add active
	}
}

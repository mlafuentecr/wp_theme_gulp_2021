
/*------------------------------------------------------*/
/*  login
/*------------------------------------------------------*/
document.readyState !== 'loading' ? loginFunction() : document.addEventListener('DOMContentLoaded', () => loginFunction());
let _canSendForm = true;

function loginFunction() {
	/*------------------------------------------------------*/
	/*  popupLogin and put active form1
	** btn btn-register btn-register-popup
	** btn btn-login btn-login-popup
	/*------------------------------------------------------*/
	const popupLoginBtns = document.querySelectorAll('.btn-login-popup');
	popupLoginBtns.forEach(item => item.addEventListener('click', () => popUpLogin()));
	const registerBtn = document.querySelectorAll('.btn-register-popup');
	console.log(registerBtn, 'registerBtn')
	registerBtn.forEach(item => item.addEventListener('click', () => popUpRegister()));
	const closeBtn = document.querySelectorAll('.btn-close');
	closeBtn.forEach(item => item.addEventListener('click', () => closeAllForms()));


	const formDiv = document.querySelectorAll('.formlogin');
	formDiv.forEach(item => item.addEventListener('click', e => activateForm(e)));



}

function BackEndLogin(userNameValue, passwordValue) {
	console.log('BackEndLogin()');

	//If there more of one form add active form on click and then select those fields

	let _item = document.getElementById('LoginMessageError_li'); // Clean msj error
	if (_item) _item.innerHTML = ' ';

	console.log('enter data', userNameValue, ' ', passwordValue);
	if (userNameValue && passwordValue) {
		let _endPoint = 'https://betslipapi.isppro.net/api/player/CheckValidPlayerLogin';
		let _encode = window.btoa(userNameValue + ':' + passwordValue);
		console.log(' request');

		let _http = new XMLHttpRequest();
		_http.open('GET', _endPoint);
		_http.setRequestHeader('Content-Type', 'application/json');
		_http.setRequestHeader('Authorization', 'Token ' + _encode);
		_http.send();
		console.log(' send');

		_http.onreadystatechange = result => {
			switch (result.currentTarget.status) {
				case 200: // OK
				case 204: // OK - Not content
					/*
					 * Redirect BackEnd login
					 **/
					location.replace('https://apuestas.betfran.com/quicklogin?access=' + _encode); // Go login site
					break;

				default:
					const activeform = document.getElementById('formActive');
					let _item = activeform.querySelector('.text-danger');
					console.log(activeform);
					console.log(_item);

					if (_item) {
						_item.innerHTML = 'Invalid username or password ';
					}
					break;
			}
			_canSendForm = true;
		};
	}
}
function popUpRegister () {
		const formDiv = document.querySelector('#registerModal');
	formDiv.classList.add('show');
}


function popUpLogin() {
	deactivateForm();
	clearErrors();
	const loginModal = document.querySelector('#loginModal');
	const formDiv = loginModal.querySelector('.formlogin');
	formDiv.setAttribute('id', 'formActive');
	loginModal.classList.add('show');
}
const closeAllForms = () => {
	deactivateForm();
	document.querySelectorAll('.show').forEach(item => item.classList.remove('show'));
};

function deactivateForm() {
	if (document.getElementById('formActive')) {
		const form = document.getElementById('formActive');
		form.setAttribute('id', '');
	}
}

function activateForm(e) {
	console.log('active form');
	e.preventDefault();
	e.stopPropagation();
	clearErrors();

	const formDiv = e.target.parentElement.closest('.formlogin ');
	if (formDiv) {
		if (formDiv.classList.contains('formlogin')) {
			formDiv.setAttribute('id', 'formActive');
		}
	}

	if (e.target.classList.contains('login')) {
		clickTheLoginBtn(e);
	}
}

function clickTheLoginBtn(e) {
	console.log('logijnnnng ins');
	e.preventDefault();
	e.stopPropagation();

	const activeform = document.getElementById('formActive');
	console.log(activeform, 'activeform');
	//Get user from the active form
	let _userName = activeform.querySelector('input[name="username_l1"]');
	let _password = activeform.querySelector('input[name="password_l1"]');
	//send value to backendLogin

	if (_canSendForm && _userName.value && _password.value) {
		BackEndLogin(_userName.value, _password.value);
		canSendForm = false;
	} else {
		checkErrors(_userName.value, _password.value);
	}
}
function checkErrors(user, pass) {
	console.log(user, pass, 'user, pass');
	const activeform = document.getElementById('formActive');
	let divErrorLogin = activeform.querySelector('.error__login');
	let divErrorSignup = activeform.querySelector('.error__signup');
	clearErrors();

	if (!user) {
		console.log('Usuario Requerido');
		divErrorLogin.innerHTML = 'Usuario Requerido';
	}
	if (!pass) {
		console.log('Password Requerido');
		divErrorSignup.innerHTML = 'Password Requerido';
	}
}

function clearErrors() {
	let divErrorLogin = document.querySelectorAll('.error__login');
	let divErrorSignup = document.querySelectorAll('.error__signup');

	divErrorLogin.forEach(item => (item.innerHTML = ''));
	divErrorSignup.forEach(item => (item.innerHTML = ''));
}

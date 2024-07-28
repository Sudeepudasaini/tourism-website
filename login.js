const loginwrap = document.querySelector('.loginwrap');
const registerLink = document.querySelector('.register-link');
const loginLink = document.querySelector('.login-link');


const btnPopup = document.querySelector('.btnlogin-popup');
const iconClose = document.querySelector('.icon-close');


registerLink.addEventListener('click', ()=> {
    loginwrap.classList.add('active');
});


loginLink.addEventListener('click', ()=> {
    loginwrap.classList.remove('active');
});


btnPopup.addEventListener('click', ()=> {
    loginwrap.classList.add('active-popup');
});


iconClose.addEventListener('click', ()=> {
    loginwrap.classList.remove('active-popup');
});


document.getElementsByClass('.form-box.register').style.display = 'none';
document.getElementsByIdClass('.form-box.login').style.display = 'block';
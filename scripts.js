function registration() {
    document.getElementById('registration-login').style.display = 'none';
    document.getElementById('registration-form').style.display = 'block';
}

function return_registration() {
    document.getElementById('registration-login').style.display = 'block';
    document.getElementById('registration-form').style.display = 'none';
    document.getElementById('login-form').style.display = 'none';
}

function login() {
    document.getElementById('registration-login').style.display = 'none';
    document.getElementById('login-form').style.display = 'block';
}

function clean_form(){
    document.getElementById('form_register').reset();
}

function reload(){
    location.reload();
}
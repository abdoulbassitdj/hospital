

// document.querySelector('.signup_cta_action').addEventListener('click', resister_show);
function resister_show() {
    document.querySelector('.register').classList.add('register_active');
    document.querySelector('.contemplation').classList.add('contemplation_small');
}


// document.querySelector('.return').addEventListener('click', resister_hide);

function resister_hide() {
    document.querySelector('.register').classList.remove('register_active');
    document.querySelector('.contemplation').classList.remove('contemplation_small');
}
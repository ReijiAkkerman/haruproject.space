function show_hide_password(target){
	var input = document.getElementById('view_passwd');
	if (input.getAttribute('type') == 'password') {
		target.classList.add('view');
		input.setAttribute('type', 'text');
	}
    else {
		target.classList.remove('view');
		input.setAttribute('type', 'password');
	}
	return false;
}
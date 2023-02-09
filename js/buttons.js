function _add_entry() {
    let settings = document.querySelector('.DetailesSettings');
    let add = document.querySelector('.DetailesAdd');
    settings.style.display = "none";
    add.style.display = "block";
}

function _settings() {
    let settings = document.querySelector('.DetailesSettings');
    let add = document.querySelector('.DetailesAdd');
    settings.style.display = "block";
    add.style.display = "none"
}

function _send_entry() {
    let xhr = new XMLHttpRequest();
    xhr.open('POST', `/handle/`);
    xhr.send();
    xhr.onload = function() {
        if(xhr.status == 200) {
            
        }
        else alert('Error');
    }
}
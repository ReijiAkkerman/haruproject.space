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
    let elements_array_in = ['.checkbox', '#year_start', '#month_start', '#day_start', '#hour_start', '#minute_start', '#year_end', '#month_end', '#day_end', '#hour_end', '#minute_end'];
    let elemtnts_array_out = [];
    for(let i = 0; i < 11; i++) 
        elements_array_out[i] = document.querySelector(elements_array_in[i]);
    

    let xhr = new XMLHttpRequest();
    xhr.open('POST', ``);
    xhr.send();
    xhr.onload = function() {
        if(xhr.status == 200) {

        }
        else alert('Error');
    }
}
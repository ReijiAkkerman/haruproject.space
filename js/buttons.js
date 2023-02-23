function _add_entry() {
    let add_entry = document.querySelector('.DetailesAdd');
    let settings = document.querySelector('.DetailesSettings');
    let day_contents = document.querySelector('.DetailesCalendar');
    add_entry.style.display = 'block';
    settings.style.display = 'none';
    day_contents.style.display = 'none'
}

function _settings() {
    let add_entry = document.querySelector('.DetailesAdd');
    let settings = document.querySelector('.DetailesSettings');
    let day_contents = document.querySelector('.DetailesCalendar');
    add_entry.style.display = 'none';
    settings.style.display = 'block';
    day_contents.style.display = 'none';
}

function _day_contents() {
    let add_entry = document.querySelector('.DetailesAdd');
    let settings = document.querySelector('.DetailesSettings');
    let day_contents = document.querySelector('.DetailesCalendar');
    add_entry.style.display = 'none';
    settings.style.display = 'none';
    day_contents.style.display = 'block';
}

function _send_entry(event) {
    let send_entry = document.querySelector('#send_entry');
    let form = new FormData(send_entry);
    event.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/handle');
    xhr.responseType = 'json';
    xhr.send(form);
    xhr.onload = function() {
        let value = '#' + selected;
        let target_day = document.querySelector(value);
        let entry = target_day.querySelector('.CalendarItemContentsBlock');
        let header = xhr.response;
        entry.innerHTML += '<pre>' + header['entry']['header'] + '</pre>';
    };
}
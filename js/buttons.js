function _add_entry() {
    let add_entry = document.querySelector('.DetailesAdd');
    let settings = document.querySelector('.DetailesSettings');
    let day_contents = document.querySelector('.DetailesCalendar');
    settings.style.display = 'none';
    day_contents.style.display = 'none'
    add_entry.style.display = 'block';

    let parent = document.querySelector('.DetailesToolbar');
    parent.children[0].style.borderBottomColor = '#0000';
    parent.children[1].style.borderBottomColor = '#0000';
    parent.children[2].style.borderBottomColor = '#f00';
}

function _settings() {
    let add_entry = document.querySelector('.DetailesAdd');
    let settings = document.querySelector('.DetailesSettings');
    let day_contents = document.querySelector('.DetailesCalendar');
    add_entry.style.display = 'none';
    day_contents.style.display = 'none';
    settings.style.display = 'block';

    let parent = document.querySelector('.DetailesToolbar');
    parent.children[0].style.borderBottomColor = '#0000';
    parent.children[2].style.borderBottomColor = '#0000';
    parent.children[1].style.borderBottomColor = '#f00';
}

function _day_contents(id = 0) {
    let add_entry = document.querySelector('.DetailesAdd');
    let settings = document.querySelector('.DetailesSettings');
    let day_contents = document.querySelector('.DetailesCalendar');
    add_entry.style.display = 'none';
    settings.style.display = 'none';
    day_contents.style.display = 'block';

    let parent = document.querySelector('.DetailesToolbar');
    parent.children[1].style.borderBottomColor = '#0000';
    parent.children[2].style.borderBottomColor = '#0000';
    parent.children[0].style.borderBottomColor = '#f00';

    let current_day = document.querySelector(`#${selected}`);
    current_day.style.borderColor = '#f00';

    let today;
    if(!id) {
        today = document.querySelector(`#${selected}`);
    }
    else {
        today = document.querySelector(`#${id}`)
    }
    let todayContents = today.querySelector('.CalendarItemContentsBlock')
    let entriesBlock = document.querySelector('.DetailesCalendarContents');
    let counter = todayContents.children.length;
    entriesBlock.innerHTML = '';
    for(let i = 0; i < counter; i++) {
        let elem = document.createElement('button');
        elem.className = 'DetailesCalendarContentsEntry';
        elem.innerHTML = todayContents.children[i].outerHTML;
        entriesBlock.append(elem);
    }
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

function next() {
    let entry = document.querySelector(`#${selected}`);
    let number = entry.className.split('b');
    if(number[1] >= 0) {
        number[1]++;
        let Entry = document.querySelector(`.b${number[1]}`);
        _selected(Entry.id);
        _day_contents(Entry.id);
    }
}

function back() {
    let entry = document.querySelector(`#${selected}`);
    let number = entry.className.split('b');
    if(number[1] > 0) {
        number[1]--;
        let Entry = document.querySelector(`.b${number[1]}`);
        _selected(Entry.id);
        _day_contents(Entry.id);
    }
}

function edit_entry() {
    
}

function delete_entry() {

}

function save_entry() {

}

function done_entry() {

}
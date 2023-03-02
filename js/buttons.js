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

    let calendar = document.querySelector('.w_Calendar');
    let info = document.querySelector('.Info');
    calendar.style.display = 'block';
    info.style.display = 'none';
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
        elem.addEventListener('click', function() {
            let calendar = document.querySelector('.w_Calendar');
            let info = document.querySelector('.Info');
            calendar.style.display = 'none';
            info.style.display = 'block';
            
            let form = document.querySelector('.InfoBlock');
            let array_selectors = ['header', 'description', 'year_start', 'month_start', 'day_start', 'hour_start', 'minute_start', 'year_end', 'month_end', 'day_end', 'hour_end', 'minute_end'];
            let array_elements = [];

            // for(let i = 0; i < 12; i++) 
            //     array_elements[i] = form.querySelector(`[name="${array_selectors[i]}"]`);
        });
        entriesBlock.append(elem);
    }
    let calendar = document.querySelector('.w_Calendar');
    let info = document.querySelector('.Info');
    calendar.style.display = 'block';
    info.style.display = 'none';
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

function edit_entry(element) {
    let svg = element.querySelector('svg');
    let delete_entry = document.querySelector('#delete_entry');
    let save_entry = document.querySelector('#save_entry');
    let done_entry = document.querySelector('#done_entry');
    let delete_entry_svg = delete_entry.querySelector('svg');
    let save_entry_svg = save_entry.querySelector('svg');
    let done_entry_svg = done_entry.querySelector('svg');

    let form = document.querySelector('.InfoBlock');
    let array_selectors = ['header', 'description', 'year_start', 'month_start', 'day_start', 'hour_start', 'minute_start', 'year_end', 'month_end', 'day_end', 'hour_end', 'minute_end'];
    let array_elements = [];
    
    if(editStatus) {
        for(let i = 0; i < 12; i++) {
            array_elements[i] = form.querySelector(`[name="${array_selectors[i]}"]`);
            array_elements[i].setAttribute('readonly', true);
        }
        svg.style.fill = '#f00'
        delete_entry_svg.style.fill = '#500';
        save_entry_svg.style.fill = '#500';
        done_entry_svg.style.fill = '#500';
        editStatus = false;
    }
    else {
        for(let i = 0; i < 12; i++) {
            array_elements[i] = form.querySelector(`[name="${array_selectors[i]}"]`);
            array_elements[i].removeAttribute('readonly');
        }
        svg.style.fill = '#500';
        delete_entry_svg.style.fill = '#f00';
        save_entry_svg.style.fill = '#f00';
        done_entry_svg.style.fill = '#f00';
        editStatus = true;
    }
}

function delete_entry() {

}

function save_entry() {

}

function done_entry() {

}
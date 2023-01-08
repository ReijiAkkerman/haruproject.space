var selected;
function _selected(Id) {
    array = document.querySelectorAll('.CalendarButton');
    array.forEach(b => b.style.borderColor = "#500");
    array.forEach(c => c.style.backgroundColor = "#aaa1");
    document.getElementById(Id).style.borderColor = '#f00';
    document.getElementById(Id).style.backgroundColor = "#f001";
    selected = Id;
}
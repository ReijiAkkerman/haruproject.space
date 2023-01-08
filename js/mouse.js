var selected;
function _selected(Id) {
    array = document.querySelectorAll('.CalendarButton');
    array.forEach(b => b.style.borderColor = "#500");
    array.forEach(c => c.style.backgroundColor = "#f001");
    document.getElementById(Id).style.borderColor = '#f00';
    document.getElementById(Id).style.backgroundColor = "#fff1";
    selected = Id;
}
document.addEventListener("DOMContentLoaded", () => {
    array = document.querySelectorAll('.CalendarButton');
    array.forEach((id) => {
        id.addEventListener("mouseover", () => {
            if(id.id != selected)
                id.style.backgroundColor = "#fff1";
        });
    });
    array.forEach((id) => {
        id.addEventListener("mouseout", () => {
            if(id.id != selected)
            id.style.backgroundColor = "#f001";
        });
    });
});
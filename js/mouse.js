var selected;
let today = document.querySelector('.today');
selected = today.id;
function _selected(Id) {
    {
        let array = document.querySelectorAll('.CalendarButton');
        array.forEach(b => b.style.borderColor = "#500");
        array.forEach(c => c.style.backgroundColor = "#f001");
        document.getElementById(Id).style.borderColor = '#f00';
        document.getElementById(Id).style.backgroundColor = "#fff1";
        selected = Id;
    }
    {
        let elements_array_in = ['.checkbox', '#year_start', '#month_start', '#day_start', '#hour_start', '#minute_start', '#year_end', '#month_end', '#day_end', '#hour_end', '#minute_end'];
        let elements_array_out = [];
        for(let i = 0; i < 11; i++) 
            elements_array_out[i] = document.querySelector(elements_array_in[i]);

        let id_array = Id.split('_');
        
        for(let i = 1; i < 11; i++) {
            switch(i) {
                case 4: case 5: case 9: case 10:
                    continue;
                case 1: case 6:
                    elements_array_out[i].value = id_array[1];
                    break;
                case 2: case 7:
                    elements_array_out[i].value = id_array[2];
                    break;
                case 3: case 8:
                    elements_array_out[i].value = id_array[3];
                    break;
            }
        }
        let elements_array_in1 = ['#DateBar_year', '#DateBar_month', '#DateBar_day'];
        let elements_array_out1 = [];
        for(let i = 0; i < 3; i++) {
            elements_array_out1[i] = document.querySelector(elements_array_in1[i]);
            elements_array_out1[i].innerText = id_array[i];
        }
    }
}
document.addEventListener("DOMContentLoaded", () => {
    let array = document.querySelectorAll('.CalendarButton');
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
    let time_array = ['#time_start', '#time_end'];
    for(let i = 0; i < 2; i++) 
        time_array[i] = document.querySelector(time_array[i]);
    let checkbox = document.querySelector('.checkbox');
    if(checkbox.checked == true)
        for(let i = 0; i < 2; i++)
            time_array[i].style.display = "none";
    else
        for(let i = 0; i < 2; i++)
            time_array[i].style.display = "flex";
    checkbox.addEventListener("click",  () => {
        if(checkbox.checked == true)
            for(let i = 0; i < 2; i++)
                time_array[i].style.display = "none";
        else
            for(let i = 0; i < 2; i++)
                time_array[i].style.display = "flex";
    });
});
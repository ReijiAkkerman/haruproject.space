var xhr = new XMLHttpRequest();
xhr.open('GET', '/xhr');
xhr.send();
xhr.onload = function() {
    if(xhr.status != 200) 
        alert(`Ошибка ${xhr.status}: ${xhr.statusText}`);
    else
        alert(`${xhr.response}`);
};
xhr.onprogress = function(event) {
    if(event.lengthComputable) 
        alert(`Получено ${event.loaded} из ${event.total} байт`);
    else
        alert(`Получено ${event.loaded} байт`);
};
xhr.onerror = function() {
    alert("Запроос не удался");
};
console.log(`${xhr.response}`);
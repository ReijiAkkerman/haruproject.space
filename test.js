function _send_entry(event) {
    event.preventDefault();
    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/test');
    xhr.send();
    xhr.onload = function() {
        if(xhr.status != 200)
            alert(`error - ${xhr.status}`);
        else
            alert(`получено байт - ${xhr.response.length}`);
    };
}
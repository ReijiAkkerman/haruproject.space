var xhr = new XMLHttpRequest();
xhr.open('GET', '/xhr');
xhr.send();
xhr.onload = function() {

};
xhr.onprogress = function(event) {

};
xhr.onerror = function() {
    
};
console.log(`${xhr.response}`);
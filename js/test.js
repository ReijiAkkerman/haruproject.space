function count(b) {
    let a;
    return function(b) {
        return a = b;
    }
}
var c = count();
c(6);
c(30);
console.log(c);
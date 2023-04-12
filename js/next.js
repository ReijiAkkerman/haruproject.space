document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".next").addEventListener("click", (obj) => {

        if(english.style.display == "none") {
            english.style.display = "block";
            russian.style.display = "none";
        }
        else {
            english.style.display = "none";
            russian.style.display = "block";
        }
    });
});
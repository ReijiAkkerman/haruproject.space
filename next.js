document.addEventListener("DOMContentLoaded", () => {
    document.querySelector("#next").addEventListener("click", () => {
        english.style.display = "none";
        russian.style.display = "block";
    });
});
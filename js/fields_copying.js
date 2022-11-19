document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".copying").addEventListener("click", () => {
        output_login.value = input_login.value;
        output_password.value = input_password.value;
    });
});
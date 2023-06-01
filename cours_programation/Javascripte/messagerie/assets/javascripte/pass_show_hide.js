"use strict";
const passwordField = document.querySelector(".form input[type='password']"),
    toggleBtn = document.querySelector(".form .field i");
toggleBtn.onclick = () => {
    if (passwordField.type == "password") {
        passwordField.type = "text";
        toggleBtn.style.color = "#333";
        toggleBtn.classList.remove("fa-eye");
        toggleBtn.classList.add("fa-eye-slash");
    } else {
        passwordField.type = "password";
        toggleBtn.style.color = "#ccc";
        toggleBtn.classList.remove("fa-eye-slash");
        toggleBtn.classList.add("fa-eye");
    }
}
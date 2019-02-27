//Toggles the hamburger icon
let target = document.getElementById("navToggle");

target.addEventListener("click", () => {
    target.classList.toggle("active");
});
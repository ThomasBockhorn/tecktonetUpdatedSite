//Toggles the hamburger icon
let target = document.getElementById("navToggle");

target.addEventListener("click", () => {
    console.log("this works");
    target.classList.toggle("active");
});
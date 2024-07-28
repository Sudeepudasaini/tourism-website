document.addEventListener("DOMContentLoaded", function () {
    var navbar = document.getElementById("navbar");

    window.addEventListener("scroll", function () {
        if (window.scrollY > 50) { // Adjust this value as needed
            navbar.style.backgroundColor = "rgba(0, 0, 0, 0.9)"; // Opaque background
        } else {
            navbar.style.backgroundColor = "rgba(0, 0, 0, 0.3)"; // Transparent background
        }
    });
});
// making transparent nav bar.
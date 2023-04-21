document.addEventListener("DOMContentLoaded", function() {
    const themeToggle = document.getElementById("theme-toggle");
    themeToggle.addEventListener("click", function() {
        const body = document.body;
        body.classList.toggle("light-mode");
        themeToggle.classList.toggle("light-mode");
    });
});

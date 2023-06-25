const themeToggler = document.querySelector(".theme-toggler");

themeToggler.addEventListener("click", () => {
    document.body.classList.toggle("dark-theme");
    themeToggler.querySelector("i").classList.toogle('active');
});

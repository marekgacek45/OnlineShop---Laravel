const themeToggler = document.querySelector(".theme-toggler");

if(themeToggler){
    themeToggler.addEventListener("click", () => {
        document.body.classList.toggle("dark-theme");
        themeToggler.querySelector("i").classList.toogle('active');
    });
}



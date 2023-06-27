//NAVBAR
const navbarHamburger = document.querySelector(".navbar__hamburger");
const dropdownMenu = document.querySelector(".navbar__dropdown-menu");

const navbarHandler = () => {
    navbarHamburger.classList.toggle("is-active");
    dropdownMenu.classList.toggle("open");
};

if (navbarHamburger) {
    navbarHamburger.addEventListener("click", navbarHandler);
}

//SIDEBAR
const sidebarHamburger = document.querySelector(".dashboard__hamburger");
const sidebarCloseBtn = document.querySelector(".asside__top-closeBtn");
const sidebarMenu = document.querySelector(".asside");

const sidebarHandler = () => {
    sidebarMenu.classList.toggle("open");
};

if (sidebarHamburger) {
    sidebarHamburger.addEventListener("click", sidebarHandler);
}
if(sidebarCloseBtn){

    sidebarCloseBtn.addEventListener("click", sidebarHandler);
}

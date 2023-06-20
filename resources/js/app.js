import './bootstrap';

// const sidebarHamburger = document.querySelector('.sidebar__hamburger')
// const sidebarHamburger2 = document.querySelector('.sidebar__hamburger2')
// const asside = document.querySelector('.asside')

// const handlerSidebar = () => {
//     sidebarHamburger.classList.toggle('is-active')
//     asside.classList.toggle('show-sidebar')
    
// }


// sidebarHamburger2.addEventListener('click',handlerSidebar)
// sidebarHamburger.addEventListener('click',handlerSidebar)



const navbarHamburger = document.querySelector('.navbar__hamburger')
const dropdownMenu = document.querySelector('.navbar__dropdown-menu')

const handlerNavbar = () => {
navbarHamburger.classList.toggle('is-active')
dropdownMenu.classList.toggle('open')
}

navbarHamburger.addEventListener('click',handlerNavbar)
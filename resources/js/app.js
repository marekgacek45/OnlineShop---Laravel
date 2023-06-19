import './bootstrap';

const sidebarHamburger = document.querySelector('.sidebar__hamburger')
const sidebarHamburger2 = document.querySelector('.sidebar__hamburger2')
const asside = document.querySelector('.asside')

const handlerSidebar = () => {
    sidebarHamburger.classList.toggle('is-active')
    asside.classList.toggle('show-sidebar')
    
}


sidebarHamburger2.addEventListener('click',handlerSidebar)
sidebarHamburger.addEventListener('click',handlerSidebar)

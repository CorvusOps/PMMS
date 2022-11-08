/*
 * This file checks for the current page link and 
 * compare it to the url inside the side bar menu.
 * It sets the active page to the matched menu
 */
const activePage = window.location.pathname.split('/')[4];

const navLinks = document.querySelectorAll('li a').forEach(link =>{
    // loops to the links in the list in side bar
    // and compares it to the url
    if(link.href.includes(activePage)){
        // set the css of the matching menu link of the current page
        link.parentElement.classList.add('activeMenu');
        link.firstElementChild.style ='white';
    }
})
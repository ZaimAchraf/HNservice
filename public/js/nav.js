let openNav = document.querySelector(".menu-btn");
let closeNav = document.querySelector(".close-nav");
let listItems = document.querySelectorAll("nav.side-nav ul li");
let nav = document.querySelector("nav.side-nav");

openNav.addEventListener('click', e => {
    nav.style.transform = 'translateX(-20vw)';
    listItems.forEach((item, index) => {
        setTimeout(() => {
            item.style.transform = 'translateX(0)';
        }, 100 * index);
    })

    closeNav.style.visibility = 'visible';
    openNav.style.visibility = 'hidden';
})

closeNav.addEventListener('click', e => {
    nav.style.transform = 'translateX(-100vw)';
    listItems.forEach(item => {
        item.style.transform = 'translateX(-20vw)';
    })
    openNav.style.visibility = 'visible';
    closeNav.style.visibility = 'hidden';
})
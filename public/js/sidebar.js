
let links = document.querySelectorAll(".sidebar .sidebar-menu a");

links.forEach((item, index) => {
    item.addEventListener('click', e => {
        e.preventDefault();
        document.cookie = "index=" + (index + 1);
        window.location = item.getAttribute('href');
    })
})

window.addEventListener('load', () => {
    console.log(document.cookie)
    if (document.cookie.search("index=") === -1) {
        document.cookie = "index=" + 1;
    }
    console.log(getCookie('index'));

    links.forEach((item) => {
        item.classList.remove('active');
    })

    links[(parseInt(getCookie("index")) - 1)].classList.add("active");


})

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i <ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}
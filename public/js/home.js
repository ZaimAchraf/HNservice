// header

let side1 = document.querySelector("#side1");
let side2 = document.querySelector("#side2");

window.addEventListener('scroll', () => {
    side1.style.left = -window.pageYOffset*1.4 + "px";
    side2.style.right = -window.pageYOffset*1.4 + "px";
})

// testimonials

let pagination = document.querySelectorAll("section.testimonials .pagination span.btn");
let slider = document.querySelector("section.testimonials .slide-row");
let x = document.querySelector('.slide-col').offsetWidth;

pagination.forEach((item, index) => {
    item.addEventListener('click', (e) => {
        let trans = index * x;
        slider.style.transform = "translateX(-" + trans + "px)";
        pagination.forEach((item) => {
            item.classList.remove('active');
        });
        pagination[index].classList.add('active');
    })
})
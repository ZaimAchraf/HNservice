let absoluteDiv = document.querySelectorAll(".absolute-container");
let closeSpan = document.querySelectorAll("span.close-btn");
let closeBtn = document.querySelectorAll("button.close-btn");
let showAbsoluteBtn = document.querySelectorAll(".show-absolute");


if (showAbsoluteBtn != null)
    showAbsoluteBtn.forEach((item, index) => {
        item.addEventListener('click', e => {
            e.preventDefault();
            absoluteDiv[index].style.display = 'flex';
        })
    })

closeBtn.forEach((item, index) => {
    item.addEventListener('click', e => {
        e.preventDefault();
        absoluteDiv[index].style.display = 'none';
    })
})

closeSpan.forEach((item, index) => {
    item.addEventListener('click', e => {
        e.preventDefault();
        absoluteDiv[index].style.display = 'none';
    })
})





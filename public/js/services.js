let commandBtn = document.querySelectorAll(".command-btn");
let closeBtn = document.querySelector(".close-btn");
let absolute = document.querySelector(".absolute-container");
let commandForm = document.querySelector(".command-form");
let service = document.querySelector(".command-form .service");

commandBtn.forEach((item) => {
    item.addEventListener('click', e => {
        absolute.style.display = 'flex';
        service.value = item.getAttribute('data-id');
    })
})

closeBtn.addEventListener('click', e => {
    absolute.style.display = 'none';
})

commandForm.addEventListener('submit', e => {
    e.preventDefault();
    addCommand();
})

function addCommand()
{
    let data = $('.command-form').serialize();

    $.ajax({
        type        : "post",
        url         : "/services/addCommand",
        data        : data,
        success:function (data)
        {
            console.log(data);
            absolute.style.display = 'none';
            if( data === "success")
            {
                console.log(data);
                Swal.fire(
                    'Done!',
                    'Your request has been sent, we gonna contact you',
                    'success'
                )

            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    html: data
                })
            }
        }
    });

}
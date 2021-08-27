let addServiceBtn = document.querySelector(".buttons .submit-btn");


addServiceBtn.addEventListener('click', e => {
    e.preventDefault();
    addService();
})

function addService()
{
    let Data = new FormData($(".add-service-form")[0]);

    $.ajax({
        type        : "post",
        enctype     : "multipart/form-data",
        url         : "/admin/services/addService",
        data        : Data,
        processData : false,
        contentType : false,
        cache       : false,
        success:function (data)
        {
            console.log(data);
            absoluteDiv[0].style.display = 'none';
            if( data === "success")
            {
                console.log(data);
                Swal.fire(
                    'Added!',
                    'Product added successfully',
                    'success'
                )

            }else if(typeof data == 'object')
            {
                // It is JSON
                data = JSON.parse(data);
                console.log(data);
                // Swal.fire({
                //     position: 'center',
                //     icon: 'error',
                //     html: data.,
                //     timer: 4000
                // })
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

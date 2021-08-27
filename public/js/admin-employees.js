let addEmployeeBtn = document.querySelector(".buttons .submit-btn");


addEmployeeBtn.addEventListener('click', e => {
    e.preventDefault();
    addEmployee();
})

function addEmployee()
{
    let Data = new FormData($(".add-employee-form")[0]);

    $.ajax({
        type        : "post",
        enctype     : "multipart/form-data",
        url         : "/admin/employees/addEmployee",
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

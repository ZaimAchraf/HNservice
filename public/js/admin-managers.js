let addSubcategoryBtn = document.querySelector(".buttons .submit-btn");


addSubcategoryBtn.addEventListener('click', e => {
    e.preventDefault();
    addManager();
})

function addManager()
{
    let data = $('.add-manager-form').serialize();

    $.ajax({
        type        : "post",
        url         : "/admin/managers/add",
        data        : data,
        success:function (data)
        {
            absoluteDiv[0].style.display = 'none';
            console.log(data);
            if( data === "success")
            {
                console.log(data);
                Swal.fire(
                    'Added!',
                    'Manager added successfully',
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


// delete manager

$('#myTable').Tabledit({
    url: '/admin/managers/delete',
    restoreButton: false,
    editButton: false,
    columns: {
        identifier : [0, 'id'],
        editable: [[1, 'fullName'], [2, 'email']]
    },
    onDraw: function() {
        console.log('onDraw()');
    },
    onSuccess: function(data, textStatus, jqXHR) {
        if (data.status === 'success' && data.action === 'edit'){
            Swal.fire(
                'Updated!',
                'Subcategory updated successfully',
                'success'
            )
        }else if (data.action === 'delete'){
            Swal.fire(
                'Deleted!',
                'Subcategory deleted successfully',
                'success'
            )
        }else{
            Swal.fire({
                position: 'center',
                icon: 'error',
                html: data.error
            })
        }
    },
    onFail: function(jqXHR, textStatus, errorThrown) {
        console.log('onFail(jqXHR, textStatus, errorThrown)');
        console.log(jqXHR);
        console.log(textStatus);
        console.log(errorThrown);
    },
    onAlways: function() {
        console.log('onAlways()');
    },
    onAjax: function(action, serialize) {
        console.log('onAjax(action, serialize)');
        console.log(action);
        console.log(serialize);
    }
});

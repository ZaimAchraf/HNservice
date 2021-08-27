let status = document.querySelectorAll("td.status span");
let delBtn = document.querySelectorAll("button.delete-msg");
let rows = document.querySelectorAll("tr.message-row");
let countMsg = document.querySelector("#msg-nbr");


if (showAbsoluteBtn != null) {
    showAbsoluteBtn.forEach((item, index) => {
        item.addEventListener('click', e => {

            if (status[index].classList.contains('unread')){
                let id = item.getAttribute("data-id");
                setRead(id);
                status[index].classList.remove('unread');
                status[index].childNodes[0].classList.remove('la-eye-slash');
                status[index].classList.add('read');
                status[index].childNodes[0].classList.add('la-eye');

                countMsg.innerHTML = parseInt(countMsg.textContent) - 1;
            }
        })

    })
}

if (delBtn != null) {
    delBtn.forEach((item, index) => {
        item.addEventListener('click', e => {
            let id = item.getAttribute("data-id");
            deleteMsg(id, index);
            rows[index].style.display = 'none';
        })
    })
}

function setRead(id)
{
    let data = "id=" + id;
    $.ajax({
        type        : "post",
        url         : "/admin/readMessage",
        data        : data,
        success:function (data)
        {
            console.log(data);
        }
    });

}


function deleteMsg(id, index)
{
    let Data = "id=" + id;

    $.ajax({
        type        : "post",
        url         : "/admin/messages/delete",
        data        : Data,
        success:function (data)
        {
            console.log(data);
            if( data === "success")
            {

                if (status[index].classList.contains('unread')){
                    countMsg.innerHTML = parseInt(countMsg.textContent) - 1;
                }
                Swal.fire(
                    'Deleted!',
                    'Message deleted successfully',
                    'success'
                )

            }else{
                Swal.fire({
                    position: 'center',
                    icon: 'error',
                    html: "there is a problem..."
                })
            }
        }
    });

}

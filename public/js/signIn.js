
//////////////////////////////////////////////////////////////////
//**                      SignIn Action                         //
//////////////////////////////////////////////////////////////////

let signIn_form = document.querySelector('.signin-form');

signIn_form.addEventListener('submit', (e)=>{

    e.preventDefault();
    // console.log($('.signUp-form').serialize());
    var data = $('.signin-form').serialize();


    $.ajax({
        type    : "post",
        url     : "/login",
        data    : data,
        success:function (data)
        {
            console.log(data);
            if (data === 'limit'){
                lockSubmit();
            }else if(data.search("wait") > -1){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data + " !"
                })
            }else if(data === 'success'){
                Swal.fire(
                    'logged!',
                    'You have been logged successfully',
                    'success'
                )
                setTimeout(function (){
                    window.location.replace("/admin");
                },1000);
            }else{
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: data + " !"
                })
            }
        }
    });
});

function lockSubmit() {

    let timer_p = document.querySelector(".timer-p");
    let submitBtn = document.querySelector(".form-control.submit");
    submitBtn.disabled = true;
    let counter = 30;

    let interval = setInterval(function (){
        counter--;
        timer_p.innerHTML = 'you should wait ' + counter + ' s before you try again';

        if(counter === 0) {
            timer_p.innerHTML = 'Now you can try again';
            submitBtn.disabled = false;
            clearInterval(interval);
        }

    },1000);
}
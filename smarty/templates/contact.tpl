{extends file="master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/contact.css">
{/block}
{block name="title"}
    HN SERVICES | About
{/block}
{block name="main"}


    <div id="contact" class="contact">
        <div class="moitie">

        </div>
        <div class="moitie">
            <div class="darker">

            </div>
        </div>
        <div>
            <div class="contact_form">

                <form name="contact" action="" method="post" class="contact-form">
                    <table>
                        <h1>Send a Message</h1>
                        <tr>
                            <td><label for="firstname">firstname</label></td>
                            <td><label for="lastname">lastname</label></td>
                        </tr>
                        <tr>
                            <td><input id="firstname" name="firstName" type="text" placeholder="firstname"></td>
                            <td><input id="lastname" name="lastName" type="text" placeholder="lastname"></td>
                        </tr>
                        <tr>
                            <td><label >Email Adress</label></td>
                            <td><label >subject</label></td>
                        </tr>
                        <tr>
                            <td><input name="email" type="text" placeholder="exemple@gmail.com"></td>
                            <td><input name="subject" type="text" placeholder="subject"></td>
                        </tr>
                        <tr>
                            <td><label >Enter your message here</label></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <textarea name="message">message...</textarea>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input name="sub_cont" id="contact_submit" type="submit" value='Send'>
                                <!-- <span><i class="fas fa-paper-plane"></i></span> -->
                            </td>
                        </tr>
                    </table>


                </form>
            </div>

            <div class="personnal_info">
                <div>
                    <h1>Contact info</h1>
                    <p>
                    <span>
                        <i class="fas fa-map-marker-alt"></i>
                    </span>
                        106 AIT SEKKATOU 2 RESIDENCE ANAS 2 APPART 12 FES
                    </p>
                    <p>
                    <span>
                        <i class="far fa-envelope-open"></i>
                    </span>
                        Achraf.zaime@gmail.com
                    </p>
                    <p>
                    <span>
                        <i class="fas fa-phone-volume"></i>
                    </span>
                        0693020346
                    </p>
                    <div class="RS">
                        <a href="">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="">
                            <i class="fas fa-globe-europe"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </div>
    {include file="layout/footer.tpl"}

{/block}
{block name="scripts"}
    <script>
        let contactFrom = document.querySelector(".contact-form");


        contactFrom.addEventListener('submit', e => {
            e.preventDefault();
            sendMessage();
        })

        function sendMessage()
        {
            let data = $('.contact-form').serialize();

            $.ajax({
                type        : "post",
                url         : "/contact/send",
                data        : data,
                success:function (data)
                {
                    console.log(data);
                    if( data === "success")
                    {
                        console.log(data);
                        Swal.fire(
                            'Sent!',
                            'Message has been sent successfully',
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
    </script>
{/block}
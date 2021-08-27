<?php
/* Smarty version 3.1.39, created on 2021-08-11 23:02:05
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61143acd01c6d7_55504282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2ab2fbb1af6a77cd749bf7b3cda67fa8494fa29' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\contact.tpl',
      1 => 1628715710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_61143acd01c6d7_55504282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109064318461143acd00aff8_53073629', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_171055507661143acd00d230_85475342', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_200454795461143acd00ecf2_90840331', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_169081618661143acd01ab14_38161015', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_109064318461143acd00aff8_53073629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_109064318461143acd00aff8_53073629',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/contact.css">
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_171055507661143acd00d230_85475342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_171055507661143acd00d230_85475342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    HN SERVICES | About
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_200454795461143acd00ecf2_90840331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_200454795461143acd00ecf2_90840331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



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
    <?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_169081618661143acd01ab14_38161015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_169081618661143acd01ab14_38161015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

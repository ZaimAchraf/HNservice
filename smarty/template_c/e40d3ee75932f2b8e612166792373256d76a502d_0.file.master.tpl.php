<?php
/* Smarty version 3.1.39, created on 2021-08-20 00:21:58
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611ed986d393b0_85919215',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e40d3ee75932f2b8e612166792373256d76a502d' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\master.tpl',
      1 => 1629411716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/navbar.tpl' => 1,
  ),
),false)) {
function content_611ed986d393b0_85919215 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="/assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="/css/navbar.css">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_941837438611ed986d32232_77069043', "styles");
?>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_618385412611ed986d34089_07680932', "title");
?>
</title>
</head>
<body>

    <div class="landing"></div>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1595643789611ed986d37b07_94427889', "main");
?>


    <!-- jQuery library -->
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>

    <!-- Latest compiled JavaScript -->
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- sweetalert2 -->
    <?php echo '<script'; ?>
 src="/assets/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/font-awesome-4.7.0/all.min.js"><?php echo '</script'; ?>
>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_676809094611ed986d38470_94301545', "scripts");
?>

    <?php echo '<script'; ?>
 src="/js/nav.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        let landing = document.querySelector(".landing");
        let videos = document.querySelectorAll(".side video");
        let body = document.querySelector("body");

        window.onload = e => {
            landing.style.opacity = 0;
            setTimeout(() => {
                landing.style.display = 'none';
            }, 2000);
            // if (videos != null)
            //     videos.forEach(item => {
            //         item.play();
            //     })

        }

            if (videos != null){
                setTimeout(() => {
                    console.log('hey')
                    videos.forEach(item => {
                        item.play();
                    })
                }, 1000);
            }else
                console.log('hey');
    <?php echo '</script'; ?>
>
        </body>
</html><?php }
/* {block "styles"} */
class Block_941837438611ed986d32232_77069043 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_941837438611ed986d32232_77069043',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_618385412611ed986d34089_07680932 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_618385412611ed986d34089_07680932',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_1595643789611ed986d37b07_94427889 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1595643789611ed986d37b07_94427889',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_676809094611ed986d38470_94301545 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_676809094611ed986d38470_94301545',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}

<?php
/* Smarty version 3.1.39, created on 2022-06-23 14:29:56
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b45cc4cc3104_37985802',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '503012044a6ad1a5b7bc9192bb56a7c253226646' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\master.tpl',
      1 => 1629411716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/navbar.tpl' => 1,
  ),
),false)) {
function content_62b45cc4cc3104_37985802 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_147199827562b45cc4cbb8e4_37942202', "styles");
?>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_143199670662b45cc4cbd2b8_54700046', "title");
?>
</title>
</head>
<body>

    <div class="landing"></div>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_142060112962b45cc4cbf9a2_62637607', "main");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24692307262b45cc4cc1147_49370793', "scripts");
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
class Block_147199827562b45cc4cbb8e4_37942202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_147199827562b45cc4cbb8e4_37942202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_143199670662b45cc4cbd2b8_54700046 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_143199670662b45cc4cbd2b8_54700046',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_142060112962b45cc4cbf9a2_62637607 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_142060112962b45cc4cbf9a2_62637607',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_24692307262b45cc4cc1147_49370793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_24692307262b45cc4cc1147_49370793',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}

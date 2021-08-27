<?php
/* Smarty version 3.1.39, created on 2021-08-01 00:18:31
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6105cc37217730_01421865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0d5b138fe80deaad86152401f1a816beb7a033c4' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\master.tpl',
      1 => 1627769908,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6105cc37217730_01421865 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21366929656105cc37211c49_13787835', "styles");
?>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19129395966105cc37214e91_31465476', "title");
?>
</title>
</head>
<body>

    <nav>
        <div class="left">
            <span class="menu-btn"><i class="las la-bars icone"></i></span>
            <a href="#"><span class="search"><i class="las la-search icone"></i></span></a>
        </div>
        <div class="logo">
            <img src="/Storage/Statics/images/logo.png" width="208px" alt="">
        </div>
        <div class="right">
            <a href=""><span class="user"><i class="las la-user icone"></i></span></a>
            <a href="">
                <i class="las la-shopping-cart icone"></i>
                <span style="font-size: 1.4rem">Cart</span>
            </a>
        </div>
    </nav>
    <main>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11401374126105cc37215d59_78806615', "main");
?>

    </main>
    <footer>

    </footer>

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
<?php echo '<script'; ?>
 src="/js/script.js"><?php echo '</script'; ?>
>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5909477456105cc37216bc9_30510954', "scripts");
?>

</body>
</html><?php }
/* {block "styles"} */
class Block_21366929656105cc37211c49_13787835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_21366929656105cc37211c49_13787835',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_19129395966105cc37214e91_31465476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19129395966105cc37214e91_31465476',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_11401374126105cc37215d59_78806615 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_11401374126105cc37215d59_78806615',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_5909477456105cc37216bc9_30510954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_5909477456105cc37216bc9_30510954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}

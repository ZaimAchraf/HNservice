<?php
/* Smarty version 3.1.39, created on 2022-06-23 19:46:26
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\admin\admin-master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b4a6f27f5579_75131404',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '645d541254d282409d0a33ef15c49f3af1c9c2be' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\admin\\admin-master.tpl',
      1 => 1628649964,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/sidebar.tpl' => 1,
  ),
),false)) {
function content_62b4a6f27f5579_75131404 (Smarty_Internal_Template $_smarty_tpl) {
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
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="/assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_93483539262b4a6f27e52a8_94023029', "styles");
?>

        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_26095124962b4a6f27e6a54_74353279', "title");
?>
</title>
    </head>
    <body>
        <input type="checkbox" id="nav-toggle">
        <?php $_smarty_tpl->_subTemplateRender("file:admin/sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>

                    <?php echo $_smarty_tpl->tpl_vars['data']->value['title'];?>

                </h2>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here" />
                </div>

                <div class="user-wrapper">
                    <img src="/Storage/Statics/images/profile.jpg" width="30px" height="30px" alt="">
                    <div>
                        <h4>Zaim Achraf</h4>
                        <small>super admin</small>
                    </div>
                </div>
            </header>

            <main>
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_125771913862b4a6f27f12b2_47131214', "main");
?>

            </main>

        </div>

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
 src="/js/script.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/js/sidebar.js"><?php echo '</script'; ?>
>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_140823872462b4a6f27f3d22_06406440', "scripts");
?>

    </body>
</html><?php }
/* {block "styles"} */
class Block_93483539262b4a6f27e52a8_94023029 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_93483539262b4a6f27e52a8_94023029',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_26095124962b4a6f27e6a54_74353279 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_26095124962b4a6f27e6a54_74353279',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_125771913862b4a6f27f12b2_47131214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_125771913862b4a6f27f12b2_47131214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_140823872462b4a6f27f3d22_06406440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_140823872462b4a6f27f3d22_06406440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}

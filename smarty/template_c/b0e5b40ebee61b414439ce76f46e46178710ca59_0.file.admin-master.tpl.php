<?php
/* Smarty version 3.1.39, created on 2021-07-27 22:18:20
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\admin\admin-master.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61006a0c02f430_52003603',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e5b40ebee61b414439ce76f46e46178710ca59' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\admin\\admin-master.tpl',
      1 => 1627417096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:admin/sidebar.tpl' => 1,
  ),
),false)) {
function content_61006a0c02f430_52003603 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_155458335261006a0c01f8b8_41236472', "styles");
?>

        <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_31967012261006a0c021704_87138443', "title");
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_197698912461006a0c02b9d0_04650285', "main");
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
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_60062851061006a0c02df58_69830514', "scripts");
?>

    </body>
</html><?php }
/* {block "styles"} */
class Block_155458335261006a0c01f8b8_41236472 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_155458335261006a0c01f8b8_41236472',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_31967012261006a0c021704_87138443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_31967012261006a0c021704_87138443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_197698912461006a0c02b9d0_04650285 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_197698912461006a0c02b9d0_04650285',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_60062851061006a0c02df58_69830514 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_60062851061006a0c02df58_69830514',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "scripts"} */
}

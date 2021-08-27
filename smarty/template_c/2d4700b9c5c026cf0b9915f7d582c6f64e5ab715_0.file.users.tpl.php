<?php
/* Smarty version 3.1.39, created on 2021-08-10 01:39:12
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\admin\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6111bca0cc4090_45662446',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4700b9c5c026cf0b9915f7d582c6f64e5ab715' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\admin\\users.tpl',
      1 => 1628552348,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6111bca0cc4090_45662446 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16251166146111bca0cab283_75040375', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3998224476111bca0cac3d2_78860044', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19404348346111bca0cacf56_53127130', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7608787876111bca0cc3377_95959973', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_16251166146111bca0cab283_75040375 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_16251166146111bca0cab283_75040375',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/tables_style.css">
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_3998224476111bca0cac3d2_78860044 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3998224476111bca0cac3d2_78860044',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Admin | Users
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_19404348346111bca0cacf56_53127130 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_19404348346111bca0cacf56_53127130',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Manager
                </span>
    </div>

    <div class="absolute-container">
        <div class="add-form">
            <div class="close-btn close">
                <span class="las la-times"></span>
            </div>
            <h3>Add manager</h3>
            <form action="" method="post" enctype="multipart/form-data" class="add-manager-form">
                <div class="mb-3 input">
                    <input type="text" name="fullName" class="form-control"  placeholder="Full name">
                </div>
                <div class="mb-3 input">
                    <input type="email" name="email" class="form-control"  placeholder="E-mail">
                </div>
                <div class="mb-3 input">
                    <input type="password" name="password" class="form-control"  placeholder="password">
                </div>
                <div class="mb-3 input">
                    <input type="password" name="confirm-password" class="form-control"  placeholder="confirm password">
                </div>

                <div class="buttons">
                    <button type="button" class="btn btn-primary submit-btn">Submit</button>
                    <button type="button" class="btn btn-secondary close-btn">Close</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-container">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Full Name</th>
                <th>E-mail</th>
            </tr>
            </thead>

            <tbody>
            <?php if (empty($_smarty_tpl->tpl_vars['data']->value['users'])) {?>
                <tr><td colspan="9" class="text-center">There is no users</td></tr>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['users'], 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                    <tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['fullName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td></tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>

            </tbody>
        </table>
    </div>

<?php
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_7608787876111bca0cc3377_95959973 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_7608787876111bca0cc3377_95959973',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/jquery.tabledit.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/admin-managers.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>


    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

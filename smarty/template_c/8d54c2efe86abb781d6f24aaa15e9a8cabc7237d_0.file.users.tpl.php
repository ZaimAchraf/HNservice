<?php
/* Smarty version 3.1.39, created on 2021-07-28 02:37:56
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\admin\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6100a6e4b92601_38465956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d54c2efe86abb781d6f24aaa15e9a8cabc7237d' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\admin\\users.tpl',
      1 => 1627432672,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6100a6e4b92601_38465956 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8999746526100a6e4b7e2a7_13841378', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21392043906100a6e4b7f0d0_47352075', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15111629886100a6e4b7fa71_49027722', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6853589366100a6e4b91e91_70615082', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_8999746526100a6e4b7e2a7_13841378 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_8999746526100a6e4b7e2a7_13841378',
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
class Block_21392043906100a6e4b7f0d0_47352075 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_21392043906100a6e4b7f0d0_47352075',
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
class Block_15111629886100a6e4b7fa71_49027722 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_15111629886100a6e4b7fa71_49027722',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <div class="table-container">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Username</th>
                        <th>E-mail</th>
                        <th>Sex</th>
                        <th>Birthday</th>
                        <th>address</th>
                        <th>Tel</th>
                        <th>IsConfirmed</th>
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
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['user']->value['username'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['sex'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['birthDay'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['address'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['tel'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['user']->value['confirmed'];?>
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
class Block_6853589366100a6e4b91e91_70615082 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_6853589366100a6e4b91e91_70615082',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "scripts"} */
}

<?php
/* Smarty version 3.1.39, created on 2021-08-11 02:31:12
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\admin\inbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61131a50e097d0_15981178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01c59b6950e232469f2b342efcac4cc322b7c35e' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\admin\\inbox.tpl',
      1 => 1628641803,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61131a50e097d0_15981178 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100339601561131a50defa28_99964822', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_137028898761131a50df0d16_44567754', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_80116573561131a50df16e6_52963573', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_24276092261131a50e08454_88782122', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_100339601561131a50defa28_99964822 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_100339601561131a50defa28_99964822',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/tables_style.css">
    <link rel="stylesheet" href="/css/inbox.css">
    <style>
        .read {
            color: #5aff5a;
            font-size: 2em;
            display: block;
            text-align: center;
        }

        .unread {
            color: #33bbbb;
            font-size: 2em;
            display: block;
            text-align: center;
        }

        tr td:last-of-type button:first-of-type{
            margin-right: 10px;
        }
    </style>
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_137028898761131a50df0d16_44567754 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_137028898761131a50df0d16_44567754',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Admin | inbox
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_80116573561131a50df16e6_52963573 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_80116573561131a50df16e6_52963573',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['messages'])) {?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['messages'], 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
            <div class="absolute-container"><div class="single-msg"><span class="close-btn"><i class="las la-times-circle"></i></span><h1 class="section-title">Message</h1><h2 class="author"><span>FROM : </span> <?php echo $_smarty_tpl->tpl_vars['message']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['message']->value['lastName'];?>
 </h2><span>Message :</span><div class="message"><p><?php echo $_smarty_tpl->tpl_vars['message']->value['message'];?>
</p></div><div class="date"> <?php echo $_smarty_tpl->tpl_vars['message']->value['date_time'];?>
</div><div class="buttons"><a href="mailto:<?php echo $_smarty_tpl->tpl_vars['message']->value['email'];?>
"><button class="btn btn-primary "><i class="las la-reply"></i> Reply</button></a><a href=""><button class="btn btn-secondary close-btn">Close</button></a></div></div></div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php }?>

    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th></th>
                <th>id</th>
                <th>Full Name</th>
                <th>E-mail</th>
                <th>Subject</th>
                <th>date</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            <?php if (empty($_smarty_tpl->tpl_vars['data']->value['messages'])) {?>
                <tr><td colspan="9" class="text-center">There is no users</td></tr>
            <?php } else { ?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['messages'], 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                    <tr class="message-row"><td class="status"><?php if ($_smarty_tpl->tpl_vars['message']->value['readable'] == 1) {?> <span class="read"><i class="lar la-eye"></i></span> <?php } else { ?> <span class="unread"><i class="las la-eye-slash"></i></span> <?php }?></td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['contactID'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['firstName'];?>
 <?php echo $_smarty_tpl->tpl_vars['message']->value['lastName'];?>
 </td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['subject'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['message']->value['date_time'];?>
</td><td><button class="btn btn-success show-absolute" data-id="<?php echo $_smarty_tpl->tpl_vars['message']->value['contactID'];?>
">Show</button><button class="btn btn-danger delete-msg" data-id="<?php echo $_smarty_tpl->tpl_vars['message']->value['contactID'];?>
">Delete</button></td></tr>
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
class Block_24276092261131a50e08454_88782122 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_24276092261131a50e08454_88782122',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/admin-inbox.js"><?php echo '</script'; ?>
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

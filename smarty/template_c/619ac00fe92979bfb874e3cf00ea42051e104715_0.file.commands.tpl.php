<?php
/* Smarty version 3.1.39, created on 2022-06-23 19:46:42
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\admin\commands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b4a7028ea670_56659682',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '619ac00fe92979bfb874e3cf00ea42051e104715' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\admin\\commands.tpl',
      1 => 1629254883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4a7028ea670_56659682 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49633892962b4a7028a73f5_69446510', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_29577748362b4a7028aa3f4_01754359', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207620230862b4a7028acdb2_30890770', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_178291034562b4a7028e6359_00507444', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_49633892962b4a7028a73f5_69446510 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_49633892962b4a7028a73f5_69446510',
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
class Block_29577748362b4a7028aa3f4_01754359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_29577748362b4a7028aa3f4_01754359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Admin | commands
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_207620230862b4a7028acdb2_30890770 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_207620230862b4a7028acdb2_30890770',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="table-container">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>full name</th>
                        <th>email</th>
                        <th>tel</th>
                        <th>message</th>
                        <th>service</th>
                        <th>status</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['commands'])) {?>
                        <tr><td colspan="9" class="text-center">There is no Commands</td></tr>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['commands'], 'command');
$_smarty_tpl->tpl_vars['command']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['command']->value) {
$_smarty_tpl->tpl_vars['command']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['command']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['command']->value['fullName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['command']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['command']->value['phone'];?>
</td><td class="long-text" title="<?php echo $_smarty_tpl->tpl_vars['command']->value['message'];?>
"><?php echo $_smarty_tpl->tpl_vars['command']->value['message'];?>
</td><td title="<?php echo $_smarty_tpl->tpl_vars['command']->value['title_en'];?>
"><?php echo $_smarty_tpl->tpl_vars['command']->value['service'];?>
</td><td title=""><?php echo $_smarty_tpl->tpl_vars['command']->value['status'];?>
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
class Block_178291034562b4a7028e6359_00507444 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_178291034562b4a7028e6359_00507444',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/jquery.tabledit.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/admin-commands.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $('#myTable').Tabledit({
            url: '/admin/commands/edit',
            restoreButton: false,
            editButtonText : 'confirm',
            columns: {
                identifier : [0, 'id'],
                editable: [[6, 'status']]
            },
            onDraw: function() {
                console.log('onDraw()');
            },
            onSuccess: function(data, textStatus, jqXHR) {
                if (data.status === 'success' && data.action === 'edit'){
                    Swal.fire(
                        'Confirmed!',
                        'Command confirmed successfully',
                        'success'
                    )
                }else if (data.action === 'delete'){
                    Swal.fire(
                        'Deleted!',
                        'Command deleted successfully',
                        'success'
                    )
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        html: data.error
                    })
                }
            },
            onFail: function(jqXHR, textStatus, errorThrown) {
                console.log('onFail(jqXHR, textStatus, errorThrown)');
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
            onAlways: function() {
                console.log('onAlways()');
            },
            onAjax: function(action, serialize) {
                console.log('onAjax(action, serialize)');
                console.log(action);
                console.log(serialize);
            }
        });

        let imageTd = document.querySelectorAll(".image");
        imageTd.forEach(item => {
            if (item !== null) {
                let src = item.getAttribute('data-src');
                item.innerHTML = '<img src="/Storage/uploads/employees/' + src + '" width="50px" height="50px" alt="pic">'
            }
        })

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

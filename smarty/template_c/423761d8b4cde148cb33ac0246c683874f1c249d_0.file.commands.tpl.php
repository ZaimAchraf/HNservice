<?php
/* Smarty version 3.1.39, created on 2021-08-18 04:48:06
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\admin\commands.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c74e68b64c1_38250799',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '423761d8b4cde148cb33ac0246c683874f1c249d' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\admin\\commands.tpl',
      1 => 1629254883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c74e68b64c1_38250799 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_333411095611c74e6881521_66149570', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_931972867611c74e6885f80_78651034', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1367993166611c74e6888ac5_26954661', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1284479011611c74e68b2c65_62143698', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_333411095611c74e6881521_66149570 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_333411095611c74e6881521_66149570',
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
class Block_931972867611c74e6885f80_78651034 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_931972867611c74e6885f80_78651034',
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
class Block_1367993166611c74e6888ac5_26954661 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1367993166611c74e6888ac5_26954661',
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
class Block_1284479011611c74e68b2c65_62143698 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1284479011611c74e68b2c65_62143698',
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

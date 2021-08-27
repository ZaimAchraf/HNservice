<?php
/* Smarty version 3.1.39, created on 2021-07-27 23:20:01
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\admin\subcategories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610078810720f4_16144598',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '44b9b42c7898fc2392083066c1c5d668f8e478b2' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\admin\\subcategories.tpl',
      1 => 1627420797,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610078810720f4_16144598 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10024868261007881046366_54785403', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_198271780161007881048954_58069560', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7218858356100788104a5b2_17909612', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14599344926100788106d927_82665121', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_10024868261007881046366_54785403 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_10024868261007881046366_54785403',
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
class Block_198271780161007881048954_58069560 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_198271780161007881048954_58069560',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Admin | Subcategories
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_7218858356100788104a5b2_17909612 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_7218858356100788104a5b2_17909612',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Subcategory
                </span>
            </div>

            <div class="absolute-container">
                <div class="add-form">
                    <div class="close-btn close">
                        <span class="las la-times"></span>
                    </div>
                    <h3>Add Subcategory</h3>
                    <form action="" method="post" class="add-subcategory-form">
                        <div class="mb-3 input">
                            <input type="text" name="title" class="form-control"  placeholder="subcategory title">
                        </div>
                        <div class="mb-3 input">
                            <input class="form-control" name="Cat" list="subCatOptions" placeholder="Category">
                            <datalist id="subCatOptions" multiple>
                                <option value="1">jewelry</option>
                                <option value="2">Accessory</option>
                            </datalist>
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
                        <th>SubCatID</th>
                        <th>Cat <span> (1: jewelry, 2: accessory)</span></th>
                        <th>Subcategory Name</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['subcategories'])) {?>
                        <tr><td colspan="3" class="text-center">There is no products</td></tr>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['subcategories'], 'subactegorie');
$_smarty_tpl->tpl_vars['subactegorie']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['subactegorie']->value) {
$_smarty_tpl->tpl_vars['subactegorie']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['subactegorie']->value['subCatID'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['subactegorie']->value['catID'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['subactegorie']->value['subCatName'];?>
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
class Block_14599344926100788106d927_82665121 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_14599344926100788106d927_82665121',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/jquery.tabledit.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/admin-subcategories.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $('#myTable').Tabledit({
            url: '/admin/Subcategories/update',
            restoreButton: false,
            columns: {
                identifier : [0, 'id'],
                editable: [[1, 'Cat'], [2, 'title']]
            },
            onDraw: function() {
                console.log('onDraw()');
            },
            onSuccess: function(data, textStatus, jqXHR) {
                if (data.status === 'success' && data.action === 'edit'){
                    Swal.fire(
                        'Updated!',
                        'Subcategory updated successfully',
                        'success'
                    )
                }else if (data.action === 'delete'){
                    Swal.fire(
                        'Deleted!',
                        'Subcategory deleted successfully',
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
    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

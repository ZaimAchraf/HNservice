<?php
/* Smarty version 3.1.39, created on 2022-06-23 19:46:40
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\admin\employees.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b4a700905e89_07517292',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '057386b73588b382e82bb9493ec873e84a5b6a64' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\admin\\employees.tpl',
      1 => 1629254666,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4a700905e89_07517292 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_38806473162b4a7008c9d05_07418776', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100086531062b4a7008cc506_53774522', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_213771047462b4a7008ce415_96933645', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_199640739462b4a700901653_77982003', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_38806473162b4a7008c9d05_07418776 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_38806473162b4a7008c9d05_07418776',
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
class Block_100086531062b4a7008cc506_53774522 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_100086531062b4a7008cc506_53774522',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Admin-Products
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_213771047462b4a7008ce415_96933645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_213771047462b4a7008ce415_96933645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Employee
                </span>
            </div>

            <div class="absolute-container">
                <div class="add-form">
                    <div class="close-btn close">
                        <span class="las la-times"></span>
                    </div>
                    <h3>Add Employee</h3>
                    <form action="" method="post" enctype="multipart/form-data" class="add-employee-form">
                        <div class="mb-3 input">
                            <input type="text" name="fullName" class="form-control"  placeholder="full name">
                        </div>
                        <div class="mb-3 input">
                            <input type="email" name="email" class="form-control"  placeholder="E-mail">
                        </div>
                        <div class="mb-3 input">
                            <input type="number" name="tel" class="form-control"  placeholder="Phone">
                        </div>
                        <div class="mb-3 input">
                            <input class="form-control" name="service" list="subCatOptions" id="exampleDataList" placeholder="Service">
                            <datalist id="subCatOptions">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['services'], 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['service']->value['title'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </datalist>
                        </div>
                        <div class="mb-3 text-area">
                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1">Address...</textarea>
                        </div>
                        <div class="mb-3 text-area">
                            <label for="EmployeePic" class="UploadLabel"><i class="las la-images"></i> Upload Pictures</label>
                            <input type="file" name="pictures[]" id="EmployeePic" multiple>
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
                        <th>ID</th>
                        <th>full name</th>
                        <th>picture</th>
                        <th>email</th>
                        <th>tel</th>
                        <th>address</th>
                        <th>service</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['employees'])) {?>
                        <tr><td colspan="9" class="text-center">There is no products</td></tr>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['employees'], 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['employee']->value['id'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['employee']->value['fullName'];?>
</td><td class="image" data-src="<?php echo $_smarty_tpl->tpl_vars['employee']->value['picture'];?>
"></td><td><?php echo $_smarty_tpl->tpl_vars['employee']->value['email'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['employee']->value['tel'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['employee']->value['address'];?>
</td><td title="<?php echo $_smarty_tpl->tpl_vars['employee']->value['title_en'];?>
"><?php echo $_smarty_tpl->tpl_vars['employee']->value['service'];?>
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
class Block_199640739462b4a700901653_77982003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_199640739462b4a700901653_77982003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/jquery.tabledit.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/admin-employees.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $('#myTable').Tabledit({
            url: '/admin/employees/edit',
            restoreButton: false,
            columns: {
                identifier : [0, 'id'],
                editable: [[1, 'fullName'], [3, 'email'], [4, 'tel'], [5, 'address'], [6, 'service']]
            },
            onDraw: function() {
                console.log('onDraw()');
            },
            onSuccess: function(data, textStatus, jqXHR) {
                if (data.status === 'success' && data.action === 'edit'){
                    Swal.fire(
                        'Updated!',
                        'Product updated successfully',
                        'success'
                    )
                }else if (data.action === 'delete'){
                    Swal.fire(
                        'Deleted!',
                        'Product deleted successfully',
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

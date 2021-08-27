<?php
/* Smarty version 3.1.39, created on 2021-07-27 22:05:08
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\admin\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_610066f4735dd5_29340875',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ab4392e98ee50798d1d6fae994d65fbc2cb29fb9' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\admin\\services.tpl',
      1 => 1627416301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_610066f4735dd5_29340875 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1766186279610066f46fda93_92131228', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_72274558610066f46ffa91_60575757', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_652508595610066f47011e4_98916699', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1569644037610066f4732e98_60943832', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_1766186279610066f46fda93_92131228 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1766186279610066f46fda93_92131228',
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
class Block_72274558610066f46ffa91_60575757 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_72274558610066f46ffa91_60575757',
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
class Block_652508595610066f47011e4_98916699 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_652508595610066f47011e4_98916699',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Product
                </span>
            </div>

            <div class="absolute-container">
                <div class="add-form">
                    <div class="close-btn close">
                        <span class="las la-times"></span>
                    </div>
                    <h3>Add product</h3>
                    <form action="" method="post" enctype="multipart/form-data" class="add-product-form">
                        <div class="mb-3 input">
                            <input type="text" name="title" class="form-control"  placeholder="productName">
                        </div>
                        <div class="mb-3 input">
                            <input type="number" name="price" class="form-control"  placeholder="price">
                        </div>
                        <div class="mb-3 input">
                            <input type="number" name="sale" class="form-control"  placeholder="sale">
                        </div>
                        <div class="mb-3 input">
                            <input type="number" name="Qte" class="form-control"  placeholder="Qte">
                        </div>
                        <div class="mb-3 input">
                            <input type="text" name="color" class="form-control" id="ColorsInput"  placeholder="colors" disabled>
                        </div>
                        <div class="mb-3 input">
                            <input type="color" class="form-control form-control-color" id="ColorInput" value="#563d7c" title="Choose your color">
                            <span class="add-color">
                                add
                            </span>
                        </div>
                        <div class="mb-3 input">
                            <input type="text" name="size" class="form-control" id="exampleDataList" placeholder="exemple: size1, size2...">
                        </div>
                        <div class="mb-3 input">
                            <input class="form-control" name="subCat" list="subCatOptions" id="exampleDataList" placeholder="subCategory">
                            <datalist id="subCatOptions" multiple>
                                <option value="2">New York</option>
                                <option value="New York">
                                <option value="Seattle">
                                <option value="Los Angeles">
                                <option value="Chicago">
                            </datalist>
                        </div>
                        <div class="mb-3 text-area">
                            <textarea name="description" class="form-control" id="exampleFormControlTextarea1">Description...</textarea>
                        </div>
                        <div class="mb-3 text-area">
                            <label for="productPic" class="UploadLabel"><i class="las la-images"></i> Upload Pictures</label>
                            <input type="file" name="pictures[]" id="productPic" multiple>
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
                        <th>productID</th>
                        <th>picture</th>
                        <th>productName</th>
                        <th>description</th>
                        <th>price</th>
                        <th>sale</th>
                        <th>Qte</th>
                        <th>sizes</th>
                        <th>colors</th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php if (empty($_smarty_tpl->tpl_vars['data']->value['services'])) {?>
                        <tr><td colspan="9" class="text-center">There is no products</td></tr>
                    <?php } else { ?>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['services'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['product']->value['productID'];?>
</td><td class="image" data-src="<?php echo $_smarty_tpl->tpl_vars['product']->value['picture'];?>
"></td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['productName'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['description'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['sale'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['Qte'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['sizes'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['product']->value['colors'];?>
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
class Block_1569644037610066f4732e98_60943832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1569644037610066f4732e98_60943832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/jquery.tabledit.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/admin-products.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        $('#myTable').Tabledit({
            url: '/admin/products/edit',
            restoreButton: false,
            columns: {
                identifier : [0, 'productID'],
                editable: [[2, 'productName'], [3, 'description'], [4, 'price'], [5, 'sale'], [6, 'Qte'], [7, 'sizes'], [8, 'colors']]
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
                item.innerHTML = '<img src="/Storage/uploads/products/' + src + '" width="50px" height="50px" alt="pic">'
            }
        })

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

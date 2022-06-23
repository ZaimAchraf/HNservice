<?php
/* Smarty version 3.1.39, created on 2022-06-23 20:01:16
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\admin\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b4aa6cb5a397_38240815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '780992f46451224295d654e99094e7630db8c3cb' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\admin\\services.tpl',
      1 => 1656007271,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4aa6cb5a397_38240815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_185788738162b4aa6cb2c654_15719060', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206503242262b4aa6cb2dc49_45647958', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_132928994562b4aa6cb2eae8_23503286', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_115985285462b4aa6cb56ec0_57439004', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_185788738162b4aa6cb2c654_15719060 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_185788738162b4aa6cb2c654_15719060',
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
class Block_206503242262b4aa6cb2dc49_45647958 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_206503242262b4aa6cb2dc49_45647958',
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
class Block_132928994562b4aa6cb2eae8_23503286 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_132928994562b4aa6cb2eae8_23503286',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Service
                </span>
            </div>

            <div class="absolute-container">
                <div class="add-form">
                    <div class="close-btn close">
                        <span class="las la-times"></span>
                    </div>
                    <h3>Add service</h3>
                    <form action="" method="post" enctype="multipart/form-data" class="add-service-form">
                        <div class="mb-3 input">
                            <input type="text" name="title_en" class="form-control"  placeholder="title in english">
                        </div>
                        <div class="mb-3 input">
                            <input type="text" name="title_fr" class="form-control"  placeholder="title en francais">
                        </div>
                        <div class="mb-3 input">
                            <input type="number" name="price" class="form-control"  placeholder="price">
                        </div>
                        <div class="mb-3 text-area">
                            <textarea name="description_en" class="form-control" id="exampleFormControlTextarea1">Description in english...</textarea>
                        </div>
                        <div class="mb-3 text-area">
                            <textarea name="description_fr" class="form-control" id="exampleFormControlTextarea1">Description en francais...</textarea>
                        </div>
                        <div class="mb-3 text-area">
                            <label for="servicePic" class="UploadLabel"><i class="las la-images"></i> Upload Pictures</label>
                            <input type="file" name="pictures[]" id="servicePic" multiple>
                        </div>

                        <div class="buttons">
                            <button type="button" class="btn btn-primary submit-btn">Submit</button>
                            <button type="button" class="btn btn-secondary close-btn">Close</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-container">

                <?php if (empty($_smarty_tpl->tpl_vars['data']->value['services'])) {?>
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>id</th>
                        <th>Picture</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    <tr><td colspan="9" class="text-center">There is no products</td></tr>
                </table>
                <?php } else { ?>
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Picture</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tbody>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['services'], 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                            <tr><td><?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
</td><td class="image" data-src="<?php echo $_smarty_tpl->tpl_vars['service']->value['picture'];?>
"></td><?php if ($_SESSION['lang'] == 'en') {?><td><?php echo $_smarty_tpl->tpl_vars['service']->value['title_en'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value['description_en'];?>
</td><?php } else { ?><td><?php echo $_smarty_tpl->tpl_vars['service']->value['title_fr'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value['description_fr'];?>
</td><?php }?><td><?php echo $_smarty_tpl->tpl_vars['service']->value['price'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['service']->value['status'];?>
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
class Block_115985285462b4aa6cb56ec0_57439004 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_115985285462b4aa6cb56ec0_57439004',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/jquery.tabledit.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/admin-services.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>

        if (document.getElementById('myTable') != null)
        $('#myTable').Tabledit({
            url: '/admin/services/edit',
            restoreButton: false,
            columns: {
                identifier : [0, 'id'],
                editable: [[2, 'title_<?php echo $_SESSION['lang'];?>
'], [3, 'description_<?php echo $_SESSION['lang'];?>
'], [4, 'price'], [5, 'status']]
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
                item.innerHTML = '<img src="/Storage/uploads/services/' + src + '" width="50px" height="50px" alt="pic">'
            }
        })

    <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

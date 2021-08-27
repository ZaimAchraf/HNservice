<?php
/* Smarty version 3.1.39, created on 2021-08-18 04:27:36
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\services.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c7018e62991_17691167',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76584f6eff7fabffd957142787005e8e9b11a8a9' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\services.tpl',
      1 => 1629253649,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_611c7018e62991_17691167 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1164765749611c7018e1d1d1_15875094', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2080061811611c7018e1f010_19202697', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2027712846611c7018e20566_95736991', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2055930779611c7018e61dd2_04468443', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_1164765749611c7018e1d1d1_15875094 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1164765749611c7018e1d1d1_15875094',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/services.css">
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_2080061811611c7018e1f010_19202697 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_2080061811611c7018e1f010_19202697',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    HN SERVICES | About
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_2027712846611c7018e20566_95736991 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_2027712846611c7018e20566_95736991',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="content">
        <div class="absolute-container">
            <div>
                <span class="close-btn"><i class="las la-times-circle"></i></span>
                <h1>Command Service</h1>
                <form class="command-form">
                    <input type="hidden" class="service" name="service">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full name</label>
                        <input type="text" name="fullName" class="form-control" id="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="number" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="mb-3 text-area">
                        <label for="message" class="form-label">Message (facultatif)</label>
                        <textarea name="message" class="form-control" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Command</button>
                </form>
            </div>
        </div>
        <main>
            <section class="services">

                <h1 class="section-title">OUR SERVICES</h1>

                <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['services'])) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['services'], 'service');
$_smarty_tpl->tpl_vars['service']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['service']->value) {
$_smarty_tpl->tpl_vars['service']->do_else = false;
?>
                        <?php if ($_smarty_tpl->tpl_vars['service']->value['status'] == 1) {?><div class="service"><div class="left"><img src="/Storage/uploads/services/<?php echo $_smarty_tpl->tpl_vars['service']->value['picture'];?>
" alt=""></div><div class="right"><div class="animation"></div><div class="infos"><?php if ($_SESSION['lang'] == 'en') {?><h1><?php echo $_smarty_tpl->tpl_vars['service']->value['title_en'];?>
</h1><p><?php echo $_smarty_tpl->tpl_vars['service']->value['description_en'];?>
</p><?php } else { ?><h1><?php echo $_smarty_tpl->tpl_vars['service']->value['title_fr'];?>
</h1><p><?php echo $_smarty_tpl->tpl_vars['service']->value['description_fr'];?>
</p><?php }?><span class="price-cont">Price : <span class="price"><i class="las la-tags"></i> <?php echo $_smarty_tpl->tpl_vars['service']->value['price'];?>
$/HOUR</span></span></div><span class="btn command-btn" data-id="<?php echo $_smarty_tpl->tpl_vars['service']->value['id'];?>
">Demand</span></div></div><?php }?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>

            </section>
        </main>
        <?php $_smarty_tpl->_subTemplateRender("file:layout/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>

<?php
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_2055930779611c7018e61dd2_04468443 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2055930779611c7018e61dd2_04468443',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/services.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

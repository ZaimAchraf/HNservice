<?php
/* Smarty version 3.1.39, created on 2022-06-23 14:31:54
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b45d3a083292_67051596',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a792b71d89014f8f74fd25ef84f893d7357fa022' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\gallery.tpl',
      1 => 1628714128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_62b45d3a083292_67051596 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_154905653862b45d3a07cf39_74091270', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_206659189862b45d3a07de89_10617858', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_208025909462b45d3a07e825_30572073', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18612157062b45d3a082af1_82125009', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_154905653862b45d3a07cf39_74091270 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_154905653862b45d3a07cf39_74091270',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="/css/gallery.css">
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_206659189862b45d3a07de89_10617858 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_206659189862b45d3a07de89_10617858',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    HN SERVICES | Gallery
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_208025909462b45d3a07e825_30572073 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_208025909462b45d3a07e825_30572073',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="content">
        <main>
            <section class="gallery">

                <h1 class="section-title">OUR GALLERY</h1>

                <div class="container-fluid">
                    <div class="row mt-4">
                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal1.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal1.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal2.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal2.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal3.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal3.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal4.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal4.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal5.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal5.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal6.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal6.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal7.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal7.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal8.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal8.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal9.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal9.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>
                    </div>
                </div>

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
class Block_18612157062b45d3a082af1_82125009 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_18612157062b45d3a082af1_82125009',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

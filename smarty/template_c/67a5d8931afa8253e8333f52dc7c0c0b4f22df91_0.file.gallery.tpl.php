<?php
/* Smarty version 3.1.39, created on 2021-08-11 22:35:31
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\gallery.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61143493318241_91895941',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67a5d8931afa8253e8333f52dc7c0c0b4f22df91' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\gallery.tpl',
      1 => 1628714128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_61143493318241_91895941 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13242441876114349330d7d3_31405027', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19309579146114349330efe9_61579251', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14678445806114349330fde2_67753334', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1900360146611434933175c2_96715186', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_13242441876114349330d7d3_31405027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_13242441876114349330d7d3_31405027',
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
class Block_19309579146114349330efe9_61579251 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_19309579146114349330efe9_61579251',
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
class Block_14678445806114349330fde2_67753334 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14678445806114349330fde2_67753334',
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
class Block_1900360146611434933175c2_96715186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_1900360146611434933175c2_96715186',
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

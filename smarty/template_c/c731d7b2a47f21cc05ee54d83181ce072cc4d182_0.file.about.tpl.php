<?php
/* Smarty version 3.1.39, created on 2021-08-10 03:59:37
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6111dd896747a5_25461511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c731d7b2a47f21cc05ee54d83181ce072cc4d182' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\about.tpl',
      1 => 1628560770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_6111dd896747a5_25461511 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10068625226111dd8966e2a8_98805198', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1579716776111dd8966f0e8_78099483', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7132925046111dd8966fb19_58465654', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7490744956111dd89674064_46131821', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_10068625226111dd8966e2a8_98805198 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_10068625226111dd8966e2a8_98805198',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/about.css">
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_1579716776111dd8966f0e8_78099483 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1579716776111dd8966f0e8_78099483',
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
class Block_7132925046111dd8966fb19_58465654 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_7132925046111dd8966fb19_58465654',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <div class="content">
        <main>
            <section class="about">

                <h1 class="section-title">About Us</h1>
                <div class="our-story">
                    <div class="img">
                        <img src="/Storage/Statics/images/our-story.jpg" width="563px" alt="">
                    </div>
                    <div class="text">
                        <h3>OUR STORY</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut autem blanditiis, eaque error et fuga fugiat ipsa itaque laborum natus, nobis, praesentium quasi quo ratione sit sunt suscipit temporibus voluptas voluptatem! Alias aspernatur autem dicta expedita ipsum, labore laudantium modi nam non optio quasi, ratione rem, tempora ullam voluptatem?</p>
                    </div>
                </div>

                <div class="our-mission">
                    <div class="text">
                        <h3>OUR MISSION</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut autem blanditiis, eaque error et fuga fugiat ipsa itaque laborum natus, nobis, praesentium quasi quo ratione sit sunt suscipit temporibus voluptas voluptatem! Alias aspernatur autem dicta expedita ipsum, labore laudantium modi nam non optio quasi, ratione rem, tempora ullam voluptatem?</p>
                    </div>
                    <div class="img">
                        <img src="/Storage/Statics/images/our-mission.jpg" width="563px" alt="">
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
class Block_7490744956111dd89674064_46131821 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_7490744956111dd89674064_46131821',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "scripts"} */
}

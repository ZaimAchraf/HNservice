<?php
/* Smarty version 3.1.39, created on 2022-06-23 14:31:32
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\about.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b45d241f7b86_38056340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fbdc51873be054450fde694de097e2bb1e1e4045' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\about.tpl',
      1 => 1628560770,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_62b45d241f7b86_38056340 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_205948560162b45d241efe65_56720629', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6725084362b45d241f11b9_07578093', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_156385454162b45d241f1df1_44512992', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_203722910862b45d241f7141_51955617', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_205948560162b45d241efe65_56720629 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_205948560162b45d241efe65_56720629',
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
class Block_6725084362b45d241f11b9_07578093 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_6725084362b45d241f11b9_07578093',
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
class Block_156385454162b45d241f1df1_44512992 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_156385454162b45d241f1df1_44512992',
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
class Block_203722910862b45d241f7141_51955617 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_203722910862b45d241f7141_51955617',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "scripts"} */
}

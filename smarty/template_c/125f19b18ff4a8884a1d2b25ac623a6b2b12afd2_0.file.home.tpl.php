<?php
/* Smarty version 3.1.39, created on 2021-08-01 00:17:09
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6105cbe5074df1_50916577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '125f19b18ff4a8884a1d2b25ac623a6b2b12afd2' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\home.tpl',
      1 => 1627769826,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6105cbe5074df1_50916577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15938295856105cbe506f335_53660494', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20611933396105cbe5070907_88233184', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10689047926105cbe5071852_83932561', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6270530106105cbe5073d01_92814115', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_15938295856105cbe506f335_53660494 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_15938295856105cbe506f335_53660494',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/home.css">
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_20611933396105cbe5070907_88233184 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_20611933396105cbe5070907_88233184',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Home
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_10689047926105cbe5071852_83932561 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_10689047926105cbe5071852_83932561',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <header>
        <div class="header" style="background: url('/Storage/Statics/images/header2.jpg')">

        </div>
    </header>

<?php
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_6270530106105cbe5073d01_92814115 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_6270530106105cbe5073d01_92814115',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "scripts"} */
}

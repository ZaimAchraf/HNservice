<?php
/* Smarty version 3.1.39, created on 2021-08-20 00:43:50
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\layout\navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611edea6d9a8b7_67615734',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01ddca57135db009f940bfc3314bb2bd2c106d6e' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\layout\\navbar.tpl',
      1 => 1629413027,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611edea6d9a8b7_67615734 (Smarty_Internal_Template $_smarty_tpl) {
?><nav class="header-nav">
    <div class="left">
        <span class="menu-btn"><i class="las la-bars icone"></i></span>
    </div>
    <div class="logo">
        <img src="Storage/Statics/images/logo-gris.png" width="127px" height="67px" alt="">
    </div>
    <div class="right">
        <a href="#"><span class="search"><i class="las la-language icone"></i></span></a>
        <div class="drop-down">
            <a href="/lang/fr">French</a>
            <a href="/lang/en">English</a>
        </div>
    </div>
</nav>

<nav class="side-nav">
    <span class="close-nav"><i class="fas fa-times"></i></span>
    <ul>
        <li><a href="/home"><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['home'];?>
</a></li>
        <li><a href="/about"><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['about'];?>
</a></li>
        <li><a href="/gallery"><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['gallery'];?>
</a></li>
        <li><a href="/services">SERVICES</a></li>
        <li><a href="/home#testimonials"><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['testimonials'];?>
</a></li>
        <li><a href="/contact"><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['contact'];?>
</a></li>
    </ul>
</nav><?php }
}

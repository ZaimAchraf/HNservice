<?php
/* Smarty version 3.1.39, created on 2022-06-23 14:29:57
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\layout\footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b45cc508d0f9_01959836',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c0d31314568b345e3f715b16f4ed941b35f5031' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\layout\\footer.tpl',
      1 => 1629413169,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b45cc508d0f9_01959836 (Smarty_Internal_Template $_smarty_tpl) {
?><footer>
    <div class="principal-footer">
        <div class="infos">
            <div>
                <img src="/Storage/Statics/images/logo-bleu.png" width="200px" height="98px" alt="logo">
                <div>
                    <span class="tel"><i class="las la-phone"></i> 0693020346</span>
                    <span class="mail"><i class="las la-at"></i> achraf.zaime@gmail.com</span>
                    <span class="R-S"><a href=""><i class="lab la-facebook"></i></a> <a href=""><i class="lab la-instagram"></i></a><a
                                href=""><i class="lab la-telegram"></i></a></span>
                </div>
            </div>

        </div>
        <div class="links">
            <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['quick_links'];?>
</h1>
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
        </div>
        <div class="developer">
            <div>
                <span><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['devlop'];?>
 <span>Zaim Achraf</span></span>
                <span><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['devlop'];?>
 <span>Zaim Achraf</span></span>
            </div>
        </div>
    </div>
    <div class="footer-foot">
        <p>&copy; 2021 HN SERVICE®. <?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['footer_rights'];?>
.</p>
    </div>
</footer><?php }
}

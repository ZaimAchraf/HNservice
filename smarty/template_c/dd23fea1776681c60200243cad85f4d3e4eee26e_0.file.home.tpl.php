<?php
/* Smarty version 3.1.39, created on 2021-08-20 00:31:25
  from 'C:\Users\User\Desktop\HNServices\smarty\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611edbbdca7364_83857144',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd23fea1776681c60200243cad85f4d3e4eee26e' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\HNServices\\smarty\\templates\\home.tpl',
      1 => 1629412283,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout/header.tpl' => 1,
    'file:layout/footer.tpl' => 1,
  ),
),false)) {
function content_611edbbdca7364_83857144 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1679996586611edbbdc91109_69308835', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_579435633611edbbdc92306_67571214', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_780445465611edbbdc92dc7_15772247', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2056970233611edbbdca60e3_85043527', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "master.tpl");
}
/* {block "styles"} */
class Block_1679996586611edbbdc91109_69308835 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_1679996586611edbbdc91109_69308835',
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
class Block_579435633611edbbdc92306_67571214 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_579435633611edbbdc92306_67571214',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    HN SERVICES
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_780445465611edbbdc92dc7_15772247 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_780445465611edbbdc92dc7_15772247',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <div class="back-logo">
        <img src="/Storage/Statics/images/logo-gris.png" alt="">
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:layout/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="content">
        <main>
            <section class="introduction">
                <h1 class="section-title">INTRODUCTION</h1>
                <div>
                    <div class="img">
                        <img src="/Storage/Statics/images/intro.jpg" width="560px" alt="">
                    </div>
                    <div class="intro-paragraph">
                        <h2>HN Services</h2>
                        <h4><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['introduction_h2'];?>
</h4>
                        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['introduction_p1'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['introduction_p2'];?>
</p>
                        <p><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['introduction_p3'];?>
</p>
                    </div>
                </div>
            </section>
            <section class="testimonials" id="testimonials">
                <h1 class="section-title"><?php echo $_smarty_tpl->tpl_vars['data']->value['lang']['testimonials'];?>
</h1>
                <div class="container">
                    <div class="slide-row">
                        <div class="slide-col">
                            <div class="user-text">
                                <div>
                                    <p>
                                        Lanscape by Kevin was perfect. He was punctual, responsive, professional and did great work. I’ll be happy using him for all my yard work going from now on. I highly recommend you contacting him withou hesitating.
                                    </p>
                                    <span> ~ ZAIM ACHRAF </span>
                                </div>

                            </div>
                            <div class="user-img">
                                <img src="/Storage/Statics/images/user1.jpg" alt="user-image">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <div>
                                    <p>
                                        Kevin has been great to work with. Very punctual and easy to schedule and did a great job on the landscaping and maintenance for our small condo association
                                    </p>
                                    <span> ~ ZAIM AYA </span>
                                </div>

                            </div>
                            <div class="user-img">
                                <img src="/Storage/Statics/images/user2.jpg" alt="user-image">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <div>
                                    <p>
                                        Needed leaf clean up next day and he responded quickly with a fair price. Showed up early, and completed the job. Will use again.
                                    </p>
                                    <span> ~ ZAIM HOUSSAM </span>
                                </div>

                            </div>
                            <div class="user-img">
                                <img src="/Storage/Statics/images/default-user.png" alt="user-image">
                            </div>
                        </div>
                        <div class="slide-col">
                            <div class="user-text">
                                <div>
                                    <p>
                                        Lanscape by Kevin was perfect. He was punctual, responsive, professional and did great work. I’ll be happy using him for all my yard work going from now on. I highly recommend you contacting him withou hesitating.
                                    </p>
                                    <span> ~ ZAIM ACHRAF </span>
                                </div>

                            </div>
                            <div class="user-img">
                                <img src="/Storage/Statics/images/user4.jpg" alt="user-image">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pagination">
                    <span class="btn active"></span>
                    <span class="btn"></span>
                    <span class="btn"></span>
                    <span class="btn"></span>
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
class Block_2056970233611edbbdca60e3_85043527 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_2056970233611edbbdca60e3_85043527',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
>


    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="/js/home.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

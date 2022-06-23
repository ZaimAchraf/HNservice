<?php
/* Smarty version 3.1.39, created on 2022-06-23 19:46:26
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b4a6f264bd49_38362457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '731ccf73ae052afc78dfa6fb564f5acf54d83579' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\admin\\dashboard.tpl',
      1 => 1629254396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4a6f264bd49_38362457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_73492696662b4a6f262a6a8_01815023', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_114096683162b4a6f262c930_88940031', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1010797262b4a6f262d878_71894260', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139161619362b4a6f264ac91_76346391', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_73492696662b4a6f262a6a8_01815023 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_73492696662b4a6f262a6a8_01815023',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="stylesheet" href="/css/dashboard.css">
<?php
}
}
/* {/block "styles"} */
/* {block "title"} */
class Block_114096683162b4a6f262c930_88940031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_114096683162b4a6f262c930_88940031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Dashboard-admin
<?php
}
}
/* {/block "title"} */
/* {block "main"} */
class Block_1010797262b4a6f262d878_71894260 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1010797262b4a6f262d878_71894260',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_services'];?>
</h1>
                        <span>Services</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_commands'];?>
</h1>
                        <span>Commands</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1><?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_employees'];?>
</h1>
                        <span>Employee</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single main-background">
                    <div>
                        <h1 class="text-white"><?php echo $_smarty_tpl->tpl_vars['data']->value['nbr_managers'];?>
</h1>
                        <span class="text-white">Manager</span>
                    </div>
                    <div>
                        <span class="lab la-google-wallet text-white"></span>
                    </div>
                </div>

            </div>

            <div class="recent-grid">
                <div class="projects">
                    <div class="card">
                        <div class="card-header">
                            <h3>Recent Projects</h3>
                            <button class="main-background">See all <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table>
                                    <thead>
                                    <tr>
                                        <td>Project Title</td>
                                        <td>Department</td>
                                        <td>Status</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>We development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in Progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>We development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in Progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UI/UX Design</td>
                                        <td>UI Team</td>
                                        <td>
                                            <span class="status purple"></span>
                                            review
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>We development</td>
                                        <td>Frontend</td>
                                        <td>
                                            <span class="status pink"></span>
                                            in Progress
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Ushop app</td>
                                        <td>Mobile Team</td>
                                        <td>
                                            <span class="status orange"></span>
                                            pending
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="customers">
                    <div class="card">
                        <div class="card-header">
                            <h3>New Customers</h3>
                            <button class="main-background">See All <span class="las la-arrow-right"></span></button>
                        </div>

                        <div class="card-body">

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['data']->value['employees'], 'employee');
$_smarty_tpl->tpl_vars['employee']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['employee']->value) {
$_smarty_tpl->tpl_vars['employee']->do_else = false;
?>
                                <div class="customer"><div class="infos" ><img src="/Storage/uploads/employees/<?php echo $_smarty_tpl->tpl_vars['employee']->value['picture'];?>
" width="40px" height="40px" alt=""><div><h4><?php echo $_smarty_tpl->tpl_vars['employee']->value['fullName'];?>
</h4><small><?php echo $_smarty_tpl->tpl_vars['employee']->value['title_en'];?>
</small></div></div><div class="contact"><span class="las la-user-circle color-main"></span><span class="las la-comment color-main"></span><span class="las la-phone color-main"></span></div></div>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            <div class="customer">
                                <div class="infos" >
                                    <img src="img.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Zaim houssam</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle color-main"></span>
                                    <span class="las la-comment color-main"></span>
                                    <span class="las la-phone color-main"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="infos" >
                                    <img src="img.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Zaim houssam</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle color-main"></span>
                                    <span class="las la-comment color-main"></span>
                                    <span class="las la-phone color-main"></span>
                                </div>
                            </div>
                            <div class="customer">
                                <div class="infos" >
                                    <img src="img.jpg" width="40px" height="40px" alt="">
                                    <div>
                                        <h4>Zaim houssam</h4>
                                        <small>CEO Excerpt</small>
                                    </div>
                                </div>
                                <div class="contact">
                                    <span class="las la-user-circle color-main"></span>
                                    <span class="las la-comment color-main"></span>
                                    <span class="las la-phone color-main"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<?php
}
}
/* {/block "main"} */
/* {block "scripts"} */
class Block_139161619362b4a6f264ac91_76346391 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_139161619362b4a6f264ac91_76346391',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
}
}
/* {/block "scripts"} */
}

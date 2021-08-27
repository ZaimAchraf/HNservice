<?php
/* Smarty version 3.1.39, created on 2021-07-28 03:42:38
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\admin\dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6100b60ebf0751_64822120',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1b7ea80e872cc0c5afe2365425d8c56573b751c' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\admin\\dashboard.tpl',
      1 => 1627436555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6100b60ebf0751_64822120 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15790017556100b60ebed1a3_36085793', "styles");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17291705736100b60ebee1f2_73574917', "title");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12118644976100b60ebeed76_35434385', "main");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9742672516100b60ebefe86_33869638', "scripts");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "admin/admin-master.tpl");
}
/* {block "styles"} */
class Block_15790017556100b60ebed1a3_36085793 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'styles' => 
  array (
    0 => 'Block_15790017556100b60ebed1a3_36085793',
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
class Block_17291705736100b60ebee1f2_73574917 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_17291705736100b60ebee1f2_73574917',
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
class Block_12118644976100b60ebeed76_35434385 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_12118644976100b60ebeed76_35434385',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


            <div class="cards">

                <div class="card-single">
                    <div>
                        <h1>54</h1>
                        <span>Customers</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>79</h1>
                        <span>Products</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single">
                    <div>
                        <h1>82</h1>
                        <span>Orders</span>
                    </div>
                    <div>
                        <span class="las la-users color-main"></span>
                    </div>
                </div>

                <div class="card-single main-background">
                    <div>
                        <h1 class="text-white">54</h1>
                        <span class="text-white">Income</span>
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
class Block_9742672516100b60ebefe86_33869638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'scripts' => 
  array (
    0 => 'Block_9742672516100b60ebefe86_33869638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo '<script'; ?>
 src="/js/script.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "scripts"} */
}

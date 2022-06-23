<?php
/* Smarty version 3.1.39, created on 2022-06-23 19:46:26
  from 'C:\Users\achraf zaim\Desktop\WEB\PHP\HNServices\smarty\templates\admin\sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_62b4a6f28d9056_15049490',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42f82bce75ba1ecab1e1f3627314cf2a81bb01b0' => 
    array (
      0 => 'C:\\Users\\achraf zaim\\Desktop\\WEB\\PHP\\HNServices\\smarty\\templates\\admin\\sidebar.tpl',
      1 => 1629412482,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62b4a6f28d9056_15049490 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar main-background">
    <div class="sidebar-brand">
        <h2>
            <span>
                <img src="/Storage/Statics/images/logo-bleu.png" width="200px"  alt="logo">
            </span>
        </h2>
    </div>
    <ul class="sidebar-menu">
        <li class="list">
            <a href="/admin/dashboard">
                <b></b>
                <b></b>
                <span class="icone">
                        <i class="las la-tachometer-alt"></i>
                    </span>
                <span class="list">
                        Dashboard
                    </span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/managers">
                <b></b>
                <b></b>
                <span class="icone">
                    <i class="las la-users"></i>
                </span>
                <span class="list">
                        Managers
                </span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/services">
                <b></b>
                <b></b>
                <span class="icone">
                    <i class="lab la-servicestack"></i>
                </span>
                <span class="list">
                        Services
                </span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/employees">
                <b></b>
                <b></b>
                <span class="icone">
                    <i class="las la-business-time"></i>
                </span>
                <span class="list">
                        Employees
                </span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/commands">
                <b></b>
                <b></b>
                <span class="icone">
                    <i class="lab la-dropbox"></i>
                </span>
                <span class="list">
                        Commands
                </span>
            </a>
        </li>

        <li class="list">
            <a href="/admin/inbox">
                <b></b>
                <b></b>
                <span class="icone">
                    <i class="las la-inbox"></i>
                </span>
                <span class="list">
                        Inbox <span id="msg-nbr"><?php echo $_smarty_tpl->tpl_vars['data']->value['count'];?>
</span>
                </span>
            </a>
        </li>

        <li class="list">
            <a href="/logout">
                <b></b>
                <b></b>
                <span class="icone">
                    <i class="las la-sign-out-alt"></i>
                </span>
                <span class="list">
                        Logout
                </span>
            </a>
        </li>
    </ul>
</div><?php }
}

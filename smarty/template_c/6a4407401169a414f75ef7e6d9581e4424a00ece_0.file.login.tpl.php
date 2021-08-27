<?php
/* Smarty version 3.1.39, created on 2021-07-28 04:14:48
  from 'C:\Users\User\Desktop\mon_projet1\smarty\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6100bd984fc273_26733148',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a4407401169a414f75ef7e6d9581e4424a00ece' => 
    array (
      0 => 'C:\\Users\\User\\Desktop\\mon_projet1\\smarty\\templates\\login.tpl',
      1 => 1627438484,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6100bd984fc273_26733148 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="/assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        <link rel="stylesheet" href="/css/login_style.css">
        <title>Login</title>
    </head>
    <body>
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 col-lg-10">
                        <div class="wrap d-md-flex">
                            <div class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last main-gradient-background">
                                <div class="text w-100">
                                    <h2>Welcome to login</h2>
                                    <p>Don't have an account?</p>
                                    <a href="#" id="toggle-forms" class="btn btn-white btn-outline-white">Sign Up</a>
                                </div>
                            </div>
                            <div class="login-wrap p-4 p-lg-5">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Sign In</h3>
                                    </div>
                                </div>
                                <form action="#" class="signin-form">
                                    <div class="form-group mb-3">
                                        <label class="label" for="name">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="form-control btn btn-primary submit px-3 main-gradient-background text-white">Sign In</button>
                                    </div>
                                    <div class="form-group">
                                        <p class="timer-p"></p>
                                    </div>
                                    <div class="form-group d-md-flex">
                                        <div class="w-50 text-left">
                                            <label class="checkbox-wrap checkbox-primary mb-0">Remember Me
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                        <div class="w-50 text-md-right">
                                            <a href="#">Forgot Password</a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="login-wrap p-4 p-lg-5" style="padding-bottom: 10px !important;">
                                <div class="d-flex">
                                    <div class="w-100">
                                        <h3 class="mb-4">Sign Up</h3>
                                    </div>
                                </div>
                                <form action="#" class="signUp-form">
                                    <div class="form-group mb-3">
                                        <label class="label" for="username">Full name</label>
                                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="email">E-mail</label>
                                        <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="password">Password</label>
                                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="label" for="confirm-password">Confirm Password</label>
                                        <input type="password" name="confirm-password" class="form-control" placeholder="Confirm Password" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" style="width: 50%;margin-left: 25%;margin-top: 6px;" class="form-control btn btn-primary submit px-3 main-gradient-background text-white">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php echo '<script'; ?>
 src="/assets/js/jquery-1.12.3.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/bootstrap/js/bootstrap.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/assets/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/js/sign-In-Up.js"><?php echo '</script'; ?>
>
    </body>
</html>

<?php }
}

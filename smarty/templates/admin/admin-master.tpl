<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
        <!-- SweetAlert2 -->
        <link rel="stylesheet" href="/assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
        {block name="styles"}{/block}
        <title>{block name="title"}{/block}</title>
    </head>
    <body>
        <input type="checkbox" id="nav-toggle">
        {include file="admin/sidebar.tpl"}
        <div class="main-content">
            <header>
                <h2>
                    <label for="nav-toggle">
                        <span class="las la-bars"></span>
                    </label>

                    {$data.title}
                </h2>

                <div class="search-wrapper">
                    <span class="las la-search"></span>
                    <input type="search" placeholder="Search here" />
                </div>

                <div class="user-wrapper">
                    <img src="/Storage/Statics/images/profile.jpg" width="30px" height="30px" alt="">
                    <div>
                        <h4>Zaim Achraf</h4>
                        <small>super admin</small>
                    </div>
                </div>
            </header>

            <main>
                {block name="main"}{/block}
            </main>

        </div>

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!-- sweetalert2 -->
        <script src="/assets/sweetalert2/sweetalert2.min.js"></script>
        <script src="/js/script.js"></script>
        <script src="/js/sidebar.js"></script>
{*        <script src="/assets/js/jquery-1.12.3.min.js"></script>*}
{*        <script src="/assets/bootstrap/js/bootstrap.js"></script>*}
        {block name="scripts"}{/block}
    </body>
</html>
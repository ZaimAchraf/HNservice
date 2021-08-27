<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/bootstrap/css/bootstrap.min.css">
    <!-- Line awesome -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="/assets/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="/font-awesome-4.7.0/css/font-awesome.min.css">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="/css/navbar.css">

    {block name="styles"}{/block}
    <title>{block name="title"}{/block}</title>
</head>
<body>

    <div class="landing"></div>

    {include file="layout/navbar.tpl"}

    {block name="main"}{/block}

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!-- sweetalert2 -->
    <script src="/assets/sweetalert2/sweetalert2.min.js"></script>
    <script src="/font-awesome-4.7.0/all.min.js"></script>
    {block name="scripts"}{/block}
    <script src="/js/nav.js"></script>
    <script>
        let landing = document.querySelector(".landing");
        let videos = document.querySelectorAll(".side video");
        let body = document.querySelector("body");

        window.onload = e => {
            landing.style.opacity = 0;
            setTimeout(() => {
                landing.style.display = 'none';
            }, 2000);
            // if (videos != null)
            //     videos.forEach(item => {
            //         item.play();
            //     })

        }

            if (videos != null){
                setTimeout(() => {
                    console.log('hey')
                    videos.forEach(item => {
                        item.play();
                    })
                }, 1000);
            }else
                console.log('hey');
    </script>
    {*        <script src="/assets/js/jquery-1.12.3.min.js"></script>*}
    {*        <script src="/assets/bootstrap/js/bootstrap.js"></script>*}
</body>
</html>
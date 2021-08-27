{extends file="master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.css">
    <link rel="stylesheet" href="/css/gallery.css">
{/block}
{block name="title"}
    HN SERVICES | Gallery
{/block}
{block name="main"}


    <div class="content">
        <main>
            <section class="gallery">

                <h1 class="section-title">OUR GALLERY</h1>

                <div class="container-fluid">
                    <div class="row mt-4">
                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal1.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal1.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal2.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal2.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal3.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal3.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal4.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal4.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal5.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal5.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal6.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal6.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal7.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal7.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal8.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal8.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>

                        <div class="item col-sm-6 col-md-4 mb-3">
                            <a href="/Storage/Statics/images/gal9.jpg" class="fancybox" data-fancybox="gallery1">
                                <img src="/Storage/Statics/images/gal9.jpg" width="100%" height="100%"  alt="">
                            </a>
                        </div>
                    </div>
                </div>

            </section>
        </main>
        {include file="layout/footer.tpl"}
    </div>

{/block}
{block name="scripts"}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
{/block}
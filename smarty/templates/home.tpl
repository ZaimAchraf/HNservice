{extends file="master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/home.css">
{/block}
{block name="title"}
    HN SERVICES
{/block}
{block name="main"}

    <div class="back-logo">
        <img src="/Storage/Statics/images/logo-gris.png" alt="">
    </div>

    {include file="layout/header.tpl"}

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
                        <h4>{$data.lang.introduction_h2}</h4>
                        <p>{$data.lang.introduction_p1}</p>
                        <p>{$data.lang.introduction_p2}</p>
                        <p>{$data.lang.introduction_p3}</p>
{*                        <button type="button"> LEARN MORE</button>*}
                    </div>
                </div>
            </section>
            <section class="testimonials" id="testimonials">
                <h1 class="section-title">{$data.lang.testimonials}</h1>
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
        {include file="layout/footer.tpl"}
    </div>

{/block}
{block name="scripts"}
    <script>


    </script>
    <script src="/js/home.js"></script>
{/block}
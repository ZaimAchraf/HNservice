{extends file="master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/about.css">
{/block}
{block name="title"}
    HN SERVICES | About
{/block}
{block name="main"}


    <div class="content">
        <main>
            <section class="about">

                <h1 class="section-title">About Us</h1>
                <div class="our-story">
                    <div class="img">
                        <img src="/Storage/Statics/images/our-story.jpg" width="563px" alt="">
                    </div>
                    <div class="text">
                        <h3>OUR STORY</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut autem blanditiis, eaque error et fuga fugiat ipsa itaque laborum natus, nobis, praesentium quasi quo ratione sit sunt suscipit temporibus voluptas voluptatem! Alias aspernatur autem dicta expedita ipsum, labore laudantium modi nam non optio quasi, ratione rem, tempora ullam voluptatem?</p>
                    </div>
                </div>

                <div class="our-mission">
                    <div class="text">
                        <h3>OUR MISSION</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium aut autem blanditiis, eaque error et fuga fugiat ipsa itaque laborum natus, nobis, praesentium quasi quo ratione sit sunt suscipit temporibus voluptas voluptatem! Alias aspernatur autem dicta expedita ipsum, labore laudantium modi nam non optio quasi, ratione rem, tempora ullam voluptatem?</p>
                    </div>
                    <div class="img">
                        <img src="/Storage/Statics/images/our-mission.jpg" width="563px" alt="">
                    </div>
                </div>

            </section>
        </main>
        {include file="layout/footer.tpl"}
    </div>

{/block}
{block name="scripts"}
{/block}
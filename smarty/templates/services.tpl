{extends file="master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/services.css">
{/block}
{block name="title"}
    HN SERVICES | About
{/block}
{block name="main"}


    <div class="content">
        <div class="absolute-container">
            <div>
                <span class="close-btn"><i class="las la-times-circle"></i></span>
                <h1>Command Service</h1>
                <form class="command-form">
                    <input type="hidden" class="service" name="service">
                    <div class="mb-3">
                        <label for="fullname" class="form-label">Full name</label>
                        <input type="text" name="fullName" class="form-control" id="fullname">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone number</label>
                        <input type="number" name="phone" class="form-control" id="phone">
                    </div>
                    <div class="mb-3 text-area">
                        <label for="message" class="form-label">Message (facultatif)</label>
                        <textarea name="message" class="form-control" id="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Command</button>
                </form>
            </div>
        </div>
        <main>
            <section class="services">

                <h1 class="section-title">OUR SERVICES</h1>

                {if !empty($data.services)}
                    {foreach $data.services as $service}
                        {strip}
                            {if $service.status == 1}
                                <div class="service">
                                    <div class="left">
                                        <img src="/Storage/uploads/services/{$service.picture}" alt="">
                                    </div>
                                    <div class="right">
                                        <div class="animation"></div>
                                        <div class="infos">
                                            {if $smarty.session.lang == 'en'}
                                                <h1>{$service.title_en}</h1>
                                                <p>{$service.description_en}</p>
                                            {else}
                                                <h1>{$service.title_fr}</h1>
                                                <p>{$service.description_fr}</p>
                                            {/if}
                                            <span class="price-cont">Price : <span class="price"><i class="las la-tags"></i> {$service.price}$/HOUR</span></span>
                                        </div>
                                        <span class="btn command-btn" data-id="{$service.id}">Demand</span>
                                    </div>
                                </div>
                            {/if}
                        {/strip}
                    {/foreach}
                {/if}

            </section>
        </main>
        {include file="layout/footer.tpl"}
    </div>

{/block}
{block name="scripts"}
    <script src="/js/services.js"></script>
{/block}
{extends file="admin/admin-master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/tables_style.css">
    <link rel="stylesheet" href="/css/inbox.css">
    <style>
        .read {
            color: #5aff5a;
            font-size: 2em;
            display: block;
            text-align: center;
        }

        .unread {
            color: #33bbbb;
            font-size: 2em;
            display: block;
            text-align: center;
        }

        tr td:last-of-type button:first-of-type{
            margin-right: 10px;
        }
    </style>
{/block}
{block name="title"}
    Admin | inbox
{/block}
{block name="main"}

    {if !empty($data.messages)}
        {foreach $data.messages as $message}
            {strip}
                <div class="absolute-container">
                    <div class="single-msg">
                        <span class="close-btn">
                            <i class="las la-times-circle"></i>
                        </span>
                        <h1 class="section-title">Message</h1>
                        <h2 class="author"><span>FROM : </span> {$message.firstName} {$message.lastName} </h2>
                        <span>Message :</span>
                        <div class="message">
                            <p>{$message.message}</p>
                        </div>
                        <div class="date"> {$message.date_time}</div>
                        <div class="buttons">
                            <a href="mailto:{$message.email}"><button class="btn btn-primary "><i class="las la-reply"></i> Reply</button></a>
                            <a href=""><button class="btn btn-secondary close-btn">Close</button></a>
                        </div>

                    </div>
                </div>
            {/strip}
        {/foreach}
    {/if}

    <div class="table-container">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
                <th></th>
                <th>id</th>
                <th>Full Name</th>
                <th>E-mail</th>
                <th>Subject</th>
                <th>date</th>
                <th>Action</th>
            </tr>
            </thead>

            <tbody>
            {if empty($data.messages)}
                <tr><td colspan="9" class="text-center">There is no users</td></tr>
            {else}
                {foreach $data.messages as $message}
                    {strip}
                        <tr class="message-row">
                            <td class="status">{if $message.readable == 1} <span class="read"><i class="lar la-eye"></i></span> {else} <span class="unread"><i class="las la-eye-slash"></i></span> {/if}</td>
                            <td>{$message.contactID}</td>
                            <td>{$message.firstName} {$message.lastName} </td>
                            <td>{$message.email}</td>
                            <td>{$message.subject}</td>
                            <td>{$message.date_time}</td>
                            <td>
                                <button class="btn btn-success show-absolute" data-id="{$message.contactID}">Show</button>
                                <button class="btn btn-danger delete-msg" data-id="{$message.contactID}">Delete</button>
                            </td>
                        </tr>
                    {/strip}
                {/foreach}
            {/if}

            </tbody>
        </table>
    </div>

{/block}
{block name="scripts"}
    <script src="/js/admin-inbox.js"></script>

    <script>


    </script>
{/block}
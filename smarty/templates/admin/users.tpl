{extends file="admin/admin-master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/tables_style.css">
{/block}
{block name="title"}
    Admin | Users
{/block}
{block name="main"}

    <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Manager
                </span>
    </div>

    <div class="absolute-container">
        <div class="add-form">
            <div class="close-btn close">
                <span class="las la-times"></span>
            </div>
            <h3>Add manager</h3>
            <form action="" method="post" enctype="multipart/form-data" class="add-manager-form">
                <div class="mb-3 input">
                    <input type="text" name="fullName" class="form-control"  placeholder="Full name">
                </div>
                <div class="mb-3 input">
                    <input type="email" name="email" class="form-control"  placeholder="E-mail">
                </div>
                <div class="mb-3 input">
                    <input type="password" name="password" class="form-control"  placeholder="password">
                </div>
                <div class="mb-3 input">
                    <input type="password" name="confirm-password" class="form-control"  placeholder="confirm password">
                </div>

                <div class="buttons">
                    <button type="button" class="btn btn-primary submit-btn">Submit</button>
                    <button type="button" class="btn btn-secondary close-btn">Close</button>
                </div>
            </form>
        </div>
    </div>
    <div class="table-container">
        <table id="myTable" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>id</th>
                <th>Full Name</th>
                <th>E-mail</th>
            </tr>
            </thead>

            <tbody>
            {if empty($data.users)}
                <tr><td colspan="9" class="text-center">There is no users</td></tr>
            {else}
                {foreach $data.users as $user}
                    {strip}
                        <tr>
                            <td>{$user.id}</td>
                            <td>{$user.fullName}</td>
                            <td>{$user.email}</td>
                        </tr>
                    {/strip}
                {/foreach}
            {/if}

            </tbody>
        </table>
    </div>

{/block}
{block name="scripts"}
    <script src="/js/jquery.tabledit.min.js"></script>
    <script src="/js/admin-managers.js"></script>

    <script>


    </script>
{/block}
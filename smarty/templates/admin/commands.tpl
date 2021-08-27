{extends file="admin/admin-master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/tables_style.css">
{/block}
{block name="title"}
    Admin | commands
{/block}
{block name="main"}
            <div class="table-container">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>full name</th>
                        <th>email</th>
                        <th>tel</th>
                        <th>message</th>
                        <th>service</th>
                        <th>status</th>
                    </tr>
                    </thead>

                    <tbody>
                    {if empty($data.commands)}
                        <tr><td colspan="9" class="text-center">There is no Commands</td></tr>
                    {else}
                        {foreach $data.commands as $command}
                            {strip}
                                <tr>
                                    <td>{$command.id}</td>
                                    <td>{$command.fullName}</td>
                                    <td>{$command.email}</td>
                                    <td>{$command.phone}</td>
                                    <td class="long-text" title="{$command.message}">{$command.message}</td>
                                    <td title="{$command.title_en}">{$command.service}</td>
                                    <td title="">{$command.status}</td>
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
    <script src="/js/admin-commands.js"></script>

    <script>

        $('#myTable').Tabledit({
            url: '/admin/commands/edit',
            restoreButton: false,
            editButtonText : 'confirm',
            columns: {
                identifier : [0, 'id'],
                editable: [[6, 'status']]
            },
            onDraw: function() {
                console.log('onDraw()');
            },
            onSuccess: function(data, textStatus, jqXHR) {
                if (data.status === 'success' && data.action === 'edit'){
                    Swal.fire(
                        'Confirmed!',
                        'Command confirmed successfully',
                        'success'
                    )
                }else if (data.action === 'delete'){
                    Swal.fire(
                        'Deleted!',
                        'Command deleted successfully',
                        'success'
                    )
                }else{
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        html: data.error
                    })
                }
            },
            onFail: function(jqXHR, textStatus, errorThrown) {
                console.log('onFail(jqXHR, textStatus, errorThrown)');
                console.log(jqXHR);
                console.log(textStatus);
                console.log(errorThrown);
            },
            onAlways: function() {
                console.log('onAlways()');
            },
            onAjax: function(action, serialize) {
                console.log('onAjax(action, serialize)');
                console.log(action);
                console.log(serialize);
            }
        });

        let imageTd = document.querySelectorAll(".image");
        imageTd.forEach(item => {
            if (item !== null) {
                let src = item.getAttribute('data-src');
                item.innerHTML = '<img src="/Storage/uploads/employees/' + src + '" width="50px" height="50px" alt="pic">'
            }
        })

    </script>
{/block}
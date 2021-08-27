{extends file="admin/admin-master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/tables_style.css">
{/block}
{block name="title"}
    Admin-Products
{/block}
{block name="main"}
            <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Service
                </span>
            </div>

            <div class="absolute-container">
                <div class="add-form">
                    <div class="close-btn close">
                        <span class="las la-times"></span>
                    </div>
                    <h3>Add product</h3>
                    <form action="" method="post" enctype="multipart/form-data" class="add-service-form">
                        <div class="mb-3 input">
                            <input type="text" name="title_en" class="form-control"  placeholder="title in english">
                        </div>
                        <div class="mb-3 input">
                            <input type="text" name="title_fr" class="form-control"  placeholder="title en francais">
                        </div>
                        <div class="mb-3 input">
                            <input type="number" name="price" class="form-control"  placeholder="price">
                        </div>
                        <div class="mb-3 text-area">
                            <textarea name="description_en" class="form-control" id="exampleFormControlTextarea1">Description in english...</textarea>
                        </div>
                        <div class="mb-3 text-area">
                            <textarea name="description_fr" class="form-control" id="exampleFormControlTextarea1">Description en francais...</textarea>
                        </div>
                        <div class="mb-3 text-area">
                            <label for="servicePic" class="UploadLabel"><i class="las la-images"></i> Upload Pictures</label>
                            <input type="file" name="pictures[]" id="servicePic" multiple>
                        </div>

                        <div class="buttons">
                            <button type="button" class="btn btn-primary submit-btn">Submit</button>
                            <button type="button" class="btn btn-secondary close-btn">Close</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="table-container">

                {if empty($data.services)}
                <table class="table table-bordered table-striped">
                    <tr>
                        <th>id</th>
                        <th>Picture</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                    </tr>
                    <tr><td colspan="9" class="text-center">There is no products</td></tr>
                </table>
                {else}
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Picture</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                    </thead>

                    <tbody>
                        {foreach $data.services as $service}
                            {strip}
                                <tr>
                                    <td>{$service.id}</td>
                                    <td class="image" data-src="{$service.picture}"></td>
                                    {if $smarty.session.lang == 'en'}
                                        <td>{$service.title_en}</td>
                                        <td>{$service.description_en}</td>
                                    {else}
                                        <td>{$service.title_fr}</td>
                                        <td>{$service.description_fr}</td>
                                    {/if}
                                    <td>{$service.price}</td>
                                    <td>{$service.status}</td>
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
    <script src="/js/admin-services.js"></script>

    <script>

        if (document.getElementById('myTable') != null)
        $('#myTable').Tabledit({
            url: '/admin/services/edit',
            restoreButton: false,
            columns: {
                identifier : [0, 'id'],
                editable: [[2, 'title_{$smarty.session.lang}'], [3, 'description_{$smarty.session.lang}'], [4, 'price'], [5, 'status']]
            },
            onDraw: function() {
                console.log('onDraw()');
            },
            onSuccess: function(data, textStatus, jqXHR) {
                if (data.status === 'success' && data.action === 'edit'){
                    Swal.fire(
                        'Updated!',
                        'Product updated successfully',
                        'success'
                    )
                }else if (data.action === 'delete'){
                    Swal.fire(
                        'Deleted!',
                        'Product deleted successfully',
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
                item.innerHTML = '<img src="/Storage/uploads/services/' + src + '" width="50px" height="50px" alt="pic">'
            }
        })

    </script>
{/block}
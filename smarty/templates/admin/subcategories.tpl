{extends file="admin/admin-master.tpl"}
{block name="styles"}
    <link rel="stylesheet" href="/css/tables_style.css">
{/block}
{block name="title"}
    Admin | Subcategories
{/block}
{block name="main"}
            <div class="bg-white mt-5 mb-5 p-3 card">
                <span class="show-absolute">
                    Add new Subcategory
                </span>
            </div>

            <div class="absolute-container">
                <div class="add-form">
                    <div class="close-btn close">
                        <span class="las la-times"></span>
                    </div>
                    <h3>Add Subcategory</h3>
                    <form action="" method="post" class="add-subcategory-form">
                        <div class="mb-3 input">
                            <input type="text" name="title" class="form-control"  placeholder="subcategory title">
                        </div>
                        <div class="mb-3 input">
                            <input class="form-control" name="Cat" list="subCatOptions" placeholder="Category">
                            <datalist id="subCatOptions" multiple>
                                <option value="1">jewelry</option>
                                <option value="2">Accessory</option>
                            </datalist>
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
                        <th>SubCatID</th>
                        <th>Cat <span> (1: jewelry, 2: accessory)</span></th>
                        <th>Subcategory Name</th>
                    </tr>
                    </thead>

                    <tbody>
                    {if empty($data.subcategories)}
                        <tr><td colspan="3" class="text-center">There is no products</td></tr>
                    {else}
                        {foreach $data.subcategories as $subactegorie}
                            {strip}
                                <tr>
                                    <td>{$subactegorie.subCatID}</td>
                                    <td>{$subactegorie.catID}</td>
                                    <td>{$subactegorie.subCatName}</td>
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
    <script src="/js/admin-subcategories.js"></script>

    <script>

        $('#myTable').Tabledit({
            url: '/admin/Subcategories/update',
            restoreButton: false,
            columns: {
                identifier : [0, 'id'],
                editButton: false,
                editable: [[1, 'Cat'], [2, 'title']]
            },
            onDraw: function() {
                console.log('onDraw()');
            },
            onSuccess: function(data, textStatus, jqXHR) {
                if (data.status === 'success' && data.action === 'edit'){
                    Swal.fire(
                        'Updated!',
                        'Subcategory updated successfully',
                        'success'
                    )
                }else if (data.action === 'delete'){
                    Swal.fire(
                        'Deleted!',
                        'Subcategory deleted successfully',
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
    </script>
{/block}
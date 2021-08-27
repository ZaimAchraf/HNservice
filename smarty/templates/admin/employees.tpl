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
                    Add new Employee
                </span>
            </div>

            <div class="absolute-container">
                <div class="add-form">
                    <div class="close-btn close">
                        <span class="las la-times"></span>
                    </div>
                    <h3>Add Employee</h3>
                    <form action="" method="post" enctype="multipart/form-data" class="add-employee-form">
                        <div class="mb-3 input">
                            <input type="text" name="fullName" class="form-control"  placeholder="full name">
                        </div>
                        <div class="mb-3 input">
                            <input type="email" name="email" class="form-control"  placeholder="E-mail">
                        </div>
                        <div class="mb-3 input">
                            <input type="number" name="tel" class="form-control"  placeholder="Phone">
                        </div>
                        <div class="mb-3 input">
                            <input class="form-control" name="service" list="subCatOptions" id="exampleDataList" placeholder="Service">
                            <datalist id="subCatOptions">
                                {foreach $data.services as $service}
                                    {strip}
                                        <option value="{$service.id}">{$service.title}</option>
                                    {/strip}
                                {/foreach}
                            </datalist>
                        </div>
                        <div class="mb-3 text-area">
                            <textarea name="address" class="form-control" id="exampleFormControlTextarea1">Address...</textarea>
                        </div>
                        <div class="mb-3 text-area">
                            <label for="EmployeePic" class="UploadLabel"><i class="las la-images"></i> Upload Pictures</label>
                            <input type="file" name="pictures[]" id="EmployeePic" multiple>
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
                        <th>ID</th>
                        <th>full name</th>
                        <th>picture</th>
                        <th>email</th>
                        <th>tel</th>
                        <th>address</th>
                        <th>service</th>
                    </tr>
                    </thead>

                    <tbody>
                    {if empty($data.employees)}
                        <tr><td colspan="9" class="text-center">There is no products</td></tr>
                    {else}
                        {foreach $data.employees as $employee}
                            {strip}
                                <tr>
                                    <td>{$employee.id}</td>
                                    <td>{$employee.fullName}</td>
                                    <td class="image" data-src="{$employee.picture}"></td>
                                    <td>{$employee.email}</td>
                                    <td>{$employee.tel}</td>
                                    <td>{$employee.address}</td>
                                    <td title="{$employee.title_en}">{$employee.service}</td>
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
    <script src="/js/admin-employees.js"></script>

    <script>

        $('#myTable').Tabledit({
            url: '/admin/employees/edit',
            restoreButton: false,
            columns: {
                identifier : [0, 'id'],
                editable: [[1, 'fullName'], [3, 'email'], [4, 'tel'], [5, 'address'], [6, 'service']]
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
                item.innerHTML = '<img src="/Storage/uploads/employees/' + src + '" width="50px" height="50px" alt="pic">'
            }
        })

    </script>
{/block}
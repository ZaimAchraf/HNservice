<div class="card">
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <?php foreach ($data['columns'] as $column){ ?>
                    <th><?= $column?></th>
                    <?php }?>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($data['users']) && !empty($data['users'])) foreach ($data['users'] as $user){ ?>
                <tr>
                    <td><?= $user['fullname']?></td>
                    <td><?= $user['email']?></td>
                    <td><img src="/Storage/uploads/users/<?= $user['picture']?>" width="" height="50px" alt=""></td>
                    <td><?= $user['tel']?></td>
                    <td><?= $user['address']?></td>
                    <td>
                        <button class="btn-sm btn-danger btn-sm delete-enseignant-btn" data-id="<?= $user['userID'] ?>">
                            <i class="fa fa-trash"></i>
                            <span> Delete</span>
                        </button>

                    </td>
                </tr>
                <?php }?>

                <?php if (isset($data['requests']) && !empty($data['requests'])) foreach ($data['requests'] as $request){ ?>
                <tr>
                    <td><?= $request['fullname']?></td>
                    <td><?= $request['email']?></td>
                    <td><img src="/Storage/uploads/users/<?= $request['picture']?>" width="" height="50px" alt=""></td>
                    <td>
                        <button id="rejectRequest" class="btn-sm btn-danger" data-request="<?= $request['requestID'] ?>">
                            <span><i class="fa fa-window-close"></i> Reject  </span>
                        </button>
                        <button id="ValidateRequest" class="btn-sm btn-success" data-user-type="<?= $request['type'] == 1 ? 'trider' : 'provider'?>" data-request="<?= $request['requestID'] ?>" data-user="<?= $request['userID'] ?>">
                            <span><i class="fas fa-user-check"></i> Validate </span>
                        </button>
                    </td>
                </tr>
                <?php }?>

                <?php if (isset($data['categories']) && !empty($data['categories'])) foreach ($data['categories'] as $category){ ?>
                    <tr>
                        <td><?= $category['CatID']?></td>
                        <td><?= $category['catName']?></td>
                        <td>
                            <button class="btn-sm btn-danger deleteCat" data-catID="<?= $category['CatID'] ?>">
                                <span><i class="fa fa-window-close"></i> Delete  </span>
                            </button>
                        </td>
                    </tr>
                <?php }?>

                <?php if (isset($subcategories) && !empty($subcategories)) foreach ($subcategories as $subcategory){ ?>
                    <tr>
                        <td><?= $subcategory['subCatID']?></td>
                        <td><?= $subcategory['subCatName']?></td>
                        <td><?= $subcategory['catName']?></td>
                        <td>
                            <button class="btn-sm btn-danger deleteSubcat" data-subcatID="<?= $subcategory['subCatID'] ?>">
                                <span><i class="fa fa-window-close"></i> Delete  </span>
                            </button>
                        </td>
                    </tr>
                <?php }?>

                <?php if (isset($comments) && !empty($comments)) foreach ($comments as $comments){ ?>
                    <tr>
                        <td><?= $comments['fullname']?></td>
                        <td><?= $comments['productID']?></td>
                        <td><?= $comments['comment']?></td>
                        <td><?= $comments['date']?></td>
                        <td>
                            <button class="btn-sm btn-danger deleteComment" data-commentID="<?= $comments['commentID'] ?>">
                                <span><i class="fa fa-window-close"></i> Delete  </span>
                            </button>
                        </td>
                    </tr>
                <?php }?>
            </tbody>
            <tfoot>
                <tr>
                    <?php foreach ($data['columns'] as $column){ ?>
                        <th><?= $column?></th>
                    <?php }?>
                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>

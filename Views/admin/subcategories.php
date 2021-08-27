
<?php $data = empty($params) ? [] : $params; global $lang; ?>
<!--<div class="add-cat">-->
<!--    <form action="">-->
<!--        <input type="text" name="CatName" placeholder="Enter name of category">-->
<!--        <input type="submit" value="Add">-->
<!--    </form>-->
<!--</div>-->
<div class="content-wrapper">
    <div class="modal fade show" id="modal-add" style="display: none;background-color: #00000094; padding-right: 16px;" aria-modal="true" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add Subcategory</h4>
                    <button type="button" class="close-add-div" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" id="">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" class="form-add-subcat" method="post">

                        <div class="input-group mb-3">
                            <input type="text" name="subcatName" class="form-control" placeholder="Subategory name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="input-group mb-3">
                            <select type="text" name="catID" class="form-control" >
                                <option value="" selected disabled>Select Category...</option>
                                <?php foreach ($subcats as $subcategory) {?>
                                <option value="<?= $subcategory['CatID']?>"><?= $subcategory['catName']?></option>
                                <?php }?>
                            </select>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- /.col -->
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default close-add-div" data-dismiss="modal">close</button>
                                <button type="submit" class="btn btn-primary" id="modal-add-subcat">Add</button>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>

                </div>

            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0" style="display: inline">Subcategories</h1>
                    <button class="btn btn-info" id="show-add-div" style="margin-left: 20px;cursor: pointer;">
                        Add Subcategory
                    </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Subcategories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <?php include_once dirname(__DIR__) . '/datatable/datatable.php';?>
</div>

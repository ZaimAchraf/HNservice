
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
                    <h4 class="modal-title">Add Category</h4>
                    <button type="button" class="close-add-div" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" id="modal-add-enseignant-doctorant-close">×</span>
                    </button>
                </div>
                <div class="contanier" style="width: 80%;margin: 10px auto;">
                    <div class="msg-add-enseignant-doctorant">

                    </div>
                </div>
                <div class="modal-body">
                    <form action="" class="form-add-cat" method="post">
                        <input type="hidden" name="specialite" value="ens">
                        <div class="input-group mb-3">
                            <input type="text" name="catName" class="form-control" placeholder="Category name">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                </div>
                            </div>
                        </div>

                        <div class="row">

                            <!-- /.col -->
                            <div class="modal-footer justify-content-between">
                                <button type="button" class="btn btn-default" id="modal-add-enseignant-doctorant-close-btn" data-dismiss="modal">close</button>
                                <button type="submit" class="btn btn-primary" id="modal-add-cat">Add</button>
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
                    <h1 class="m-0" style="display: inline">Categories</h1>
                    <button class="btn btn-info" id="show-add-div" style="margin-left: 20px;cursor: pointer;">
                        Add Category
                    </button>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Categories</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <?php include_once dirname(__DIR__) . '/datatable/datatable.php';?>
</div>

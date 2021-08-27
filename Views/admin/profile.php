<!-- Content Wrapper. Contains profile content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <!-- Profile Image -->
                    <div class="card card-primary card-outline">
                        <div class="card-body box-profile">
                            <div class="text-center">
                                <img class="profile-user-img img-fluid img-circle"
                                     src="<?= '/Storage/uploads/users/' . $picture;  ?>"
                                     alt="User profile picture">
                            </div>

                            <h3 class="profile-username text-center"><?= $fullname  ?></h3>

                            <p class="text-muted text-center">Admin of website </p>

                            <ul class="list-group list-group-unbordered mb-3">
                                <li class="list-group-item">
                                    <b>Email</b> <br> <a class="float-right"><?= $email;  ?></a>
                                </li>
                                <li class="list-group-item">
                                    <b>Phone</b> <br> <a class="float-right"><?= $tel;  ?></a>
                                </li>

                            </ul>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <!-- About Me Box -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">About me</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <strong><i class="fas fa-book mr-1"></i> Education</strong>

                            <p class="text-muted">
                                Degree
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                            <p class="text-muted">City</p>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
<!--                            <li class="nav-item"><a class="nav-link " href="#activity" data-toggle="tab">Activity</a></li>-->
<!--                            <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>-->
                                <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Settings</a></li>
                            </ul>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">

                                <div class="active tab-pane" id="settings">
                                    <form class="form-horizontal" method="post" action="/user/update" enctype="multipart/form-data">

                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <p class="col-sm-10 error-message"><?= (($_SESSION['flash_messages']['errors']['value']['fullname'] ?? '')) ?></p>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">fullname</label>
                                            <div class="col-sm-10">
                                                <input type="text" value="<?= $_SESSION['token']['fullname'] ?>" name="fullname" class="form-control" id="" placeholder="fullname">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <p class="col-sm-10 error-message"><?= (($_SESSION['flash_messages']['errors']['value']['email'] ?? '')) ?></p>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">E-mail</label>
                                            <div class="col-sm-10">
                                                <input type="email" name="email" value="<?= $_SESSION['token']['email'] ?>" class="form-control" id="" placeholder="email">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <p class="col-sm-10 error-message"><?= ($_SESSION['flash_messages']['errors']['value']['tel'] ?? '') ?></p>
                                        </div>
                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Phone</label>
                                            <div class="col-sm-10">
                                                <input type="number" name="tel" value="<?= $_SESSION['token']['tel'] ?>" class="form-control" id="" placeholder="Phone">
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <label for="" class="col-sm-2 col-form-label">Address</label>
                                            <div class="col-sm-10">
                                                <input type="text" name="address" value="<?= $_SESSION['token']['address'] ?>" class="form-control" id="" placeholder="Address">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-2"></div>
                                            <p class="col-sm-10 error-message"><?=  ($_SESSION['flash_messages']['errors']['value']['uploads'][0] ?? '') ?></p>
                                        </div>
                                        <div class="form-group row">
                                            <label for="profileImg" class="col-sm-2 col-form-label">Picture</label>
                                            <div class="col-sm-10 ">
                                                <label for="profileImg" class="col-sm-2 col-form-label UploadLabel">Update Picture</label>
                                                <input type="file" name="pictures[]" class="form-control hiddenInput" id="profileImg" >
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <a href="/user/deletePic" class="delete-path">Delete Picture</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

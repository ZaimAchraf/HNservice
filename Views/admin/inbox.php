<div class="content-wrapper">
    <div class="container-fluid">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h3 class="card-title">Inbox</h3>

                <div class="card-tools">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Search Mail">
                        <div class="input-group-append">
                            <div class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">

                <div class="table-responsive mailbox-messages">
                    <table class="table table-hover table-striped">
                        <tbody>
                        <?php
                        if(is_array($messages) && isset($messages)){
                            foreach ($messages as $message):
                                ?>
                                <tr>
                                    <td class="mailbox-star"><a href="#"><i class="fas fa-star <?= ($message['readable'] == 0)?  'text-warning': 'text-secondary' ?>"></i></a></td>
                                    <td class="mailbox-name"><a href="/admin/readMessage?id=<?= $message['messageID']; ?>"><?= $message['name'] ?></a></td>
                                    <td class="mailbox-subject"><?= $message['subject']; ?>
                                    </td>
                                    <td class="mailbox-attachment"></td>
                                    <td class="mailbox-date"><?= $message['date_time']; ?></td>
                                </tr>
                            <?php
                            endforeach;
                        }if (empty($messages)){ ?>
                            <tr>
                                <center>There is no message</center>
                            </tr>
                        <?php } ?>

                        </tbody>
                    </table>
                    <!-- /.table -->
                </div>
                <!-- /.mail-box-messages -->
            </div>
            <!-- /.card-body -->

        </div>
        <!-- /.card -->
    </div>
</div>

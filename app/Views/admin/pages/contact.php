<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark"><?= $title ?></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                        <li class="breadcrumb-item active"><?= $title ?></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> Indicates a successful or positive action.
                    </div> -->
                    <div class="card card-primary card-outline">
                        <!-- <form action="<?= base_url('admin/savepagedata/' . explode("/", $page)[1]) ?>" method="POST" id="admin_contact_form"> -->
                        <form action="#" method="POST" id="admin_contact_form">
                            <input type="hidden" name="id" value="<?= $data['id']; ?>">
                            <input type="hidden" name="page" value="<?= $page; ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input class="form-control" name="address" type="text" value="<?= $data['address']; ?>" />                                    
                                </div>
                                
                                <div class="form-group">
                                    <label for="phone_number">Phone Numbers</label>
                                    <input class="form-control" name="phone_number" type="text" value="<?= $data['phone_number']; ?>" />
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" name="email" type="email" value="<?= (!empty($data['email'])) ? $data['email'] : ""; ?>" />
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile">File input</label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="exampleInputFile">
                                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                        </div>
                                        <div class="input-group-append">
                                            <span class="input-group-text">Upload</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div> -->
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="button" id="admin_contact_form_button" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        <!-- <div class="card-body">
                            <form action="" method="post">
                                <textarea id="summernote" cols="30" rows="10"></textarea>

                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
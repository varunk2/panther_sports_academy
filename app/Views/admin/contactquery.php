  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
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
          <div class="col-lg-6">
            <div class="card">
              <div class="card-body">
                <h1 class="card-title" style="font-size:2.1rem;"><?= $query['name'] ?></h1>
                <br><br><hr>
                <p class="card-text">
                    <strong>Phone number: </strong> <?= $query['phonenumber'] ?>
                </p>
                <p class="card-text">
                    <strong>Email: </strong> <?= $query['email'] ?>
                </p>
                <p class="card-text">
                    <strong>Subject: </strong> <?= $query['subject'] ?>
                </p>
                <p class="card-text">
                    <strong>Message: </strong> <?= $query['message'] ?>
                </p>

                <div class="row">
                    <div class="col-md-6">
                        <a href="<?= base_url('admin/contactqueries') ?>" type="button" class="btn btn-block btn-success">&leftarrow; Go Back</a>
                    </div>
                    <div class="col-md-6">
                        <a href="<?= base_url('admin/deletecontact/'.$query['id']) ?>" type="button" class="btn btn-block btn-danger">Delete</a>
                    </div>
                </div>
                
                
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
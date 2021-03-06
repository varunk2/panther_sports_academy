  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Contact Info</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
              <li class="breadcrumb-item active">Contact Info</li>
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
            <div class="card card-primary card-outline">
              <div class="card-body">

                <!-- Card Title -->
                <h1 class="card-title" style="font-size:2.1rem;"><?= $query['name'] ?></h1>
                <!-- ./Card Title -->
                
                <br>
                <br>
                
                <hr>

                <dl class="row">
                  <!-- Phone number -->
                  <dt class="col-sm-4"><strong>Phone number: </strong></dt>
                  <dd class="col-sm-8"><?= $query['phonenumber'] ?></dd>
                  <!-- ./Phone number -->

                  <!-- Email -->
                  <dt class="col-sm-4"><strong>Email: </strong></dt>
                  <dd class="col-sm-8"><?= $query['email'] ?></dd>
                  <!-- ./Email -->
                  
                  <?php if($query['coaching_type'] != "body_fitness"): ?>
                  <!-- School -->
                  <dt class="col-sm-4"><strong>School: </strong></dt>
                  <dd class="col-sm-8"><?= $query['school'] ?></dd>
                  <!-- ./School -->
                  <?php endif; ?>
                  
                  <!-- Age -->
                  <dt class="col-sm-4"><strong>Age: </strong></dt>
                  <dd class="col-sm-8"><?= $query['age'] ?></dd>
                  <!-- ./Age -->
                  
                  <!-- Date Of Birth -->
                  <dt class="col-sm-4"><strong>Date Of Birth: </strong></dt>
                  <dd class="col-sm-8"><?= $query['date_of_birth'] ?></dd>
                  <!-- ./Date Of Birth -->
                  
                  <!-- Gender -->
                  <dt class="col-sm-4"><strong>Gender: </strong></dt>
                  <dd class="col-sm-8"><?= $query['gender'] ?></dd>
                  <!-- ./Gender -->
                  
                  <!-- Height -->
                  <dt class="col-sm-4"><strong>Height: </strong></dt>
                  <dd class="col-sm-8"><?= $query['height'] ?></dd>
                  <!-- ./Height -->
                  
                  <!-- Weight -->
                  <dt class="col-sm-4"><strong>Weight: </strong></dt>
                  <dd class="col-sm-8"><?= $query['weight'] ?></dd>
                  <!-- ./Weight -->
                  
                  <!-- Blood Group -->
                  <dt class="col-sm-4"><strong>Blood Group: </strong></dt>
                  <dd class="col-sm-8"><?= $query['blood_group'] ?></dd>
                  <!-- ./Blood Group -->
                  
                  <?php if($query['coaching_type'] != "body_fitness"): ?>
                  <!-- Parents Name -->
                  <dt class="col-sm-4"><strong>Parents Name: </strong></dt>
                  <dd class="col-sm-8"><?= $query['parents_name'] ?></dd>
                  <!-- ./Parents Name -->
                  <?php endif; ?>

                  <!-- Referred By -->
                  <dt class="col-sm-4"><strong>Referred By: </strong></dt>
                  <dd class="col-sm-8"><?= $query['referred_by'] ?></dd>
                  <!-- ./Referred By -->
                  
                  <!-- Address -->
                  <dt class="col-sm-4"><strong>Address: </strong></dt>
                  <dd class="col-sm-8"><?= $query['address'] ?></dd>
                  <!-- ./Address -->
                </dl>

                <hr>

                <!-- Buttons -->
                <div class="row">
                  <div class="col-md-6">
                    <a href="<?= previous_url() ?>" type="button" class="btn btn-block btn-success">&leftarrow; Go Back</a>
                  </div>
                  <div class="col-md-6">
                    <a href="<?= base_url('admin/deletecontact/'.$query['id']) ?>" type="button" class="btn btn-block btn-danger">Delete</a>
                  </div>
                </div>
                <!-- ./Buttons -->
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
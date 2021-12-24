<br>
<div class="container">
    <div class="content-wrapper">
    <!-- Custom fonts for this template-->
        <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="<?= base_url('assets/'); ?>datatable/datatables.css" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/jquery.dataTables.js'; ?>"></script>
        <script type="text/javascript" src="<?= base_url('assets/'); ?>datatable/datatables.js'; ?>"></script>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Custom styles for this template-->
        <link href="http://localhost/unlist3/assets/css/sb-admin-2.min.css" rel="stylesheet">
       
    <!-- Begin Page Content -->

    <div class="row">
        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-danger shadow h-100 py-2 bg-primary">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1">NUMBER OF MEMBERS</div>
                  <div class="h1 mb-0 font-weight-bold text-white">
                    <?php
                    $where = ['is_active != 0'];
                    $totalanggota = $this->ModelUser->total_anggota('is_active', $where);
                    echo $totalanggota;
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('Member_Adm'); ?>"><i class="fas fa-users fa-3x text-warning"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 bg-warning">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1">REGISTERED APPLICATION STOCK</div>
                  <div class="h1 mb-0 font-weight-bold text-white">
                    <?php
                    $where = ['stok != 0'];
                    $totalstok = $this->ModelAplikasi->total('stok', $where);
                    echo $totalstok;
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('MoreApps_Adm'); ?>"><i class="fas fa-clipboard-list fa-3x text-primary"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 bg-danger">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1">FEEDBACK<br>LIST</div>
                  <div class="h1 mb-0 font-weight-bold text-white">
                    <?php
                    $where = ['is_feeded != 0'];
                    $totalfeedback = $this->ModelFeedback->total_feedback('is_feeded', $where);
                    echo $totalfeedback;
                    ?>
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('Feedback_Adm'); ?>"><i class="fas fa-comments fa-3x text-success"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
          <div class="card border-left-primary shadow h-100 py-2 bg-success">
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-md font-weight-bold text-white text-uppercase mb-1">ADMIN<br>PROFILE</div>
                  <div class="h1 mb-0 font-weight-bold text-white">
                    -
                  </div>
                </div>
                <div class="col-auto">
                  <a href="<?= base_url('Profile_Adm'); ?>"><i class="fas fa-user-cog fa-3x text-danger"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>

    </div>    
    <br>